<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class user extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	function request_info() {
		if(is_ajax()) {
			$user = $this->table_user->get_by_id(S('id'));
			if(empty($user)) {
				$data['success'] = false;
			} else {
				$data['success'] = true;
				$data['data'] = $user;
				unset($data['data']['password']);
				$data['array'] = 'user';
			}

			echo json_encode($data);
		}
	}

	function edit_info() {
		if($this->form_validation->run('edit_info')) {
			$user = P('user');
			$this->table_user->where('id', S('id'))->update($user);
			$this->form_validation->success_with_ajax();
		} elseif($this->form_validation->fail_with_ajax())
			return;
	}

	function edit_credentials() {
		if($this->form_validation->run('edit_credentials')) {
			$user = P('user');
			$this->table_user->where('id', S('id'))->update($user);
			$this->form_validation->success_with_ajax();
		} elseif($this->form_validation->fail_with_ajax())
			return;
	}

	function _check_old_password($password) {
		$count = $this->table_user->count_by_id_password(S('id'), $password);
	
		if($count == 0) {
			$this->form_validation->set_message('_check_old_password', 'Incorrect Old Password');
			return false;
		}
		
		return true;
	}

	function _check_equal_password($retyped) {
		$password = set_value('user[password]', '');

		if($retyped != $password) {
			$this->form_validation->set_message('_check_equal_password', 'Password is not equal with New Password');
			return false;
		}
		
		return true;
	}
}