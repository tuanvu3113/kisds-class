<?php
 class imagesModel extends CI_Model{
    function __construct(){
            parent::__construct();
    }
    function getSearch($search){
            $sql = "";
            if (!empty($search['image_name'])) {
                    $sql .= " AND image_name LIKE '%".  addslashes(trim($search['image_name']))."%' ";
            }
            return $sql;
    }
    function getList($search,$page,$numrows){
            $sql = " SELECT *
                            FROM gdt_images 
                            WHERE isdelete = 0 ";
            $sql.= $this->getSearch($search);
            $sql .= " ORDER BY id DESC ";
            $sql.= ' LIMIT '.(($page-1)*$numrows).','.$numrows;
            return $this->model->query($sql)->execute();
    }
    function getTotal($search){
            $sql = " SELECT COUNT(1) AS total
                            FROM gdt_images
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
    function checkExist($array){
        if (isset($array['product_id'])){
            $sql = " SELECT *
                            FROM gdt_images
                            WHERE product_alias='".  strtolower($array['product_name'])."' AND isdelete = 0 AND id<>".$array['product_id'];
        }
        else{
            $sql = " SELECT *
                            FROM gdt_images
                            WHERE `id`='".  strtolower($array['product_name'])."' AND isdelete = 0 ";
        }
            $rs = $this->model->query($sql)->execute();
            if (count($rs)==0) return 0;
            else return 2;
    }
    function addItem($array){
            $result = $this->model->table('gdt_images')
                                            ->insert($array);	
            return $result;
    }
    function deleteItem($idList){
            $sql    =   "UPDATE gdt_images SET isdelete=1 WHERE id IN (".$idList.") AND id >0 AND isdelete=0";
            $this->model->executeQuery($sql);
//            $data = array(
//               'isdelete' => 1,
//            );
//            $list   = explode(",", $idList);
//            $this->db->where_in('id', $list);
//            $this->db->update('gdt_products', $data); 
    }
    function getItemDetail($id){
            $sql = " SELECT *
                            FROM gdt_images
                            WHERE id='".$id."' AND isdelete = 0 ";
            $rs = $this->model->query($sql)->execute();
            return $rs;
    }
    function editItem($array){
        $queryImages    =   "";
        if ($array['news_image']!="")    $queryImages=   " news_image='".$array['news_image']."', ";
            $sql    =   "UPDATE gdt_images 
                    SET news_title='".$array['news_title']."', ".$queryImages."
                        news_summary='".$array['news_summary']."',
                            news_content='".$array['news_content']."',
                                news_priority='".$array['news_priority']."'
                    WHERE id = ".$array['news_id'];
            $rs =   $this->model->executeQuery($sql);
            return $rs;
    }
}