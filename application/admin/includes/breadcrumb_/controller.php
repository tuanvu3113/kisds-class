<?php

/**
 * @author Sonnk
 * @copyright 2011
 */
class incBreadcrumb extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$data = new stdClass();
		$controller = $this->uri->segment(1);
		$lang = $this->admin->GetSession("language");
		$data->datas = $this->model->getBreadCrumb($controller,$lang);
		$this->load->incView($data);

		
    }

}