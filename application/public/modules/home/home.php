<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('model', 'base_model'));
        $this->site->setTemplate('home');
    }

    function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }

    function _view() {
        $data = new stdClass();
        $data->site = "home";
        $data->siteName = "Home";
        $lang = $this->site->getSession("lang");
        $language = $this->site->getSession("language");
        $data->language = $language;
        $data->url =  $this->curPageURL();
        $contents = $this->model->getDataHome($lang);
        foreach ($contents as $item) {
            if ($item->area == 1) {
                $data->section_image = $item;
            } else if ($item->area == 2) {
                $data->section_slide = $item;
            } else if ($item->area == 3) {
                $data->section_technology = $item;
            }
        }
        $_SESSION["title_SEO"]= 'KIDS';
        $_SESSION["keywords_SEO"]= '';
        $content = $this->load->view('view', $data, true);
        $this->site->write('content', $content, true);
        $this->site->render();
    }
    function setLanguage(){
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
        }
        else{
            $lang = 'us';
        }
        if(isset($_GET['url'])){
            $url = $_GET['url'];
        }
        else{
            $url = base_url();
        }
        $langs = $this->model->getLanguage($lang);
        $this->site->setSession("keylang", $lang);
        $this->site->setSession("language", $langs);
        $this->site->setSession("lang", $lang);
        $host = $_SERVER['HTTP_HOST'];
        $base = base_url();
        redirect($url);
    }

    function curPageURL() {
        $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        if ($_SERVER["SERVER_PORT"] != "80"){
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else{
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }
}