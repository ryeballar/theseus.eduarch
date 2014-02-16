<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class works extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		set_active('works');
		$this->load('works', 'Works');
		del_active('works');
	}
}