<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 masonry-container classes">
	{classes}
	<li class="item">
		<div class="row"><div class="small-11 small-centered column classes-content pd-less">
			<div class="text-center class-image"><img src="{class_image}" /></div>
			<div class="rb" style="min-height: 3em; margin-top: 0">
				<div class="rb-side"></div>
				<div class="rb-bottom-patch"></div>
				<div class="rb-top-patch"></div>
				<div class="rb-shadow"></div>
				<header class="text-center fg-white">{class_name}</header>
			</div>

			<article>
				{class_desc}
				<div data-link><a class="label" href="classes/{course_id}/{id}">Learn More</a></div>
			</article>

		</div></div>
	</li>
	{/classes}
</ul>