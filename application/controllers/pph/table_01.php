<?php

class table_01 extends CI_Controller {
    function __construct() {
        parent::__construct();
		$module_info = get_module_name($_SERVER['REQUEST_URI']);
		$this->module = $this->module_model->get_by_id($module_info);
		
		$model_name = $this->module['model_name'];
		$this->load->model($model_name);
    }
    
    function index() {
		$array_param['module'] = $this->module;
		$this->load->view( 'pph/table_01', $array_param );
    }
    
    function action() {
		$result = array( 'status' => false, 'message' => '' );
		
		echo json_encode($result);
    }
}