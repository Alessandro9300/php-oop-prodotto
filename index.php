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

        function sconto($sconto){

          $scontato = $this -> prezzo - (($this -> prezzo * $sconto) / 100);

          echo "Il prodotto " . $this -> nome . " scontato costa " . $scontato . " euro";
        }

        function printMe(){
          echo "Il prodotto è: " . $this -> nome . ", appartiene alla tipologia " . $this -> tipologia . " costa " . $this -> prezzo . " euro al pezzo e pesa " . $this -> peso . " grammi al pezzo.";
        }

      }

      $objPrimo = new Prodotto1("lasagne", "alimentare", 3, 500);
      $objSecondo = new Prodotto1("olio motore", "fai-da-te", 20, 10000);
      $objPrimo -> printMe();
      echo "<br>";
      $objPrimo -> sconto(50);
      echo "<br>";
      $objSecondo -> printMe();
      echo "<br>";
      $objSecondo -> sconto(20);



     ?>

  </body>
</html>
