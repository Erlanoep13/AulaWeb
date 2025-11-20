<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 19</title>
</head>
<body>

<h2>19. Comparações numéricas. Use operadores >, <, >=, <= e %.</h2>

<?php
    
        $pontos = 100;
        $limite = 100;
        $resto_div = 17;
        $divisor = 3;

        echo "<h3>Operadores de Comparação:</h3>";
        echo "<pre>";

            echo "\$pontos ($pontos) e \$limite ($limite)\n\n";

            echo "\$pontos > \$limite: "; var_dump($pontos > $limite); 
            echo "\$pontos < \$limite: "; var_dump($pontos < $limite); 

            echo "\$pontos >= \$limite: "; var_dump($pontos >= $limite); 
            echo "\$pontos <= \$limite: "; var_dump($pontos <= $limite); 

            echo "\n\$resto_div % \$divisor (17 % 3):\n";
            var_dump($resto_div % $divisor); 
        
        echo "</pre>";

?>

</body>
</html>