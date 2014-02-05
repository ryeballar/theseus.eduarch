(function() {

var small_error = ['<small class="error">', null, '</small>'];

$('[data-action]').each(function() {
	var form = $(this);
	var input = form.find('[name]');
	var button = form.find('button');
	var link = form.data('action');

	var ajax_input = input.filter('[data-ajax]');

	ajax_input.blur(function(e) {
		var field = $(this);
		$.ajax({
			dataType: 'json',
			type: 'post',
			url: link,
			data: form.serialize(),
			success: function(data) {
				var error = data['errors'];
				field.parent().find('small').remove();
				if(typeof error != 'undefined') {
					var msg = error[field.attr('name')];
					if(typeof msg != 'undefined') {
						small_error[1] = msg;
						field.parent().append(small_error.join(''));
					}
				}
			}
		});
	});

	ajax_input.on('input', function() {
		var small = $(this).parent().find('small');
		if(small.length > 0)
			small.remove();
	});

	form.submit(function(e) {
		$('#reveal-loading').css('class', 'loading');
		$.ajax({
			dataType: 'json',
			type: 'post',
			url: link,
			data: form.serialize(),
			success: function(data) {
				$('#reveal-loading').removeClass('loading');
				if(data['success'])
					window.location.replace(data['redirect']);
				else {
					var error = data['errors'];
					var focused = false;
					input.each(function() {
						var field = $(this);
						var parent = field.parent();
						var name = field.attr('name');
						parent.find('small').remove();
						if(typeof error[name] != 'undefined') {
							small_error[1] = error[name];
							parent.append(small_error.join(''));
							if(!focused) {
	 							focused = true; 
								field.focus();
							}
						}
					});
				}
			}
		});

		e.preventDefault();
		return false;
	});
});

})();