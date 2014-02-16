<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_mv_invokable.php';

class mv_page_header_small extends abstract_mv_invokable {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model('mv_page_header');
		$data['right_menu'] = implode('', $this->mv_page_header->index());
		return $data;
	}
}