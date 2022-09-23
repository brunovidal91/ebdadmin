const popupActive_salas = document.querySelector('#popupActive_salas');
const popupSalas = document.querySelector('.popup-salas');
const winMatricularSala = document.querySelector('.win-matricular-sala');
const closeButtonMatricular = document.querySelector('.close-button-matricular');
const matricular = document.querySelector("#matricular");
const editarProf = document.querySelector("#editarProf");
const closeButtonEditProf = document.querySelector('.close-button-edit-prof');
const modalEditProf = document.querySelector('.modalEditProf');
const modalMatricular = document.querySelector('.modalMatricular');

popupActive_salas.addEventListener('click', () => {
    popupSalas.classList.toggle('active');


});

matricular.addEventListener('click', () => {
    modalMatricular.classList.toggle('active');
    popupSalas.classList.remove('active');

});

closeButtonMatricular.addEventListener('click', () => {
    modalMatricular.classList.remove('active');
    popupSalas.classList.remove('active');
});


editarProf.addEventListener('click', () => {
    modalEditProf.classList.toggle('active')
    popupSalas.classList.remove('active');

});

closeButtonEditProf.addEventListener('click', () => {
    modalEditProf.classList.remove('active')
    popupSalas.classList.remove('active');
});