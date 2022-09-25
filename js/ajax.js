$(document).ready(function(){
    
    listar();
    listar_prof();
    

});


function listar_prof(){
    $.ajax({
        url: 'listar-prof.php',
        type: 'POST',
        data:{id_sala: sala},
        success: function(result){
            $('.info-prof').html(result);
        }
    });
}


$('#formMat').on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: 'matricular.php',
        type: 'POST',
        data: {
            sala: sala,
            nome: $('#nome').val(),
            sobrenome: $('#sobrenome').val(),
            data_nascimento: $('#data_nascimento').val()
        },

        success: function(){
            $('#formMat')[0].reset() 
            listar()
        },
    });

});


function listar(){

    $.ajax({
        url: 'listar-alunos.php',
        type: 'POST',
        data:{id_sala: sala},
        success: function(result){
            $(".content-lista-alunos").html(result);
            
        },
        
    });

}


// $("#form-l").on('submit', function(e){
//     e.preventDefault();

//     $.ajax({
//         url: 'autenticar.php',
//         type: "POST",
//         data: {
//             email: $('#email').val(),
//             senha: $('#pass').val()
//         },
//         success: function(result){
//             $('.result').html(result)
//         },

//         error: function(){
//             $('.result').html('Solicitação não enviada')
//         }
//     });
// })






