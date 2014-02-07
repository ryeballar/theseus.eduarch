<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class suggestion_board extends Base_Controller{

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['topbar-active'] = 'Suggestion Board';
		$this->load('suggestion_board', 'Suggestion Board', $data);
	}
}