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
            <form method="post">
                
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
                    <?$options?>
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
<?php
    $cliente = filter_input(INPUT_POST, "cliente", FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING);
    $hora = filter_input(INPUT_POST, "hora", FILTER_SANITIZE_STRING);
    $funcionarioID = filter_input(INPUT_POST, "funcionario", FILTER_SANITIZE_STRING);
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");

    if($cliente){
        try{

            $sql_query1 ="INSERT INTO agendamentos(cliente, dia, hora, funcionario)VALUES('".$cliente."', '".$data."', '".$hora."', '".$funcionarioID."')";
            $myPDO->query($sql_query1);

        }catch(PDOException $e){
            echo '<script type="text/javascript">toastr.error("'.$e->getMessage().'")</script>';
        }
    }else{
        $sql_query1 ="SELECT id, nome FROM usuario";
        $myPDO->query($sql_query1);
        $funcionarios = $myPDO;
        // $myPDO->execute();
        // $funcionarios = $myPDO->fetchAll();
        $options = '';
        
        foreach ($funcionarios as $funcionario) {
            $options .= '<option value='. $funcionario->id .'><'.$funcionario->nome .'></option>';
        }
        echo $funcionarios;
    }
?>