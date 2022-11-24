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
            <form method="post">
                
                <h1>Cadastrar-se</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Usuário" id="regUser" name="regUser"/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Senha" id="regPass" name="regPass"/>
                    <i class="fas fa-lock-open"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Confirmar Senha" id="passConf" name="passConf"/>
                    <i class="fas fa-lock-open"></i>
                    <p><?= $errorMsg ?></p>
                </div>
                <button id="btnLogin" type="submit">Cadastrar</button>
            </form>
    </div>
</body>
</html>


<?php
    $user = filter_input(INPUT_POST, "regUser", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "regPass", FILTER_SANITIZE_STRING);
    $confirmation = filter_input(INPUT_POST, "passConf", FILTER_SANITIZE_STRING);

    try{
        $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
        
        if($password != $confirmation){
            throw new PDOException("Senhas não conferem");
        }

        $sql_query1 ="INSERT INTO usuario(nome, senha)VALUES('".$user."', '".md5($password)."')";
        $myPDO->query($sql_query1);

    }catch(PDOException $e){
        echo '<script type="text/javascript">toastr.error("'.$e->getMessage().'")</script>';;
    }


?>