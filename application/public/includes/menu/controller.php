<?php

/**
 * @author Sonnk
 * @copyright 2011
 */
class incMenu extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
        $data = new stdClass();
        $data->url =  $this->curPageURL();
        $data->url2 =  str_replace(['/', '.html'], "", $_SERVER["REQUEST_URI"]);
        $data->menus = $this->model->getMenu();
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
