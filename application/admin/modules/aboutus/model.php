<?php
 class aboutusModel extends CI_Model{
    function __construct(){
            parent::__construct();
    }
    function getList(){
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
    function editItem($array){
        $queryImages    =   "";
        if ($array['aboutus_image']!="")    $queryImages=   " page_image='".$array['aboutus_image']."', ";
            $sql    =   "UPDATE gdt_general_pages 
                    SET page_title='".$array['aboutus_title']."',".$queryImages."
                            page_content='".$array['aboutus_content']."',
                            date_updated='".$array['date_updated']."'
                        WHERE page_alias='aboutus';";
                    
            $rs =   $this->model->executeQuery($sql);
            return $rs;
    }
}