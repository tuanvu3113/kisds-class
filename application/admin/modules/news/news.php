<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author
 * @copyright 2015
 */
class news extends CI_Controller {

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
        if (!$this->input->post('csrf_stock_name')) {
            //show_404();
        }
        $numrows = 10;
        $data = new stdClass();
        $page = $this->input->post('page');
        $search = json_decode($this->input->post('search'), true);
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

    function edit($id) {
        $data = new stdClass();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (empty($id)) {
            $id = "";
            if (!isset($permission['add'])) {
                redirect('admin.php/authorize');
            }
        } else {
            if (!isset($permission['edit'])) {
                redirect('admin.php/authorize');
            }
        }
        $data->permission = $permission;
        $data->routes = $this->route;
        $data->login = $this->login;
        $data->controller = admin_url() . ($this->uri->segment(1));
        $data->groups = $this->base_model->getGroup();
        $data->id = $id;
        $data->detail = $this->model->getItemDetail($id);
        $content = $this->load->view('form', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
    }

    function ispopular() {
        $id = $this->input->post("id");
        $status = $this->input->post("status");
        $this->model->change_is_popular($id, $status);
        echo json_encode(array("id" => "", "status" => "success"));
    }
    function isshow() {
        $id = $this->input->post("id");
        $status = $this->input->post("status");
        $this->model->change_is_show($id, $status);
        echo json_encode(array("id" => "", "status" => "success"));
    }

    function setposition() {
        $position = $this->input->post("position");
        $arr = json_decode($position);
        $this->model->setposition($arr);
        echo "success";
    }

    function mysave() {
        $id = $this->input->post("id");
        $fdata = $this->input->post('fdata');
        //@rename(FCPATH . "images/temp/" . $fdata['icon'], FCPATH . "images/home/news/" . $fdata['icon']);
        @rename(FCPATH . "Images/temp/" . $fdata['news_image'], FCPATH . "Images/home/news/" . $fdata['news_image']);
        @rename(FCPATH . "Images/temp/" . $fdata['news_image_right'], FCPATH . "Images/home/news/" . $fdata['news_image_right']);
        $result = $this->model->mysave($id, $fdata);
        echo $result;
    }

    function delete() {
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['delete'])) {
            $result['status'] = 0;
            echo json_encode($result);
            exit;
        }
        $idList = $this->input->post('list');
        $this->model->mydelete($idList);
        $result['status'] = 1;
        echo json_encode($result);
    }

    function uploadFile() {
        if (isset($_FILES['file']) && $_FILES['file']['name'] != "") {
            $rs = array();
            $rs["filename"] = $_FILES['file']['name'];
            $size_pic = getimagesize($_FILES['file']['tmp_name']);
            move_uploaded_file($_FILES['file']['tmp_name'], "Images/temp/" . $rs["filename"]);

            $rs["status"] = "pass";
            echo json_encode($rs);
        }
    }

    function upload() {
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        @set_time_limit(5 * 60);
        // Settings
        //$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        $targetDir = FCPATH . "images" . DIRECTORY_SEPARATOR . "news";
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds
        // Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }
        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }
        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;
                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }
                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }
        // Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }
        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }
            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }
        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }
        @fclose($out);
        @fclose($in);
        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }
        // Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }

}
