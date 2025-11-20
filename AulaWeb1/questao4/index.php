<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>

<?php 
echo "<h2>4. Conversão de Tipos (Type Casting)</h2>";

$num = "10";

        echo "<pre>";

            var_dump($num);

            $num = (int) $num;
            var_dump($num);

            $num = (float) $num;
            var_dump($num);

            $num = (bool) $num;
            var_dump($num);

            echo "</pre>";

?>

</body>
</html>