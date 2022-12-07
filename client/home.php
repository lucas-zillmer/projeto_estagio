<?php
    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
        header('location:../client/login.php');
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Bitz Home</title>
</head>

<body>
    <div class="wrapperHome">
        <div class="boxHome">
            <a class="logout" href="login.php" style="margin-left: 400px;">Sair</a>
            <p style="margin: 0; color: white; font-size: 20px; font-weight: bolder;">Bem vindo <?php echo $logado ?></p>
            <form class="formHome">
                <h1 class="menu">O que você precisa?</h1>
                <button class="btnAgendamento" header="agenda.php"><a href="agenda.php">Agenda</a></button>
                <button class="btnRelatorio"><a href="relatorio.php">Relatório</a></button>
            </form>
        </div> 
    </div>
</body>