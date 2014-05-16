$('.deleterequest').each(function() {
    var button = $(this);

    button.click(function(event) {
        event.preventDefault();
        alertify.confirm("Você realmente deseja realizar esta exclusão?", function(e){
            if (e) {
                $.post(button.attr('href'), {
                _method: 'DELETE'
                }, function(data) {
                    window.location.reload(true);
                });
            }
            return false;
        });
    });
});