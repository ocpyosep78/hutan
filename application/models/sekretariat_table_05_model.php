<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekretariat_table_05_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'sender_id', 'user_type_id', 'struktural_1a_l', 'struktural_1a_p', 'struktural_1b_l', 'struktural_1b_p', 'struktural_2a_l', 'struktural_2a_p', 'struktural_2b_l',
			'struktural_2b_p', 'struktural_3a_l', 'struktural_3a_p', 'struktural_3b_l', 'struktural_3b_p', 'struktural_4a_l', 'struktural_4a_p',
			'struktural_4b_l', 'struktural_4b_p', 'fungsional_umum_l', 'fungsional_umum_p', 'fungsional_l', 'fungsional_p', 'keterangan', 'update_time'
		);
    }
	
    function update($param) {
        $result = array();
       
        if (empty($param['id'])) {
            $insert_query  = GenerateInsertQuery($this->field, $param, SEKRETARIAT_TABLE_05);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data berhasil disimpan.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, SEKRETARIAT_TABLE_05);
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
            $select_query  = "SELECT * FROM ".SEKRETARIAT_TABLE_05." WHERE id = '".$param['id']."' LIMIT 1";
        }
		
        $select_result = mysql_query($select_query) or die(mysql_error());
        if (false !== $row = mysql_fetch_assoc($select_result)) {
            $array = $this->sync($row);
        }
       
        return $array;
    }
	
    function get_array($param = array()) {
        $array = array();
		
		$string_user_type = (isset($param['user_type_id'])) ? "AND store.user_type_id = '".$param['user_type_id']."'" : '';
		$string_jenis = (isset($param['jenis'])) ? "AND jenis = '".$param['jenis']."'" : '';
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'update_time ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS store.*, user_type.name user_type_name
			FROM ".SEKRETARIAT_TABLE_05." store
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
		$delete_query  = "DELETE FROM ".SEKRETARIAT_TABLE_05." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data berhasil dihapus.';

        return $result;
    }
	
	function sync($row) {
		$row = StripArray($row);
		
		$row['total_l'] = $row['struktural_1a_l'] + $row['struktural_1b_l'] + $row['struktural_2a_l'] + $row['struktural_2b_l'] + $row['struktural_3a_l']
			+ $row['struktural_3b_l'] + $row['struktural_4a_l'] + $row['struktural_4b_l'] + $row['fungsional_umum_l'] + $row['fungsional_l'];
		$row['total_p'] = $row['struktural_1a_p'] + $row['struktural_1b_p'] + $row['struktural_2a_p'] + $row['struktural_2b_p'] + $row['struktural_3a_p']
			+ $row['struktural_3b_p'] + $row['struktural_4a_p'] + $row['struktural_4b_p'] + $row['fungsional_umum_p'] + $row['fungsional_p'];
		$row['total'] = $row['total_l'] + $row['total_p'];
		
		return $row;
	}
}