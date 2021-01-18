<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-magazzino</title>
</head>
<body>

<!-- Definire la classe Magazzino e la classe Prodotto nel seguente modo:
Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori.
Prodotto: definire gli attributi per nome, peso e prezzo
Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti -->

    <?php
    
    class Magazzino {
        public $nome;
        public $location;
        public $prodotti = [];

        public function __construct($nome, $location) {
            $this -> nome = $nome;
            $this -> location = $location;
          }
        
        public function __toString() {
        return 'nome: ' . $this -> nome . '<br>' 
            . 'location: ' . $this -> location . '<br>'
            . 'prodotti: ' . $this -> prodotti;
        }
   }
   
    class Prodotto {
        public $nome;
	    public $peso;
	    public $prezzo; 

        public function __construct($nome, $prezzo) {
        $this -> nome = $nome;
        $this -> prezzo = $prezzo;
       }

       public function __toString() {
       return 'nome: ' . $this -> nome . '<br>' 
            . 'prezzo: ' . $this -> prezzo;
        }
    }
    
        $magazzino = new Magazzino("AmazonStock", "Milano");
        $magazzino2 = new Magazzino("EbayStock", "Roma");
        $magazzino3 = new Magazzino("UniEuroStock", "Trieste");
        $prodotto = new Prodotto("Pc", "800");
        $prodotto2 = new Prodotto("Smartphone Huawei", "250");
        $prodotto3 = new Prodotto("Libro: La cucina italiana", "30");

        // var_dump($magazzino);
        // var_dump($magazzino2);
        // var_dump($magazzino3);
        // var_dump($prodotto);
        // var_dump($prodotto2);
        // var_dump($prodotto3);
    
    class FashionProduct extends Prodotto {

        public $taglia;
	    public $tessuto;
	    public $colore; 

        public function __construct($nome, $prezzo, $taglia, $tessuto, $colore) {
       
       parent::__construct($nome, $prezzo);
        $this -> taglia = $taglia;
        $this -> tessuto = $tessuto;
        $this -> colore = $colore;
       }

       public function __toString() {
       return parent::__toString() . '<br>'
            . 'taglia: ' . $this -> taglia . '<br>'
            . 'tessuto: ' . $this -> tessuto . '<br>'
            . 'colore: ' . $this -> colore . '<br>';
        }
    }

    $prodotto4 = new FashionProduct("Abito da sera", "300", "M", "Seta", "Blue");
    
    echo $prodotto . '<br><br>'
        . $prodotto2 . '<br><br>'
        . $prodotto3 . '<br><br>'
         . $prodotto4;
    ?>
    
</body>
</html>