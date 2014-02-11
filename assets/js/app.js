(function($) {
	
	$.fn.character_limiter = function(size) {
		this.text(this.text().trim().substring(0, size) + '... ');
		return this;
	};

})(jQuery);