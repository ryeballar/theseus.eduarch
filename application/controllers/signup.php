<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

require 'sdk/facebook-php/src/facebook.php';
    	
class signup extends Base_Controller {

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
		set_active('SignUp');
		$this->load('signup', 'Sign Up');
	}
	
}