<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author
 * @copyright 2015
 */
class menu extends CI_Controller {
    private $route;
    private $login;
    function __construct(){
        parent::__construct();
        $this->load->model(array('model','base_model'));
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
    function _view(){
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
        $data->controller = admin_url().($this->uri->segment(1));
        $data->groups = $this->base_model->getGroup();
        $data->list = $this->model->getAll();
        $content = $this->load->view('view',$data,true);
        $this->admin->write('content',$content,true);
        $this->admin->write('title',$this->title,true);
        $this->admin->render();
    }
    function getList(){
        $param = array();
        $numrows = 20;
        $data = new stdClass();

        $page = $this->input->post('page');
        $search = $this->input->post('search');
        $search = json_decode($search,true);
        $productsList = $this->model->getList($search,$page,$numrows);

        $count = $this->model->getTotal($search);
        $data->datas = $productsList;
        $data->list = $this->model->getAll();
        $data->start = empty($page) ? 1 : (($page-1)*$numrows+1);
        $page_view=$this->admin->paging($count,$numrows,NULL,$page);
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
    function addItem() {

        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['add'])){
            $result['status'] = 0;
            echo json_encode($result); exit;
        }
        $parent_add = addslashes($this->input->post('parent_add'));
        $array['menu_name'] = addslashes($this->input->post('name_add'));
        $array['menu_alias'] = str_replace(" ","",$array['menu_name']);
        $array['menu_link'] = addslashes($this->input->post('link_add'));
        $array['menu_parent'] = !empty($parent_add) ? $parent_add : 0;
        $result['status'] =$this->model->addItem($array);

        echo json_encode($result);

    }
    function editItem() {

        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['edit'])){
            $result['status'] = 0;
            echo json_encode($result); exit;
        }
        $array['menu_name'] = addslashes($this->input->post('name_edit'));
        $array['menu_alias'] = str_replace(" ","",$array['menu_name']);
        $array['menu_link'] = addslashes($this->input->post('link_edit'));
        $array['menu_parent'] = addslashes($this->input->post('parent_edit'));
        $array['menu_id'] = $this->input->post('id');
        $result['status'] =$this->model->editItem($array);

        echo json_encode($result);

    }

    function delete() {
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['delete'])){
            $result['status'] = 0;
            echo json_encode($result); exit;
        }
        $idList = $this->input->post('list');

        $array['isdelete'] = 1;
        $this->model->deleteItem($idList);
        $result['status'] = 1;
        echo json_encode($result);
    }
}