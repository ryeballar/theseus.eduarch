<li><label>Me<span></span></label></li>
<li class="img-profile<?php echo active('dashboard-profile', ' active') ?>">
	<a href="">
		<span class="th radius">
			<img src="<?php echo $user['image'] ?>" />
		</span><br>
		<div class="name"><?php echo $user['first_name'], ' ', $user['last_name'] ?></div>
	</a>
</li>
<?php foreach($side_menu as $label => $group): ?>
	<li><label><?php echo $label ?><span></span></label></li>
	<?php foreach($group as $item): ?>
		<li<?php echo active('dashboard-'.$item[1], ' class="active"') ?>>
			<a href="<?php echo $item[0] ?>"><span class="shadow"><?php echo $item[1] ?></span></a>
		</li>
	<?php endforeach ?>
<?php endforeach ?>