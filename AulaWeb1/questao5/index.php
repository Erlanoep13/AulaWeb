<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>

<h2>5. Receba dois números e calcule soma, subtração, multiplicação, divisão e módulo.</h2>

<h1>Calculadora Simples</h1>

    <form method="POST" action="">
        <label for="val1">Valor A:</label><br>
        <input type="number" id="val1" name="val1" step="any" required><br><br>
        
        <label for="val2">Valor B:</label><br>
        <input type="number" id="val2" name="val2" step="any" required><br><br>
        
        <input type="submit" value="Calcular Operações">
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $a = (float)filter_input(INPUT_POST, 'val1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $b = (float)filter_input(INPUT_POST, 'val2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            echo "<div class='resultado'>";
            echo "<h2> Resultados A: $a, B: $b </h2>";
            echo "<hr>";
            
            echo "<p><strong>Adição (+): </strong> " . ($a + $b) . "</p>";
            echo "<p><strong>Subtração (-): </strong> " . ($a - $b) . "</p>";
            echo "<p><strong>Multiplicação (*): </strong> " . ($a * $b) . "</p>";
            echo "<p><strong>Divisão (/): </strong> " . ($a / $b) . "</p>";
            echo "<p><strong>Módulo (%): </strong> " . ($a % $b) . "</p>"; 
            
            echo "</div>";
        }

    ?>

</body>
</html>