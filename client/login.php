<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Bitz Barbearia</title>
</head>

<body>
    <div class="wrapperLogin">
        <div class="boxLogin">
            <form method="post">
                <h1>Entrar</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Usuário" id="username"/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Senha" id="password"/>
                    <i class="fas fa-lock-open"></i>
                </div>
            </form>
            <button id="btnLogin" type="submit">Entrar</button>
                <div class="spinner-border text-light spinner-border-sm mr-sm-1" role="status">
        </div>
            <a href="register.php" class="cadastro">Cadastre-se</a>
        </div>
    </div>
</body>
</html>

<?php
    $user = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $dbconn = pg_connect($myPDO);
    
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        $dbconn = pg_connect($myPDO);
        $hashpassword = md5($_POST['password']);
        $sql ="SELECT * FROM usuario WHERE nome = '".pg_escape_string($_POST['usuario'])."' and password ='".$hashpassword."'";
        $data = pg_query($dbconn,$sql); 
        $login_check = pg_num_rows($data);
        if($login_check > 0){ 
            
            echo "Logado com sucesso!";    
        }else{
            
            echo "Usuário ou Senha incorretos";
        }
    }
    
?>