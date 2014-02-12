(function() {

var arr_error = ['<small class="error">', null, '</small>'];

$('[data-validate]').submit(function(e) {
	var form = $(this);
	$.ajax({
		dataType: 'json',
		type: form.attr('method'),
		url: form.attr('action'),
		data: form.serialize(),
		success: function(data) {
			if(data['success'])
				window.location.replace(data['redirect']);
			else {
				form.find('.error').remove();
				var errors = data['errors'];
				var inputs = form.find('[name]');
				var focus = false;

				inputs.each(function() {
					var input = $(this);
					var name = input.attr('name');
					var error = errors[name];
					if(typeof(error) != 'undefined') {
						arr_error[1] = error;
						input.after(arr_error.join(''));
						if(focus == false) {
							input.focus();
							focus = true;
						}
					}
				});
			}
		}
	});

	e.preventDefault();
});

})();