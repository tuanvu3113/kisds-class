<?php
/**
 * @author Sonnk
 * @copyright 2011
 */

class incModelFooter extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getContact() {
        $sql = "SELECT ga.*
                FROM gdt_aboutus ga
                WHERE ga.is_delete = 0 LIMIT 1";
        return $this->model->query($sql)->execute();
    }
}