<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author 
 * @copyright 2015
 */
class profile extends CI_Controller {
        private $route;
        private $login;
        function __construct(){
                parent::__construct();	
                $this->load->model(array('model','base_model'));
                $this->login = $this->admin->getSession('login');
                $this->route = $this->router->class;
                $this->title = "Profile";
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
                $data->permission = $permission;
                $data->csrfName = $this->security->get_csrf_token_name();
                $data->csrfHash = $this->security->get_csrf_hash();
                $data->routes = $this->route;
                $data->login = $this->login;
                $data->controller = admin_url().($this->uri->segment(1));
                $data->groups = $this->base_model->getGroup();
                $content = $this->load->view('view',$data,true);
                $this->admin->write('content',$content,true);
                $this->admin->write('title',$this->title,true);
                $this->admin->render();
        }
        function editItem() {

                $array['current'] = $this->input->post('current');
                $array['new'] = $this->input->post('new');
                $array['id'] = $this->login->id;
                $array['current']   =   md5(md5($array['current'])."HR@SN");
                $array['new']   =   md5(md5($array['new'])."HR@SN");
                
                $result['status'] = $this->model->editItem($array);
                
                echo json_encode($result);
                
        }
}