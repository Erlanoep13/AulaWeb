    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>

<h2>8. Defina uma constante PI e calcule a área de um círculo.</h2>

<h1>Cálculo de Área de Retângulo</h1>

    <form method="POST" action="">
        <label for="comprimento">Comprimento (L):</label><br>
        <input type="number" id="comprimento" name="comprimento" required><br><br>

        <label for="largura">Largura (W):</label><br>
        <input type="number" id="largura" name="largura" required><br><br>
        
        <input type="submit" value="Calcular Área">
    </form>

    <?php
        
        const UNIDADE = "Metros Quadrados";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $comprimento = (float)filter_input(INPUT_POST, 'comprimento', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $largura = (float)filter_input(INPUT_POST, 'largura', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $area = $comprimento * $largura;
            
            echo "<div class='resultado'>";
            echo "<h2> Resultado </h2>";
            echo "<hr>";
            
            echo "<p>Área: " . number_format($area, 2) . " " . UNIDADE . "</p>";
            echo "<p>Constante usada: **" . UNIDADE . "**</p>";
            
            echo "</div>";
        }

    ?>

</body>
</html>