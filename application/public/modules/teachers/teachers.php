<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author sonnk
 * @copyright 2011
 */

class teachers extends CI_Controller {

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
        $data->site =   "teachers";
        $data->siteName    =   "Teachers";
        $data->detail           =   $this->model->getData();
        $content = $this->load->view('view',$data,true);
        $_SESSION["title_SEO"]= 'Teachers';
        $_SESSION["keywords_SEO"]= '';
        $this->site->write('content',$content,true);
        $this->site->render();
    }
}