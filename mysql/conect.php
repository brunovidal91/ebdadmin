<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ebdadmin';

try {
    
    $con = new PDO("mysql:dbname=$db; host=$host", "$user", "$pass");

} catch (exception $erro) {
    die("Erro de conexão com o bando de dados") .$erro;
}


?>