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
<?php
session_start();
if (!empty($_POST)){
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];
    $host = "dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com";
    $port = "5432";
    $dbname = "barbearia";
    $dbuser = "barbearia_user";
    $dbpassword = "nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR";
    $hashpassword = md5($senha);
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpassword}";
    $dbconn = pg_connect($connection_string) or die ("Sem conexão com o servidor");
    $sql = "SELECT * FROM usuario WHERE nome = '{$login}' AND senha = '{$hashpassword}'";
    $result = pg_query($dbconn, $sql);
    $rows = pg_fetch_row($result);
    if($rows > 0 ){
        $_SESSION['username'] = $login;
        $_SESSION['password'] = $senha;
        header('location:home.php');
        die();
    }else{
        echo 'else';
    }
}
?>
<body>
    <div class="wrapperLogin">
        <div class="boxLogin">
            <form method="post" action="login.php">
                <h1>Entrar</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Usuário" name="usuario" id="usuario"/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="password" placeholder="Senha" name="senha" id="senha"/>
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