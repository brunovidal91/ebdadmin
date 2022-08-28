<?php
require_once("../mysql/conect.php");

$nome_prof = $_POST['nome_prof'];
$sobrenome_prof = $_POST['sobrenome_prof'];
$sala_prof = $_POST['sala_prof'];

try{

    $query = $con->prepare("INSERT INTO tb_professores SET nome = :nome, sobrenome = :sobrenome, id_sala = '$sala_prof'");
    $query->bindValue(':nome', $nome_prof);
    $query->bindValue(':sobrenome', $sobrenome_prof);
    $query->execute();
    header("location: painel.php");
}catch(exception $e){
    die("Erro no banco de dados!" .$e);
}

