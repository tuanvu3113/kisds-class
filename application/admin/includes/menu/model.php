<?php
/**
 * @author Sonnk
 * @copyright 2011
 */

class incModelMenu extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getMenu($groupid){
        $uri = $this->uri->segment(1);
        #region Phan quyen
        $login = $this->admin->getSession('login');
        $params = $login->params;
        $arrright = array();
        foreach($params as $p=>$right){
            array_push($arrright,"'".$p."'");
        }
        #end
        $right_page = implode(",",$arrright);
        $lang = $this->admin->getSession("language");

        // print_r($lang);die;
        $right = '';
        $sql = "
            select gm.`name` as menuName, gm.keylang, gm.ordering, gm.route as controller, gm.classicon, gm.id as pageid
            from gdt_menus gm
            where gm.parent = 0
            and gm.isdelete = 0
            order by gm.ordering asc
        ";
        $parent_menu = $this->model->query($sql)->execute();

        $Active = $this->getActive();
        $arrActive1 = $Active['array'];
        $arrActive = $Active['array2'];
        $menu = '';
        $i=1;
        // echo'<pre>';print_r($parent_menu);die;
        foreach ($parent_menu as $item) {
            $active = '';
            if(empty($uri) || $uri == 'home'){
                if($i==1){
                    $active = 'active';
                }
            }
            else{
                if (isset($arrActive1[$uri]) && $arrActive1[$uri] == $item->pageid) {
                    $active = 'active';
                }
            }
            $asub = $this->getChildren($item->pageid,$groupid,$right,$lang,$right_page,$arrActive);
            $menuName = $item->menuName;
            if ($asub) {
                if(isset($lang['menu'][trim($item->keylang)])){
                    $menuName = $lang['menu'][trim($item->keylang)];
                }
                //if ($active) {
                    $menu.= '
                        <li class="treeview '.$active.'">
                            <a href="'.($item->controller).'">
                                <i class="fa '.($item->classicon).'"></i> <span>'.$menuName.'</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                '.$asub.'
                            </ul>
                        </li>
                    ';
                //}
            }
            else {
                if ($active) {
                    $menu.= '
                        <li class="'.$active.'">
                            <a href="'.admin_url().($item->controller).'.html">
                                <i class="fa '.($item->classicon).'"></i> <span>'.$menuName.'</span>
                            </a>
                        </li>
                    ';
                }
            }
            $i++;
        }
        return $menu;
    }
    private function getChildren($id,$groupid,$right,$lang,$right_page,$arrActive){
        $uri = $this->uri->segment(1);
        // echo $uri;die;
        //$controller = 'route';
        $sql = "
                select gm.`name` as menuName, gm.keylang, gm.ordering, gm.route as controller, gm.classicon, gm.id as pageid
                from gdt_menus gm
                where gm.parent = $id
                and gm.isdelete = 0
                -- and gm.route in ($right_page)
                order by gm.ordering asc;
        ";
        /*and gm.id in ($right)*/
        $children = $this->model->query($sql)->execute();
        $menu = '';
        foreach($children as $item) {
            if(isset($arrActive[$uri]) && $arrActive[$uri] == $item->controller){
                $open = 'menu-open';
             }
             else{
                $open = 'open';
             }
             if(isset($arrActive[$uri]) && $arrActive[$uri] == $item->controller){
                $active = 'active';
             }
             else{
                $active = '';
             }
             $asub = $this->getChildren($item->pageid,$groupid,$right,$lang,$right_page,$arrActive);
             if(isset($lang['menu'][trim($item->keylang)])) {
                $menuName = $lang['menu'][trim($item->keylang)];
             }
             else {
                $menuName = $item->menuName;
             }
            if($asub){
                $menu.= '
                    <li class="'.$active.'">
                      <a href="'.($item->controller).'"><i class="fa fa-circle-o"></i> '.$menuName.'
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu '.$open.'">
                         '.$asub.'
                      </ul>
                    </li>
                ';
            }
            else{
                $menu.= '<li class="'.$active.'"><a href="'.admin_url().($item->controller).'"><i class="fa fa-circle-o"></i> '.$menuName.'</a></li>';
            }
        }
        return $menu;
    }

    function getActive(){
        $sql = "
            SELECT m.route, m.id, m.parent as parents,
            (select parent
            from gdt_menus where id =  m.parent
            ) as parent_node
            FROM gdt_menus m
            where m.isdelete = 0
            and m.parent <> 0
        ";
        $query = $this->model->query($sql)->execute();
        $array = array();
        $array2 = array();
        foreach($query as $item){
            if(empty($item->parent_node)){
                $array[$item->route] = $item->parents;
            }
            else{
                $array[$item->route] = $item->parent_node;
            }
            $array2[$item->route] = $item->route;
        }
        $data['array'] = $array;
        $data['array2'] = $array2;
        return $data;
    }
}