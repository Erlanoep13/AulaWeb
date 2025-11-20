<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 18</title>
</head>
<body>

<h2>18. Teste diferentes variáveis com essas funções. isset() e empty().</h2>

<?php

    $v_nulo = null;
    $v_texto = "Conteúdo";
    $v_vazio = "";
    $v_false = false;
    
    echo "<h3>Análise de Variáveis:</h3>" . "<br>";
    
    function analisar($nome, $valor) {
        $esta_definida = isset($valor) ? "TRUE" : "FALSE";
        $esta_vazia = empty($valor) ? "TRUE" : "FALSE";
        
        echo "Variável \$$nome: isset() = **$esta_definida**, empty() = **$esta_vazia**<br>";
    }
    
    analisar("v_nulo", $v_nulo);
    analisar("v_texto", $v_texto);
    analisar("v_vazio", $v_vazio);
    analisar("v_false", $v_false);
    
    echo "Variável \$nao_existe: isset() = **FALSE**, empty() = **TRUE** (simulado)<br>";
?>

</body>
</html>