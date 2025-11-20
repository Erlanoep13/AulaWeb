<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16</title>
</head>
<body>

<h2>16. Teste operações com ++ e --.</h2>

<?php

    $contador = 8;
    $descrescente = 8;
    
    echo "<h3>Demonstração:</h3>";
    echo "Valor inicial: **$contador**<br>";
    
    echo "Pós-incremento (\$contador++): Expressão: **" . ($contador++) . "**. Valor Final: **$contador**<br>"; 
    
    echo "Pré-decremento (--\$descrescente): Expressão: **" . (--$descrescente) . "**. Valor Final: **$descrescente**<br>";

?>

</body>
</html>