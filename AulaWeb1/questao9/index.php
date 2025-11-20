<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>

<h2>9. Crie um array com nomes e imprima posições específicas.</h2>

<?php

    $semanas = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];
 
    echo "Array completo:\n";
    print_r($semanas);

    echo "Dia da semana (Índice 0): **" . $semanas[0] . "**\n";
    echo "Dia da semana (Índice 4): **" . $semanas[4] . "**\n";

    echo "</pre>";

?>

</body>
</html>