<?php

/**
 * @author Sonnk
 * @copyright 2011
 */
class incLogo extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$login = $this->site->GetSession("login");
        //$groupid = $login->groupid;
		$data = new stdClass();
		
		$data->menus = null; //$this->model->getMenu($groupid);
		$this->load->incView($data);
    }
}