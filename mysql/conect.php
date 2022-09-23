<?php

$host = 'us-cdbr-east-06.cleardb.net';
$user = 'b85b23befdfd70';
$pass = 'c848e266';
$db = 'heroku_13b189c7583d61f';

try {
    
    $con = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass");

} catch (exception $erro) {
    die("Erro de conexão com o bando de dados") .$erro;
}


//**********        VARIAVEIS DO SISTEMA        ***************

//nomes das salas

$query = $con->query("SELECT * FROM tb_salas");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$nome_sala1 = $res[0]['nome'];
$nome_sala2 = $res[1]['nome'];
$nome_sala3 = $res[2]['nome'];
$nome_sala4 = $res[3]['nome'];
$nome_sala5 = $res[4]['nome'];


$query_user = $con->query("SELECT * FROM tb_usuarios WHERE cargo = 'Administrador'");
$usr = $query_user->fetchAll(PDO::FETCH_ASSOC);

$nome_usuario_adm = $usr[0]['nome'];
$sobrenome_usuario_adm = $usr[0]['sobrenome'];

$query_qtd_alunos = $con->query("SELECT * FROM tb_alunos");
$qtd = $query_qtd_alunos->fetchAll(PDO::FETCH_ASSOC);

function alunos($sala){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'ebdadmin';

    try {
    
        $con = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass");

    } catch (exception $erro) {
        die("Erro de conexão com o bando de dados") .$erro;
    }

    $query_qtd_alunos = $con->query("SELECT * FROM tb_alunos WHERE id_sala = '$sala'");
    $qtd = $query_qtd_alunos->fetchAll(PDO::FETCH_ASSOC);

    return count($qtd);
}

$alunos_totais = count($qtd);
$alunos_sala1 = alunos(1);
$alunos_sala2 = alunos(2);
$alunos_sala3 = alunos(3);
$alunos_sala4 = alunos(4);
$alunos_sala5 = alunos(5);

?>