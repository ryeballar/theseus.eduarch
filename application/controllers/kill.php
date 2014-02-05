<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class kill extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->session->sess_destroy();
		refresh();
	}
}