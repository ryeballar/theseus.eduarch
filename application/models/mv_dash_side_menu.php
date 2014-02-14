<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class mv_dash_side_menu extends CI_Model {

	private $regular = array(
		'Feeds' => array(
			array('dashboard/top_feeds', 'Top Feeds')
		),
		'My Classes' => array(
			array('dashboard/learning', 'Learning'),
			array('dashboard/teaching', 'Tearning'),
			array('dashboard/sessions', 'Sessions')
		),
	);

	private $facilitator = array(
		'Control Panel' => array(
			array('dashboard/facilitator', 'Filtering')
		)
	);

	private $administrator = array(
		'Control Panel' => array(
			array('dashboard/administrator', 'Management'),
			array('dashboard/facilitator', 'Filtering')
		)
	);

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['user'] = $this->table_user->get_by_id(S('id'));
		$data['side_menu'] = $this->regular;
		switch(S('user_type_id')) {
			case FACILITATOR: $data['side_menu'] = array_merge($data['side_menu'], $this->facilitator); break;
			case FACILITATOR: $data['side_menu'] = array_merge($data['side_menu'], $this->administrator); break;
		}
		return $data;
	}
}