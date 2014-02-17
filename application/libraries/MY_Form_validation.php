<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	function __construct($rules = array()) {
		parent::__construct($rules);
	}

	function error_array() {
		return $this->_error_array;
	}

	function success_with_ajax($array = array()) {
		$CI = & get_instance();
		if($CI->input->is_ajax_request()) {
			$data['success'] = true;
			if(!empty($array))
				$data = array_merge($data, $array);
			echo json_encode($data);
		} else
			refresh($redirect);
	}

	function fail_with_ajax() {
		$CI = & get_instance();
		if($CI->input->is_ajax_request()) {
			$data['success'] = false;
			$data['errors'] = $this->_error_array;
			echo json_encode($data);
			return true;
		}
	}
}