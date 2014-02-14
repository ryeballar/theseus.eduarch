<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class post_controller {

	private $CI;

	private $config = array(
		'require_login' => array(
			'controllers' => array(
				'dashboard'
			),
			'redirect' => 'login'
		),
		'session_login' => array(
			'controllers'=> array(
				'signup', 'login'
			),
			'redirect' => 'dashboard'
		)
	);

	private $req_controller;

	function __construct() {
		$this->CI = & get_instance();
	}

	function login() {
		$req_controller = $this->CI->router->fetch_class();
		foreach($this->config as $callback => $router) {
			if($this->{"_callback_$callback"}()) {
				foreach($router['controllers'] as $controller) {
					if($req_controller == $controller) {
						refresh($router['redirect']);
						return;
					}
				}
				return;
			}
		}
	}

	function _callback_require_login() {
		return S('id') == false;
	}

	function _callback_session_login() {
		return S('id') != false;
	}
}