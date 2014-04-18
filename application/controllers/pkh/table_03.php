<?php

class table_03 extends CI_Controller {
    function __construct() {
        parent::__construct();
		$module_info = get_module_name($_SERVER['REQUEST_URI']);
		$this->module = $this->module_model->get_by_id($module_info);
		
		$model_name = $this->module['model_name'];
		$this->load->model($model_name);
    }
    
    function index() {
		$array_param['module'] = $this->module;
		$this->load->view( $this->module['module_type_alias'].'/table_03', $array_param );
    }
    
    function action() {
		$action = (isset($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		// module
		$module = $this->module;
		$model_name = $module['model_name'];
		
		// user
		$user = $this->User_model->get_session();
		
		$result = array( 'status' => false, 'message' => '' );
		if ($action == 'update') {
			if (empty($_POST['id'])) {
				$_POST['user_type_id'] = $user['user_type_id'];
				$_POST['update_time'] = $this->config->item('current_datetime');
			}
			
			$result = $this->$model_name->update($_POST);
		} else if ($action == 'forward') {
			// record
			$record = $this->$model_name->get_by_id(array( 'id' => $_POST['id'] ));
			
			// new record
			$record['id'] = 0;
			$record['sender_id'] = $user['id'];
			$record['user_type_id'] = $user['parent_id'];
			$result = $this->$model_name->update($record);
			$result['message'] = 'Data berhasil dikirimkan.';
		} else if ($action == 'delete') {
			$result = $this->$model_name->delete($_POST);
		}
		
		if ($result['status']) {
			set_flash_message($result['message']);
		}
		
		echo json_encode($result);
    }
}