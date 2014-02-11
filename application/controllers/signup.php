<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class signup extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		set_active('SignUp');
		$this->load('signup', 'Sign Up');
	}
	
}