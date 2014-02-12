<section class="featured-for-small">
	<ul class="js-masonry no-bullet list-of-classes" 
		data-masonry-options='{"itemSelector": ".item", "isFitWidth": true}' style="margin: 0 auto">
		<?php foreach($classes as $class): ?>
			<li class="item">
				<a href="classes/view_class/<?php echo $class['c_id'] ?>"><figure>
					<img src="<?php echo $class['c_image'] ?>" />
					<section>
						<header><span><?php echo $class['c_name'] ?></span></header>
						<article class="row" style="padding: 0">
							<div class="small-4 column text-center">
								<img src="<?php $class['u_image'] ?>" />
							</div>
							<p class="small-8 column">
								<span class="name"><?php echo char_limiter(
								$class['u_first_name'].' '.$class['u_last_name'], 18) ?></span><br>
								<span class="title">
								<?php echo $class['u_title'] ?></span>
							</p>
						</article>
					</section>
				</figure></a>
			</li>
		<?php endforeach ?>
	</ul>
</section>

<section class="text-center featured-button">
	<a href="classes" class="button" style="margin: 0">View All Classes</a>
</section>