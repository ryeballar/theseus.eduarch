(function() {

	var link_holder = $('.traverse-links');
	var links = link_holder.find('a');
	var perform_before_slide = true;


	$("[data-orbit]").on("before-slide-change.fndtn.orbit", function(event) {
		if(perform_before_slide == false) {
			perform_before_slide = true;
			return;
		}

		var next = (links.filter('.current').index() + links.length + 1)  % links.length;
		links.removeClass('current');
		$(links.get(next)).addClass('current');
	});

	var trav_links = $('.traverse-links a');

	trav_links.click(function() {
		perform_before_slide = false;
		links.removeClass('current');
		$(this).addClass('current');
	});

})();

/*

0 + 4 % 3 = 1
1 + 4 % 3 = 2
2 + 4 $ 3 = 0

 */