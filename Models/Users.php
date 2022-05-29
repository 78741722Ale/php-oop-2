<?php 
/* Classe Genitore */

class Users {



    /* Definisco un construct */
    function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
        $this->payment = $payment;
    }
}

/* Avvio l'istanza per verificare il costrutto */
var_dump("Questo è il var dump di Users");
$istanza_users = new Users('Alessandro', 'Pecorilla', 27, 'Via di Qua', )



?>