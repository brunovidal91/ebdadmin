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
                <a href="" id="drop">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                </a>
            </div>
            <a href="/" id="popupActive"><label><?php echo $nome_usuario_adm .' '.$sobrenome_usuario_adm ?></label></a>
        </nav>
    </header>

    <main>

       
                <table>

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data de Matrícula</th>
                            <th>Data de Aniversário</th>
                        </tr>

                    </thead>
                
                   
                    <tbody>

                    <?php
                        $query_alunos = $con->query("SELECT * FROM tb_alunos WHERE id_sala = '$id_sala'");
                        $lista_alunos = $query_alunos->fetchAll(PDO::FETCH_ASSOC);
                        foreach($lista_alunos as $aluno){?>
                    

                            <tr>
                                <td><?php echo $aluno['nome'].' '.$aluno['sobrenome'] ?></td>
                                <td><?php echo $aluno['data_matricula'] ?></td>
                                <td><?php echo $aluno['data_nascimento'] ?></td>
                            </tr>
                            
                            <?php     
                        }
                    ?>
                        </tbody>

                    </table>




    </main>

  
</body>

</html>