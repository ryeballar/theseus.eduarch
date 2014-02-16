<nav class="tab-bar show-for-small-only">
	<?php if(view_exists($directory.'_side_menu')): ?>
	<section class="left-small">
		<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
	</section>
	<?php endif ?>

	<section class="middle tab-bar-section">
		<h1 class="title font-xtrchr text-center">EduArch</h1>
	</section>

	<section class="right-small">
		<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
	</section>
</nav>

<?php if(view_exists($directory.'_side_menu')): ?>
<aside class="left-off-canvas-menu side-bar">
	<ul class="off-canvas-list">
		<?php model_view($directory.'_side_menu') ?>
	</ul>
</aside>
<?php endif ?>

<aside class="right-off-canvas-menu">
	<ul class="off-canvas-list">
		<?php echo $right_menu ?>
	</ul>
</aside>