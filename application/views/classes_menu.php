<input type="hidden" id="side-menu-active" value="{side-menu-active}" />

<div class="row side-menu hide-for-small" style="width: 20em; margin-top: 0"><div class="small-10 small-centered column">
<ul class="side-nav" style="padding-top: 0">
<li><a href="classes">All</a></li>
<?php foreach($side_menu as $item): ?>
<li><a href="classes/view_by_course/<?php echo $item['name'].'/'.$item['id'] ?>"><?php echo $item['name'] ?></a></li>
<?php endforeach ?>
</ul>
</div></div>