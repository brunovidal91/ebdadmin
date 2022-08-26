const cb_biblia = document.querySelector(".biblia");
const cb_revista = document.querySelector(".revista");
const cb_presenca = document.querySelector(".presenca");



function presente(){
    if(cb_presenca.checked){
        cb_biblia.checked = true;
        cb_revista.checked = true;


    }else{
        cb_biblia.checked = false;
        cb_revista.checked = false;
    }
}