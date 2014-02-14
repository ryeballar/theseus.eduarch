<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class login extends Base_Controller {

	private $user;

	function __construct() {
		parent::__construct();
	}

	function index() {
		$fb_user_id = $this->fb->getUser();
		if($this->form_validation->run('login')) {
			S($this->user);
			$this->form_validation->success_with_ajax('dashboard');
			return;
		} elseif($this->form_validation->fail_with_ajax()) {
			return;
		} elseif($fb_user_id) {
			try {
				$data['profile'] = $this->fb->api('/me', 'GET');
			} catch(FacebookApiException $e) {}
		} 
		
		$data['fb_login_url'] = $this->fb->getLoginUrl();
		set_active('Login');
		$this->load('login', 'Login', $data);
	}

	function _login_check_email($email) {
		$post_user = P('user');
		$password = md5($post_user['password']);
		$this->user = $this->table_user->get_single_by_email($email);
	
		if(empty($this->user) || $this->user['password'] != $password) {
			$this->form_validation->set_message('_login_check_email', 'Email or Password is incorrect');
			return false;
		}
		
		return true;
	}

	function fb() {
		$this->load->view('fb-test');
	}

}