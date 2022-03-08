<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2015
 */
class config extends CI_Controller {
    
	function __construct(){
		parent::__construct();	
		$this->load->model();
		//$this->lang->load('home');
		//$this->site->write('title',lang('title_task'));
	}
	function _remap(){
		$data = new stdClass();
	    $test = $this->model->getTest();
		print_r($test);
		$content = $this->load->view('view',$data,true);
		//$this->load->view('welcome_message');
		//print_r($content); exit;
		//$content =  '';
		$this->site->write('content',$content,true);
        $this->site->render();
	}
}