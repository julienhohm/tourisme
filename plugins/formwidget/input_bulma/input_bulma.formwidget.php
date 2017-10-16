<?php

class input_bulmaFormWidget extends \jelix\forms\HtmlWidget\WidgetBase {
	
	function outputLabel($format = "", $editMode = true) {
		
	 	$ctrl = $this->ctrl;
		$attr = array();
        
        $attr['hint'] = ($this->ctrl->hint == '' ? '' : ' title="'.htmlspecialchars($this->ctrl->hint).'"');
        $attr['idLabel'] = ' id="'.$this->getId().'_label"';
        $attr['class'] = 'label';
//        $attr['class'] .= (isset($this->builder->getForm()->getContainer()->errors[$this->ctrl->ref]) ?' jforms-error':'');		
		
//        if ($format)
//            $label = sprintf($format, $this->ctrl->label);
//        else
//            $label = $this->ctrl->label;

//        if ($ctrl->type == 'output' || $ctrl->type == 'checkboxes' ||
//            $ctrl->type == 'radiobuttons' || $ctrl->type == 'date' ||
//            $ctrl->type == 'datetime' || $ctrl->type == 'choice'){
//			echo '<span class="',$attr['class'],'"',$attr['idLabel'],$attr['hint'],'>';
//			echo htmlspecialchars($label);
//			echo "</span>\n";
//        }
//        else if($ctrl->type != 'submit' && $ctrl->type != 'reset'){
//			echo '<label class="',$attr['class'],'" for="',$this->getId(),'"',$attr['idLabel'],$attr['hint'],'>';
//			echo htmlspecialchars($label);
//			echo "</label>";
//        }
		
		echo sprintf("<label class='label' for='%s' id='%s_label'>%s</label>", $this->getId(), $this->getId(), htmlentities($this->ctrl->label));
		
	}
	
    function outputControl() {
//        $attr = $this->getControlAttributes();
//		
//        if ($this->ctrl->size != 0)
//            $attr['size'] = $this->ctrl->size;
//        $maxl= $this->ctrl->datatype->getFacet('maxLength');
//        if($maxl !== null)
//            $attr['maxlength']=$maxl;
//        $attr['value'] = $this->getValue();
//        $attr['type'] = 'text';
//
//        echo '<input';
//        $this->_outputAttr($attr);
//        echo "/>";
		
		$size = $this->ctrl->size == 0 ? "" : sprintf("size='%s'", $this->ctrl->size);
		$max = $this->ctrl->datatype->getFacet('maxLength') === null ? "" : sprintf("maxlength='%s'", $this->ctrl->datatype->getFacet('maxLength'));
		
		echo sprintf("<input class='input' type='text' value='%s'%s%s/>", $this->getValue(), $size, $max);
		
//        $this->outputJs();
    }
}
