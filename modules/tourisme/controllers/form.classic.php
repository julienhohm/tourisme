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
	
	function fillDepartments(int $id = null){
		
		$rep = $this->getResponse("json");
		$id = $_GET["id"];
		
		if(!isset($id) || !is_numeric($id))
			return $rep;
		
		$rep->data = array();
		
		$dao = jDao::get("departments");
		$departments = $dao->findByregion($id);
		
		foreach($departments as $department){
			$rep->data[] = array(
				"departmentId" => $department->departmentId,
				"departmentName" => $department->departmentName,
				"departmentNumber" => $department->departmentNumber
				);
		}
		
		return $rep;		
	}
	
	function fillCities(int $id = null){
		
		$rep = $this->getResponse("json");
		$id = $_GET["id"];
		
		if(!isset($id) || !is_numeric($id))
			return $rep;
		
		$rep->data = array();
		
		$dao = jDao::get("cities");
		$cities = $dao->findByDepartment($id);
		
		foreach($cities as $city){
			$rep->data[] = array(
				"cityId" => $city->cityId,
				"cityName" => $city->cityName,
				"cityPostalCode" => $city->cityPostalCode
				);
		}
		
		return $rep;		
	}
	
}