<?php if($page_message): ?>

<div data-alert class="alert-box <?php echo $page_message['type'] ?> page-message">
	<?php echo $page_message['content'] ?>
	<a class="close">&times;</a>
</div>

<?php endif ?>