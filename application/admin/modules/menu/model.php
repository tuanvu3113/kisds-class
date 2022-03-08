<?php
 class menuModel extends CI_Model{
    function __construct(){
            parent::__construct();
    }
    function getSearch($search){
            $sql = "";
            if (!empty($search['search_content'])) {
                    $sql .= " AND menu_name LIKE '%".  addslashes(trim($search['search_content']))."%' ";
            }
            return $sql;
    }
    function getList($search,$page,$numrows){
            $sql = " SELECT *
                            FROM gdt_public_menus PM WHERE PM.isdelete=0";
            $sql.= $this->getSearch($search);
            $sql .= " ORDER BY PM.menu_parent,PM.ordering ASC ";
            $sql.= ' LIMIT '.(($page-1)*$numrows).','.$numrows;
            return $this->model->query($sql)->execute();
    }
    function getAll(){
            $sql = " SELECT *
                            FROM gdt_public_menus PM WHERE PM.isdelete=0";
            $sql .= " ORDER BY PM.id ASC ";
            return $this->model->query($sql)->execute();
    }
    function getTotal($search){
            $sql = " SELECT COUNT(1) AS total
                            FROM gdt_public_menus
                            WHERE isdelete = 0 ";
            $sql.= $this->getSearch($search);
            $query = $this->model->query($sql)->execute();
            if(empty($query[0]->total)){
                    return 0;
            }
            else{
                    return $query[0]->total;
            }
    }
    function addItem($array){
            $result = $this->model->table('gdt_public_menus')
                                            ->insert($array);
            return $result;
    }
    function deleteItem($idList){
            $sql    =   "UPDATE gdt_public_menus SET isdelete=1 WHERE id IN (".$idList.") AND id >0 AND isdelete=0";
            $this->model->executeQuery($sql);
    }
    function editItem($array){
            $sql    =   "UPDATE gdt_public_menus
                    SET menu_name='".$array['menu_name']."',
                            menu_link='".$array['menu_link']."',
                            menu_parent='".$array['menu_parent']."'
                    WHERE id = ".$array['menu_id'];
            $rs =   $this->model->executeQuery($sql);
            return $rs;
    }
}