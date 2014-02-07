<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class classes extends Base_Controller{

	function __construct() {
		parent::__construct();
	}

	function index() {
		$data['side-menu-active'] = 'All';
		$data['classes'] = $this->table_classes->alias("cls")->
			select("
				cls.id, cls.name as class_name, cls.desc as class_desc, 
				cls.image as class_image, cls.points as class_points,
				cls.user_id, cls.course_id, crs.id as course_id, crs.name as course_name,
				crs.image as course_image, ")->
			join("courses as crs", "cls.course_id = crs.id")->
			where('cls.status_id', ACTIVE)->
			get_multiple();
		$this->class_load('classes_view', 'Classes', $data);
	}

	function view_by_course($course_name, $course_id, $index = 0) {
		$data['side-menu-active'] = $course_name;
		$data['classes'] = $this->table_classes->alias("cls")->
			select("
				cls.id, cls.name as class_name, cls.desc as class_desc, 
				cls.image as class_image, cls.points as class_points,
				cls.user_id, cls.course_id, crs.id as course_id, crs.name as course_name,
				crs.image as course_image, ")->
			join("courses as crs", "cls.course_id = crs.id")->
			where(
				'cls.status_id', ACTIVE,
				'cls.course_id', $course_id
			)->get_multiple(10, $index);
		$this->class_load('classes_view', 'Classes', $data);
	}

	function class_load($directory, $title, $data = array()) {
		$data['topbar-active'] = 'Classes';
		$data['side_menu'] = $this->table_courses->get_multiple();
		$data['class_directory'] = $directory;
		$this->load('classes', $title, $data);
	}
}