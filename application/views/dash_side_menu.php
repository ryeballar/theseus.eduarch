<ul class="side-nav">
<li><header style="margin-top: 0.2em">Me<span></span></header></li>
<li<?php echo active('dashboard-profile', ' class="active"') ?>>
	<a href="">
		<span class="th radius"><img src="<?php echo $user['image'] ?>" /></span><br>
		<div class="name"><?php echo $user['first_name'], ' ', $user['last_name'] ?></div>
	</a>
</li>
<?php foreach($side_menu as $header => $group): ?>
	<li><header><?php echo $header ?><span></span></header></li>
	<?php foreach($group as $item): ?>
		<li<?php echo active('dashboard-'.$item[1], ' class="active"') ?>>
			<a href="<?php echo $item[0] ?>"><span class="shadow"><?php echo $item[1] ?></span></a>
		</li>
	<?php endforeach ?>
<?php endforeach ?>
</ul>
