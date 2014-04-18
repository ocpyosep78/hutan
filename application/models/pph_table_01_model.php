<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pph_table_01_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'sender_id', 'user_type_id', 'hutan_produksi_value', 'hutan_produksi_satuan', 'hutan_lidung_value', 'hutan_lindung_satuan', 'ksa_value', 'ksa_satuan', 'kpa_value',
			'kpa_satuan', 'tb_value', 'tb_satuan', 'hutan_lain_value', 'hutan_lain_satuan', 'nilai_rugi', 'upaya', 'keterangan', 'update_time'
		);
    }

    function update($param) {
        $result = array();
       
        if (empty($param['id'])) {
            $insert_query  = GenerateInsertQuery($this->field, $param, PPH_TABLE_01);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data berhasil disimpan.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, PPH_TABLE_01);
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
            $select_query  = "SELECT * FROM ".PPH_TABLE_01." WHERE id = '".$param['id']."' LIMIT 1";
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
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'update_time ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS store.*, user_type.name user_type_name
			FROM ".PPH_TABLE_01." store
			LEFT JOIN ".USER." user ON user.id = store.sender_id
			LEFT JOIN ".USER_TYPE." user_type ON user_type.id = user.user_type_id
			WHERE 1 $string_user_type $string_filter
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
		$delete_query  = "DELETE FROM ".PPH_TABLE_01." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data berhasil dihapus.';

        return $result;
    }
	
	function sync($row) {
		$row = StripArray($row);
		
		$row['hutan_produksi_text'] = $row['hutan_produksi_value'].' '.$row['hutan_produksi_satuan'];
		$row['hutan_lindung_text'] = $row['hutan_lidung_value'].' '.$row['hutan_lindung_satuan'];
		$row['hutan_ksa_text'] = $row['ksa_value'].' '.$row['ksa_satuan'];
		$row['hutan_kpa_text'] = $row['kpa_value'].' '.$row['kpa_satuan'];
		$row['hutan_tb_text'] = $row['tb_value'].' '.$row['tb_satuan'];
		$row['hutan_lain_text'] = $row['hutan_lain_value'].' '.$row['hutan_lain_satuan'];
		
		return $row;
	}
}