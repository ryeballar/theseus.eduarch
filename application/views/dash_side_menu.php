<input type="hidden" id="side-menu-active" value="{side-menu-active}" />
<div class="dash-side-menu side-menu radius hide-for-small" style="padding-top: 1.5em">
	<div class="profile text-center hide-for-small">
	{user}
		<a class="th radius"><img src="{image}" /></a><br>
		<h5 class="font-PatuaOne-Regular fg-gray">{last_name}, {first_name}</h5>
	{/user}
	</div>
	<div class="medium-10 medium-centered column"><div>
		<ul class="side-nav">
			<?php foreach($dashboard_side_menu as $item) echo $item?>
		</ul>
	</div></div>
</div>