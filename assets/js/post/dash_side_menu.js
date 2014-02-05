(function() {
	var active = $('#side-menu-active').val().trim();
	$('.dash-side-menu ul.side-nav li a').each(function() {
		var a = $(this);
		if(a.text().trim() == active) {
			a.parent().attr("class", "active");
			console.log('activated', a.text());
		}
	});
})();
