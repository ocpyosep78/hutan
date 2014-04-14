<?php

class login extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$segments = $this->uri->segments;
		if (!empty($segments[2]) && method_exists($this, $segments[2])) {
			$this->$segments[2]();
		} else {
			$this->load->view( 'panel/login' );
		}
    }
    
    function action() {
		$user = $this->User_model->get_by_id(array( 'alias' => $_POST['alias'] ));
		
		$result = array( 'status' => false, 'message' => '' );
		if (count($user) == 0) {
			$result['message'] = 'Maaf, user anda tidak ditemukan';
//		} else if ($user['is_active'] == 0) {
//			$result['message'] = 'Maaf, user anda tidak aktif';
		} else if ($user['passwd'] == EncriptPassword($_POST['passwd'])) {
			$result['status'] = true;
			$this->User_model->set_session($user);
			
			/*
			// update last login
			$param['id'] = $user['id'];
			$param['login_last_date'] = $this->config->item('current_datetime');
			$this->User_model->update($param);
			/*	*/
		} else {
			$result['message'] = 'Maaf, password anda tidak cocok.';
		}
		
		echo json_encode($result);
		exit;
    }
	
	function logout() {
		$this->User_model->del_session();
		
		header('Location: '.base_url());
		exit;
	}
}