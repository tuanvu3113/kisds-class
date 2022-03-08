<?php
/**
 * @author
 * @copyright 2016
 */
     
class contactModel extends CI_Model
{
        function __construct(){
                parent::__construct('');
        }
        function getData(){
            $sql = " SELECT *
                            FROM gdt_general_pages WHERE page_alias='aboutus'";
            $rs =   $this->model->query($sql)->execute();
            if (!isset($rs[0])){
                $date   =   date("Y-m-d H:i:s");
                $sql    =   "INSERT INTO gdt_general_pages (page_title,page_content,page_image,date_updated,page_alias) VALUES('','','','".$date."','aboutus') ";
                $this->model->executeQuery($sql);
                $sql = " SELECT *
                            FROM gdt_general_pages WHERE page_alias='aboutus'";
                $rs =   $this->model->query($sql)->execute();
            }
            return $rs[0];
        }
}