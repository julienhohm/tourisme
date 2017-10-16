<?php

class formCtrl extends jController {
 
	function prepareActivity(){
		
		$form = jForms::create("tourisme~activity");
		$rep = $this->getResponse('redirect');
        $rep->action='form:showActivity';
        return $rep;
	}
	
	function showActivity(){
		
	 	$rep = $this->getResponse('html');
        $tpl = new jTpl();
		
		$form = jForms::get("tourisme~activity");
		
		if ($form == null) 
		{
			$rep = $this->getResponse('redirect');
			$rep->action='form:prepareActivity';
			return $rep;
		}
		
		$tpl->assign('form', $form);
		$rep->body->assign('MAIN', $tpl->fetch('tourisme~activity'));
		
		return $rep;
		
	}
	
	function saveActivity(){
		echo 'toto';
	}
	
	function endActivity(){
		
	}
	
}