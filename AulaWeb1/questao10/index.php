<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>

<h2>10. Crie um array associativo representando uma pessoa e imprima seus valores.</h2>

<?php 

$produto = [
    'idade' => 19,
    'nome' => 'Erlano',
    'altura' => 1.69
];

echo "<p>Nome da pessoa: " . $produto['nome'] . "</p>"; 
echo "<p>Idade: " . $produto['idade'] . "</p>";
echo "<p>Altura: R$ " . $produto['altura'] . "</p>";


?>

</body>
</html>