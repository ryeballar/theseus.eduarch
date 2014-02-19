<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class login extends Base_Controller {

	private $user;

	function __construct() {
		parent::__construct();
	}

	function index() {
		if($this->form_validation->run('login')) {
			S($this->user);
			$this->form_validation->success_with_ajax(array('redirect' => 'dashboard'));
			return;
		} elseif($this->form_validation->fail_with_ajax())
			return;
			
		set_active('login');
		$this->load('login', 'Login');
		del_active('login');
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

}