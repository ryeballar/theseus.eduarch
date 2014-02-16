<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		set_active('dashboard');
		set_active('dashboard-profile');
		$this->load('dashboard', 'Dashboard');
		del_active('dashboard', 'dashboard-profile');
	}

}