<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends Base_Controller {

	function __construct() {
		parent::__construct();
		// $this->info("Learning is more fun with friends. Invite a friend now!.");
	}

	function index() {
		$this->top_feeds();
	}

	function top_feeds() {
		$data['side-menu-active'] = 'Top Feeds';
		$this->dash_load('dash_top_feeds', 'Dashboard', $data);
	}

	function learning() {
		$data['side-menu-active'] = 'Learning';
		$this->dash_load('dash_top_feeds', 'Dashboard', $data);
	}

	function teaching() {
		$data['side-menu-active'] = 'Teaching';
		$this->dash_load('dash_top_feeds', 'Dashboard', $data);
	}

	protected function dash_load($directory, $title, $data = array()) {
		$data['topbar-active'] = 'Dashboard';
		$data['user'] = array($this->table_user->get_by_id($this->session->userdata('id')));
		$data['dashboard_side_menu'] = $this->eduarch_model->get_dashboard_side_menu();
		$data['dashboard_directory'] = $directory;
		$this->load('dashboard', $title, $data);
	}
}