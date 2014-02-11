<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
   
class mv_landing_featured extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['classes'] = $this->table_classes->alias('c')
			->join('users u', 'u.id = c.user_id')
			->get_multiple();
		return $data;
	}
	
}