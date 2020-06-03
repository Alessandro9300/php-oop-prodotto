<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      class Prodotto1 {

        public $nome;
        public $tipologia;
        public $prezzo;
        public $peso;

        function __construct($nome, $tipologia, $prezzo, $peso){
          $this -> nome = $nome;
          $this -> tipologia = $tipologia;
          $this -> prezzo = $prezzo;
          $this -> peso = $peso;
        }

        function printMe(){
          echo "Il prodotto è: " . $this -> nome . ", appartiene alla tipologia " . $this -> tipologia . " costa " . $this -> prezzo . " euro al pezzo e pesa " . $this -> peso . " grammi al pezzo.";
        }

      }

      $objPrimo = new Prodotto1("Coca cola", "alimentare", 3, 500);

      $objPrimo -> printMe();


     ?>

  </body>
</html>
