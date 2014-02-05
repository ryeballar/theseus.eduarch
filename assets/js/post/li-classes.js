(function() {

$('.classes article').each(function() {
	var article = $(this);
	var html = article.find('[data-link]').html();
	article.character_limiter(220).append(html);
});

})();