
<?php
    $cliente = filter_input(INPUT_POST, "cliente", FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING);
    $hora = filter_input(INPUT_POST, "hora", FILTER_SANITIZE_STRING);
    $funcionarioID = filter_input(INPUT_POST, "funcionario", FILTER_SANITIZE_STRING);
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql_query1 ="INSERT INTO agendamento(cliente, dia, hora, funcionario_id)VALUES('".$cliente."', '".$data."', '".$hora."', '".$funcionarioID."')";
    $myPDO->query($sql_query1);
    header('location:../client/agenda.php');
?>