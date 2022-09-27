<?php
require_once("../mysql/conect.php");
require_once("protect.php");


$id_sala = $_GET['id_sala'];

$query = $con->query("SELECT * FROM tb_salas WHERE id_sala = '$id_sala'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);


if($res > 0){
    $nome_sala = $res[0]['nome'];
    $professor_sala = $res[0]['id_professor'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modal-salas.css">
    <style rel="stylesheet" href="../css/style-edit-alunos.css"></style>

    <title>Salax</title>
</head>
<body>
    <header>
        <nav>
        <div class="logo"><a href="index.php">LOGO</a></div>
            <div class="name-sala"><Label><?php echo $nome_sala ?></Label></div>
            <a href="#" id="popupActive_salas" class="popupActive_salas"><label><?php echo $_SESSION['nome'] .' '.$_SESSION['sobrenome'] ?></label></a>
        
            <div class="popup-salas">
                <p id="matricular"><img src="../img/graduated.png" width="25"> Matricular</p>
                <!--<p id="editarProf"><img src="../img/teacher.png" width="25"> Editar Professor</p> -->
                <p><a href="index.php">Voltar</a></p>
                
            </div>
        </nav>
    </header>


    <main>
        <div class="container-prof">
            <label>Professores</label>
            <div class="info-prof"></div>
        </div>

        
        <div class="content-lista-alunos"></div>



    </main>

   
    <div class="modalMatricular">
        <div class="win-matricular-sala">
            <div class="form-container-sala">

                <form id="formMat" action="#!" method="POST">

                    <div class="container1-sala">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">

                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome">

                    </div>

                    <div class="container2-sala">

                        <label for="sala">Sala</label>
                            <input type="text" value="<?php echo $nome_sala ?>"  disabled >

                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" id="data_nascimento">

                    </div>



                    <input type="submit" id="btn-matricular-sala" value="Matricular">


                </form>

            </div>

            <a href="#" onclick="" class="close-button-matricular">X</a>
        </div>
    </div>
        
        
        <div class="modalEditProf">

            <div class="win-edit-prof">

                <form>
                    <div class="lbl-prof-list">
                        <label>Nome</label>
                        <label>Sobrenome</label>
                    </div>
                <?php
                    $queryPro = $con->query("SELECT * FROM tb_professores WHERE id_sala = '$id_sala'");
                    $resPro = $queryPro->fetchAll(PDO::FETCH_ASSOC);
                    foreach($resPro as $professor){ ?>
                    <div class="prof-list">
                    <input type="text" id="nomeProf" value="<?php echo $professor['nome'] ?>">
                    <input type="text" id="sobrenomeProf" value="<?php echo $professor['sobrenome'] ?>">
                    <input type="hidden" id="idProf" value="<?php echo $professor['id_professor'] ?>">
                    </div>
                <?php      
                    }
                ?>      
                    <input type="text" value="<?php echo $nome_sala ?>" disabled>
                    <input type="submit" value="Editar">
                </form>
                <a href="#" onclick="" class="close-button-edit-prof">X</a>
                </div>

        </div>
        

       
    <script src="http://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript"> let sala = "<?=$id_sala?>" </script>
    <script type="text/javascript" src="../js/ajax.js"></script>
    <script type="text/javascript" src="../js/script-modal-salas.js"></script>

</body>

</html>