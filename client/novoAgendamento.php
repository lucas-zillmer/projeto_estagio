<?php
    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
        header('location:../client/login.php');
    }
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql_query1 ="SELECT id, nome FROM usuario";
    $funcionarios = $myPDO->query($sql_query1);
    $rows = $funcionarios->fetchAll();
    foreach($rows as $row) {
        $options .= '<option value="'. $row[0] .'">'. $row[1] .'</option>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Agendamento</title>
</head>

<body>
    <div class="wrapperLogin">
        <div class="boxLogin">
            <form method="post" action="../server/novoAgendamentoServer.php">
                
                <h1>Agendar</h1>
                <div class="usernameLogin">
                    <input type="text" placeholder="Cliente" id="cliente" name="cliente" required/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="date" id="data" name="data"/>
                    <input type="time" min="10:00" max="17:00" id="hora" name="hora" required/>
                    <i class="fas fa-lock-open"></i>
                </div>
                <div class="passwordLogin">
                    <select type="text" placeholder="Funcionário" id="funcionario" name="funcionario" required>
                        <option value="-1">Escolha um funcionário</option>
                        <?php 
                            echo $options;
                        ?>
                    </select>
                    <i class="fas fa-lock-open"></i>
                </div>
                <button id="btnLogin" type="submit">Agendar</button>
            </form>
        <div>
            <a href="agenda.php" class="agenda">Voltar para Agenda</a>
        </div>
    </div>
</body>
</html>
