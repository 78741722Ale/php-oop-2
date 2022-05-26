<?php 

class User extends Users {
    /* Nuove caratteristiche */
    public $username; // il nome dell'utente --> dovrebbe essere restricted
    public $password; // la password dell'utente --> dovrebbe essere restricted

    /* Qui il costrutto della classe User */
    public function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment, Int $sales, Bool $id_user, String $username, String $password ) {
    parent::__construct($nome, $cognome, $eta, $indirizzo, $email, $payment, $sales, $id_user); // Nel figlio NON ci può essere string
        $this->username = $username; // Questa è l'istanza per l'username
        $this->password = $password; // Questa è l'istanza per l'username
    }   
    /* Avvio stesso methods */
    public function parla() {
        return "Io Parlo da User";
    }

    /* Avvio method */
    public function setIdUser(){
        $this -> id_user = true;
    }
    /* Avvio method per  */
    public function getIdUser(){
        return $this -> id_user;
    }
}

?>