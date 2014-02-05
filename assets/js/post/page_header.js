(function() {

var active = $('#topbar-active').val().trim();
var a_col = $('.top-bar .left li a, .top-bar .right li a');

a_col.each(function() {
	var a = $(this);

	if(a.text().trim() == active)
		a.parent().attr("class", "active");

	a.click(function() {
		a.parent().attr("class", "active");
	});


});

$(document).on('closed', '[data-reveal]', function() {
	a_col.parent().removeClass("active");		
});

})();