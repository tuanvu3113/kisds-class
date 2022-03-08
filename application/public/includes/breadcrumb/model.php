<?php
/**
 * @author Sonnk
 * @copyright 2011
 */

class incModelBreadcrumb extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getBreadCrumb($controller, $lang) {
		if($controller == 'home'){
			return '<li></li>';
		}
		$sql = "SELECT menu_parent, menu_name,menu_link, menu_alias
		FROM gdt_public_menus
		WHERE menu_link = '$controller'
		AND isdelete = 0 ";
		$pid = $this->model->query($sql)->execute();
		if(empty($pid[0]->menu_name)){
			return '<li></li>';
		}
		$arr = array();
		$breadcrumb = '';
		$this->getParent($pid[0]->menu_parent, $arr,$lang);
		$c = count($arr) - 1;
		for ($i = $c; $i >= 0; $i--) {
			$breadcrumb .= $arr[$i];
		}
		$pagename = $pid[0]->menu_name;
		$route = $pid[0]->menu_link;
		if(isset($lang['menu'][trim($pid[0]->menu_alias)])){
			$menuName = $lang['menu'][trim($pid[0]->menu_alias)];
		} else {
			$menuName = $pid[0]->menu_name;
		}
		$breadcrumb .= '<li ><a href="'.base_url().$route.'" style="color:#3399FF">'.$menuName.'</a></li>';
		return $breadcrumb;
	}

	function getParent($id, &$arr) {
		$sql = " SELECT id, menu_link, menu_name, menu_parent, menu_alias
					FROM gdt_public_menus
					WHERE id = '$id'
					AND isdelete = 0  ";
		$parent = $this->model->query($sql)->execute();
		if (!$parent) return;
		$pid = $parent[0]->menu_parent;
		$route = $parent[0]->menu_link;
		$pagename = $parent[0]->menu_name;
		if($route != '' && $route != '#'){
			$link = base_url().$route;
		}else{
			$link = $route;
		}
		if(isset($lang['menu'][trim($parent[0]->menu_alias)])){
			$menuName = $lang['menu'][trim($parent[0]->menu_alias)];
		} else {
			$menuName = $parent[0]->menu_name;
		}

		$breadcrumb = '<li><a href="'.$link.'">'.$menuName.'</a><!--<i class="fa fa-angle-right"></i>--></li>';
		array_push($arr, $breadcrumb);
		$this->getParent($pid, $arr,$lang);
	}
}