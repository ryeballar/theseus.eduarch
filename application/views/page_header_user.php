<ul class="right">
	<li<?php echo active('dashboard', ' class="active"') ?>><a href="dashboard">Dashboad</a></li>
	<li class="has-dropdown<?php echo active('User', '  active') ?>">
		<a>User</a>
		<ul class="dropdown">
			<li><a href="settings">Settings</a></li>
			<li><a href="logout">Logout</a></li>
		</ul>
	</li>
</ul>