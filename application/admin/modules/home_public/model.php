<?php

class home_publicModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function object_item_table() {
        $obj = new stdClass();
        $obj->id = "";
        $obj->title = "";
        $obj->link = "";
        $obj->label = "";
        $obj->picture = "";
        $obj->picture_mobile = "";
        $obj->content = "";
        $obj->json_pictures = "";
        $obj->is_publish = 0;
        $obj->area = 0;
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
            $sql .= " AND ghi.title LIKE '%" . addslashes(trim($search['title'])) . "%' ";
        }
        if (!empty($search['area'])) {
            $sql .= " AND ghi.area = '" . addslashes($search['area']) . "' ";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $sql = "SELECT ghi.*
                FROM gdt_public ghi
                WHERE ghi.is_delete = 0 ";
        $sql.= $this->getSearch($search);
        $sql .= " ORDER BY id DESC ";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        return $this->model->query($sql)->execute();
    }

    function getTotal($search) {
        $sql = "SELECT COUNT(1) AS total
                FROM gdt_public ghi
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
                SELECT id, title, link, label, area, content, picture, picture_mobile, json_pictures, is_publish, user_create, time_create, user_update, time_update, is_delete
                FROM gdt_public
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

    function getSolutions() {
        $sql = "SELECT id,title FROM `gdt_solutions_list` WHERE is_delete = 0;";
        $rs = $this->model->query($sql)->execute();
        return $rs;
    }

    function change_is_publish($id, $status) {
        /*
         * set only record have is_publish equal 1
          if (status == 1) {
          $sql = "UPDATE `gdt_public` SET `is_publish` = '0';";
          $this->model->executeQuery($sql);
          }
         */
        $sql = "UPDATE `gdt_public` SET `is_publish` = '" . $status . "' WHERE `id` = " . $id . ";";
        $this->model->executeQuery($sql);
    }

    function mysave($id, $data) {
        $rs = array("id" => $id, "status" => true);
        $title = $data['title'];
        $title_vn = $data['title_vn'];
        $picture = $data['picture'];
        $picture_mobile = $data['picture_mobile'];
        $content = $data['content'];
        $content_vn = $data['content_vn'];
        $is_publish = $data['is_publish'];
        $json_pictures = $data['json_pictures'];
        $area = $data['area'];
        try {
            if (empty($id)) {
                $check = $this->db->select("id")->from('gdt_public')->where("title", $data['title'])->where("is_delete", 0)->count_all_results();
                if ($check > 0) {
                    $rs["status"] = "exist";
                    return json_encode($rs);
                }
                $time_create = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = "
                    INSERT INTO gdt_public (title, title_vn, picture, picture_mobile, content, content_vn, is_publish, json_pictures, user_create, time_create, area) VALUES ('$title', '$title_vn', '$picture', '$picture_mobile', '$content', '$content_vn', $is_publish, '$json_pictures', '1', '$time_create', '$area')
                ";
                $this->model->executeQuery($sql);
            } else {
                $time_update = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = "
                    UPDATE `gdt_public`
                    SET `title` = '$title',
                        `title_vn` = '$title_vn',
                        `picture` = '$picture',
                        `picture_mobile` = '$picture_mobile',
                        `content` = '$content',
                        `content_vn` = '$content_vn',
                        `is_publish` = $is_publish,
                        `area` = $area,
                        `json_pictures` = '$json_pictures',
                        `user_update` = 1,
                        `time_update` = '$time_update'
                    WHERE `id` = $id
                ";
                // echo $sql;die;
                $this->model->executeQuery($sql);
            }
            $rs["status"] = "success";
        } catch (Exception $e) {
            $rs["status"] = "fail";
        }
        return json_encode($rs);
    }

    function mydelete($idList) {
        $sql = "UPDATE gdt_public SET is_delete=1 WHERE id IN (" . $idList . ") AND id > 0 AND is_delete = 0";
        $this->model->executeQuery($sql);
    }
}