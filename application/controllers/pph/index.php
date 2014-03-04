<?php

class index extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->load->view( 'pph/index' );
    }
}