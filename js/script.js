$(document).ready(function() {

    /*Ajax para Login y registro (clientes y vendedores)*/
    $('.Login-Form').submit(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var type = $(this).attr('method');
        var url = $(this).attr('action');
        var formType = $(this).attr('data-form');

        if (formType == "login") {
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function() {
                    $(".res-Login").html('');
                },
                error: function() {
                    $(".res-Login").html("Ha ocurrido un error en el sistema");
                },
                success: function(data) {
                    $(".res-Login").html(data);
                }
            });
            return false;
        }

    });

});