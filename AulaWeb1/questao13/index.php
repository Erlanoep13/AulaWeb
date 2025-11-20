<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>

<h2>13. Demonstre a diferença entre variáveis globais e locais.</h2>

<?php 

$global_msg = "Eu existo fora da função."; 

function testarEscopo() {
    $local_msg = "Eu existo apenas aqui."; 
    
    // Acessando a variável global usando $GLOBALS
    $global_acessada = $GLOBALS['global_msg'];
    
    echo "<p>Dentro da Função:</p>";
    echo "Local: $local_msg<br>";
    echo "Global (acessada via \$GLOBALS): $global_acessada";
}   

testarEscopo();

echo "<p>Fora da Função:</p>";
echo "Global: $global_msg<br>";


?>

</body>
</html>