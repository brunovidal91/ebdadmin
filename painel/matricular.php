<?php
require_once("../mysql/conect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-matricular.css">
</head>
<body>

    <div class="form-container">

        <form action="" method="">

            <div class="container1">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">

                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome">

            </div>
               
            <div class="container2">
                
                 <label for="sala">Sala</label>
                    <select name="sala" id="sala">
                    <option value="1">Sala 1</option>
                    <option value="1">Sala 2</option>
                    <option value="1">Sala 3</option>
                    <option value="1">Sala 4</option>
                    <option value="1">Sala 5</option>
                </select>

                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento">

            </div>
                


            <input type="submit" id="btn-matricular" value="Matricular">


        </form>

    </div>

</body>
</html>