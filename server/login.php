<?php
    $user = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $hashpassword = md5($_POST['password']);

    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql ="SELECT * FROM usuario WHERE nome LIKE '".pg_escape_string($_POST['usuario'])."' and senha LIKE '".$hashpassword."'";
    $data =  $myPDO->query($sql_query1);
    // if($data){ 
    //     session_start();
    //     $_SESSION["http://localhost/projeto_estagio/client/home.php?"]=$value;
    // }else{   
    //     echo '<script type="text/javascript">toastr.error("Usuário ou Senha incorretos")</script>';
    // }

    if(pg_num_rows ($data) > 0){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $hashpassword;
        header('location:home.php');
        }
        else{
        unset ($_SESSION['username']);
        unset ($_SESSION['password']);
        //header('location:login.php');
        echo '<script type="text/javascript">toastr.error("Usuário ou Senha incorretos")</script>';
    }
?>