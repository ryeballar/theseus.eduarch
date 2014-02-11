<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function load($directory, $title, $data = array()) {
		$data['directory'] = $directory;
		load('page_template', $title, $data);
	}

}