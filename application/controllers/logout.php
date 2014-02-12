<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class logout extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		S();
		refresh();
	}
}