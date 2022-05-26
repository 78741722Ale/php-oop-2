<?php 
/* Classe Genitore */

class Products {
    public $nome; // Nome Prodotto
    public $type; // Tipologia Prodotto
    public $desc; // Descrizione prodotto
    protected $price; // Prezzo
    public $utility; // Utilitizzo del prodotto

    /* Avvio un method */
    public function getSpecie($price){
        return $this->price = $price; // essendo protetto $famiglia lo salvo in una funzione pubblica
    }
    /* Avvio altro method per valutare ereditarietà */
    public function parla() {
        return "Io Parlo da Products";
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

?>