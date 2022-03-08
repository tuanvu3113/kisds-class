<?php

/**
 * @author Sonnk
 * @copyright 2011
 */
class incFooter extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
        $data = new stdClass();
        $language = $this->site->getSession("language");
        $data->language = $language;
        $data->datas = $this->model->getContact();
        $data->controller = $this->uri->segment(1);
        $this->load->incView($data);
    }

    function savecontact() {
        $data = $this->input->post("fdata");
        $this->model->savecontact($data);
        //$this->sendmailSetting($data);
        // Send Mails
        set_error_handler(function($errno, $errstr, $errfile, $errline ) {
            throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
        });
        try {
            $rs_sendmail = $this->sendmailSetting($data);
        }
        catch (Exception $e) {
            $log_ex = $this->clean($e->getMessage());
            $log_time = gmdate('Y-m-d H:i:s', time() + 7 * 3600);
            $page = "Liên hệ";
            $sql = "INSERT INTO `log_exception` (`page`, `content`, `date_create`) VALUES ('$page','$log_ex', '$log_time')";
            $this->model->executeQuery($sql);
        }
        echo "success";
    }

    function clean($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}