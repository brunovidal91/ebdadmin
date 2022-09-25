$(document).ready(function(){
    listar_prof2();
    alt_user();
});

function listar_prof2(){

    $.ajax({
        url: 'modal-editar-prof.php',
        success: function(result){
            $('.win-edit-prof').html(result);
        }
    });
}

$("#edit_user").on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: 'edit_user.php',
        type: 'POST',
        data: {
            id: $('#id_edit_user').val(),
            nome: $('#nome_edit_user').val(),
            sobrenome: $('#sobrenome_edit_user').val(),
            email: $('#email_edit_user').val(),
            senha: $('#senha_edit_user').val(),
            conf_senha: $('#confirm_senha_edit_user').val()
        },
        success: function(result){
            $('.msg-edit').html(result);
            alt_user();
        },

        erro: function(result){
            $('.msg-edit').html(result);
        }
    });
});

function alt_user(){
    $.ajax({
        url: 'alt_user.php',
        success: function(result){
            $('#nm_user').html(result);
        }
    });
}