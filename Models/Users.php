<?php 
/* Classe Genitore */

class Users {
    public $nome; // Nome Persona
    public $cognome; // Cognome Persona
    public $eta; // Età utente
    public $indirizzo; // Indirizzo utente 
    public $email; // indirizzo email
    public $payment; // pagamenti

    /* Method Goes Here */

    /* Definisco un construct */
    function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->cognome = $type;
        $this->eta = $desc;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
        $this->payment = $payment;
    }
}


?>