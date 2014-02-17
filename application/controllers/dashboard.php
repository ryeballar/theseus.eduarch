<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->profile();
	}

	function profile() {
		$data['user'] = $this->table_user->get_by_id(S('id'));
		S($data['user']);
		$this->dash_load('dashboard_profile', 'profile', $data);
	}

	function topfeeds() {
		$this->dash_load('dashboard_topfeeds', 'Top Feeds');
	}

	function learning() {
		$this->dash_load('dashboard_learning', 'Learning');
	}

	function teaching() {
		$this->dash_load('dashboard_teaching', 'Teaching');
	}

	function sessions() {
		$this->dash_load('dashboard_sessions', 'Sessions');
	}

	function management() {
		$this->dash_load('dashboard_management', 'Management');
	}

	function filtering() {
		$this->dash_load('dashboard_filtering', 'Filtering');
	}

	private function dash_load($file, $active, $data = array()) {
		set_active('dashboard', "dashboard-$active");
		$data['content_file'] = $file;
		$this->load('dashboard', 'Dashboard', $data);
		del_active('dashboard', "dashboard-$active");
	}

}