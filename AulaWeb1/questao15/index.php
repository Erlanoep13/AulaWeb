<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15</title>
</head>
<body>

<h2>15. Crie uma classe Carro e um objeto dessa classe.</h2>

<?php

    class Livro {
        public $titulo;
        public $paginas;
        
        public function __construct($t, $p) {
            $this->titulo = $t;
            $this->paginas = $p;
        }

        public function info() {
            return "O livro **" . $this->titulo . "** tem **" . $this->paginas . "** páginas.<br>";
        }
    }

    $livro_favorito = new Livro("A Revolução dos Bichos", 152);
    
    echo $livro_favorito->info();

    echo "<p>Estrutura do Objeto (var_dump):</p>";
    echo "<pre>";
    var_dump($livro_favorito);
    echo "</pre>";

?>

</body>
</html>