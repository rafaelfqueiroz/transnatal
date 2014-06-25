var unread_news = [];
var notified = false;
var news_read = false;
var not_shown = false;
$(document).ready(function() {
	setTimeout(function (){
		setInterval(function() {
		$.get('/news/unread', function(data) {
				unread_news = data.news;
				notified = data.notified;
				if (unread_news.length > 0) {
					news_read = true;
					not_shown = true;
				}
		}).fail(function() {

		});
	}, 15000);
	}, 5000);
});