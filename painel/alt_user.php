<?php
require_once("../mysql/conect.php");
require_once("./protect.php");



if(isset($_SESSION['id'])){

    $id = $_SESSION['id'];

    $query = $con->query("SELECT * FROM tb_usuarios WHERE id_usuario = '$id'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    @session_start();

    $_SESSION['email'] = $res[0]['email'];
    $_SESSION['senha'] = $res[0]['senha'];
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['sobrenome'] = $res[0]['sobrenome'];
    $_SESSION['id'] = $res[0]['id_usuario'];
    $_SESSION['cargo'] = $res[0]['cargo'];

    echo $_SESSION['nome'] .' '.$_SESSION['sobrenome'] .' '.'<br><small><small>'. $_SESSION['cargo'] .'</small></small>' ;

}
