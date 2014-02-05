<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
   
require_once 'abstract_table_model.php'; 	

class table_class_users extends abstract_table_model {
	
	function __construct() {
		parent::__construct('class_users', array('class_id', 'user_id'));
	}

	
}