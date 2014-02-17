/*
id, email, password
last_name, first_name, gender
image, title, created_on
updated_on, country_id, user_type_id
status_id
*/

(function($) {
	
	$.fn.character_limiter = function(size) {
		this.text(this.text().trim().substring(0, size) + '... ');
		return this;
	};

})(jQuery);

(function() {
	var win = $(window);
	var link = $('.back-to-top');
	var html_body = $('html,body');

	link.click(function() {
		html_body.animate({scrollTop: 0}, 50);
	});

	var back_to_top = function(e) {
		var top = win.scrollTop();
		if(top == 0) {
			link.animate({opacity: 0}, 200);
		} else if(link.css('opacity') == 0) {
			link.animate({opacity: 0.90}, 200);
		} else {
			e.preventDefault();
			e.stopPropagation();
			return false;
		}
	};

	win.scroll(function(e) {
		back_to_top(e);
	});
})();