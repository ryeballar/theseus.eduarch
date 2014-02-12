<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class signup extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['fb_login'] = $this->fb->getLoginUrl();
		set_active('SignUp');
		$this->load('signup', 'Sign Up', $data);
	}
	
}