<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class eduarch_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->config->load('eduarch', true);
		$this->cfg = $this->config->item('eduarch');
	}

	function get_header_meta() {
		$h_cfg = $this->cfg['page_header'];

		$user_type_id = $this->session->userdata('user_type_id');

		if($user_type_id)
			$result = $h_cfg['user'];
		else
			$result = $h_cfg['guest'];

		$result['title'] = $h_cfg['title'];

		return $result;
	}

	function get_footer_meta() {
		return array();
	}

	function get_dashboard_side_menu() {
		$ds_cfg = $this->cfg['dashboard']['side_menu'];

		$user_type_id = $this->session->userdata('user_type_id');

		switch($user_type_id) {
			case REGULAR: return $ds_cfg['regular'];
			case FACILITATOR: return $ds_cfg['facilitator'];
			case ADMINISTRATOR: return $ds_cfg['administrator'];
		}
	}
}