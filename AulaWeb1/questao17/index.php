<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
</head>
<body>

<h2>17. Converta uma variável booleana para int, string e float.</h2>

<?php

    $status_sucesso = true;
    $status_falha = false;

    echo "<h3>Conversão de TRUE:</h3>";
    echo "Para (int): **" . (int)$status_sucesso . "**<br>";
    echo "Para (string): '**" . (string)$status_sucesso . "**' (representa '1')<br>";
    echo "Para (float): **" . (float)$status_sucesso . "**<br>";
    
    echo "<h3>Conversão de FALSE:</h3>";
    echo "Para (int): **" . (int)$status_falha . "**<br>";
    echo "Para (string): '**" . (string)$status_falha . "**' (string vazia)<br>";
    echo "Para (float): **" . (float)$status_falha . "**<br>";
    
?>

</body>
</html>