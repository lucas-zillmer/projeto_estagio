<?php
if($_SERVER['REQUEST_METHOD'] == '$_POST'){
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
            header('location:./client/home.php');
            die();
        }else{
            echo 'else';
        }
    }
}
?>