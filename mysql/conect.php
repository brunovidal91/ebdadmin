<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$db = substr($url['path'], 1);
$host = $url['host'];
$user = $url['user'];
$pass = $url['pass'];

$active_group = 'default';
$query_builder = TRUE;


date_default_timezone_set('America/Sao_Paulo');

try {
    
    $con = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);

} catch (exception $erro) {
    die("Erro de conexão com o banco de dados") .$erro;
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




$query_qtd_alunos = $con->query("SELECT * FROM tb_alunos");
$qtd = $query_qtd_alunos->fetchAll(PDO::FETCH_ASSOC);

function alunos($sala){
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $db = substr($url['path'], 1);
    $host = $url['host'];
    $user = $url['user'];
    $pass = $url['pass'];

    try {
    
        $con = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass");

    } catch (exception $erro) {
        die("Erro de conexão com o banco de dados") .$erro;
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