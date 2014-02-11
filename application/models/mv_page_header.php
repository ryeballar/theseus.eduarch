<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class mv_page_header extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function index() {
		if(S('user_type_id'))
			$data['page_header_menu'] = 'page_header_user';
		else 
			$data['page_header_menu'] = 'page_header_guest';
		return $data;
	}
}