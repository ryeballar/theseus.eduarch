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

(function() {
	var active = $('#side-menu-active').val().trim();
	$('.side-menu ul.side-nav li a').each(function() {
		var a = $(this);
		if(a.text().trim() == active) {
			a.parent().attr("class", "active");
		}
	});

	$('.header-side-menu-link').click(function() {
		var i = $(this).find('i');
		var menu = $('.side-menu');
		
		if(menu.hasClass('opacity-01') == false) {
			menu.removeClass('opacity-10');
			menu.addClass('opacity-01');
			menu.removeClass('hide-for-small');
			i.css('color', '#cc7755');
			menu.css('z-index', 1000);
		} else {
			menu.removeClass('opacity-01');
			menu.addClass('opacity-10');
			setTimeout(function() {
				i.css('color', '#fff');
				menu.css('z-index', 0);
				menu.addClass('hide-for-small');
			}, 1000);
			
		}
	});
})();
