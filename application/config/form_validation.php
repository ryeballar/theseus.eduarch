<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function rule($field, $label,$rule) {
	return array(
		'field' => $field,
		'label' => $label,
		'rules' => $rule
	);
}


$config['login'] = array(
	rule('user[email]', 'E-mail Address', 'trim|required|xss_clean|valid_email|callback__login_check_email'),
	rule('user[password]', 'Password', 'required')
);

$config['signup'] = array(
	rule('user[first_name]', 'First Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[last_name]', 'First Name', 'trim|required|xss_clean|max_length[50]'),
	rule('user[email]', 'E-mail Address', 'trim|required|xss_clean|valid_email|max_length[40]|callback__signup_check_email'),
	rule('user[password]', 'Password', 'required|md5'),
	rule('retyped_password', 'Retyped Password', 'required|md5|callback__signup_check_password')
);