<?php
require_once("../mysql/conect.php");
require_once("protect.php");

//$id = $_SESSION['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$cargo = $_POST['cargo'];

$query_email = $con->prepare("SELECT * FROM tb_usuarios WHERE email=:email");
$query_email->bindValue(":email", $email);
$query_email->execute();
$res = $query_email->fetchAll(PDO::FETCH_ASSOC);


function msgPositive($msg){
    $estilo = "<p style='color: green'>$msg</p>";
    return $estilo;
}

function msgNegative($msg){
    $estilo = "<p style='color: red'>$msg</p>";
    return $estilo;
}



if(strlen($nome) == 0 || strlen($email) == 0 || strlen($senha) == 0){

    echo msgNegative('Existem campos obrigatórios não preenchidos');
    
}

else if(count($res) > 0){
    echo msgNegative('Email já existente no banco de dados');
}

else if($senha != $conf_senha){
    echo msgNegative('As senhas não conferem');
}



else{
    
    $query = $con->prepare("INSERT INTO tb_usuarios SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha, cargo=:cargo");
    $query->bindValue(':nome', $nome);
    $query->bindValue(':sobrenome', $sobrenome);
    $query->bindValue(':email', $email);
    $query->bindValue(':senha', $senha);
    $query->bindValue(':cargo', $cargo);
    $query->execute();


    echo msgPositive('Usuário cadastrado com sucesso!');
}



