<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>

<h2>6. Comparações entre valores. Use ==, ===, !=, !== entre 10 e "10".</h2>

<?php
    
        $valor_int = 50;
        $valor_string = "50";

            echo "== (Igual Valor): "; var_dump($valor_int == $valor_string); 
            echo "=== (Identidade - Valor e Tipo): "; var_dump($valor_int === $valor_string); 
            echo "!= (Diferente Valor): "; var_dump($valor_int != $valor_string); 
            echo "!== (Diferente Identidade): "; var_dump($valor_int !== $valor_string); 
        
        echo "</pre>";

?>

</body>
</html>