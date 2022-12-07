<?php
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $agendamento = filter_input(INPUT_POST, "agendamento", FILTER_SANITIZE_STRING);
    $sql_query1 ="DELETE FROM agendamento a WHERE a.id = ". $agendamento;
    $myPDO->query($sql_query1);
    header('location:../client/agenda.php');
?>