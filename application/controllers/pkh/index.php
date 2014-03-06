<?php

class index extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$module_info = get_module_name($_SERVER['REQUEST_URI']);
		$this->load->view( $module_info['module_type_alias'].'/index' );
    }
}