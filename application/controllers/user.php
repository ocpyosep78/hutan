<?php

class user extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->load->view( 'user' );
    }
    
    function action() {
		$action = (isset($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array( 'status' => false, 'message' => '' );
		if ($action == 'update') {
			// new user
			if (empty($_POST['id'])) {
				$check_alias = $this->User_model->get_by_id(array( 'alias' => $_POST['alias'] ));
				if (count($check_alias) > 0) {
					$result['status'] = 0;
					$result['message'] = 'Nama account telah terpakai, silahkan memilih nama yang lain.';
					echo json_encode($result);
					exit;
				}
			}
			
			// encript password
			if (!empty($_POST['passwd'])) {
				$_POST['passwd'] = EncriptPassword($_POST['passwd']);
			} else if (isset($_POST['passwd'])) {
				unset($_POST['passwd']);
			}
			
			$_POST['register_date'] = $this->config->item('current_datetime');
			$result = $this->User_model->update($_POST);
		} else if ($action == 'delete') {
			$result = $this->User_model->delete($_POST);
		}
		
		if ($result['status']) {
			set_flash_message($result['message']);
		}
		
		echo json_encode($result);
    }
}