<?php

/**
 * @author Sonnk
 * @copyright 2011
 */
class incMenuright extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$login = $this->admin->GetSession("login");
		$lang = $this->admin->GetSession("language");
		$keylang = $this->admin->GetSession("keylang");
        $groupid = $login->groupid;
		$data = new stdClass();
		$data->lang = $keylang; 
		$data->username = $login->username;
		$data->image = $login->image;
		$data->fullname = $login->fullname;
		$this->load->incView($data);
    }
}