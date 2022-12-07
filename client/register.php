<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <title>Registrar-se</title>
</head>

<body>
    <div class="wrapperLogin">
        <div class="boxLogin">
            <form method="post" action="../server/registerServer.php">
                <h1>Cadastrar-se</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Usuário" id="regUser" name="regUser" required/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Senha" id="regPass" name="regPass" required/>
                    <i class="fas fa-lock-open"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Confirmar Senha" id="passConf" name="passConf" required/>
                    <i class="fas fa-lock-open"></i>
                    <p><?= $errorMsg ?></p>
                </div>
                <button id="btnLogin" type="submit">Cadastrar</button>
            </form>
        <div>
            <a href="login.php" class="login">Voltar para Login</a>
        </div>
    </div>
</body>
</html>
<?php
    if($password != $confirmation){
        throw new PDOException("Senhas não conferem");
    }
?>