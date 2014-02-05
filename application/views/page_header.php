<input type="hidden" id="topbar-active" value="{topbar-active}" />

<div class="fixed">
<?php view('page_message') ?>
<nav class="top-bar" data-topbar data-options="scrolltop: false">
	<ul class="title-area">
		<li class="name">
			<h1><?php echo $page_header['title'] ?></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a>Menu</a></li>
	</ul>

	<section class="top-bar-section">
		<ul class="left">
			<?php foreach($page_header['left'] as $item): ?>
			<li><?php echo $item ?></li>
			<?php endforeach; ?>
		</ul>

		<ul class="right">
			<?php foreach($page_header['right'] as $item): ?>
			<li><?php echo $item ?></li>
			<?php endforeach ?>
		</ul>
	</section>
</nav>
</div>

<?php
if(!$this->session->userdata('user_type_id'))
	view('modal-login', 'modal-signup');
