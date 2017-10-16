<?php
/**
* @package   tourisme
* @subpackage tourisme
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
 
    function home() {
        
        $rep = $this->getResponse('html');
        $tpl = new jTpl();
		
		$daoRegion = jDao::get("regions");
		$listeRegions = $daoRegion->findAll();
		
		$daoDepartments = jDao::get("departments");
		
		foreach($listeRegions as $region)
		{
			$tab[$region->regionId]["Region"] = $region;
			$tab[$region->regionId]["Departement"] = array();
			
			$listeDepartements = $daoDepartments->findByRegion($region->regionId);
			
			foreach($listeDepartements as $department)
			{
				$tab[$region->regionId]["Departement"][$department->departmentId] = $department;	
			}			
		}
		
		$tpl->assign("listeRegions", $tab);
        $rep->body->assign('MAIN', $tpl->fetch("home"));
		
        return $rep;
    }
}
