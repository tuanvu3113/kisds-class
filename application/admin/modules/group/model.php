<?php

/**
 * @author 
 * @copyright 2015
 */
class GroupModel extends CI_Model {

    function __construct() {
        //$this->load->database();
        parent::__construct();
    }

    function findID($id) {
        $query = $this->model->table('gdt_groups')
                ->where('isdelete', 0)
                ->where('id', $id)
                ->find();
        return $query;
    }

    function getMenuRight($current = '') {
        if (!empty($current)) {
            $current = json_decode($current, true);
        } else {
            $current = array();
        }
        //print_r($current); exit;
        #region Lấy danh cha

        $sql = "  SELECT m.name, m.parent, m.route, m.id, m.params 
                        FROM gdt_menus m                      
                        WHERE m.parent = 0 
						and m.isdelete = 0 
						order by m.ordering ASC";
        $data = $this->model->query($sql)->execute();
        #end
        $menu = '';
        $i = 0;
        $n = count($data);
        $rchk_c = 0;
        foreach ($data as $value) {
            $vid = $value->id;
            $vname = $value->name;
            $asub = $this->getChildren($value->id, $current);
            if ($asub) {
                $sub = $asub['sub'];
                $rchk = $asub['chk'];
                $menu.='{id : "node-' . $value->id . '",
                            value : "parent-' . $value->id . '",
                            text : "' . $value->name . '",
                            showcheck : true,
                            complete : true,
                            isexpand : true,
                            checkstate : ' . $rchk . ',
                            hasChildren : true,
                            ChildNodes : ' . $sub . '
                            }';
                if ($rchk == 1 || $rchk == 2)
                    $rchk_c++;
            }
            else {
                $params = explode(',', $value->params);
                $str_param = '';
                $j = 0;
                $m = count($params);
                $l = (isset($current[$vid])) ? count($current[$vid]) : 0;
                foreach ($params as $param) {
                    if (isset($vid)) {
                        $va = $vid;
                    } else {
                        $va = '';
                    }
                    $chk = (isset($current[$vid][$param])) ? 1 : 0;
                    $str_param.='{id : "node-' . $va . '-' . $param . '",
                                value : "' . $vid . '-' . $param . '",
                                text : "' . $param . '",
                                showcheck : true,
                                complete : true,
                                isexpand : false,
                                checkstate : ' . $chk . ',
                                hasChildren : false}';
                    if ($j < ($m - 1))
                        $str_param.=',';
                    $j++;
                }

                if ($l < 1) {
                    $pchk = 0;
                } else {
                    $pchk = ($l == $m) ? 1 : 2;
                }
                if ($pchk == 1) {
                    $rchk_c++;
                }
                $menu.='{id : "node-' . $vid . '",
                            value : "sub-' . $vid . '",
                            text : "' . $vname . '",
                            showcheck : true,
                            complete : true,
                            isexpand : false,
                            checkstate : ' . $pchk . ',
                            hasChildren : true,
                            ChildNodes : [' . $str_param . ']
                            }';
            }
            if ($i < ($n - 1))
                $menu.=',';
            $i++;
        }
        if ($rchk_c < 1) {
            $rrchk = 0;
        } else {
            $rrchk = ($rchk_c == $n) ? 1 : 2;
        }
        return array('chk' => $rrchk, 'menu' => '[' . $menu . ']');
    }

    function getChildren($id, $current, $level = 0) {

        $sql = "  SELECT m.name, m.parent, m.route, m.id, m.params 
                        FROM gdt_menus m                      
                        WHERE m.parent = $id 
						and m.isdelete = 0
						order by m.ordering ASC";
        $data = $this->model->query($sql)->execute();
        $n = count($data);
        if ($n > 0) {
            $i = 0;
            $n = count($data);
            $menu = '';
            $rchk_c = 0;
            foreach ($data as $value) {
                $vid = $value->id;
                $vname = $value->name;

                $asub = $this->getChildren($vid, $current, 1);
                if ($asub) {
                    $sub = $asub['sub'];
                    $rchk = $asub['chk'];

                    $menu.='{id : "node-' . $vid . '",
                                value : "parentsub-' . $vid . '",
                                text : "' . $vname . '",
                                showcheck : true,
                                complete : true,
                                isexpand : true,
                                checkstate : ' . $rchk . ',
                                hasChildren : true,
                                ChildNodes : ' . $sub . '
                                }';
                    if ($rchk == 1 || $rchk == 2)
                        $rchk_c++;
                }
                else {
                    $params = explode(',', $value->params);
                    $str_param = '';
                    $j = 0;
                    $m = count($params);
                    $l = (isset($current[$vid])) ? count($current[$vid]) : 0;
                    foreach ($params as $param) {
                        $chk = (isset($current[$vid][$param])) ? 1 : 0;
                        $parent = (($level > 0) ? '-' . $value->parent : '');
                        $str_param.='{id : "node-' . $vid . '-' . $param . $parent . '",
                                    value : "' . $vid . '-' . $param . $parent . '",
                                    text : "' . $param . '",
                                    showcheck : true,
                                    complete : true,
                                    isexpand : false,
                                    checkstate : ' . $chk . ',
                                    hasChildren : false}';
                        if ($j < ($m - 1))
                            $str_param.=',';
                        $j++;
                    }
                    if ($l < 1) {
                        $pchk = 0;
                    } else {
                        $pchk = ($l == $m) ? 1 : 2;
                    }
                    if ($pchk > 0) {
                        $rchk_c++;
                    }

                    $menu.='{id : "node-' . $vid . '",
                                value : "sub-' . $vid . '",
                                text : "' . $vname . '",
                                showcheck : true,
                                complete : true,
                                isexpand : true,
                                checkstate : ' . $pchk . ',
                                hasChildren : true,
                                ChildNodes : [' . $str_param . ']
                                }';
                }
                if ($i < ($n - 1))
                    $menu.=',';
                $i++;
            }
            if ($rchk_c < 1) {
                $rrchk = 0;
            } else {
                $rrchk = ($rchk_c == $n) ? 1 : 2;
            }
            return array('chk' => $rrchk, 'sub' => '[' . $menu . ']');
        }
        return false;
    }

    function getSearch($search) {
        $sql = "";
        if ($search['grouptype'] != "") {
            $sql.= " and g.grouptype = '" . $search['grouptype'] . "' ";
        }
        if (!empty($search['groupname'])) {
            $sql.= " and g.groupname like '%" . $search['groupname'] . "%' ";
        }
        return $sql;
    }

    function getList($search, $page, $numrows) {
        $searchs = $this->getSearch($search);
        $sql = " SELECT *  
				FROM gdt_groups AS g
				WHERE g.isdelete = 0 
				$searchs
				ORDER BY g.groupname ASC 
				";
        $sql.= ' LIMIT ' . (($page - 1) * $numrows) . ',' . $numrows;
        $query = $this->model->query($sql)->execute();
        return $query;
    }

    function getTotal($search) {
        $searchs = $this->getSearch($search);
        $sql = " SELECT count(1) total  
		FROM gdt_groups AS g
		WHERE g.isdelete = 0
		$searchs	
		";
        $query = $this->model->query($sql)->execute();
        return $query[0]->total;
    }

    function saves($array) {
        $check = $this->model->table('gdt_groups')
                ->select('id')
                ->where('isdelete', 0)
                ->where('groupname', $array['groupname'])
                ->find();
        if (!empty($check->id)) {
            return -1;
        }
        $result = $this->model->table('gdt_groups')->insert($array);
        return $result;
    }

    function edits($array, $id) {
        $check = $this->model->table('gdt_groups')
                ->select('id')
                ->where('isdelete', 0)
                ->where('id', $id)
                ->find();
        if (empty($check->id)) {
            return -1;
        }
        $result = $this->model->table('gdt_groups')->save($id, $array);
        return $result;
    }

}
