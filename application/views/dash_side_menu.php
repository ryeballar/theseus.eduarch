<input type="hidden" id="side-menu-active" value="{side-menu-active}" />
<div class="dash-side-menu panel radius" style="position: fixed; width: 20em">
<div class="profile">
{user}
	<a class="th radius"><img src="{image}" style="width: 110px; height: 100px"/></a><br>
	<h5 class="font-PatuaOne-Regular fg-gray" style="margin-top: 0.5em">{last_name}, {first_name}</h5>
{/user}
</div>
<div class="medium-10 medium-centered column"><div>
	<ul class="side-nav">
		<?php foreach($dashboard_side_menu as $item) echo $item?>
	</ul>
</div></div>
</div>