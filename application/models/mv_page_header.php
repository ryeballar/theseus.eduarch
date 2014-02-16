<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'abstract_mv_invokable.php';

class mv_page_header extends abstract_mv_invokable {

	private $label_string = '<li class="show-for-small-only"><label>{text}</label></li>';
	private $label_patterns = array('/{text}/');

	private $link_string = "<li{class}><a href=\"{link}\">{text}</a></li>";
	private $link_patterns = array('/{class}/', '/{link}/', '/{text}/');

	private $dropdown_string = '
		<li class="has-dropdown">
			<a class="show-for-medium-up">{text}</a>
			<ul class="dropdown">
				{menu}
			</ul>
		</li>
	';
	private $dropdown_patterns = array('/{text}/', '/{menu}/');

	private $left_menu = array(
		'Main Menu' => array(
			array('classes', 'Classes'),
			array('suggestionboard', 'Suggestion Board'),
			array('works', 'Works')
		)
	);

	private $guest_right_menu = array(
		'Credentials' => array(
			array('signup', 'Sign Up'),
			array('login', 'Login')
		)
	);

	private $user_right_menu = array(
		'User Menu' => array(
			array('notifications', '<span class="fi-megaphone"></span>'),
			array('dashboard', '<span class="fi-torso"></span>'),
			'<span class="fi-widget"></span>' => array(
				array('settings', 'Settings'),
				array('logout', 'Logout')
			)
		)
	);

	private $data = null;

	function __construct() {
		parent::__construct();
	}

	function index() {
		if($this->data == null) {
			$this->data = array();
			$this->data['left_menu'] = $this->get_menu($this->left_menu);
			$this->data['right_menu'] = S('user_type_id')?
				$this->get_menu($this->user_right_menu):
				$this->get_menu($this->guest_right_menu);
		}
		return $this->data;
	}

	function get_menu($group_menu) {
		$save_menu = array();
		foreach($group_menu as $label => $menu) {
			$save_menu[] = 
				preg_replace($this->label_patterns, array($label), $this->label_string);

			foreach($menu as $key => $item) {
				$rep = array();
				if(is_string($key)) {
					if(is_array($item)) {
						$dropdown = array();
						foreach($item as $drop_item) {
							$drop_rep = array();
							$drop_rep[] = '';
							$drop_rep[] = $drop_item[0];
							$drop_rep[] = $drop_item[1];
							$dropdown[] = preg_replace($this->link_patterns, $drop_rep, $this->link_string);
						}
						$save_menu[] = preg_replace($this->dropdown_patterns, array(
							$key, implode('', $dropdown)
						), $this->dropdown_string);
					}
				} else {
					$rep[] = is_active($item[0])? ' class="active"': '';
					$rep[] = $item[0];
					$rep[] = $item[1];
					$save_menu[] =
						preg_replace($this->link_patterns, $rep, $this->link_string);
				}
			}
		}
		return implode('', $save_menu);
	}

}