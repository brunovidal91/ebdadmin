<?php
require_once("../mysql/conect.php");

$query = $con->query("SELECT tb_professores.id_professor AS idprof, tb_professores.id_sala AS id_sala, tb_professores.nome AS nome, tb_professores.sobrenome AS sobrenome, tb_salas.nome AS sn FROM tb_professores JOIN tb_salas ON tb_professores.id_sala = tb_salas.id_sala");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

echo <<<HTML
<form id="editProf" action="edit-prof.php">
<div class="item-sala">
<input type="text" value="Nome" disabled>
<input type="text" value="Sala" disabled>
<input type="text" value="Excluir" disabled>
</div>
<div class="container-prof">
HTML;

foreach($res as $professor){


echo <<<HTML
<div class="item-prof" method="POST">
<input type="text" value="{$professor['nome']} {$professor['sobrenome']}" id="nomeProf" disabled>
<input type="hidden" value="{$professor['idprof']}" id="idProf">

<select id="salaProf" name="idprof">
    <option value="{$professor['id_sala']}">{$professor['sn']}</option>
    <option value="1">{$nome_sala1}</option>
    <option value="2">{$nome_sala2}</option>
    <option value="3">{$nome_sala3}</option>
    <option value="4">{$nome_sala4}</option>
    <option value="5">{$nome_sala5}</option>
</select>
<a href="#"><img src="../img/edit.png" width="25"></a>
<a href="#"><img src="../img/delete.png" width="25"></a>

</div>
HTML;



}
echo <<<HTML
</div>
</form>
<p class="msg"></p>
<a href="#" onclick="closeModalEditProf()" class="close-button">X</a>
HTML;