<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class Landing extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load('landing', 'EduArch');
	}

}