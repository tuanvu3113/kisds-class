<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author 
 * @copyright 2015
 */
class newsroom extends CI_Controller {
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

                $content = $this->load->view('view',$data,true);
                $this->admin->write('content',$content,true);
                $this->admin->write('title',$this->title,true);
                $this->admin->render();
        }
        function getList(){

                if(!isset($_POST['csrf_stock_name'])){
                        //show_404();
                }
                $param = array();
                $numrows = 5; 
                $data = new stdClass();

                $page = $this->input->post('page'); 
                $search = $this->input->post('search');
                $search = json_decode($search,true);
                $productsList   = $this->model->getList($search,$page,$numrows);

                $count = $this->model->getTotal($search);
                $data->datas = $productsList;
                $data->start     = empty($page) ? 1 : (($page-1)*$numrows+1);
//                $page_view=$this->admin->pagination($count,$numrows,5,'user/',$page);
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
        function add(){
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

                $content = $this->load->view('add',$data,true);
                $this->admin->write('content',$content,true);
                $this->admin->write('title',$this->title,true);
                $this->admin->render();
        }
        function uploadFile(){
                if(isset($_FILES['file']) && $_FILES['file']['name'] != "") {
                        $filename    =   array();
                        $filename["filename"]=date("YmdHis").$_FILES['file']['name'];
                        move_uploaded_file($_FILES['file']['tmp_name'],"images/news/tmp/".$filename["filename"]);
//                        $imge_name = $_FILES['product_file']['name'];
//                        $this->upload->initialize($this->set_upload_options());
//                        $image_data = $this->upload->do_upload('product_file', $imge_name); //Ten hinh 
//                        $array['signature']  = $image_data;
//                        $resize = $this->resizeImg($image_data);
                        
                        
                        echo json_encode($filename);
                }
        }
        function getDetail(){
                $id = $this->input->get('id');
                if (!empty($id)) {
                        $user = $this->model->table('hr_users')->where('id', $id)->find();
                        echo json_encode($user);
                }
        }
        function addItem() {

                $permission = $this->base_model->getPermission($this->login, $this->route);                
                if (!isset($permission['add'])){
                        $result['status'] = 0;
                        echo json_encode($result); exit;	
                }
                
                $array['news_title'] = addslashes($this->input->post('title'));
                $array['news_summary'] = addslashes($this->input->post('summary'));
                $array['news_content'] = addslashes($this->input->post('content'));
                $array['news_priority'] = addslashes($this->input->post('priority'));
//                $result['status']   =   $this->model->checkProductExist($array);
//                if ($result['status']==2) {
//                        echo json_encode($result);
//                        exit;
//                }
                if(isset($_FILES['images']) && $_FILES['images']['name'] != "") {
                        $fileName=date("YmdHis").$_FILES['images']['name'];
                        move_uploaded_file($_FILES['images']['tmp_name'],"images/news/".$fileName);
                }
                $array['date_created']  = date("YmdHis");                
                $array['news_image']  = $fileName;
                $result['status'] =$this->model->addItem($array);

                echo json_encode($result);
                
        }
        function edit() {
                $data = new stdClass();
                $permission = $this->base_model->getPermission($this->login, $this->route);
                if (!isset($permission['view'])) {
                    redirect('admin.php/authorize');
                }
                $data->permission = $permission;
                $data->routes = $this->route;
                $data->login = $this->login;
                $data->controller = admin_url().($this->uri->segment(1));
                $data->groups = $this->base_model->getGroup();
                $data->id  =   $this->uri->segment(3);
                if ($data->id=="")  redirect('admin.php/newsroom');
                $array  =   $this->model->getItemDetail($data->id);
                if (count($array)==0) redirect('admin.php/newsroom');
                $data->detail   =   $array[0];
                $content = $this->load->view('edit',$data,true);
                $this->admin->write('content',$content,true);
                $this->admin->write('title',$this->title,true);
                $this->admin->render();
        }
        function editItem() {

                $permission = $this->base_model->getPermission($this->login, $this->route);                
                if (!isset($permission['add'])){
                        $result['status'] = 0;
                        echo json_encode($result); exit;	
                }
                $array['news_id'] = addslashes($this->input->post('id'));
                $array['news_summary'] = addslashes($this->input->post('summary'));
                $array['news_content'] = addslashes($this->input->post('content'));
                $array['news_title'] = addslashes($this->input->post('title'));
                $fileName   =   "";
                if(isset($_FILES['images']) && $_FILES['images']['name'] != "") {
                        $fileName=date("YmdHis").$_FILES['images']['name'];
                        move_uploaded_file($_FILES['images']['tmp_name'],"images/news/".$fileName);
                }
                $array['news_image']  = $fileName;
                $array['news_priority'] = addslashes($this->input->post('priority'));
                $result['status'] =$this->model->editItem($array);
                
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