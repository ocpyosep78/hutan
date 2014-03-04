<?php

class table_01 extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->load->view( 'pph/table_01' );
    }
    
    function action() {
		$result = array( 'status' => false, 'message' => '' );
		
		echo json_encode($result);
    }
}