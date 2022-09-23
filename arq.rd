 <main>
        
        <div class="info-container">

            <div class="info-classe">
                <label>Sala: <span><?php echo $nome_sala?></span></label>
                <a href=""><img src="../img/edit.png" width="25px"></a>
            </div>    

            <?php
                    $query_prof = $con->query("SELECT * FROM tb_professores WHERE id_sala = '$id_sala'");
                    $res_prof = $query_prof->fetchAll(PDO::FETCH_ASSOC);
                    foreach($res_prof as $prof){?>
                    
            <div class="professor">
                <label>Professor: <span> <?php echo $prof['nome']." ". $prof['sobrenome'] ?> </span> </label>
                <a href="#" id="link-edit-professor" ><img src="../img/edit.png" width="25px"></a>
                <a href="#"><img src="../img/delete.png" width="25px"></a>
            </div>
        
        <?php } ?>

                <form class="info-form">

                    <?php
                    $query_alunos = $con->query("SELECT *, DATE_FORMAT(data_matricula, '%d/%m/%Y') AS data_matricula_formatada, DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS data_nascimento_formatada FROM tb_alunos WHERE id_sala = '$id_sala'");
                    $lista_alunos = $query_alunos->fetchAll(PDO::FETCH_ASSOC);
                    foreach($lista_alunos as $aluno){?>

                    
                    <div class="info-list">

                        <input type="text" class="nome_sobrenome_aluno"value="<?php echo $aluno['nome'].' '.$aluno['sobrenome'] ?>" disabled/>
                        <input type="checkbox" class="presenca" name="presenca" onclick="presente()">
                        <input type="checkbox" class="biblia" name="biblia">
                        <input type="checkbox" class="revista" name="revista">
                        <input type="hidden" name="id_aluno" value="<?php echo $aluno['id_aluno'] ?>">

                        <a href="" class="link-edit"><img src="../img/edit.png" width="25px"></a>
                        <a href=""><img src="../img/delete.png" width="25px"></a>


                    </div>
                
                    <?php     
                        }
                        ?>
            

                </form>


        </div>


    </main>

    <div class="modal-edit-prof">
        <div class="win-edit-prof">
            <div class="form-container-edit-prof">

                <form>

                    <div class="container1-edit-prof">
                        <label for="nome_prof">Nome</label>
                        <input type="text" name="nome_prof" id="nome_prof" value="<?php echo $prof['nome']?>">

                        <label for="sobrenome_prof">Sobrenome</label>
                        <input type="text" name="sobrenome_prof" id="sobrenome_prof" value="<?php echo $prof['sobrenome']?>">

                    </div>

                    <div class="container2-edit-prof">

                        <label for="sala_prof">Sala</label>
                            <select name="sala_prof" id="sala_prof">
                            <option value="<?php echo $id_sala?>"><?php echo $nome_sala?></option>
                            <option value="1"><?php echo $nome_sala1 ?></option>
                            <option value="2"><?php echo $nome_sala2 ?></option>
                            <option value="3"><?php echo $nome_sala3 ?></option>
                            <option value="4"><?php echo $nome_sala4 ?></option>
                            <option value="5"><?php echo $nome_sala5 ?></option>
                        </select>

                    </div>

                    <input type="hidden" id="id_professor" value="<?php echo $professor_sala ?>">

                    <input type="submit" id="btn-edit-prof" value="Editar">
                    <div class="msg"></div>

                </form>

            </div>
            <a href="#!" class="close-button">X</a>
        </div>
    </div>



