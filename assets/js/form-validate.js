(function() {

var form = $('[data-validate]');
var arr_error = ['<small class="error">', null, '</small>'];

var erase = function(e) {$(e.srcElement).parent().find('.error').remove();};

form.change(erase);
form.keydown(erase);

form.submit(function(e) {
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


(function() {

var modals = $('[data-reveal][data-form]');
var forms = modals.find('form');

var erase = function(e) {$(e.srcElement).parent().find('.error').remove();};
forms.change(erase);
forms.keydown(erase);

forms.submit(function(e) {
	var form = $(this);
	var action = form.attr('action');
	var method = form.attr('method');
	var input = form.find('[name]');
	var msg = form.find('.message');

	form.find('.error').remove();

	if(!msg.hasClass('hide'))
		msg.addClass('hide');

	$.ajax({
		dataType: 'json',
		type: method,
		url: action,
		data: form.serialize(),
		success: function(data) {
			if(data['success']) {
				msg.removeClass('hide');
				form.removeAttr('data-invalid');
			} else {
				var errors = data['errors'];
				var focus = false;

				form.attr('data-invalid', '');

				input.each(function() {
					var field = $(this);
					var name = field.attr('name');
					if(typeof(errors[name]) != 'undefined') {
						field.after('<small class="error">' + errors[name] + '</small>');
						if(focus == false) {
							focus = true;
							field.focus();
						}
					}
				});
			}
		}
	});

	e.preventDefault();
});

$(document).on('open', '[data-reveal]', function() {
	var modal = $(this);

	if(modal.data('form')) {
		var request = modal.data('form');
		var form = modal.find('form');
		var input = modal.find('[name]');
		var msg = form.find('.message');

		if(!msg.hasClass('hide'))
			msg.addClass('hide');

		form.find('.error').remove();

		$.ajax({
			dataType: 'json',
			url: request,
			success: function(data) {
				if(data['success']) {
					var values = data['data'];
					var array = data['array'];

					for(var index in values) {
						var name = array + '[' + index + ']';
						form.find('[name="' + name + '"]').val(values[index]);
					}

					input.each(function() {
						var field = $(this);
						if(!field.is('[readonly]')) {
							field.focus();
							return false;
						}
					});

				} else {
					window.location.replace(data['redirect']);
				}
			}
		});
	}
});

$(document).on('close', '[data-reveal]', function() {
	var modal = $(this);

	if(modal.data('form')) {
		var form = modal.find('form');
		form[0].reset();
	}
});

})();

(function() {

	var input_image = $('.input-image');
	var button = input_image.find('button');
	var input = input_image.find('input');
	var target_id = input_image.data('target');
	var elem = $('#' + target_id);
	var exts = input_image.data('ext');
	var section = input_image.find('section');
	var img_allowed = ['png', 'gif', 'jpg', 'jpeg'];

	button.click(function(e) {
		input.click();
	})

	input.change(function(e) {
		if (this.files && this.files[0]) {
            var reader = new FileReader();
            var file = $(this);
            reader.onload = function (e) {
            	var result = e.target.result;
            	var path = file.val();
            	var crumbs = path.split('\\');
            	var filename = crumbs[crumbs.length-1];
            	var file_split = filename.split('.');
            	var ext_file = file_split[1];

            	var found = false;
            	if(exts == '*') {
            		for(var index in img_allowed) {
            			if(ext_file == img_allowed[index]) {
            				found = true;
            				break;
            			}
            		}
            	} else {
            		var split_exts = exts.split('|');
            		for(var split_index in split_exts) {
            			for(var allowed_index in img_allowed) {
            				if(split_exts[split_index] == img_allowed[allowed_index]) {
            					found = true;
            					break;
            				}
            			}
            			if(found) break;
            		}
            	}

            	if(found) {
	            	elem.attr('src', result);
	            	section.text(filename);
	            }
            };
            reader.readAsDataURL(this.files[0]);
        }
	})	
})();

