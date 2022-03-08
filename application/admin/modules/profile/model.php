<?php
 class profileModel extends CI_Model{
    function __construct(){
            parent::__construct();
    }
    function editItem($array){
            $sql    =   "SELECT * FROM gdt_users WHERE id=".$array['id']." AND password='".$array['current']."'";
            
            $rs =   $this->model->query($sql)->execute();
            if (count($rs)<=0) return 0;
            $sql    =   "UPDATE gdt_users SET password='".$array['new']."' WHERE id=".$array['id']."";
            $this->model->executeQuery($sql);
            return 1;
    }
}