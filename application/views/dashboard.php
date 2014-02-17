<section class="maxed-width row dashboard">
	<section class="large-3 medium-4 column show-for-medium-up side-bar text-center left">
		<ul class="side-nav">
			<?php model_view('dashboard_side_menu') ?>
		</ul>
	</section>
	<section class="large-9 medium-8 column content">
		<?php view($content_file) ?>
	</section>
</section>
