<?php
require_once("../mysql/conect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBD-Admin - Painel Administrativo</title>
    <link rel="stylesheet" href="style-painel.css">

</head>
<body>

    <header>
        <nav>
            <div class="logo">LOGO</div>
            <a href="#" id="popupActive"><label>Nome Sobrenome</label></a>
        </nav>
    </header>

    <main>
            <a href="#" class="link-card">
                <div class="painelinfo">
                    <Label>Nome da Sala</Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: 20</Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="#" class="link-card">
                <div class="painelinfo">
                    <Label>Nome da Sala2</Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: 20</Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="#" class="link-card">
                <div class="painelinfo">
                    <Label>Nome da Sala3</Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: 20</Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="#" class="link-card">  
                <div class="painelinfo">
                    <Label id="nomeSala">Nome da Sala</Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: 20</Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="#" class="link-card">
                <div class="painelinfo">
                    <Label>Nome da Sala</Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: 20</Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>
            
    </main>
    
    <div class="modalpopup" id="modalpopup">
        <div class="popup" id="popup">
            <a href="#" onclick="openModalMatricular()">Matricular</a>
            <a href="#" onclick="openModalCadastrar()">Cadastrar Usuário</a>
            <a href="#">Sair</a>
        </div>
    </div>

    <div class="modal-matricular" id="modal-matricular">
        <div class="win-matricular" id="win-matricular">
            <?php require_once("matricular.php") ?>
            <a href="#" onclick="closeModalMatricular()" class="close-button">X</a>
        </div>
    </div>

    <div class="modal-cadastrar" id="modal-cadastrar">
        <div class="win-cadastrar" id="win-cadastrar">
            <?php require_once("cadastrar.php") ?>
            <a href="#" onclick="closeModalCadastrar()" class="close-button2">X</a>
        </div>
    </div>



</body>
<script type="text/javascript" src="../js/script-painel.js"></script>
</html>