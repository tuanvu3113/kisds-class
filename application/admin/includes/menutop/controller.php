<?php

/**
 * @author Sonnk
 * @copyright 2017
 */
class incMenutop extends CI_Include {

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
		$data->url =  $this->curPageURL();
		$this->load->incView($data);
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