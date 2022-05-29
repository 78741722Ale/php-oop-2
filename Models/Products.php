<?php 

class Products {
    public $nome; // Nome Prodotto
    public $type; // Tipologia Prodotto
    public $desc; // Descrizione prodotto
    public $price; // Prezzo
    public $utility; // Utilitizzo del prodotto

    /* Avvio un method */
    public function getSpecialPrice($price, $sale){
        return $this->price = $price; // essendo protetto $famiglia lo salvo in una funzione pubblica
        return $this->sale = $sale;
    }
    /* Avvio altro method per valutare ereditarietà */
    public function parla() {
        return "Io Parlo da Products";
    }
    /* Avvio altro method per recuperare il prezzo e spostarlo in User */
    public function recupero(User $sales, User $id_user) {
        $this->sales = $sales;
        $this->id_user = $id_user;
    }


    /* Definisco un construct */
    function __construct(String $nome, String $type, String $desc, Int $price, String $utility) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->type = $type;
        $this->desc = $desc;
        $this->price = $price;
        $this->utility = $utility;
    }
} 
/* Avvio verifiche delle istanze */
$istanza_products = new Products("Pallina", "Oggetto Inanimato", "Oggetto inanimato senza utilizzo", 100, "Non ha utilizzo");
var_dump("Questo è il var dump dell'istanza presente solo in products");
var_dump($istanza_products);
/* Ora provo a verificare la funzione recupero */
var_dump($istanza_products->recupero(0.2, 555));





?>