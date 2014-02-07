<?php if(empty($classes)): ?>
	
<?php else: ?>
{classes}
<div class="row classes-view">
	<div class="medium-4 large-2 column text-center">
		<a class="th radius"><img src="{class_image}" /></a>
	</div>
	<div class="small-11 medium-8 large-10 column">
		<div class="row">
		<div class="small-10 large-6 column">
		<p class="class-name">{class_name}</p>
		<p>{class_desc}</p>
		</div></div>
	</div>
</div>
<hr>
{/classes}
<?php endif ?>