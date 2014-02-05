<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
   
require_once 'abstract_table_model.php'; 	

class table_classes extends abstract_table_model {
	
	function __construct() {
		parent::__construct('classes', 'id');
	}

}