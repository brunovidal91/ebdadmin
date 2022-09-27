$(document).ready(function(){
    listar_prof2();
    alt_user();
    regraCargo();

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

$('#form_cadastrar').on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: 'cadastrar.php',
        type: 'POST',
        data: {
            nome: $('#nome_cadastro').val(),
            sobrenome: $('#sobrenome_cadastro').val(),
            email: $('#email_cadastro').val(),
            senha: $('#senha_cadastro').val(),
            conf_senha: $('#conf_senha_cadastro').val(),
            cargo: $('#cargo_cadastro').val()
        },
        success: function(result){
            $('#msg_cadastrar').html(result);
 
            if(result == "<p style='color: green'>Usuário cadastrado com sucesso!</p>"){
                $('#form_cadastrar')[0].reset();
            }
            
           
        },

        error: function(result, status, error){
            $('#msg_cadastrar').html(result);
        }
    });
});


function regraCargo(){

    const cadProf = document.querySelector(".cad-prof");
    const cadUser = document.querySelector(".cad-user");
    const editProfessor = document.querySelector(".edit-prof");


    if(cargo == 'Professor'){
        editProfessor.style.display = "none";
        cadProf.style.display = "none";
        cadUser.style.display = "none";
    }

    else if(cargo == 'Secretario'){

        editProfessor.style.display = "none";
        cadUser.style.display = "none";
    }

}
