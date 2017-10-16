<?php

class submit_bulmaFormWidget extends \jelix\forms\HtmlWidget\WidgetBase {
	
	function outputControl() {
//        if (isset($this->attributes['class'])) {
//            $class = $this->attributes['class'].' ';
//        }
//        else {
//            $class = '';
//        }
//
//        $attr = $this->getControlAttributes();
//        
//        unset($attr['readonly']);
//        
//        $attr['class'] = "button";
//        $attr['type'] = 'submit';
//
//        if($this->ctrl->standalone){
//            $attr['value'] = $this->ctrl->label;
//            echo '<input';
//            $this->_outputAttr($attr);
//            echo "/>\n";
//        }else{
//            $id = $this->builder->getName().'_'.$this->ctrl->ref.'_';
//            $attr['name'] = $this->ctrl->ref;
//            foreach($this->ctrl->datasource->getData($this->builder->getForm()) as $v=>$label){
//                // because IE6 sucks with <button type=submit> (see ticket #431), we must use input :-(
//                $attr['value'] = $label;
//                $attr['id'] = $id.$v;
//                echo ' <input';
//                $this->_outputAttr($attr);
//                echo "/>";
//            }
//            echo "\n";
//        }
		
		echo sprintf("<button class='button is-link' type='submit'>%s</button>", $this->ctrl->label);
    }
}