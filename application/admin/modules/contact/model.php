<?php

class contactModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getSearch($search) {
        $sql = "";
        if (!empty($search['search_content'])) {
            $search['search_content'] = addslashes(trim($search['search_content']));
            $sql .= " AND (`content` LIKE '%" . $search['search_content'] . "%'
            OR `fullname` LIKE '%" . $search['search_content'] . "%'
            OR `cellphone` LIKE '%" . $search['search_content'] . "%'
            OR `email` LIKE '%" . $search['search_content'] . "%'
            OR `company` LIKE '%" . $search['search_content'] . "%')";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $sql = " SELECT *,IF(reply_date<>'',1,0) AS reply
        FROM gdt_contact
        WHERE isdelete = 0 ";
        $sql.= $this->getSearch($search);
        $sql .= " ORDER BY reply ASC,id DESC ";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        return $this->model->query($sql)->execute();
    }

    function getTotal($search) {
        $sql = " SELECT COUNT(1) AS total
        FROM gdt_contact
        WHERE isdelete = 0 ";
        $sql.= $this->getSearch($search);
        $query = $this->model->query($sql)->execute();
        if (empty($query[0]->total)) {
            return 0;
        } else {
            return $query[0]->total;
        }
    }

    function getEmailById($id) {
        $sql = " SELECT *
        FROM gdt_contact
        WHERE id = " . $id;
        $rs = $this->model->query($sql)->execute();
        return $rs[0]->email;
    }

    function loadcontact($id) {
        $sql = " SELECT * FROM gdt_contact WHERE id = " . $id;
        $rs = $this->model->query($sql)->execute();
        return $rs[0];
    }

    function saveReply($array) {
        $sql = "UPDATE gdt_contact SET reply_content='" . addslashes($array['content']) . "',reply_date='" . date("Y-m-d H:i:s") . "' WHERE id=" . $array['id'];
        $this->model->executeQuery($sql);
    }

    function deleteItem($idList) {
        $sql = "UPDATE gdt_contact SET isdelete=1 WHERE id IN (" . $idList . ") AND id >0 AND isdelete=0";
        $this->model->executeQuery($sql);
    }
}