<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Crie uma variável $nome e imprima uma frase com interpolação e outra com concatenação.</h2>


<?php 

    
    $cidade = "Fortaleza";
    $clima = "ensolarado";

    echo "O tempo em **$cidade** hoje está **$clima** (Interpolação).";
    echo "<br>";
    
    echo "O tempo em **" . $cidade . "** hoje está **" . $clima . "** (Concatenação)."; 
    echo "</p>";

?>

</body>
</html>