<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author sonnk
 * @copyright 2011
 */

class events extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model();
        $this->site->setTemplate('home');
    }
    function  _remap($method, $params = array()){
        //$loai = $this->uri->segment(2);
        //$donvi = $this->uri->segment(3);
        if(method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
    function _view(){
        $data = new stdClass();
        $url_current = $_SERVER['REQUEST_URI'];
        if (strpos($url_current, '/events/') !== false) {
            $_SESSION["url_SEO"]='';
            $_SESSION["title_SEO"]='English Day on Carfr ee day';
            $_SESSION["image_SEO"]= '';
            $_SESSION["description_SEO"]= 'English Day on Carfr ee day';
            $_SESSION["datecreated_SEO"]= '';
            $_SESSION["author_SEO"]= '';
            $_SESSION["keywords_SEO"]= '';
            $content = $this->load->view('detail',$data,true);
            $this->site->write('content',$content,true);
            $this->site->render();
        }
        else {
            $data->site =   "events";
            $data->siteName    =   "Events";
            $data->detail           =   $this->model->getData();
            $content = $this->load->view('view',$data,true);
            $_SESSION["title_SEO"]= 'Events';
            $_SESSION["keywords_SEO"]= '';
            $this->site->write('content',$content,true);
            $this->site->render();
        }
    }
}