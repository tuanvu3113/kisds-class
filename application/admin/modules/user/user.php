<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author
 * @copyright 2015
 */
class User extends CI_Controller {

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

        if (!isset($_POST['csrf_stock_name'])) {
            //show_404();
        }
        $param = array();
        $numrows = 5;
        $data = new stdClass();

        $page = $this->input->post('page');
        $search = $this->input->post('search');
        $search = json_decode($search, true);
        $search = $this->model->changueSearch($search);
        $query = $this->model->getList($search, $page, $numrows);
        $data->start = empty($page) ? 1 : (($page - 1) * $numrows + 1);
        $count = $this->model->getTotal($search);
        $data->datas = $query;
        $page_view = $this->admin->paging($count, $numrows, NULL, $page);
        $data->permission = $this->base_model->getPermission($this->login, $this->route);
        $result = new stdClass();
        $result->paging = $page_view;
        $result->cPage = $page;
        $result->viewtotal = $count;
        $result->csrfHash = $this->security->get_csrf_hash();
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }

    function getDetail() {
        $id = $this->input->get('id');
        if (!empty($id)) {
            $user = $this->model->table('hr_users')->where('id', $id)->find();
            echo json_encode($user);
        }
    }

    function save() {

        $permission = $this->base_model->getPermission($this->login, $this->route);
        $token = $this->security->get_csrf_hash();
        $array = json_decode($this->input->post('search'), true);
        $array = $this->model->changueSearch($array); //print_r($array);exit;
        if (!isset($permission['add'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        if (isset($_FILES['userfile']) && $_FILES['userfile']['name'] != "") {

            $imge_name = $_FILES['userfile']['name'];
            $this->upload->initialize($this->set_upload_options());
            $image_data = $this->upload->do_upload('userfile', $imge_name); //Ten hinh
            $array['signature'] = $image_data;
            $resize = $this->resizeImg($image_data);
        }
        $login = $this->login;
        $array['datecreate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['usercreate'] = $login->username;
        $result['status'] = $this->model->saves($array);
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }

    function edit() {
        $token = $this->security->get_csrf_hash();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['edit'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }

        $array = json_decode($this->input->post('search'), true);
        $array = $this->model->changueSearch($array);
        $id = $this->input->post('id');
        $login = $this->login;
        if (isset($_FILES['userfile']) && $_FILES['userfile']['name'] != "") {
            $imge_name = $_FILES['userfile']['name'];
            $this->upload->initialize($this->set_upload_options());
            $image_data = $this->upload->do_upload('userfile', $imge_name); //Ten hinh
            $array['image'] = $image_data;
            $resize = $this->resizeImg($image_data);
        }
        if (empty($array['password'])) {
            unset($array['password']);
        }
        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['userupdate'] = $login->username;

        $result['status'] = $this->model->edits($array, $id);
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }

    function resizeImg($image_data) {
        $this->load->library('image_lib');
        $configz = array();
        $configz['image_library'] = 'gd2';
        $configz['source_image'] = './files/user/' . $image_data;
        $configz['new_image'] = './files/user/' . $image_data;
        $configz['create_thumb'] = TRUE;
        $configz['maintain_ratio'] = TRUE;
        $configz['width'] = 100;
        $configz['height'] = 100;

        $this->image_lib->initialize($configz);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    private function set_upload_options() {
        $config = array();
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['upload_path'] = './files/user/';
        $config['encrypt_nam'] = 'TRUE';
        $config['remove_spaces'] = TRUE;
        //$config['max_size'] = 0024;
        return $config;
    }

    function deletes() {
        $token = $this->security->get_csrf_hash();
        $id = $this->input->post('id');
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['delete'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $login = $this->login;
        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['userupdate'] = $login->username;
        $array['ipupdate'] = $this->base_model->getMacAddress();
        $array['isdelete'] = 1;
        $this->model->table('gdt_users')->save($id, $array);

        $result['status'] = 1;
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }

}
