
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container-login">
        <div class="img">LOGO</div>
        <div class="form-login">
            <form id="form-l" method="POST" action="autenticar.php">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="pass" id="pass" placeholder="Senha">
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
    <div class="result">Teste</div>
    <script src="http://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- <script src="js/ajax.js"></script> -->
</body>
</html>