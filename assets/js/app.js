(function($) {
	
	$.fn.character_limiter = function(size) {
		this.text(this.text().trim().substring(0, size) + '... ');
		return this;
	};

})(jQuery);

(function() {

$('.side-bar .fi-list').click(function() {
	var sidebar = $('.side-bar');
	var has_slide_show = sidebar.hasClass('slide-show');
	var has_slide_hide = sidebar.hasClass('slide-hide');

	if(!has_slide_show && !has_slide_hide || has_slide_show) {
		sidebar.removeClass('slide-show');
		sidebar.addClass('slide-hide');
	} else {
		sidebar.removeClass('slide-hide');
		sidebar.addClass('slide-show');
	}
});

})();

