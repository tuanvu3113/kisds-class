<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author KhaVu 
 * @copyright 2015
 */
class Group extends CI_Controller {

    private $route;
    private $login;

    function __construct() {
        parent::__construct();
        $this->load->model(array('model', 'base_model'));
        $this->login = $this->admin->getSession('login');
        $this->route = $this->router->class;
        $this->title = $this->admin->getSession('menus')[$this->route];
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
            redirect(admin_url());
        }

        $data->permission = $permission;
        $data->csrfName = $this->security->get_csrf_token_name();
        $data->csrfHash = $this->security->get_csrf_hash();

        $data->controller = admin_url() . $this->route;
        $data->routes = $this->route;
        $content = $this->load->view('view', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
    }

    function getList() {
        if (!isset($_POST['csrf_stock_name'])) {
            //show_404();
        }
        $numrows = 5;
        $page = $this->input->post('page');
        $start = empty($page) ? 1 : (($page - 1) * $numrows + 1);
        $searchs = json_decode($this->input->post('search'), true);
        $data = new stdClass();
        $result = new stdClass();
        $query = $this->model->getList($searchs, $page, $numrows);
        $count = $this->model->getTotal($searchs);
        $data->datas = $query;
        $data->start = $start;
        $data->permission = $this->base_model->getPermission($this->login, $this->route);
        $page_view = $this->admin->paging($count, $numrows, NULL, $page);
        $result->paging = $page_view;
        $result->csrfHash = $this->security->get_csrf_hash();
        $result->viewtotal = $count;
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }

    function getRight() {
        $id = $this->input->post('id');
        $infor = $this->model->findID($id);
        if (!empty($infor->id)) {
            $permission = $infor->params;
        } else {
            $permission = null;
            $id = "";
        }
        $menu = $this->model->getMenuRight($permission);
        //print_r($menu); die();
        $data = array();
        $data['menu'] = $menu['menu'];
        $data['root'] = $menu['chk'];
        $data['id'] = $id;
        $data['infor'] = $infor;
        $content = $this->load->view('right', $data, true);
        $result = new stdClass();
        $result->content = $content;
        $result->csrfHash = $this->security->get_csrf_hash();
        echo json_encode($result);
    }

    function setRight() {
        $permission = $this->base_model->getPermission($this->login, $this->route);
        $id = $this->input->post('id');

        $array = array();
        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['usercreate'] = $this->login->username;
        $array['params'] = trim($this->input->post('right'));
        //$acction_before = $this->model->findID($id);
        $this->model->table('gdt_groups')->save($id, $array);
        $result['status'] = 1;
        $result['csrfHash'] = $this->security->get_csrf_hash();
        echo json_encode($result);
    }

    function save() {
        $token = $this->security->get_csrf_hash();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['add'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $array = json_decode($this->input->post('search'), true);
        if (empty($array['groupname'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
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
        $id = $this->input->post('id');
        $login = $this->login;

        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['userupdate'] = $login->username;
        //$acction_before = $this->model->findID($id);
        $result['status'] = $this->model->edits($array, $id);
        $result['csrfHash'] = $token;
        echo json_encode($result);
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
        $array['isdelete'] = 1;
        $this->model->table('gdt_groups')->where("id in ($id)")->update($array);
        $result['status'] = 1;
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }

}
