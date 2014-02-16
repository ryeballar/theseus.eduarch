<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

abstract class abstract_mv_invokable extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	abstract function index();

	function __invoke() {
		return $this->index();
	}
}