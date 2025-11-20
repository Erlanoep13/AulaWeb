<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Mostre a diferença de saída entre echo com aspas simples e duplas.</h2>

<?php
    
    $cor = "verde";

    echo "Com aspas duplas, a cor é: **$cor**.";
    echo "<br>";

    echo 'Com aspas simples, a cor é: **$cor**.';
    echo "</p>";

?>

</body>
</html>