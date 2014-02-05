<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function load($directory, $title, $data = array()) {
		$data['page_header'] = $this->eduarch_model->get_header_meta();
		$data['page_footer'] = $this->eduarch_model->get_footer_meta();
		$data['page_message'] = $this->session->userdata('page_message');
		$this->session->unset_userdata('page_message');
		$data['directory'] = $directory;
		load('__template_page', $title, $data);
	}

	function info($content) {
		$this->message('info', $content);
	}

	function warning($content) {
		$this->message('warning', $content);
	}

	function success($content) {
		$this->message('success', $content);
	}

	private function message($type, $content) {
		$this->session->set_userdata('page_message', array(
			'type' => $type,
			'content' => $content
		));
	}
}