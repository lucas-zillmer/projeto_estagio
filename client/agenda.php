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
            <td><?$clienteH1?></td>
            <td>10:00</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH2?></td>
            <td>10:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH3?></td>
            <td>11:00</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH4?></td>
            <td>11:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH5?></td>
            <td>13:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH6?></td>
            <td>14:00</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH7?></td>
            <td>14:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH8?></td>
            <td>15:00</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH9?></td>
            <td>15:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH10?></td>
            <td>16:00</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH11?></td>
            <td>16:30</td>
            <td><?$funcionario?></td>
        </tr>
        <tr>
            <td><?$clienteH12?></td>
            <td>17:00</td>
            <td><?$funcionario?></td>
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
                <td class="tdAgenda"><button class="btnAgenda"><b><em>Novo Funcionário</b></em></button></td>
            </tr>
            <tr>
                <td class="tdAgenda"><button class="btnAgenda"><a href="home.php" style="text-decoration: underline;padding-left: 37px;padding-right: 37px;"><b><em><- Menu   </b></em></a></button></td>
            </tr>
        </table>
</div>
</body>