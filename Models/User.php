<?php 

class User extends Users {
/* Avvio nuove caratteristiche */
    public $id_user;

        /* Qui method della classe genitore */
        public function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment, Int $id_user ) {
        parent::__construct($nome, $cognome, $eta, $indirizzo, $email, $payment); // Nel figlio NON ci può essere string
        $this->id_user = $id_user; // Questa è l'istanza di una variabile presente
    }    
}

?>