<?php
require_once("mysql/conect.php");

$email = $_POST['email'];
$senha = $_POST['pass'];

$query = $con->prepare("SELECT * FROM tb_usuarios WHERE email=:email AND senha=:senha");
$query->bindValue(':email', $email);
$query->bindValue(':senha', $senha);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($res) > 0){
    @session_start();
    $_SESSION['email'] = $res[0]['email'];
    $_SESSION['senha'] = $res[0]['senha'];
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['sobrenome'] = $res[0]['sobrenome'];
    $_SESSION['id'] = $res[0]['id_usuario'];
    $_SESSION['cargo'] = $res[0]['cargo'];

    // echo "<p style='color: green'>Bem Vindo!</p>";

    

    header("location: painel");

}else if(strlen($email) == 0 || strlen($senha) == 0){
    header("location: index.php");
    // echo "<p style='color: red'>Todos os campos devem ser preenchidos</p>";

}else{
    header("location: index.php");
    // echo "<p style='color: red'>Usuário Inválido</p>";
    exit();
}