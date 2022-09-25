const popupActive = document.getElementById('popupActive');
const popup = document.getElementById('popup');
const modalpopup = document.getElementById("modalpopup");
const drop = document.querySelector('.drop');
const modalEditProf = document.querySelector('.modal-edit-prof');
const editProf = document.querySelector('.edit-prof');
const modalEditUser = document.querySelector('.modal-info-user');
const btnEditUser = document.querySelector('.info-user'); 

drop.addEventListener('click', function(){
    drop.classList.toggle('active');
    modalpopup.classList.toggle('active');
    
    
});



popupActive.addEventListener('click', ()=>{
    modalpopup.style.display = "flex";
  
    
})

modalpopup.addEventListener('click', function(e){
    if(e.target == this){

       this.style.display = "none";
        this.style.position = "fixed";
        

    }
  })




function openModalMatricular(){
    const modalMatricular = document.getElementById('modal-matricular')
    modalMatricular.style.display = "flex"
    modalMatricular.style.position= "fixed"
    document.querySelector('body').style.overflowX = "hidden";



}

function closeModalMatricular(){
    const modalMatricular = document.getElementById('modal-matricular')
    modalMatricular.style.display = "none"


}


function openModalCadProf(){
    const modalCadProf = document.getElementById('modal-cad-prof')
    modalCadProf.style.display = "flex"
    modalCadProf.style.position= "fixed"
    document.querySelector('body').style.overflowX = "hidden"


}

function closeModalCadProf(){
    const modalCadProf = document.getElementById('modal-cad-prof')
    modalCadProf.style.display = "none"


}


function openModalCadastrar(){
    const modalCadastrar = document.getElementById('modal-cadastrar')
    modalCadastrar.style.display = "flex"
    modalCadastrar.style.position= "fixed"
    document.querySelector('body').style.overflowX = "hidden"


}

function closeModalCadastrar(){
    const modalCadastrar = document.getElementById('modal-cadastrar')
    modalCadastrar.style.display = "none"


}

editProf.addEventListener('click', () => {
    modalEditProf.classList.toggle('active');
    modalpopup.style.display = "none";

});

function closeModalEditProf(){
    modalEditProf.classList.remove('active');


}


btnEditUser.addEventListener('click', () => {
    modalEditUser.classList.toggle('active');
    modalpopup.style.display = "none";
});

function closeModalEditUser(){
    modalEditUser.classList.remove('active');


}

