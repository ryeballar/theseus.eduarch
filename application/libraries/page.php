<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class page {

	// if view_mode = true then
	// 		load() invocation uses $this->load->view()
	// else
	// 		load() invocation uses $this->parser->parse()
	private $view_mode = false;

	private $RES = array(
		'js' => array('<script type="text/javascript" src="', null, '"></script>'),
		'css' => array('<link rel="stylesheet" type="text/css" href="', null, '" />')
	);

	private $LOC = array(
		'pre_js' => array('assets/js/pre/', null,'.js'),
		'post_js' => array('assets/js/post/', null, '.js'),
		'css' => array('assets/css/', null, '.css'),
		'view' => array('application/views/', null, '.php')
	);

	private $CI;
	public $title;

	private $res;

	function __construct() {
		$this->CI = & get_instance();
		$this->views = array();
		$this->res = array();
	}

	function set_view_mode($value) {
		$this->view_mode = $value;
	}

	function add() {
		foreach(func_get_args() as $view) {
			$this->views[] = $view;
			$this->CI->load->view($view);
		}
		return $this;
	}

	function optional_add() {
		$loc = $this->LOC['view'];
		foreach(func_get_args() as $view) {
			$loc[1] = $view;
			if(file_exists(implode('', $loc))) {
				$this->views[] = $view;
				$this->CI->load->view($view);
			}
		}
		return $this;
	}

	function load($main_view, $title, $data = null) {
		if($this->view_mode)
			$view_result = $this->CI->load->view($main_view, $data, true);
		else
			$view_result = $this->CI->parser->parse($main_view, $data, true);

		$template_data = array(
			'pre_js' => array(),
			'post_js' => array(),
			'css' => array(),
			'title' => $title,
			'view' => $view_result
		);

		$this->views[] = $main_view;

		foreach($this->views as $view) {
			$this->append_template_data($template_data['pre_js'], $this->RES['js'], $this->LOC['pre_js'], $view);
			$this->append_template_data($template_data['post_js'], $this->RES['js'], $this->LOC['post_js'], $view);
			$this->append_template_data($template_data['css'], $this->RES['css'], $this->LOC['css'], $view);
		}

		foreach($template_data as $key => $value) {
			if(is_array($value))
				$template_data[$key] = implode('', $template_data[$key]);
		}

		$this->CI->load->view('__template', $template_data);
	}

	private function append_template_data(&$data, $t_script, $t_loc, $view) {
		$t_loc[1] = $view;

		$dir_loc = implode('', array_slice($t_loc, 0, 2));
		if(file_exists($dir_loc) && is_dir($dir_loc) && ($handle = opendir($dir_loc))) {
			$directories = array();
			$curr_path = $dir_loc;
			while($handle) {
				while(($entry = readdir($handle)) !== false) {
					$path = "$curr_loc/$entry";
					if(is_dir($path))
						$directories[] = $path;
					else {
						$t_script[1] = $path;
						$data[] = implode('',  $t_script);
					}
			 	}

			 	if(empty($directories))
			 		break;

			 	$curr_path = array_pop($directories);
			 	$handle = open_dir($curr_path);
			}
		}

		$file_loc = implode('', $t_loc);
		if(file_exists($file_loc)) {
			$t_script[1] = $file_loc;
			$data[] = implode('',  $t_script);
		}

	}

}

if(!defined('PAGE_LIBRARY')) {

define('PAGE_LIBRARY', true);

function view_exists($view) {
	return file_exists('application/views/'.$view.'.php');
}

function view() {
	$CI = & get_instance();
	call_user_func_array(array($CI->page, 'add'), func_get_args());
}

function optional_view() {
	$CI = & get_instance();
	call_user_func_array(array($CI->page, 'optional_add'), func_get_args());
}

function load($main_view, $title, $data = null) {
	$CI = & get_instance();
	$CI->page->load($main_view, $title, $data);
}

function refresh($url = '') {
	redirect(base_url($url), 'refresh');
}

function parse_mode() {
	$CI = & get_instance();
	$CI->page->set_view_mode(false);
}

function view_mode() {
	$CI = & get_instance();
	$CI->page->set_view_mode(true);
}

function S($key = null, $value = null) {
	$CI = & get_instance();
	if($key == null)
		$CI->session->sess_destroy();
	elseif(is_array($key))
		$CI->session->set_userdata($key);
	elseif($value === null)
		return $CI->session->userdata($key);
	elseif($value === false)
		$CI->session->unset_userdata($key);
	else
		$CI->session->set_userdata($key, $value);
}

function P($key) {
	$CI = & get_instance();
	return $CI->input->post($key);
}

function G($key) {
	$CI = & get_instance();
	return $CI->input->get($key);
}

function C($key) {
	$CI = & get_instance();
	return $CI->input->cookie($key);
}

function S_echo($key, $value) {
	if(S($key))
		echo $value;
}

function model_view() {
	$CI = & get_instance();
	foreach(func_get_args() as $model_view) {
		if(!isset($CI->{"mv_$model_view"}) &&!file_exists('application/models/mv_$model_view'))
			$CI->load->model("mv_$model_view");
		$CI->load->vars($CI->{"mv_$model_view"}->index());
		view($model_view);
	}
}

function optional_model_view() {
	$CI = & get_instance();
	foreach(func_get_args() as $model_view) {
		if(!isset($CI->{"mv_$model_view"}) &&!file_exists('application/models/mv_$model_view'))
			$CI->load->model("mv_$model_view");
		$CI->load->vars($CI->{"mv_$model_view"}->index());
		optional_view($model_view);
	}
}

function set_active() {
	foreach(func_get_args() as $key)
		S("active-$key", true);
}

function active($key, $value) {
	if(S("active-$key"))
		echo $value;
}

function del_active() {
	foreach(func_get_args() as $key)
		S("active-$key", false);
}

function is_active($key) {
	return S("active-$key") != false;
}

function char_limiter($string, $limit) {
	$length = strlen($string);
	if($length < $limit)
		return $string;
	return substr($string, 0, $limit).'..';
}

function is_ajax() {
	$CI = & get_instance();
	return $CI->input->is_ajax_request();
}

}