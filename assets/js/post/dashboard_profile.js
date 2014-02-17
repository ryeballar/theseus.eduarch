$('#edit-info form').submit(function(e) {
	var form = $(this);
	if(!form.attr('invalid')) {
		$('#lbl-firstname').text($('#firstname').val());
		$('#lbl-lastname').text($('#lastname').val());
	}
});