<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// require 'sdk/facebook-php/src/facebook.php';
    	
class signup extends Base_Controller {

	private $user;

	function __construct() {
		parent::__construct();
	}

	function index() {
		/*$config = array(
			'appId' => '599535443458840',
			'secret' => '61e6578c042ccce513f7016a3aea4362',
			'fileUpload' => false,
			'allowSignedRequest' => false
		);*/
		
		if($this->form_validation->run('signup')) {
			$user = P('user');
			$user['created_on'] = date('Y-m-d');
			$user['updated_on'] = $user['created_on'];
			$user['user_type_id'] = REGULAR;
			$user['status_id'] = ACTIVE;
			$this->table_user->insert($user);
			S($this->table_user->get_last_record());
			refresh('dashboard');
		}

		set_active('SignUp');
		$this->load('signup', 'Sign Up');
	}

	function _signup_check_email($email) {
		$count = $this->user = $this->table_user->count_by_email($email);
	
		if($count > 0) {
			$this->form_validation->set_message('_signup_check_email', 'Email Address is already in use');
			return false;
		}
		
		return true;
	}

	function _signup_check_password($retyped_password) {
		$password = set_value('user[password]', '');

		if($password != $retyped_password) {
			$this->form_validation->set_message('_signup_check_password', 'Retyped Password does not match Password');
			return false;
		}
		
		return true;
	}
	
}