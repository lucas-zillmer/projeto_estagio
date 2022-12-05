<?php
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");

    $sql_query1 ="SELECT a.id, a.cliente, a.dia, a.hora FROM agendamento a
                INNER JOIN usuario f ON a.funcionario_id = f.id
                where a.dia >= current_date::date";
    $horarios = $myPDO->query($sql_query1);
    $rows = $horarios->fetchAll();
    foreach($rows as $row) {
        $options .= '<option value="'. $row[0] .'">'. $row[1] .' | '. $row[3] .'</option>';
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
            <form method="post">
                
                <h1>Cancelar Agendamento</h1>
                <div class="passwordLogin">
                    <select type="text" placeholder="Funcionário" id="agendamento" name="agendamento" required>
                        <option value="-1">Escolha um horário</option>
                        <?php 
                            echo $options;
                        ?>
                    </select>
                    <i class="fas fa-lock-open"></i>
                </div>
                <button id="btnLogin" type="submit">Cancelar</button>
            </form>
        <div>
            <a href="agenda.php" class="agenda">Voltar para Agenda</a>
        </div>
    </div>
</body>
</html>

<?php
    $agendamento = filter_input(INPUT_POST, "agendamento", FILTER_SANITIZE_STRING);
    try{
        $sql_query1 ="DELETE FROM agendamento a WHERE a.id = ". $agendamento;
        $myPDO->query($sql_query1);

    }catch(PDOException $e){
        echo '<script type="text/javascript">toastr.error("'.$e->getMessage().'")</script>';
    }   

?>