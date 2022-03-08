<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author 
 * @copyright 2015
 */
class aboutus extends CI_Controller {
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
                $data->detail  =   $this->model->getList();       
                $content = $this->load->view('view',$data,true);
                $this->admin->write('content',$content,true);
                $this->admin->write('title',$this->title,true);
                $this->admin->render();
        }
        function uploadFile(){
                if(isset($_FILES['file']) && $_FILES['file']['name'] != "") {
                        $filename    =   array();
                        $filename["filename"]='about_us'.date("YmdHis").$_FILES['file']['name'];
                        move_uploaded_file($_FILES['file']['tmp_name'],"images/general/tmp/".$filename["filename"]);
                        echo json_encode($filename);
                }
        }
        function editItem() {

                $permission = $this->base_model->getPermission($this->login, $this->route);                
                if (!isset($permission['add'])){
                        $result['status'] = 0;
                        echo json_encode($result); exit;	
                }
                $array['aboutus_title'] = addslashes($this->input->post('title'));
                $array['aboutus_content'] = addslashes($this->input->post('content'));
                
                $fileName   =   "";
                if(isset($_FILES['image']) && $_FILES['image']['name'] != "") {
                        $fileName='about_us'.date("YmdHis").$_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'],"images/general/".$fileName);
                }
                $array['aboutus_image']  = $fileName;
                $array['date_updated']  = date("Y-m-d H:i:s");
                $result['status'] = $this->model->editItem($array);
                
                echo json_encode($result);
                
        }
}