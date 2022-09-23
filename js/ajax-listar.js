$(document).ready(function(){
    listar_prof();
});

function listar_prof(){

    $.ajax({
        url: 'modal-editar-prof.php',
        success: function(result){
            $('.win-edit-prof').html(result);
        }
    });
}

