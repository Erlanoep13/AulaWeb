    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>

<h2>11. Crie um array com alunos e notas e imprima uma nota específica.</h2>

<?php 

$dados = [
    "markin" => ["n1" => 6, "n2" => 7],
    "ivan" => ["n1" => 9, "n2" => 10]
];

$pontos_user1 = $dados["markin"]['n2'];

echo "<p>Nota do markin: $pontos_user1</p>"



?>

</body>
</html>