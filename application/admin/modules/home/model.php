<?php
class HomeModel extends CI_Model{
    function __construct(){
            //$this->load->database();
        parent::__construct();
    }
    function findID($id) {
        $query = $this->model->table('hr_groups')
        ->where('isdelete',0)
        ->where('id',$id)
        ->find();
        return $query;
    }


    function getLanguage($lang=''){
        if ($lang != "") {
            $langs = $lang;
        }
        else {
            $langs = "vn";
        }
        $query = $this->model->table('gdt_language')
        ->select('language,langpage,keyword,translation,langpage')
        ->where('isdelete',0)
        ->where('language',$langs)
        ->find_all();
        $arr = array();
        foreach($query as $item){
            $arr[$item->langpage][$item->keyword] = $item->translation;
        }
        return $arr;
    }
}