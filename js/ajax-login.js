
$("#form-l").on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: 'autenticar.php',
        type: "POST",
        data: {
            email: $('#email').val(),
            senha: $('#pass').val()
        },
        success: function(result){
            $('.result').html(result)
        },

        error: function(){
            $('.result').html('Solicitação não enviada')
        }
    });
})