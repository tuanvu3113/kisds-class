<?php

class newsModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function object_item_table() {
        $obj = new stdClass();
        $obj->id = "";
        $obj->news_title = "";
        $obj->link = "";
        $obj->isshow = "";
        $obj->news_image = "";
        $obj->picture_mobile = "";
        $obj->json_pictures = "";
        $obj->news_content = "";
        $obj->author = "";
        $obj->news_summary = "";
        $obj->popular = "";
        $obj->position = "100";
        $obj->is_publish = 0;
        $obj->user_create = "";
        $obj->time_create = "";
        $obj->user_update = "";
        $obj->time_update = "";
        $obj->isdelete = 0;
        return $obj;
    }

    function getSearch($search) {
        $sql = "";
        if (!empty($search['title'])) {
            $sql .= " AND news_title LIKE '%" . addslashes(trim($search['title'])) . "%' ";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $sql = "SELECT *
                FROM gdt_news
                WHERE isdelete = 0 ";
        $sql.= $this->getSearch($search);
        $sql .= " ORDER BY date_created ASC ";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        return $this->model->query($sql)->execute();
    }

    function getTotal($search) {
        $sql = "SELECT COUNT(1) AS total
                FROM gdt_news
                WHERE isdelete = 0 ";
        $sql.= $this->getSearch($search);
        $query = $this->model->query($sql)->execute();
        if (empty($query[0]->total)) {
            return 0;
        } else {
            return $query[0]->total;
        }
    }

    function getItemDetail($id) {
        if (empty($id)) {
            $obj = $this->object_item_table();
        } else {
            $sql = "
                SELECT id, news_title, news_content, news_image, date_created, author, isshow, popular, views_number, news_image_right, news_summary
                FROM gdt_news
                WHERE id='" . $id . "' AND isdelete = 0 ";
            $rs = $this->model->query($sql)->execute();
            if (count($rs) > 0) {
                $obj = $rs[0];
            } else {
                $obj = $this->object_item_table();
            }
        }
        return $obj;
    }

    function change_is_show($id, $status) {

        $sql = "UPDATE `gdt_news` SET `isshow` = '" . $status . "' WHERE `id` = " . $id . ";";
        $this->model->executeQuery($sql);
    }
    function change_is_popular($id, $status) {

        $sql = "UPDATE `gdt_news` SET `popular` = '" . $status . "' WHERE `id` = " . $id . ";";
        $this->model->executeQuery($sql);
    }

    function setposition($arr) {
        foreach ($arr as $item) {
            $sql = "UPDATE `gdt_news` SET `position` = '" . $item->position . "' WHERE `id` = " . $item->id . ";";
            $this->model->executeQuery($sql);
        }
    }

    function mysave($id, $data) {
        $rs = array("id" => $id, "status" => true);
        try {
            if (empty($id)) {
                $check = $this->db->select("id")->from('gdt_news')->where("news_title", $data['news_title'])->where("isdelete", 0)->count_all_results();
                if ($check > 0) {
                    $rs["status"] = "exist";
                    return json_encode($rs);
                }
                //$data['user_create'] = 1;
                $data['date_created'] = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $this->db->insert('gdt_news', $data);
                $rs["id"] = $this->db->insert_id();
            } else {
                //$data['user_update'] = 1;
                $data['date_update'] = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $this->db->where('id', $id);
                $this->db->update('gdt_news', $data);
            }
            $rs["status"] = "success";
        } catch (Exception $e) {
            $rs["status"] = "fail";
        }
        return json_encode($rs);
    }

    function mydelete($idList) {

        $sql = "UPDATE gdt_news SET isdelete=1 WHERE id IN (" . $idList . ") AND id > 0 AND isdelete = 0";
        $this->model->executeQuery($sql);
    }

    function get_category($other = "", $parent_id = "0", $insert_text = "") {
        $this->db->where('parent', $parent_id);
        $this->db->where('isdelete', 0);
        if ($other != "") {
            $this->db->where('id <>', $other);
        }
        $cat = $this->db->get('gdt_news');
        static $menu = array();
        foreach ($cat->result_array() as $item) {
            $temp = "";
            if ($parent_id != "0") {
                $temp .= $insert_text;
            }
            $temp .= $item["title"];
            $menu[] = array('id' => $item["id"], 'name' => $temp, 'parent' => $item["parent"]);
            $this->get_category($other, $item["id"], $insert_text);
        }
        return $menu;
    }

}
