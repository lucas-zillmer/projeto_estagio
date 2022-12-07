<?php
    $user = filter_input(INPUT_POST, "regUser", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "regPass", FILTER_SANITIZE_STRING);
    $confirmation = filter_input(INPUT_POST, "passConf", FILTER_SANITIZE_STRING);
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql_query1 ="INSERT INTO usuario(nome, senha)VALUES('".$user."', '".md5($password)."')";
    $myPDO->query($sql_query1);
    header('location:../client/login.php');
?>