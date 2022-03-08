<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author
 * @copyright 2015
 */
class contact extends CI_Controller {

    private $route;
    private $login;

    function __construct() {
        parent::__construct();
        $this->load->model(array('model', 'base_model'));
        $this->login = $this->admin->getSession('login');
        $this->route = $this->router->class;
        $this->title = $this->admin->getSession('menus')[$this->route];
        $this->load->library('upload');
    }

    function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }

    function _view() {
        $data = new stdClass();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['view'])) {
            redirect('admin.php/authorize');
        }
        $_SESSION["title"]= 'Danh sách liên hệ';
        $data->permission = $permission;
        $data->csrfName = $this->security->get_csrf_token_name();
        $data->csrfHash = $this->security->get_csrf_hash();
        $data->routes = $this->route;
        $data->login = $this->login;
        $data->controller = admin_url() . ($this->uri->segment(1));
        $data->groups = $this->base_model->getGroup();

        $content = $this->load->view('view', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
    }

    function getList() {
        $param = array();
        $numrows = 20;
        $data = new stdClass();

        $page = $this->input->post('page');
        $search = $this->input->post('search');
        $search = json_decode($search, true);
        $productsList = $this->model->getList($search, $page, $numrows);
        $count = $this->model->getTotal($search);
        $data->datas = $productsList;
        $data->start = empty($page) ? 1 : (($page - 1) * $numrows + 1);
        $page_view = $this->admin->paging($count, $numrows, NULL, $page);
        $data->permission = $this->base_model->getPermission($this->login, $this->route);
        $result = new stdClass();
        $result->paging = $page_view;
        $result->cPage = $page;
        $result->viewtotal = $count;
        $result->csrfHash = $this->security->get_csrf_hash();
        $data->routes = $this->route;
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }

    function reply() {
        $array = array();
        $id = $this->input->post('id_reply');
        $content = $this->input->post('content_reply');
        $array['id'] = $id;
        $array['content'] = $content;
        $timenow = gmdate('Y-m-d H:i:s', time() + 7 * 3600);
        // Send Mails
        set_error_handler(function($errno, $errstr, $errfile, $errline ) {
            throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
        });
        try {
            // $array['status'] = $this->sendEmail($array);
            $array['status'] = 1;
            // Cập nhật thông tin liên hệ
            $sql = "
                UPDATE gdt_contact
                SET reply_content = '".$content."',
                    reply_date = '".$timenow."'
                WHERE id = $id
            ";
            $this->model->executeQuery($sql);
        }
        catch (\Exception $e) {
            $log_ex = $this->clean($e->getMessage());
            $page = "Reply Mail";
            $sql = "INSERT INTO `log_exception` (`page`, `content`, `date_create`) VALUES ('$page','$log_ex', '$timenow')";
            $this->model->executeQuery($sql);
            $array['status'] = -1;
        }
        echo json_encode($array);
    }

    function clean($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    function loadcontact() {
        $id = $this->input->post("id");
        $rs = $this->model->loadcontact($id);
        echo json_encode($rs);
    }

    function sendEmail($info) {
        $id = isset($info["id"]) ? trim($info["id"]) : '';
        $replay_content = isset($info["content"]) ? trim($info["content"]) : '';
        $sql = "
            SELECT *
            FROM gdt_contact
            WHERE id = $id
        ";
        $query = $this->model->query($sql)->execute();
        $fullname = isset($query[0]->fullname) ? trim($query[0]->fullname) : '';
        $email = isset($query[0]->email) ? trim($query[0]->email) : '';
        $datetime = isset($query[0]->datecreated) ? trim($query[0]->datecreated) : '';
        $tmp = explode(" ", $datetime);
        $date = gmdate('d-m-Y', strtotime($tmp[0]) + 7 * 3600);
        $time = $tmp[1];
        $title = '[MD Solution] Phản hồi liên hệ';
        $content = 'Kính chào '.$fullname.', <br><br>';
        $content .= 'CÔNG TY TNHH TM & DV CUNG ỨNG NGUỒN NHÂN LỰC MD xin gửi lời cảm ơn đến Quý khách đã liên hệ với chúng tôi vào ngày '.$date.' lúc '.$time.', chúng tôi xin phản hồi như sau<br><br>';
        $content .= $replay_content;
        $content .= '<br><br>Cảm ơn,';
        $content .= '<br>CÔNG TY TNHH TM & DV CUNG ỨNG NGUỒN NHÂN LỰC MD';
        $content .= '<br>MST: 360335557';
        $content .= '<br>Hotline: 0945 79 38 39';
        $content .= '<br>Email: info@mdworks.vn';
        $content .= '<br>Website:  <a href="https://vieclammiennam.vn">https://vieclammiennam.vn</a>';
        $content .= '<br>Địa chỉ: Kp 5, P Long Bình, Biên Hòa, Đồng nai.';
        if($email) {
            $listMails = array($email);
            $this->base_model->sendMail($listMails, $content, "", $title);
        }
        return 1;
    }

    function delete() {
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['delete'])) {
            $result['status'] = 0;
            echo json_encode($result);
            exit;
        }
        $idList = $this->input->post('list');

        $array['isdelete'] = 1;
        $this->model->deleteItem($idList);
        $result['status'] = 1;
        echo json_encode($result);
    }

}
