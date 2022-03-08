<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {

	var $_parent_name = '';
	var $_table_name  = '';
    var $_table_default  = '';
    var $_remane = false;
	var $_key = 'id';
    var $_CI = null;
    var $_db = null;
    var $_default = null;
    var $_change = null;
    var $_fields = null;
	var $_sql = null;
    var $_params = array();

	/**
	 * Constructor
	 *
	 * @access public
	 */
	function __construct($table='', $database = 'db'){
	    $this->load->database();
        $this->_CI =& get_instance();
        if($database=='default'){
			$database = 'db';
		}
        $this->_db = $this->_CI->$database;
        $this->_db_default = $database;
        if(!empty($table)){
			$this->table($table, FALSE, TRUE);
		}
        log_message('debug', "Model Class Initialized");
	}
	function __get($key){
		$CI =& get_instance();
		return $CI->$key;
	}
    function db($name){
       $this->_change = $name;
       return $this;
	}
    function db_default($return = true){
       $this->_change = null;
       if($return) return $this;
	}
    private function _setdb(){
	   $name = ($this->_change != null)?$this->_change:$this->_db_default;
       $this->_db = $this->_CI->$name;
	}
	#region Multi Query
	public function trans_begin(){
		$this->db->trans_begin();
	}
	public function trans_end(&$status=''){
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			$status = 0;
		}
		else{
			$this->db->trans_commit();
			$status = 1;
		}
	}
	#end
	#region One Query
	public function trans_start(){
		$this->db->trans_start();
	}
	public function trans_complete(){
		$this->db->trans_complete();
	}
	public function trans_status(){
		return $this->db->trans_status();
	}
	#end
    function table($table='', $return = TRUE, $rewrite = FALSE){
            $this->_setdb();
            if(!empty($table)){
                    $this->_table_name = $table;
            }
            $exists = $this->_db->table_exists($this->_table_name);
            if($rewrite) {
                    $this->_table_default = $this->_table_name;
            }
            if(!$exists){
                        show_error('The table "'.$this->_table_name .'" is no exists');
            }

            $columns = $this->list_columns();
            $this->_fields = null;
            foreach ($columns as $column){
                    $name = $column->Field;
                    if($column->Key == 'PRI')
                    $this->_key =  $column->Field;
            }
            if($return){
                    return $this;
            }
    }
    public function query($sql){
         $this->_sql = $sql;
         return $this;
    }
    public function setParameter($name, $value = null, $type = null){
        if(is_array($name)){
            foreach ($name as $item)
            {
                $item = (object)$item;
                if(!isset($item->type)) $item->type = null;
                $this->setParameter($item->name, $item->value, $item->type);
            }
            return $this;
        }
        $this->_params[$name] = array('value'=>$value,'type'=>$type);

        return $this;
    }
    public function execute($result = TRUE, $binds = FALSE, $return_object = TRUE, $null = true){
         $this->_setdb();
         foreach($this->_params as $key=>$param) {
            $type = $param['type'];

            if(is_null($type)){
				$type = gettype($param['value']);
			}
            else{
				 $type = strtolower($type);
			}
            $value = $param['value'];
            if($type == 'string'){
				$value = mysql_escape_string($value);
			}
            else if ($type == 'double'){
				$value = str_replace(',','.',$value); // locales fix so 1.1 does not get converted to 1,1
			}
			else if ($type == 'boolean'){
				$value = $value ? 1 : 0;
			}
            else if (is_null($value)){
				$value = 'NULL';
			}
            $this->_sql = str_replace($key, $value, $this->_sql);
         }
         $data = $this->_db->query($this->_sql, $binds, $return_object);
         if($null)
            $this->_change = null;

         if($result) $data = (is_object($data))?$data->result():$data;
         return $data;
    }
	public function executeQuery($sql){
		return $this->db->query($sql);
	}
    private function _query($sql, $binds = FALSE, $return_object = TRUE, $null = true){
         $this->_setdb();
         //$data = $this->_db->query($sql, $binds, $return_object);
         $data = $this->_db->query($sql, $binds, $return_object);
         if($null){
			$this->_change = null;
		 }
         return $data;
    }
    public function pcall($name, $binds = FALSE, $return_object = TRUE){
        $this->_setdb();
        $str = '(';
        if(is_array($binds))
        {
            $i = 0;
            while($i<count($binds)-1){$str .='?,'; $i++;}
            $str .='?';
        }
        $str .= ')';
        $data = $this->_db->query('CALL '.$name.$str, $binds, $return_object);
         $this->_change = null;
        return $data->result();
    }
    public function fcall($name, $binds = FALSE, $return_object = TRUE){
        $this->_setdb();
        $str = '(';
        if(is_array($binds))
        {
            $i = 0;
            while($i<count($binds)-1){$str .='?,'; $i++;}
            $str .='?';
        }
        $str .= ')';
        $data = $this->_db->query('SELECT '.$name.$str.'AS result', $binds, $return_object);
        $data = $data->result();
        if(count($data)>0)
        {
            return $data[0]->result;
        }
        $this->_change = null;
        return false;
    }
    public function and_where_open($key, $value = '', $escape = TRUE){
        $this->_setdb();
        $this->_db->_where_open($key, $value,'AND (', $escape);
        return $this;

    }
    public function and_where_in_open($key = NULL, $values = NULL, $escape = TRUE){
        $this->_setdb();
        $this->_db->_where_in_open($key, $values , FALSE, 'AND (', $escape);
        return $this;

    }
    public function or_where_open($key, $value = '', $escape = TRUE){
        $this->_setdb();
        $this->_db->_where_open($key, $value, $type = 'OR (', $escape);
        return $this;

    }
    public function where_close(){
        $this->_setdb();
        $this->_db->ar_where[] = ')';
        return $this;

    }
    function reset_select(){
        $this->_setdb();
        $this->_table_name = '';
        $this->_fields = null;
        $this->_db->_reset_select();
    }
    public function find_all($name=true){
        $this->_setdb();
        $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
        if($name)
            $table = $this->_db->get($table);
        else
            $table = $this->_db->get();
        $this->_table_name = '';
        $this->_change = null;
        return $table->result();
    }
    public function find_combo($value, $text, $text_empty = '', $where = null){
        $this->_setdb();
        $texts = explode(',',$text);

        $this->select($value.','.$text);
        if(is_array($where))
        {
            foreach($where as $k=>$v)
                $this->where($k, $v);
        }

        $table = $this->find_all();

        if(empty($text_empty))
            $data = array();
        else
            $data = array(''=>$text_empty);
        foreach($table as $item)
        {
            $v = '';
            foreach($texts as $itext)
            {
                if($v!='') $v .= ' - ';
                $v .= $item->$itext;
            }
            $data[$item->$value] = $v;
        }
        return $data;
    }
    public function find($field=true){
        $this->_setdb();
        $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
        $table = $this->_db->get($table);
        if($table->num_rows()<1){
            if($field){

                return $this->_fields;
            }
            return null;
        }
        $this->_table_name = '';
        $this->_change = null;
        return $table->row_object();
    }
    public function list_columns(){
        $this->_setdb();
		$table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
        $fields = $this->showClumns($table);
        $fields = $this->_query($fields,false,true,false);
        return $fields->result();
    }
	function showClumns($table){
		return "SHOW COLUMNS FROM `$table`";
	}
    public function count_all($reset=true){
        $this->_setdb();
		$table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
        return $this->_db->count_all_results($table,$reset);
    }
    public function select($select = '*', $escape = NULL){
        $this->_setdb();
        $this->_db->select($select,$escape);
        return $this;
    }
    public function select_query($select = '',$escape = NULL){
        $this->_setdb();
        $this->_db->select($select,$escape);
        return $this;
    }
    public function select_max($select = '', $alias = ''){
	    $this->_setdb();
		$this->_db->select_max($select, $alias);
        return $this;
	}
    public function select_min($select = '', $alias = ''){
	   $this->_setdb();
		$this->_db->select_min($select, $alias);
        return $this;
	}
    public function select_avg($select = '', $alias = ''){
	   $this->_setdb();
		$this->_db->select_avg($select, $alias);
        return $this;
	}
    public function select_sum($select = '', $alias = ''){
	   $this->_setdb();
		$this->_db->select_sum($select, $alias);
        return $this;
	}
    public function distinct($val = TRUE){
	   $this->_setdb();
	    $this->_db->distinct($val);
        return $this;

	}
    public function from($from){
        $this->_setdb();
        $this->_db->from($from);
        return $this;
    }
    public function join($table, $cond, $type = ''){
        $this->_setdb();
        $this->_db->join($table, $cond, $type);
        return $this;
    }
    public function where($key, $value = NULL, $escape = TRUE){
        $this->_setdb();
        $this->_db->where($key, $value, $escape);
        return $this;
    }
	public function or_where($key, $value = NULL, $escape = TRUE){
	   $this->_setdb();
        $this->_db->or_where($key, $value, $escape);
        return $this;
	}
    public function or_where_in($key = NULL, $values = NULL, $escape = TRUE){
	   $this->_setdb();
	    $this->_db->or_where_in($key, $values, $escape);
		return $this;
	}
    public function where_in($key = NULL, $values = NULL, $escape = TRUE){
	   $this->_setdb();
	    $this->_db->where_in($key, $values, $escape);
		return $this;
	}
    public function where_not_in($key = NULL, $values = NULL, $escape = TRUE){
	   $this->_setdb();
	    $this->_db->where_not_in($key,$values, $escape);
		return $this;
	}
   	public function or_where_not_in($key = NULL, $values = NULL, $escape = TRUE){
	   $this->_setdb();
	    $this->_db->or_where_not_in($key, $values, $escape);
		return $this;
	}
    public function where_between($field, $min, $max){
       $this->_setdb();
        $this->_db->where("$field BETWEEN '$min' AND '$max'");
        return $this;
    }
    public function or_where_between($field, $min, $max){
       $this->_setdb();
        $this->_db->or_where("$field BETWEEN '$min' AND '$max'");
        return $this;
    }
    public function join_between($table1, $table2, $field1, $field2, $field, $min, $max){
       $this->_setdb();
        return $this->_db->where("$table1.$field1 = $table2.$field2 AND $field BETWEEN '$min' AND '$max'");
    }
    public function like($field, $match = '', $side = 'both'){
	   $this->_setdb();
	    $this->_db->like($field,$match,$side);
		return $this;
	}
    public function not_like($field, $match = '', $side = 'both'){
	   $this->_setdb();
        $this->_db->not_like($field,$match,$side);
		return $this;
	}
    public function or_like($field, $match = '', $side = 'both'){
	   $this->_setdb();
        $this->_db->or_like($field,$match,$side);
		return $this;
	}
    public function or_not_like($field, $match = '', $side = 'both'){
	   $this->_setdb();
		$this->_db->or_like($field,$match,$side);
		return $this;
	}
    public function group_by($by){
        $this->_setdb();
        $this->_db->group_by($by);
        return $this;
    }
    public function having($key, $value = '', $escape = TRUE)
	{
	   $this->_setdb();
        $this->_db->having($key,$value,$escape);
		return $this;
	}
    public function or_having($key, $value = '', $escape = TRUE){
	   $this->_setdb();
		$this->_db->or_having($key, $value, $escape);
        return $this;
	}
    public function order_by($orderby, $direction = ''){
        $this->_db->order_by($orderby,$direction);
        return $this;
    }
    public function limit($value, $offset = ''){
	   $this->_setdb();
		$this->_db->limit($value, $offset);
        return $this;
	}
    function set($key, $value = '', $escape = TRUE){
	   $this->_setdb();
		$this->_db->set($key, $value, $escape);
        return $this;
	}
    public function offset($offset){
	   $this->_setdb();
		$this->_db->offset($offset);
		return $this;
	}
    function insert($set = NULL){
	   $this->_setdb();
	   $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
	   if($this->_db->insert($table, $set)){
			return 1;
	   }
	   else{
		    return 0;
	   }
	}
    function update($set = NULL, $where = NULL, $limit = NULL){
	   $this->_setdb();
	   $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
       $this->_db->update($table , $set, $where, $limit);
	}
    public function save($id='',$data = array(), $data_exist = array()){
	   $this->_setdb();
	     if(count($data)<1)
            show_error('Data is empty');
		 $key = $this->_key;

		 $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
         if(empty($id))
         {
            $this->_db->insert($table,$data);
            //$this->_db->select_max($key);
			$idInsert = $this->db->insert_id();
			$query = $this->_db->get($table);
			$query=$query->row_object();
			return $idInsert;
         }
         else
         {
            $this->_db->update($table,$data,array($key=>$id));
            return $id;
         }
	}
    public function delete(){
	   $this->_setdb();
	   $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
       $this->_db->delete($table);
	}
	function get($limit = null, $offset = null)
	{
	   $this->_setdb();
	    $table = ($this->_table_name!='')?$this->_table_name:$this->_table_default;
        $this->_table_name = '';
        $this->_change = null;
		return $this->_db->get($table, $limit, $offset);
	}
}
