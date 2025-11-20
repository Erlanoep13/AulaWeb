<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14</title>
</head>
<body>

<h2>14. Crie uma função com variável estática e chame várias vezes.</h2>

<?php

    function gerar_id() {
        
        static $last_id = 1000; 
        $last_id++;
        echo "Novo ID Gerado: **$last_id**" . "<br>";
    }
   
    echo "Chamada 1:" . "<br>";
    gerar_id(); 
    
    echo "Chamada 2:" . "<br>";
    gerar_id(); 
    
    echo "Chamada 3:" . "<br>";
    gerar_id(); 
?>

</body>
</html>