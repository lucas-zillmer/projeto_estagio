<?php
    $myPDO =new PDO ("pgsql:host=dpg-cdugpjda499837gltqg0-a.oregon-postgres.render.com;dbname=barbearia","barbearia_user","nQnDCWxE9TVlAm0rEAlwwdQlm5ZQbAdR");
    $sql_query1 ="SELECT a.cliente, a.dia, a.hora, f.nome FROM agendamento a
                  INNER JOIN usuario f ON a.funcionario_id = f.id 
                  where a.dia = current_date::date";
    $agendamentos = $myPDO->query($sql_query1);
    $rows = $agendamentos->fetchAll();
   
    
    foreach ($rows as $row) {
        $hora =  $row[2];
        $cliente = $row[0];
        $funcionario = $row[3];
        if($hora == '10:00:00'){
            $clienteH1 .= $cliente;
            $funcionarioH1 .= $funcionario;
        }elseif($hora == '10:30:00'){
            $clienteH2 .= $cliente;
            $funcionarioH2 .= $funcionario;
        }elseif($hora == '11:00:00'){
            $clienteH3 .= $cliente;
            $funcionarioH3 .= $funcionario;
        }elseif($hora == '11:30:00'){
            $clienteH4 .= $cliente;
            $funcionarioH4 .= $funcionario;
        }elseif($hora == '13:30:00'){
            $clienteH5 .= $cliente;
            $funcionarioH5 .= $funcionario;
        }elseif($hora == '14:00:00'){
            $clienteH6 .= $cliente;
            $funcionarioH6 .= $funcionario;
        }elseif($hora == '14:30:00'){
            $clienteH7 .= $cliente;
            $funcionarioH7 .= $funcionario;
        }elseif($hora == '15:00:00'){
            $clienteH8 .= $cliente;
            $funcionarioH8 .= $funcionario;
        }elseif($hora == '15:30:00'){
            $clienteH9 .= $cliente;
            $funcionarioH9 .= $funcionario;
        }elseif($hora == '16:00:00'){
            $clienteH10 .= $cliente;
            $funcionarioH10 .= $funcionario;
        }elseif($hora == '16:30:00'){
            $clienteH11 .= $cliente;
            $funcionarioH11 .= $funcionario;
        }elseif($hora == '17:00:00'){
            $clienteH12 .= $cliente;
            $funcionarioH12 .= $funcionario;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Agenda</title>
</head>

<body class="wrapperLogin">
    <table class="boxHome">
        <th>Cliente</th>
        <th>Hora</th>
        <th>Funcionário</th>
        <tr>
            <td><?php echo $clienteH1; ?></td>
            <td>10:00</td>
            <td><?php echo $funcionarioH1; ?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH2; ?></td>
            <td>10:30</td>
            <td><?php echo $funcionarioH2;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH3; ?></td>
            <td>11:00</td>
            <td><?php echo $funcionarioH3;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH4; ?></td>
            <td>11:30</td>
            <td><?php echo $funcionarioH4;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH5; ?></td>
            <td>13:30</td>
            <td><?php echo $funcionarioH5;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH6; ?></td>
            <td>14:00</td>
            <td><?php echo $funcionarioH6;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH7; ?></td>
            <td>14:30</td>
            <td><?php echo $funcionarioH7;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH8; ?></td>
            <td>15:00</td>
            <td><?php echo $funcionarioH8;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH9; ?></td>
            <td>15:30</td>
            <td><?php echo $funcionarioH9; ?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH10; ?></td>
            <td>16:00</td>
            <td><?php echo $funcionarioH10;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH11; ?></td>
            <td>16:30</td>
            <td><?php echo $funcionarioH11;?></td>
        </tr>
        <tr>
            <td><?php echo $clienteH12; ?></td>
            <td>17:00</td>
            <td><?php echo $funcionarioH12;?></td>
        </tr>
    </table>
    <div>
        <table class="boxAgendamento" >
            <tr>
                <td class="tdAgenda"><button class="btnAgenda"><a href="agendamento.php"><b><em>Novo Agendamento</b></em></a></button></td>
            </tr>
            <tr>
                <td class="tdAgenda"><button class="btnAgenda"><b><em>Cancelar Agendamento</b></em></button></td>
            </tr>
            <tr>
                <td class="tdAgenda"><button class="btnAgenda"><a href="home.php" style="text-decoration: underline;padding-left: 37px;padding-right: 37px;"><b><em><- Menu   </b></em></a></button></td>
            </tr>
        </table>
</div>
</body>