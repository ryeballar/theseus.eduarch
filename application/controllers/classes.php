<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends Base_Controller{

	function __construct() {
		parent::__construct();
	}

	function index() {
		set_active('classes');
		$this->load('classes', 'Classes');
		del_active('classes');
	}
}