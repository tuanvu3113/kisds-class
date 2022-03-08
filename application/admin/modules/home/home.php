<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    private $route;
    private $login;
    function __construct(){
        parent::__construct();
        $this->load->model(array('model','base_model'));
        $this->login = $this->admin->getSession('login');
        $lang = $this->admin->lang;
        $this->route = $this->router->class;
    }
    function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
    function _view(){
        $data = new stdClass();

        $data->csrfName = $this->security->get_csrf_token_name();
        $data->csrfHash = $this->security->get_csrf_hash();
        $data->controller = base_url().$this->route;
        $data->routes = $this->route;
        $content = $this->load->view('view',$data,true);
        $this->admin->write('content',$content,true);
        $this->admin->render();
    }
    function getList(){
        if(!isset($_POST['csrf_stock_name'])){
            //show_404();
        }
        $result = new stdClass();
        $data = new stdClass();
        $data->permission = $this->base_model->getPermission($this->login, $this->route);
        $page_view=$this->admin->pagination($count,$rows,5,$this->route,$page);
        $result->paging = $page_view;
        $result->csrfHash = $this->security->get_csrf_hash();
        $result->viewtotal = $count;
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }

    function setLanguage(){
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
        }
        else{
            $lang = 'vn';
        }
        if(isset($_GET['url'])){
            $url = $_GET['url'];
        }
        else{
            $url = base_url();
        }
        $langs = $this->model->getLanguage($lang);
        $this->admin->SetSession("keylang", $lang);
        $this->admin->SetSession("language", $langs);
        $this->admin->SetSession("lang", $lang);
        $host = $_SERVER['HTTP_HOST'];
        $base = base_url();
        redirect($url);
    }
}