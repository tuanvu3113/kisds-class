<?php
/**
 * @author Son Nguyen
 * @copyright 2015
 */
 class configModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getTest(){
		/*$query = $this->model->table('gds_stock_country')
							 ->where('del_if',0)
							 ->where('country_id',40)
							 ->find();*/
		$sql = 'select *
				from gds_stock_country c limit 2
				';
		$query = $this->model->query($sql)->execute();
		return $query;
	}
}