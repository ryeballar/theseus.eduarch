(function() {
	var container = document.querySelector('.masonry-container');
	var masonry = new Masonry(container, {
		itemSelector: '.item'
	});
})();

(function($) {
	
	$.fn.character_limiter = function(size) {
		this.text(this.text().trim().substring(0, size) + '... ');
		return this;
	};

})(jQuery);

(function() {
	var loading = $('#reveal-loading');
	var modal = null;

	$('[data-reveal-id]').click(function() {
		if(modal != null) {
			modal.find('form')[0].reset();
			modal.find('small').remove();
			modal.find('.close-reveal-modal').click();
			modal = null;
		} 

		loading.css('class', 'loading');
	});

	$(document).on('open', '[data-reveal]', function() {
		modal = $(this);
		modal.find('form')[0].reset();
		modal.find('small').remove();
		if(loading.hasClass('loading'))
			loading.removeClass('loading');
	});

	$(document).on('opened', '[data-reveal]', function() {
		modal.find('[name]').each(function() {
			$(this).focus();
			return false;
		});
	});

	$(document).on('closed', '[data-reveal]', function() {
		if(modal  != null) {
			modal.find('form')[0].reset();
			modal.find('small').remove();
			modal = null;
		}
	});

})();