<?php
class incModelMenu extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getMenu() {
        $lang = $this->site->getSession("language");
        $name_page = str_replace(['/', '.html'], "", $_SERVER["REQUEST_URI"]);
        $sql = "
            SELECT gm.`menu_name` AS menuName, gm.menu_alias, gm.ordering, gm.menu_link AS controller, gm.id AS pageid
            FROM gdt_public_menus gm
            WHERE gm.menu_parent = 0
                AND gm.isdelete = 0
            ORDER BY gm.ordering ASC
        ";
        $parent_menu = $this->model->query($sql)->execute();
        $menu = '';
        foreach($parent_menu as $item){
            $arr_asub = $this->getChildren($item->pageid,$lang);
            $asub = $arr_asub['menu'];
            $arr_menu_sub = $arr_asub['arr_menu_sub'];
            $menuName = $item->menuName;
            if ($asub) {
                if (in_array($name_page, $arr_menu_sub)) {
                    $active = 'active';
                }
                else {
                    $active = '';
                }
                $menu.='<li class="nav-item dropdown dmenu '.$active.'">';
                $menu.='<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.($menuName).'</a>';
                $menu.='<div class="dropdown-menu">';
                $menu.= $asub;
                $menu.='</div>';
                $menu.='</li>';
            }
            else {
                if ($item->controller == $name_page) {
                    $active = 'active';
                }
                else {
                    $active = "";
                }
                $menu.='<li class="nav-item '.$active.'">';
                $menu.='<a class="nav-link" href="/'.($item->controller).'">'.($menuName).'</a>';
                $menu.='</li>';
            }
        }
        return $menu;
    }

    private function getChildren($id,$lang) {
        $sql = "
            SELECT gm.`menu_name` AS menuName, gm.menu_alias, gm.ordering, gm.menu_link AS controller, gm.id AS pageid
            FROM gdt_public_menus gm
            WHERE gm.menu_parent = $id
                AND gm.isdelete = 0
            ORDER BY gm.ordering ASC;
        ";
        $children = $this->model->query($sql)->execute();
        $menu = '';
        $arr_menu_sub = [];
        foreach($children as $item){
            $arr_asub = $this->getChildren($item->pageid,$lang);
            $asub = $arr_asub['menu'];
            if (isset($lang['menu'][trim($item->menu_alias)])) {
                $menuName = $lang['menu'][trim($item->menu_alias)];
            }
            else {
                $menuName = $item->menuName;
            }
            if ($asub) {

            }
            else {
                $menu.='<a class="dropdown-item" href="'.base_url().($item->controller).'">'.$menuName.'</a>';
            }
            $arr_menu_sub[] = $item->controller;
        }
        $arrReturn = array(
            'menu' => $menu,
            'arr_menu_sub' => $arr_menu_sub
        );
        return $arrReturn;
    }
}