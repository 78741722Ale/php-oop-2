<?php 


class Products {
    /* Trait nella classe products */
    use userTrait;
    public $nome; // Nome Prodotto
    public $type; // Tipologia Prodotto
    public $desc; // Descrizione prodotto
    public $utility; // Utilitizzo del prodotto

    /* Avvio altro method per valutare ereditarietà */
    public function parla() {
        return "Io Parlo da Products";
    }
    /* Definisco un construct */
    function __construct(String $nome, String $type, String $desc, String $utility) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->type = $type;
        $this->desc = $desc;
        $this->utility = $utility;
    }
} 
/* Avvio verifiche delle istanze */
$istanza_products = new Products("Pallina", "Oggetto Inanimato", "Oggetto inanimato senza utilizzo", "Non ha utilizzo");
var_dump("Questo è il var dump dell'istanza presente solo in products");
var_dump($istanza_products);
var_dump($istanza_products->setSaySomething("Questo è un trait presente solo in Products.php"));
var_dump("Il prezzo scontato equivale a : " . $istanza_products->setSales(100, 500, 0.2));


?>