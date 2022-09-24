$(document).ready(function(){
    listar_prof2();
});

function listar_prof2(){

    $.ajax({
        url: 'modal-editar-prof.php',
        success: function(result){
            $('.win-edit-prof').html(result);
        }
    });
}

