<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>

<h2>7. Monte expressões com &&, || e ! utilizando variáveis booleanas.</h2>

<?php
    
        $chove = false;
        $frio = true;

            echo "Condição: \$chove é FALSE e \$frio é TRUE\n\n";

            echo "(\$chove && \$frio) - AND: ";
            var_dump($chove && $frio); 

            echo "(\$chove || \$frio) - OR: ";
            var_dump($chove || $frio); 

            echo "!\$chove - NOT: ";
            var_dump(!$chove); 

            echo "!\$frio - NOT: ";
            var_dump(!$frio); 
        
        echo "</pre>";

?>

</body>
</html>