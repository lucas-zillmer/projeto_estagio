<?php
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql_query1 ="SELECT a.id, a.cliente, a.dia, a.hora, f.nome FROM agendamento a
                  INNER JOIN usuario f ON a.funcionario_id = f.id ";
    $agendamentos = $myPDO->query($sql_query1);
    $rows = $agendamentos->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Relatório</title>
</head>

<body class="wrapperLogin">
    <table class="boxRel">
        <tr>    
            <th>Atendimentos</th>
            <th>Clientes</th>
            <th>Funcionários</th>
        </tr>
        <?php
        foreach ($rows as $row) {
            $id = $row[0];
            $cliente = $row[1];
            $funcionario = $row[4];
            echo '<tr>
            <td> '. $id .' </td>
            <td> '. $cliente .' </td>
            <td> '. $funcionario .' </td>
            </tr>';
        }
        ?>
    </table>
    <div>
        <table class="boxAgendamento" >
            <tr>
                <td class="tdAgenda"><button class="btnAgenda"><a href="home.php" style="text-decoration: underline;padding-left: 37px;padding-right: 37px;"><b><em><- Menu   </b></em></a></button></td>
            </tr>
        </table>
    </div>
</div>
</body>