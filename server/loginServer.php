<?php
session_start();
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];
    $hashpassword = md5($senha);
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");

    $sql_query1 ="SELECT * FROM usuario WHERE nome = '$login' and senha = '$hashpassword'";
    $row = $myPDO->query($sql_query1);
    $rows = $row->fetchAll();
    if($rows > 0 ){
        $_SESSION['usuario'] = $login;
        $_SESSION['senha'] = $hashpassword;
        header('location:../client/home.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location:../client/login.php');
    }
?>