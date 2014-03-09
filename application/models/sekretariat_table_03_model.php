<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekretariat_table_03_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'polhut_terampil', 'polhut_calon_terampil', 'polhut_ahli', 'polhut_calon_ahli', 'peh_terampil', 'peh_calon_terampil', 'peh_ahli',
			'peh_calon_ahli', 'pranata_terampil', 'pranata_calon_terampil', 'pranata_ahli', 'pranata_calon_ahli', 'analis_terampil', 'analis_calon_terampil',
			'analis_ahli', 'analis_calon_ahli', 'statistisi_terampil', 'statistisi_calon_terampil', 'statistisi_ahli', 'statistisi_calon_ahli',
			'arsiparis_terampil', 'arsiparis_calon_terampil', 'arsiparis_ahli', 'arsiparis_calon_ahli', 'perencana_terampil', 'perencana_calon_terampil',
			'perencana_ahli', 'perencana_calon_ahli', 'update_time'
		);
    }
	
    function update($param) {
        $result = array();
       
        if (empty($param['id'])) {
            $insert_query  = GenerateInsertQuery($this->field, $param, SEKRETARIAT_TABLE_03);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data berhasil disimpan.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, SEKRETARIAT_TABLE_03);
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
            $select_query  = "SELECT * FROM ".SEKRETARIAT_TABLE_03." WHERE id = '".$param['id']."' LIMIT 1";
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
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'update_time ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS *
			FROM ".SEKRETARIAT_TABLE_03."
			WHERE 1 $string_jenis $string_filter
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
		$delete_query  = "DELETE FROM ".SEKRETARIAT_TABLE_03." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data berhasil dihapus.';

        return $result;
    }
	
	function sync($row) {
		$row = StripArray($row);
		
		$row['polhut_total'] = $row['polhut_terampil'] + $row['polhut_calon_terampil'] + $row['polhut_ahli'] + $row['polhut_calon_ahli'];
		$row['peh_total'] = $row['peh_terampil'] + $row['peh_calon_terampil'] + $row['peh_ahli'] + $row['peh_calon_ahli'];
		$row['pranata_total'] = $row['pranata_terampil'] + $row['pranata_calon_terampil'] + $row['pranata_ahli'] + $row['pranata_calon_ahli'];
		$row['analis_total'] = $row['analis_terampil'] + $row['analis_calon_terampil'] + $row['analis_ahli'] + $row['analis_calon_ahli'];
		$row['statistisi_total'] = $row['statistisi_terampil'] + $row['statistisi_calon_terampil'] + $row['statistisi_ahli'] + $row['statistisi_calon_ahli'];
		$row['arsiparis_total'] = $row['arsiparis_terampil'] + $row['arsiparis_calon_terampil'] + $row['arsiparis_ahli'] + $row['arsiparis_calon_ahli'];
		$row['perencana_total'] = $row['perencana_terampil'] + $row['perencana_calon_terampil'] + $row['perencana_ahli'] + $row['perencana_calon_ahli'];
		
		return $row;
	}
}