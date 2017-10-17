<?php

use \jelix\forms\HtmlWidget\ParentWidgetInterface;

class formhtmlFormBuilder extends \jelix\forms\Builder\HtmlBuilder {
	
	protected $formType = "bulma";
		
	public function getWidget($ctrl, ParentWidgetInterface $parentWidget = null) {
		
		if (isset($this->widgets[$ctrl->ref])) {
			return $this->widgets[$ctrl->ref];
		}
		
		// we have to retrieve the plugin name corresponding to the widget
		$config = \jApp::config()->{$this->formConfig};
		
		// check the builder conf
		if (isset($this->pluginsConf[$ctrl->ref])) {
			$pluginName = $this->pluginsConf[$ctrl->ref];
		}
		// else check the ini conf
		elseif (isset($config[$ctrl->type])) {
			$pluginName = $config[$ctrl->type];
		}
		// else get the plugin name from the control
		else {
			$pluginName = $ctrl->getWidgetType(). '_'. $this->formType;
		}
		
		// now we have its name, let's create the widget instance
		$className = $pluginName . 'FormWidget';
		$plugin = \jApp::loadPlugin($pluginName, 'formwidget', '.formwidget.php', $className, array($ctrl, $this, $parentWidget));
		if (!$plugin)
			throw new \Exception('Widget '.$pluginName.' not found');
		$this->widgets[$ctrl->ref] = $plugin;
		return $plugin;
		
	}

	function outputHeader() {
		
		echo "<form method='post' id='" . $this->_name . "' action='" . $this->_action . "'>";
		
	}
	
	function outputMetaContent($tpl) {
		
	}
	
	function outputAllControls() {
		
	}
	
	function outputControlValue($ctrl, $attributes=array()) {
		
	}
	
	function outputErrors() {
		
		$errors = $this->_form->getContainer()->errors();
		if(count($errors))
		{
			
		}
		
	}
	
	function outputFooter() {
		
		echo "</form>";
		
	}
	
	function outputControl($ctrl, $attributes=array()) {
		
		if($ctrl->type == 'hidden') return;
		$widget = $this->getWidget($ctrl, $this->rootWidget);
        $widget->setAttributes($attributes);
        $widget->outputControl();
//        $widget->outputHelp();
		
	} 
	
	function outputControlLabel($ctrl, $format = '', $editMode = true) {
		
		if($ctrl->type == "hidden" || $ctrl->type == 'button') return;
		$widget = $this->getWidget($ctrl, $this->rootWidget);
//        $widget->outputLabel($format, $editMode);
		echo sprintf("<label class='label' for='%s' id='%s_label'>%s</label>", $widget->getId(), $widget->getId(), htmlentities($ctrl->label));
		
	}
	
}