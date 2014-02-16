<section class="off-canvas-wrap" style="position: absolute; top: 0">
	<section class="inner-wrap">
		<?php model_view('page_header_small') ?>

		<section class="body">
			<div id="fb-root"></div>
			<?php model_view('page_header') ?>
			<section class="container">
				<?php view($directory) ?>
			</section>
			<?php view('page_footer') ?>
		</section>
		
		<a class="exit-off-canvas"></a>
	</section>
</section>
<a class="back-to-top show-for-small-only">Back to Top</a>