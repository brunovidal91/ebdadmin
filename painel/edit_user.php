<?php
require_once("../mysql/conect.php");
require_once("./protect.php");

function msgPositive($msg){
    $estilo = "<p style='color: green'>$msg</p>";
    return $estilo;
}

function msgNegative($msg){
    $estilo = "<p style='color: red'>$msg</p>";
    return $estilo;
}


$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$query = $con->query("SELECT * FROM tb_usuarios WHERE email = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(strlen($conf_senha) == 0){
    echo msgNegative("Favor confirmar a senha!");
}

else if($senha != $conf_senha){

    echo msgNegative("As senhas devem ser iguais!");
}


else if(count($res) > 0 AND $res[0]['id_usuario'] != $id){
    echo msgNegative("Email já cadastrado, favor inserir outro.");
}

else{

    $query_up = $con->prepare("UPDATE tb_usuarios SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha");
    $query_up->bindValue(":nome", $nome);
    $query_up->bindValue(":sobrenome", $sobrenome);
    $query_up->bindValue(":email", $email);
    $query_up->bindValue(":senha", $senha);
    $query_up->execute();

    echo msgPositive("Dados alterados com sucesso!");
}
    