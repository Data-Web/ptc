<?php
class andyrecursive{

	public function recursiveMenu($menu, $id_field = "id", $parent_field = "parent", $parent = 0) {
		$current_menus = array();
	    foreach ($menu as $key => $value) {
	        if ($value[$parent_field] == $parent) {
	            $k                 = $value[$id_field];
	            $current_menus[$k] = $value;
	            unset($menu[$key]);
	        }
	    }
	    
	    if (sizeof($current_menus) > 0) {
	        foreach ($current_menus as $key => $value) {
	            $current_menus[$key]['sub'] = $this->recursiveMenu($menu, $id_field, $parent_field, $value[$id_field]);
	        }
	    }
	    return $current_menus;
	}
}