<?php

class list_solutionModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function object_item_table() {
        $obj = new stdClass();
        $obj->id = "";
        $obj->parent = 0;
        $obj->title = "";
        $obj->link = "";
        $obj->label = "";
        $obj->menu = "";
        $obj->icon = "";
        $obj->picture = "";
        $obj->picture_mobile = "";
        $obj->content = "";
        $obj->align = "";
        $obj->menu_main = 0;
        $obj->color = "#000000";
        $obj->json_pictures = "";
        $obj->is_publish = 0;
        $obj->user_create = "";
        $obj->time_create = "";
        $obj->user_update = "";
        $obj->time_update = "";
        $obj->is_delete = 0;
        return $obj;
    }

    function getSearch($search) {
        $sql = "";
        if (!empty($search['title'])) {
            $sql .= " AND title LIKE '%" . addslashes(trim($search['title'])) . "%' ";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $sql = "SELECT *
                FROM gdt_solutions_list
                WHERE is_delete = 0 ";
        $sql.= $this->getSearch($search);
        $sql .= " ORDER BY position ASC ";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        return $this->model->query($sql)->execute();
    }

    function getTotal($search) {
        $sql = "SELECT COUNT(1) AS total
                FROM gdt_solutions_list
                WHERE is_delete = 0 ";
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
                SELECT id, parent, title, title_vn, link, label, menu, icon, picture, picture_mobile, content, content_vn, position, align, menu_main, color, json_pictures, is_publish, user_create, time_create, user_update, time_update, is_delete
                FROM gdt_solutions_list
                WHERE id='" . $id . "' AND is_delete = 0 ";
            $rs = $this->model->query($sql)->execute();
            if (count($rs) > 0) {
                $obj = $rs[0];
            } else {
                $obj = $this->object_item_table();
            }
        }
        return $obj;
    }

    function change_is_publish($id, $status) {
        /*
         * set only record have is_publish equal 1
          if (status == 1) {
          $sql = "UPDATE `gdt_home_images` SET `is_publish` = '0';";
          $this->model->executeQuery($sql);
          }
         */
        $sql = "UPDATE `gdt_solutions_list` SET `is_publish` = '" . $status . "' WHERE `id` = " . $id . ";";
        $this->model->executeQuery($sql);
    }

    function setposition($arr) {
        foreach ($arr as $item) {
            $sql = "UPDATE `gdt_solutions_list` SET `position` = '" . $item->position . "' WHERE `id` = " . $item->id . ";";
            $this->model->executeQuery($sql);
        }
    }

    function mysave($id, $data) {
        $rs = array("id" => $id, "status" => true);
        $parent = $data['parent'];
        $title = $data['title'];
        $parent = $data['parent'];
        $title_vn = $data['title_vn'];
        $link = $data['link'];
        $label = $data['label'];
        $menu = $data['menu'];
        $icon = $data['icon'];
        $align = $data['align'];
        $color = $data['color'];
        $picture = $data['picture'];
        $picture_mobile = $data['picture_mobile'];
        $content = $data['content'];
        $content_vn = $data['content_vn'];
        $is_publish = $data['is_publish'];
        $json_pictures = $data['json_pictures'];
        try {
            if (empty($id)) {
                $check = $this->db->select("id")->from('gdt_solutions_list')->where("title", $data['title'])->where("is_delete", 0)->count_all_results();
                if ($check > 0) {
                    $rs["status"] = "exist";
                    return json_encode($rs);
                }
                $time_create = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = "
                    INSERT INTO gdt_solutions_list (parent, title, title_vn, link, label, menu, icon, align, color, picture, picture_mobile, content, content_vn, is_publish, json_pictures, user_create, time_create) VALUES ('$parent', '$title', '$title_vn', '$link', '$label', '$menu', '$icon', '$align', '$color', '$picture', '$picture_mobile', '$content', '$content_vn', $is_publish, '$json_pictures', '1', '$time_create')
                ";
                $this->model->executeQuery($sql);
            } else {
                $time_update = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = "
                    UPDATE `gdt_solutions_list`
                    SET `parent` = '$parent',
                        `title` = '$title',
                        `title_vn` = '$title_vn',
                        `link` = '$link',
                        `label` = '$label',
                        `menu` = '$menu',
                        `icon` = '$icon',
                        `align` = '$align',
                        `color` = '$color',
                        `picture` = '$picture',
                        `picture_mobile` = '$picture_mobile',
                        `content` = '$content',
                        `content_vn` = '$content_vn',
                        `is_publish` = $is_publish,
                        `json_pictures` = '$json_pictures',
                        `user_update` = 1,
                        `time_update` = '$time_update'
                    WHERE `id` = $id
                ";
                $this->model->executeQuery($sql);
            }
            $rs["status"] = "success";
        } catch (Exception $e) {
            $rs["status"] = "fail";
        }
        return json_encode($rs);
    }

    function mydelete($idList) {
        $sql = "UPDATE gdt_solutions_detail SET is_delete=1 WHERE solution IN (" . $idList . ")";
        $this->model->executeQuery($sql);
        $sql = "UPDATE gdt_solutions_list SET is_delete=1 WHERE id IN (" . $idList . ") AND id > 0 AND is_delete = 0";
        $this->model->executeQuery($sql);
    }

    function get_category($other = "", $parent_id = "0", $insert_text = "") {
        $this->db->where('parent', $parent_id);
        $this->db->where('is_delete', 0);
        if ($other != "") {
            $this->db->where('id <>', $other);
        }
        $cat = $this->db->get('gdt_solutions_list');
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
