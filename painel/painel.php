<?php
require_once("../mysql/conect.php");

if(@$_GET["id_sala"] == ""){
    $id_sala = "home";
}else{
    $id_sala = $_GET["id_sala"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBD-Admin - Painel Administrativo</title>
    <link rel="stylesheet" href="style-painel.css">
    <link rel="stylesheet" href="style-cad-prof.css">
    

</head>
<body>

    <header>
        <nav>
            <div class="logo">LOGO</div>
            <div class="drop">
                <a href="" id="drop">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                </a>
            </div>
            <a href="#" id="popupActive"><label><?php echo $nome_usuario_adm .' '.$sobrenome_usuario_adm; ?></label></a>
        </nav>
    </header>

    <main>
            <a href="modal-salas.php?id_sala=1" class="link-card">
                <div class="painelinfo">
                    <Label><?php echo $nome_sala1; ?></Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: <?php echo $alunos_sala1 ?></Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="modal-salas.php?id_sala=2"  class="link-card">
                <div class="painelinfo">
                    <Label><?php echo $nome_sala2; ?></Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: <?php echo $alunos_sala2 ?></Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="modal-salas.php?id_sala=3" class="link-card">
                <div class="painelinfo">
                    <Label><?php echo $nome_sala3; ?></Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: <?php echo $alunos_sala3 ?></Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="modal-salas.php?id_sala=4" class="link-card">  
                <div class="painelinfo">
                    <Label><?php echo $nome_sala4; ?></Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: <?php echo $alunos_sala4 ?></Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>

            <a href="modal-salas.php?id_sala=5" class="link-card">
                <div class="painelinfo">
                    <Label><?php echo $nome_sala5; ?></Label>
                    <Label>Data: 08/08/2022</Label>
                    <Label>Alunos Matriculados: <?php echo $alunos_sala5 ?></Label>
                    <Label>Alunos Presentes: 15</Label>
                    <Label>Biblias: 15</Label>
                    <Label>Revistas: 15</Label>
                    <Label>Oferta R$: 30,00</Label>
                </div>
            </a>
            
    </main>
    
    <div class="modalpopup" id="modalpopup">
        <div class="popup" id="popup">
            
            <div class="mat">
                <a href="#" onclick="openModalMatricular()"><img src="../img/graduated.png" width="25px"><span>Matricular</span></a>
            </div>

            <div class="cad-prof">
                <a href="#" onclick="openModalCadProf()"><img src="../img/add-user.png" width="25px"><span>Professores</span></a>
            </div>

            <div class="cad-user">
                <a href="#" onclick="openModalCadastrar()"><img src="../img/add-contact.png" width="25px"><span>Cadastrar Usuário</span></a>
            </div>

                <a href="#">Sair</a>
        </div>
    </div>

    <div class="modal-matricular" id="modal-matricular">
        <div class="win-matricular" id="win-matricular">
        
        <div class="form-container">

            <form action="matricular.php" method="POST">

                <div class="container1">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">

                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome">

                </div>
       
                <div class="container2">
        
                    <label for="sala">Sala</label>
                        <select name="sala" id="sala">
                        <option value="1"><?php echo $nome_sala1 ?></option>
                        <option value="2"><?php echo $nome_sala2 ?></option>
                        <option value="3"><?php echo $nome_sala3 ?></option>
                        <option value="4"><?php echo $nome_sala4 ?></option>
                        <option value="5"><?php echo $nome_sala5 ?></option>
                    </select>

                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento">

                </div>
        


                <input type="submit" id="btn-matricular" value="Matricular">


            </form>

        </div>

            <a href="#" onclick="closeModalMatricular()" class="close-button">X</a>
        </div>
    </div>

    <!-- ***************************************************************************************** -->

    <div class="modal-cad-prof" id="modal-cad-prof">
        <div class="win-cad-prof" id="win-cad-prof">
        
        <div class="form-container-cad-prof">

            <form action="cad-prof.php" method="POST">

                <div class="container1-cad-prof">
                    <label for="nome_prof">Nome</label>
                    <input type="text" name="nome_prof" id="nome_prof">

                    <label for="sobrenome_prof">Sobrenome</label>
                    <input type="text" name="sobrenome_prof" id="sobrenome_prof">

                </div>
       
                <div class="container2-cad-prof">
        
                    <label for="sala_prof">Sala</label>
                        <select name="sala_prof" id="sala_prof">
                        <option value="1"><?php echo $nome_sala1 ?></option>
                        <option value="2"><?php echo $nome_sala2 ?></option>
                        <option value="3"><?php echo $nome_sala3 ?></option>
                        <option value="4"><?php echo $nome_sala4 ?></option>
                        <option value="5"><?php echo $nome_sala5 ?></option>
                    </select>

                </div>
        


                <input type="submit" id="btn-cad-prof" value="Cadastrar">


            </form>

        </div>

            <a href="#" onclick="closeModalCadProf()" class="close-button">X</a>
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