$('.close').click(function() {
	setTimeout(function() {
		$('.dash-side-menu').css('top', '60px');
		$('.dash-content-container').css('top', '-48px');
	}, 500);
});