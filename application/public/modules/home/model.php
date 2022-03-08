<?php

/**
 * @author
 * @copyright 2016
 */
class homeModel extends CI_Model {

    function __construct() {
        parent::__construct('');
    }

    function getDataHome($lang) {
        if ($lang === 'us') {
            $title = 'title';
            $content = 'content';
            $label = 'label';
        }
        else {
            $title = 'title_vn AS title';
            $content = 'content_vn AS content';
            $label = 'label_vn AS label';
        }
        $query = "SELECT ".$title.", ".$content.", ".$label.", link, picture, picture_mobile, json_pictures, area
                  FROM gdt_home
                  WHERE is_delete = 0
                  AND is_publish = 1;";
        return $this->model->query($query)->execute();
    }

    function getLanguage($lang=''){
        if($lang != ""){
            $langs = $lang;
        }
        else{
            $langs = "us";
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
