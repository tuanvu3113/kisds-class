<?php
/**
 * @author
 * @copyright 2016
 */

class newsModel extends CI_Model
{
    function __construct(){
        parent::__construct('');
    }

    function getNews($page, $numrows, $tags = "") {
        $where = "";
        if ($tags) {
            $where = " AND tag like '%$tags%'";
        }
        $sql = "SELECT * FROM gdt_news WHERE isdelete = 0  AND isshow = 1 $where ORDER BY date_created DESC";
        if ($page > 0) {
            $sql.= ' LIMIT '.(($page - 1) * $numrows).',' .$numrows;
        }
        $rs = $this->model->query($sql)->execute();
        return $rs;
    }

    function getTotal() {
        $sql = "
            SELECT COUNT(1) AS total
            FROM gdt_news
            WHERE isdelete = 0
                AND isshow = 1
        ";
        $query = $this->model->query($sql)->execute();
        if (empty($query[0]->total)) {
            return 0;
        } else {
            return $query[0]->total;
        }
    }

    function getNewsContent($url_vn = "") {
        if(!empty($url_vn)){
            $sql = "SELECT * FROM gdt_news WHERE id = '$url_vn' and isdelete = 0  AND isshow = 1";
        }else{
            $sql = "SELECT * FROM gdt_news WHERE isdelete = 0 and isshow = 1 LIMIT 1";
        }
        $rs = $this->model->query($sql)->execute();
        return $rs;
    }
}