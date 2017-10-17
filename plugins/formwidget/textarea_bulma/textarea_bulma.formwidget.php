<?php

class textarea_bulmaFormWidget extends \jelix\forms\HtmlWidget\WidgetBase {
	
//	function outputControl() {
//        $attr = $this->getControlAttributes();
//        $value = $this->getValue();
//
//        if (!isset($attr['rows']))
//            $attr['rows'] = $this->ctrl->rows;
//        if (!isset($attr['cols']))
//            $attr['cols'] = $this->ctrl->cols;
//
//        echo '<textarea';
//        $this->_outputAttr($attr);
//        echo '>',htmlspecialchars($value),"</textarea>\n";
//        $this->outputJs();
//    }

//    public function outputControlValue(){
//        $attr = $this->getValueAttributes();
//        echo '<div ';
//        $this->_outputAttr($attr);
//        echo '>';
//        $value = $this->getValue();
//        $value = $this->ctrl->getDisplayValue($value);
//        if ($this->ctrl->isHtmlContent())
//            echo $value;
//        else
//            echo nl2br(htmlspecialchars($value));
//
//        echo '</div>';
//    }
//	
	function outputControl() {
		echo sprintf("<textarea class='textarea'></textarea>");
    }
}