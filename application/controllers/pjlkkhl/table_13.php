<?php

class table_13 extends CI_Controller {
    function __construct() {
        parent::__construct();
		$module_info = get_module_name($_SERVER['REQUEST_URI']);
		$this->module = $this->module_model->get_by_id($module_info);
		
		$model_name = $this->module['model_name'];
		$this->load->model($model_name);
    }
    
    function index() {
		$array_param['module'] = $this->module;
		$this->load->view( $this->module['module_type_alias'].'/'.$this->module['alias'], $array_param );
    }
    
    function action() {
		$action = (isset($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		// module
		$module = $this->module;
		$model_name = $module['model_name'];
		
		$result = array( 'status' => false, 'message' => '' );
		if ($action == 'update') {
			if (empty($_POST['id'])) {
				$_POST['update_time'] = $this->config->item('current_datetime');
			}
			
			$result = $this->$model_name->update($_POST);
		} else if ($action == 'delete') {
			$result = $this->$model_name->delete($_POST);
		}
		
		if ($result['status']) {
			set_flash_message($result['message']);
		}
		
		echo json_encode($result);
    }
}