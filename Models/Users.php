<?php 
/* Classe Genitore */

class Users {
    public $nome; // Nome Persona
    public $cognome; // Cognome Persona
    public $eta; // Età utente
    public $indirizzo; // Indirizzo utente 
    public $email; // indirizzo email
    public $payment; // pagamenti
    /* Aggiungo lo sconto */
    public $sales;
    /* Avvio nuove caratteristiche (prima in User normale) */
    public $id_user = false;

    /* Definisco un construct */
    function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment, Int $sales, Bool $id_user) {
        /* Definisco le istanze all'interno del construtto */
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
        $this->payment = $payment;
        /* Aggiunto nuove caratteristiche */
        $this->sales = $sales;
        $this->id_user = $id_user;
    }

    /* Aggiunto Method per lo sconto */
    /* Con set cambio il valore */
    public function setSales($id_user) {
        if ($id_user == true){
            $this -> sales = 0.2; // Ora con questo method lascio allo sconto un valore da 0.2
        }
    }
    /* Aggiunto Method per ricavare lo sconto */
    /* Con get lo ricavo */
    public function getSales(){
        return $this -> sales; 
    }







}


?>