<?php 
/* Classe Genitore */

class Products {
    public $nome; // Nome Prodotto
    public $type; // Tipologia Prodotto
    public $desc; // Descrizione prodotto
    public $price; // Prezzo
    public $utility; // Utilitizzo del prodotto

    /* Method Goes Here */

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