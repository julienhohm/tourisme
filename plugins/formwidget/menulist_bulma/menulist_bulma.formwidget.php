<?php

class menulist_bulmaFormWidget extends \jelix\forms\HtmlWidget\WidgetBase {
	
	function outputControl() {		
		$data = $this->ctrl->datasource->getData($this->builder->getForm());
		echo sprintf("<div class='select'><select id=%s>", $this->getId());
		
		foreach($data as $id => $name) {
			echo sprintf("<option value='%d'>%s</option>", $id, $name);
		}
		
		echo "</select></div>";
    }
}