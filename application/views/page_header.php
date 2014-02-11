<header class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name<?php echo active('EduArch', ' active') ?>">
				<h1><a class="font-xtrchr" href="">EduArch</a></h1>
			</li>
			<li class="toggle-topbar menu-icon">
				<a>Menu</a>
			</li>
		</ul>

		<section class="top-bar-section">
			<ul class="left">
				<li<?php echo active('Classes', ' class="active"') ?>><a href="classes">Classes</a></li>
				<li<?php echo active('SuggestionBoard', ' class="active"') ?>><a href="suggestionboard">Suggestion Board</a></li>
				<li<?php echo active('Works', ' class="active"') ?>><a href="works">Works</a></li>
			</ul>

			<?php view($page_header_menu) ?>
		</section>
	</nav>
</header>