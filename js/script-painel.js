const popupActive = document.getElementById('popupActive');
const popup = document.getElementById('popup');
const modalpopup = document.getElementById("modalpopup");
const drop = document.getElementById('drop');





drop.addEventListener('click', ()=>{
    modalpopup.style.display = "flex";
  
    
})

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
    modalpopup.style.display="none"
    document.querySelector('body').style.overflowX = "hidden"


}

function closeModalMatricular(){
    const modalMatricular = document.getElementById('modal-matricular')
    modalMatricular.style.display = "none"


}

function openModalCadastrar(){
    const modalCadastrar = document.getElementById('modal-cadastrar')
    modalCadastrar.style.display = "flex"
    modalCadastrar.style.position= "fixed"
    modalpopup.style.display="none"
    document.querySelector('body').style.overflowX = "hidden"


}

function closeModalCadastrar(){
    const modalCadastrar = document.getElementById('modal-cadastrar')
    modalCadastrar.style.display = "none"


}



