<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <title>Bitz Barbearia</title>
</head>
<body>
    <div class="wrapperLogin">
        <div class="boxLogin">
            <form method="post" action="../server/loginServer.php">
                <h1>Entrar</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Usuário" name="usuario" id="usuario" required/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Senha" name="senha" id="senha" required/>
                    <i class="fas fa-lock-open"></i>
                </div>
                <button id="btnLogin" type="submit">Entrar</button>
            </form>
                <div class="spinner-border text-light spinner-border-sm mr-sm-1" role="status">
        </div>
            <a href="register.php" class="cadastro">Cadastre-se</a>
        </div>
    </div>
</body>
</html>