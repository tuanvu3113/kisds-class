<?php

class contact_informationModel extends CI_Model {

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
        $obj->json_pictures = "";
        $obj->content = "";
        $obj->area = 1;
        $obj->address = "";
        $obj->city = "";
        $obj->state = "";
        $obj->zip_code = "";
        $obj->country = "";
        $obj->email_support = "";
        $obj->email_sales = "";
        $obj->email_other = "";
        $obj->phone_support = "";
        $obj->phone_sales = "";
        $obj->phone_other = "";
        $obj->fax_1 = "";
        $obj->fax_2 = "";
        $obj->map = "";
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
            $sql .= " AND ga.title LIKE '%" . addslashes(trim($search['title'])) . "%' ";
        }
        if (!empty($search['solution'])) {
            $sql .= " AND ga.solution = '" . addslashes($search['solution']) . "' ";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $sql = "SELECT ga.*
                FROM gdt_aboutus ga
                WHERE ga.is_delete = 0 ";
        $sql.= $this->getSearch($search);
        $sql .= " ORDER BY id DESC ";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        return $this->model->query($sql)->execute();
    }

    function getTotal($search) {
        $sql = "SELECT COUNT(1) AS total
                FROM gdt_aboutus ga
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
                SELECT id, title, title_vn, link, label, picture, json_pictures, content,content_vn, picture, json_pictures, area, address, city, state, zip_code, country, email_support, email_sales, email_other, phone_support, phone_sales, phone_other, fax_1, fax_2, is_publish, map, user_create, time_create, user_update, time_update, is_delete
                FROM gdt_aboutus
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
          $sql = "UPDATE `gdt_home_images` SET `is_publish` = '0';";
          $this->model->executeQuery($sql);
          }
         */
        $sql = "UPDATE `gdt_aboutus` SET `is_publish` = '" . $status . "' WHERE `id` = " . $id . ";";
        $this->model->executeQuery($sql);
    }

    function setposition($arr) {
        foreach ($arr as $item) {
            $sql = "UPDATE `gdt_aboutus` SET `position` = '" . $item->position . "' WHERE `id` = " . $item->id . ";";
            $this->model->executeQuery($sql);
        }
    }

    function mysave($id, $data) {
        $rs = array("id" => $id, "status" => true);
        $title = isset($data['title']) ? $data['title'] : '';
        $title_vn = isset($data['title_vn']) ? $data['title_vn'] : '';
        $link = isset($data['link']) ? $data['link'] : '';
        $label = isset($data['label'] ) ? $data['label'] : '';
        $picture = isset($data['picture']) ? $data['picture'] : '';
        $content = isset($data['content']) ? $data['content'] : '';
        $content_vn = isset($data['content_vn']) ? $data['content_vn'] : '';
        $is_publish = isset($data['is_publish']) ? $data['is_publish'] : '';
        $json_pictures = isset($data['json_pictures']) ? $data['json_pictures'] : '';
        $address = isset($data['address']) ? $data['address'] : '';
        $city = isset($data['city']) ? $data['city'] : '';
        $state = isset($data['state']) ? $data['state'] : '';
        $zip_code = isset($data['zip_code']) ? $data['zip_code'] : '';
        $country = isset($data['country']) ? $data['country'] : '';
        $email_support = isset($data['email_support']) ? $data['email_support'] : '';
        $email_sales = isset($data['email_sales']) ? $data['email_sales'] : '';
        $phone_support = isset($data['phone_support']) ? $data['phone_support'] : '';
        $phone_sales = isset($data['phone_sales']) ? $data['phone_sales'] :'';
        $fax_1 = isset($data['fax_1']) ?  $data['fax_1'] : '';
        $map = isset($data['map']) ? $data['map'] : '';
        // echo $map;die;
        try {
            if (empty($id)) {
                $check = $this->db->select("id")->from('gdt_aboutus')->where("title", $data['title'])->where("is_delete", 0)->count_all_results();
                if ($check > 0) {
                    $rs["status"] = "exist";
                    return json_encode($rs);
                }
                $time_create = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = "
                    INSERT INTO gdt_aboutus
                        (title,
                        title_vn,
                        link,
                        label,
                        picture,
                        content,
                        content_vn,
                        is_publish,
                        json_pictures,
                        address,
                        city,
                        state,
                        zip_code,
                        country,
                        email_support,
                        email_sales,
                        phone_support,
                        phone_sales,
                        fax_1,
                        map,
                        user_create,
                        time_create)
                    VALUES (
                        '$title',
                        '$title_vn',
                        '$link',
                        '$label',
                        '$picture',
                        '$content',
                        '$content_vn',
                        $is_publish,
                        '$json_pictures',
                        '$address',
                        '$city',
                        '$state',
                        '$zip_code',
                        '$country',
                        '$email_support',
                        '$email_sales',
                        '$phone_support',
                        '$phone_sales',
                        '$fax_1',
                        '$map',
                        1,
                        '$time_create')
                ";
                // print_r($sql);die;
                $this->model->executeQuery($sql);
            } else {
                $time_update = gmdate("Y-m-d H:i:s ", time() + 7 * 3600);
                $sql = " UPDATE gdt_aboutus SET
                                title = '$title' ,
                                title_vn = '$title_vn',
                                link = '$link',
                                label = '$label',
                                picture = '$picture',
                                content = '$content',
                                content_vn = '$content_vn',
                                is_publish = '$is_publish',
                                json_pictures = '$json_pictures',
                                address = '$address',
                                city = '$city',
                                state = '$state',
                                zip_code = '$zip_code',
                                country = '$country',
                                email_support = '$email_support',
                                email_sales = '$email_sales',
                                phone_support = '$phone_support',
                                phone_sales = '$phone_sales',
                                fax_1 = '$fax_1',
                                map = '$map',
                                user_update = 1,
                                time_update = '$time_update'
                        WHERE id = $id
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
        $sql = "UPDATE gdt_aboutus SET is_delete=1 WHERE id IN (" . $idList . ") AND id > 0 AND is_delete = 0";
        $this->model->executeQuery($sql);
    }

}
