<?php
/**
 * @author Son Nguyen
 * @copyright 2015
 */
class authorizeModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function login($u, $p = null) {
        $query = $this->model->table('gdt_users')
        ->select("gdt_users.*,gdt_groups.params")
        ->join('gdt_groups', 'gdt_groups.id = gdt_users.groupid', 'inner')
        ->where('gdt_users.isdelete',0)
        ->where('gdt_groups.isdelete',0)
        ->where('gdt_users.username',$u)
        ->find();
        return $query;
    }
    function getListMenu(){
        $menu = $this->model->table('gdt_menus')
        ->select('name,route')
        ->where('isdelete',0)
        ->where('route <>','')
        ->where('route <>','#')
        ->find_all();
        $arr = array();
        foreach($menu as $item){
            $arr[$item->route] = $item->name;
        }
        return $arr;
    }
    function getRouter($str){
        $json = json_decode($str);
        $menu = $this->model->table('gdt_menus')
        ->select('id,route')
        ->where('isdelete',0)
        ->where('route <>','')
        ->find_all();
        $arr_menu = array();
        foreach($menu as $item){
            $arr_menu[$item->id] = $item->route;
        }
        $arr_right = array();
        foreach($json as $id=>$right){
            if(isset($arr_menu[$id])){
                $arr_right[$arr_menu[$id]] = $right;
            }
        }
        return $arr_right;
    }
    function insertTimeLog($uid , $address, $GMTTime){
        $data['timelogin'] = $GMTTime;
        $data['ipaddress'] = $address;
        $data['username'] = $uid;
        $id = $this->model->table('gdt_time_login')->save('', $data);
        return $id;
    }

    function getLanguage($lang=''){
        if($lang != ""){
            $langs = $lang;
        }
        else{
            $langs = "vn";
        }
        $query = $this->model->table('gdt_language')
        ->select('keyword,translation,langpage')
        ->where('isdelete',0)
        ->where('language',$langs)
        ->find_all();
        $arr = array();
        foreach($query as $item){
            $arr[$item->langpage][$item->keyword]       = $item->translation;
        }
        return $arr;
    }
}