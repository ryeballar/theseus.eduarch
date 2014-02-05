<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	function __construct($rules = array()) {
		parent::__construct($rules);
	}

	function error_array() {
		return $this->_error_array;
	}
}