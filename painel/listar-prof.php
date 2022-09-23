<?php
require_once("../mysql/conect.php");

$id_sala = $_POST['id_sala'];

$query = $con->query("SELECT * FROM tb_professores WHERE id_sala = '$id_sala'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

If(count($res) > 0){

foreach($res as $professor){

echo <<<HTML

<label>{$professor['nome']} {$professor['sobrenome']}<br></label>

HTML;

}

}

else{

    echo 'Essa sala não possui professor em registro.';
}


