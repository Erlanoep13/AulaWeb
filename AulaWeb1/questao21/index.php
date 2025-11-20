<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 21</title>
</head>
<body>

<h2>21. Formulário HTML.</h2>

    <h1>Agenda Estudantil</h1>
    <form action="" method="POST">
        Nome: <input type="text" name="nome_aluno"> <br><br>
        Compromisso: <input type="text" name="compromisso"> <br><br>
        Data: <input type="date" name="data_agenda"> <br><br>
        <input type="submit" value="Salvar na Agenda">
    </form>

<?php

    if($_POST) {
        echo "<hr>";
        echo "<h3>Dados de Agenda Recebidos:</h3>";
        echo "<p>Aluno: <strong>" . htmlspecialchars($_POST['nome_aluno']) . "</strong></p>";
        echo "<p>Compromisso: <strong>" . htmlspecialchars($_POST['compromisso']) . "</strong></p>";
        echo "<p>Data: <strong>" . htmlspecialchars($_POST['data_agenda']) . "</strong></p>";

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>

</body>
</html>