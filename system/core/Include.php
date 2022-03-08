<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Include {
	var $load;
	var $model;
	var $lang;
    var $admin;
	var $supplier;
    var $site;
	var $uri;
	function __construct()
	{	
	   
		$CI = &get_instance();
		$this->load = &$CI->load;
		$this->model = &$CI->model;
		$this->lang = &$CI->_language;
        if(isset($CI->admin)) $this->admin = &$CI->admin;
        if(isset($CI->site)) $this->site = &$CI->site;
		if(isset($CI->uri)) $this->uri = &$CI->uri;
    }
        
}