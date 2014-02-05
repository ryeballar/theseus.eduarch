<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

$config['page_header']['title'] = '<a>EduArch</a>';

$config['page_header']['guest'] = array(
	'left' => array(
		'<a href="classes">Classes</a>',
		'<a href="suggestion_board">Suggestion Board</a>',
		'<a href="works">Works</a>'
	),
	'right' => array(
		'<a data-reveal-id="modal-signup">Sign Up</a>',
		'<a data-reveal-id="modal-login">Login</a>'
	)
);

$config['page_header']['user'] = array(
	'left' => $config['page_header']['guest']['left'],
	'right' => array(
		'<a href="dashboard">Dashboard</a>',
		'<li class="has-dropdown">
	        <a>User</a>
	        <ul class="dropdown">
				<li><a href="user/settings">Settings</a></li>
				<li class="divider show-for-medium-up"></li>
				<li><a href="user/logout">Logout</a></li>
	        </ul>
      	</li>'
	)
);

$config['dashboard']['side_menu']['regular'] = array(
	'<li><label>Feeds</label></li>',
	'<li><a href="dashboard/top_feeds">Top Feeds</a></li>',
	'<li><label>My Classes</label></li>',
	'<li><a href="dashboard/learning">Learning</a></li>',
	'<li><a href="dashboard/teaching">Teaching</a></li>',
	'<li><a href="dashboard/sessions">Sessons</a></li>'
);

$config['dashboard']['side_menu']['facilitator'] = array(
	'<li><label>Feeds</label></li>',
	'<li><a href="dashboard/top_feeds">Top Feeds</a></li>',
	'<li><label>My Classes</label></li>',
	'<li><a href="dashboard/classes">Learning</a></li>',
	'<li><a href="dashboard/classes">Teaching</a></li>',
	'<li><a href="dashboard/sessions">Sessons</a></li>',
	'<li><label>Panel</label></li>',
	'<li><a href="dashboard/facilitator">Facilitator</a></li>'
);

$config['dashboard']['side_menu']['administrator'] = array(
	'<li><label>Feeds</label></li>',
	'<li><a href="dashboard/top_feeds">Top Feeds</a></li>',
	'<li><label>My Classes</label></li>',
	'<li><a href="dashboard/classes">Learning</a></li>',
	'<li><a href="dashboard/classes">Teaching</a></li>',
	'<li><a href="dashboard/sessions">Sessons</a></li>',
	'<li><label>Panel</label></li>',
	'<li><a href="dashboard/administrator">Administrator</a></li>'
);