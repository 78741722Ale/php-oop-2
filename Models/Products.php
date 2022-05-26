<?php 
/* Classe Genitore */

class Products {
    public $nome; // Nome Prodotto
    public $type; // Tipologia Prodotto
    public $desc; // Descrizione prodotto
    protected $price; // Prezzo
    public $utility; // Utilitizzo del prodotto
    /* Avvio lo sconto per utenti */
    protected $sale; // sconto

    /* Avvio un method */
    public function getSpecialPrice($price, $sale){
        return $this->price = $price; // essendo protetto $famiglia lo salvo in una funzione pubblica
        return $this->sale = $sale;
    }
    /* Avvio altro method per valutare ereditarietà */
    public function parla() {
        return "Io Parlo da Products";
    }

    /* Ora provo a collegare User (che ha l'id) con Products */
/*     public function getSales(User $id_user, Int $sale) {
        var_dump("Questo è l'id User" . $id_user);
        var_dump("Questo è lo sconto" . $sale);
        return $this->id_user = $id_user;
        return $this->sale = $sale;
    }  */

    /* Definisco un construct */
    function __construct(String $nome, String $type, String $desc, Int $price, String $utility, Int $sale ) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->type = $type;
        $this->desc = $desc;
        $this->price = $price;
        $this->utility = $utility;
        /* Aggiunto lo sconto */
        $this->sale = $sale;
    }
} 

?>