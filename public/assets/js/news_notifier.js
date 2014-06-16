
$(document).ready(function(){
    setInterval(function() {
        if (news_read)
        {
            if (notified) {
                alertify.log('Você tem uma nova mensagem.');
                $.get('/news/notified');
                notified = false;
            }
        }
        var size = unread_news.length;
        if (size == 0)
            $('#qtdUnreadMessages').text('');
        else
            $('#qtdUnreadMessages').text(size);
    }, 15000);
});