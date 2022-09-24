<?php
require_once("../mysql/conect.php");
require_once("index.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sala = $_POST['sala'];
$data_nascimento = $_POST['data_nascimento'];


try{

    $query = $con->prepare("INSERT INTO tb_alunos SET nome = :nome, sobrenome = :sobrenome, id_sala = '$sala', data_nascimento = '$data_nascimento'");
    $query->bindValue(":nome", "$nome");
    $query->bindValue(":sobrenome", "$sobrenome");
    $query->execute();

    echo"<script>window.location.href='painel/index.php'</script>";


}catch(exception $e){
    die("Não foi possivel fazer a gravação no banco de dados." .$e);
}

?>
