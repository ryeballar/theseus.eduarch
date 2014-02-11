<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class mv_landing_marketing extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function index() {
		return array(
			'title' => 'Start Using EduArch to Learn',
			'items' => array(
				$this->item(
					'fi-torsos-all',
					'Crowd Sourcing Suggestion Board'),
				$this->item(
					'fi-page-multiple',
					'Tutorial &amp; Work-Based Classes'
				),
				$this->item(
					'fi-graph-horizontal',
					'Course Categorized Classes'
				),
				$this->item(
					'fi-social-facebook',
					'Facbook Integration'
				),
				$this->item(
					'fi-star',
					'Unlimited Learning!'
				)
			)
		);
	}

	private function item($icon, $article) {
		return array(
			'icon' => $icon,
			'article' => $article
		);
	}
}