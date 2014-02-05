<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
    	
class landing extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['topbar-active'] = '';
		$data['classes'] = $this->table_classes->alias("cls")->
			select("
				cls.id, cls.name as class_name, cls.desc as class_desc, 
				cls.image as class_image, cls.points as class_points,
				cls.user_id, cls.course_id, crs.id as course_id, crs.name as course_name,
				crs.image as course_image, ")->
			join("courses as crs", "cls.course_id = crs.id")->
			where('cls.status_id', ACTIVE)->
			get_multiple();

		$this->load('landing', 'Eduarch', $data);
	}

}