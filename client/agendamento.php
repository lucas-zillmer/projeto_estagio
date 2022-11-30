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
                    <input type="text" placeholder="Cliente" id="cliente" name="cliente"/>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="passwordLogin">
                    <input type="date" id="data" name="data"/>
                    <input type="time" id="hora" name="hora"/>
                    <i class="fas fa-lock-open"></i>
                </div>
                <div class="passwordLogin">
                    <select type="text" placeholder="Funcionário" id="funcionario" name="funcionario">
                    <option></option>
                    <option><?$funcionario1?></option>
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