<?php
require_once("../mysql/conect.php");


$id_sala = $_GET['id_sala'];

$query = $con->query("SELECT * FROM tb_salas WHERE id_sala = '$id_sala'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);


if($res > 0){
    $nome_sala = $res[0]['nome'];
    $professor_sala = $res[0]['id_professor'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modal-salas.css">
    <title>Salax</title>
</head>
<body>
<header>
        <nav>
        <a href="painel.php"><div class="logo">LOGO</div></a>
            <div class="drop">
                <a href="" id="drop_salas">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                </a>
            </div>
            <a href="#" id="popupActive_salas"><label><?php echo $nome_usuario_adm .' '.$sobrenome_usuario_adm ?></label></a>
        </nav>
    </header>

    <main>

        <div class="info-container">

                    <form class="info-form">

                        <?php
                        $query_alunos = $con->query("SELECT *, DATE_FORMAT(data_matricula, '%d/%m/%Y') AS data_matricula_formatada, DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS data_nascimento_formatada FROM tb_alunos WHERE id_sala = '$id_sala'");
                        $lista_alunos = $query_alunos->fetchAll(PDO::FETCH_ASSOC);
                        foreach($lista_alunos as $aluno){?>

                        
                        <div class="info-list">

                            <input type="text" value="<?php echo $aluno['nome'].' '.$aluno['sobrenome'] ?>" disabled/>
                            <input type="checkbox" class="presenca" name="presenca" onclick="presente()">
                            <input type="checkbox" class="biblia" name="biblia">
                            <input type="checkbox" class="revista" name="revista">


                        </div>
                    
                        <?php     
                            }
                         ?>
                

                    </form>


        </div>

       





    </main>

    <script type="text/javascript" src="../js/script-modal-salas.js"></script>  
</body>

</html>