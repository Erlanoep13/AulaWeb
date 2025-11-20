<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>

<h2>12. Use strtoupper, strtolower, strlen e str_replace.</h2>

<?php 

$texto = "Aprender PHP";
echo "<p>String Original: $texto</p>";

$maiusculas = strtoupper($texto);
echo "strtoupper: $maiusculas<br>";

$minusculas = strtolower($texto);
echo "strtolower: $minusculas<br>";

$comprimento = strlen($texto);
echo "strlen (tamanho): $comprimento caracteres<br>";

$substituido = str_replace("PHP", "Linguagens", $texto);
echo "str_replace: $substituido";

?>

</body>
</html>