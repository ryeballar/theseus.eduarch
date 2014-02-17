<nav class="tab-bar">
	<?php if(view_exists($directory.'_side_menu')): ?>
	<section class="left-small">
		<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
	</section>
	<?php endif ?>

	<section class="middle tab-bar-section small-tab-bar">
		<?php if(S('id')): ?>
			<h1 class="title font-xtrchr" style="position:relative;">
				<aside style="display: inline; position: absolute; left: 0; top: 0;">
					<a><span class="fi-megaphone" title="Notifications"></span></a>
					<a href="dashboard"><span class="fi-torso" title="Dashboard"></span></a>

					<section style="display: inline">
					<a data-dropdown="drop"><span class="fi-widget"></span></a>
						<ul id="drop" class="small f-dropdown right" data-dropdown-content>
						  <li><a href="user/settings">Settings</a></li>
						  <li><a href="logout">Logout</a></li>
						</ul>
					</section>
				</aside>
				<section style="display: inline; position: absolute; right: 0; top: 0">
					EduArch
				</section>
			</h1>
		<?php else: ?>
			<h1 class="title font-xtrchr">EduArch</h1>
		<?php endif ?>
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