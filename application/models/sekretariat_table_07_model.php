<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekretariat_table_07_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'sender_id', 'user_type_id', 'gol_1_l', 'gol_1_p', 'gol_2_l', 'gol_2_p', 'gol_3_l', 'gol_3_p', 'gol_4_l', 'gol_4_p', 'keterangan', 'update_time'
		);
    }
	
    function update($param) {
        $result = array();
       
        if (empty($param['id'])) {
            $insert_query  = GenerateInsertQuery($this->field, $param, SEKRETARIAT_TABLE_07);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data berhasil disimpan.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, SEKRETARIAT_TABLE_07);
            $update_result = mysql_query($update_query) or die(mysql_error());
           
            $result['id'] = $param['id'];
            $result['status'] = '1';
            $result['message'] = 'Data berhasil diperbaharui.';
        }
       
        return $result;
    }

    function get_by_id($param) {
        $array = array();
       
        if (isset($param['id'])) {
            $select_query  = "SELECT * FROM ".SEKRETARIAT_TABLE_07." WHERE id = '".$param['id']."' LIMIT 1";
        }
		
        $select_result = mysql_query($select_query) or die(mysql_error());
        if (false !== $row = mysql_fetch_assoc($select_result)) {
            $array = $this->sync($row);
        }
       
        return $array;
    }
	
    function get_array($param = array()) {
        $array = array();
		
		$string_jenis = (isset($param['jenis'])) ? "AND jenis = '".$param['jenis']."'" : '';
		$string_user_type = (isset($param['user_type_id'])) ? "AND store.user_type_id = '".$param['user_type_id']."'" : '';
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'update_time ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS store.*, user_type.name user_type_name
			FROM ".SEKRETARIAT_TABLE_07." store
			LEFT JOIN ".USER." user ON user.id = store.sender_id
			LEFT JOIN ".USER_TYPE." user_type ON user_type.id = user.user_type_id
			WHERE 1 $string_jenis $string_user_type $string_filter
			ORDER BY $string_sorting
			LIMIT $string_limit
		";
        $select_result = mysql_query($select_query) or die(mysql_error());
		while ( $row = mysql_fetch_assoc( $select_result ) ) {
			$array[] = $this->sync($row);
		}
		
        return $array;
    }

    function get_count($param = array()) {
		$select_query = "SELECT FOUND_ROWS() TotalRecord";
		$select_result = mysql_query($select_query) or die(mysql_error());
		$row = mysql_fetch_assoc($select_result);
		$TotalRecord = $row['TotalRecord'];
		
		return $TotalRecord;
    }
	
    function delete($param) {
		$delete_query  = "DELETE FROM ".SEKRETARIAT_TABLE_07." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data berhasil dihapus.';

        return $result;
    }
	
	function sync($row) {
		$row = StripArray($row);
		
		$row['total_l'] = $row['gol_1_l'] + $row['gol_2_l'] + $row['gol_3_l'] + $row['gol_4_l'];
		$row['total_p'] = $row['gol_1_p'] + $row['gol_2_p'] + $row['gol_3_p'] + $row['gol_4_p'];
		$row['total'] = $row['total_l'] + $row['total_p'];
		
		return $row;
	}
}