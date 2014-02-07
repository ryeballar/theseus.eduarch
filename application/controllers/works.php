<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class works extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['topbar-active'] = 'Works';
		$this->load('works', 'Works', $data);
	}
}