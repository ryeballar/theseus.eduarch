<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class user extends CI_Controller {

	private $fetched_user = null;

	function __construct() {
		parent::__construct();
	}

	function logout() {
		$this->session->sess_destroy();
		refresh();
	}

	function login() {
		if($this->input->is_ajax_request()) {
			if($this->form_validation->run('login')) {
				$this->session->set_userdata($this->login_user);
				$data['success'] = true;
				$data['redirect'] = base_url('dashboard');
			} else {
				$data['success'] = false;
				$data['errors'] = $this->form_validation->error_array();
			}
			echo json_encode($data);
		} else
			show_404();
	}

	function signup() {
		if($this->input->is_ajax_request()) {
			if($this->form_validation->run('signup')) {
				$user = $this->input->post('user');

				$user['created_on'] = $user['updated_on'] = date('Y-m-d');
				$user['user_type_id'] = REGULAR;
				$user['status_id'] = ACTIVE;
				
				$this->table_user->insert($user);
				$user = $this->table_user->get_last_record();
				$this->session->set_userdata($user);

				$data['success'] = true;
				$data['redirect'] = base_url('dashboard');
			} else {
				$data['success'] = false;
				$data['errors'] = $this->form_validation->error_array();
			}
			echo json_encode($data);
		} else
			show_404();
	}

	function _login_check_email($email) {
		$this->login_user = $this->table_user->where('email', $email)->get_single();
	
		if(empty($this->login_user)) {
			$this->form_validation->set_message('_login_check_email', 'Email does not exist');
			return false;
		}

		return true;
	}

	function _login_check_credentials($password) {
		if(!empty($this->login_user)) {
			if($this->login_user['password'] != $password) {
				$this->form_validation->set_message('_login_check_credentials', 'E-mail Address or Password is Incorrect');
				return false;
			}
		}

		return true;
	}

	function _signup_check_email($email) {
		$count = $this->table_user->where('email', $email)->count();
	
		if($count > 0) {
			$this->form_validation->set_message('_signup_check_email', 'E-mail is already in use');
			return false;
		}
		
		return true;
	}

	function _signup_check_password($retyped_password) {
		$password = set_value('user[password]', '');
	
		if($password != $retyped_password) {
			$this->form_validation->set_message('_signup_check_password', 'Password does not match');
			return false;
		}
		
		return true;
	}

}