<?php
require_once("../mysql/conect.php");


$id_sala = $_POST['id_sala'];

$query = $con->query("SELECT * FROM tb_alunos WHERE id_sala = '$id_sala'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$qtd = count($res);

echo <<<HTML
<form>
    <div class="legenda">
    <label>Nome</label>
    <label>Nascimento</label>
    <label>Matricula</label>
    <label>Presença/Bíblia/Revista</label>
    </div>
HTML;

if($qtd > 0){
    foreach($res as $aluno){
   $id_aluno = $aluno['id_aluno'];
   $nome = $aluno['nome'];
   $sobrenome = $aluno['sobrenome'];
   $data_matricula = $aluno['data_matricula'];
   $data_nascimento = $aluno['data_nascimento'];
   $data_matrif = implode('/', array_reverse(explode('-', $data_matricula)));
   $data_nascf = implode('/', array_reverse(explode('-', $data_nascimento)));

   
echo <<<HTML

<div class="item-list">
<input type="text" class="txt_nome_sobrenome"value="{$nome} {$sobrenome}" disabled>
<input type="text" class="alt txt_data_nasc" value="{$data_nascf}" disabled>
<input type="text" class="alt txt_data_matrif" value="{$data_matrif}" disabled>
<input type="checkbox" class="cb presenca">
<input type="checkbox" class="cb biblia">
<input type="checkbox" class="cb revista">

<ul>

<li><a href="#!" title="Editar aluno" class="link-edit"><img src="../img/edit.png" width="20px"></a>
</li>

<li><span class="space"></span></li>

<li><a href="#!" title="Excluir aluno"class="link-delete"><img src="../img/delete.png" width="20px"></a>
</li>

</ul>
</div>

HTML;



    }
echo <<<HTML
</form>
HTML;

}else{
    echo 'Não há alunos matriculados nessa sala.';


}

echo <<<HTML
<script type="text/javascript">let aluno = "<?=$qtd?>"</script>
<script type="text/javascript" src="../js/script-modal-salas.js"></script>

HTML;
