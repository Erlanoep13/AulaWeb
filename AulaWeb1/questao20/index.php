<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 20</title>
</head>
<body>

<h2>20. Monte uma frase usando interpolação com nome, e-mail e idade.</h2>

<?php

    $usuario = "Maria Oliveira";
    $telefone = "(85) 98765-4321";
    $endereco = "Rua Principal, 45";

    echo "<h3>Cadastro Concluído:</h3>";
    echo "<p>O cadastro de **$usuario** foi concluído. Detalhes de contato: **$telefone**, Endereço: **$endereco**.</p>";

?>

</body>
</html>