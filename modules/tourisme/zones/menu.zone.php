<?php

    class menuZone extends jZone {
        
        protected $_tplname = "menu";
        
        protected function _prepareTpl() {
			
			$menuList = jDao::get("menu")->findAllOrderByOrder();
			
			foreach($menuList as $menu)
			{
				$menus[$menu->menuId] = array();
				$menus[$menu->menuId]["Name"] = $menu->menuName;
				$menus[$menu->menuId]["Url"] = jUrl::get($menu->menuUrl);
				$menus[$menu->menuId]["Class"] = $menu->menuOrder == 1 ? "is-active" : "";
			}
			
			$this->_tpl->assign('menus', $menus);
        }
    }

?>