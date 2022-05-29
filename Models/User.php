<?php 

class User {
    public $nome; // Nome Persona
    public $cognome; // Cognome Persona
    public $eta; // Età utente
    public $indirizzo; // Indirizzo utente 
    public $email; // indirizzo email
    public $payment; // pagamenti
    public $price; // QUESTA NON ANDREBBE QUA
    public $sales; // sconto se registrato
    public $id_user; // id user, nella condizione set/get
    protected $username; // il nome dell'utente --> dovrebbe essere protected
    protected $password; // la password dell'utente --> dovrebbe essere restricted

    /* Qui il costrutto della classe User */
    public function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment, float $price, float $sales, Int $id_user, String $username, String $password ) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
        $this->payment = $payment;
        $this->price = $price; // QUESTA NON ANDREBBE QUA
        $this->sales = $sales;
        $this->id_user = $id_user;
        $this->username = $username; 
        $this->password = $password;
    }   
    /* Avvio methods per verificare collegamento */
    public function parla() {
        return "Io Parlo da User";
    }
    /* Method per recuperare l'id e lo sconto */
    public function recupero(User $sales, User $id_user) {
        $this->sales = $sales;
        $this->id_user = $id_user;
    }



    /* Funzione Pubblica per ricavare lo sconto in base all'utente */
    /* Dovrei spostarla in products dato che di la c'è il prezzo */
    public function setSales($price, $id_user, $sales) {
        if($this->id_user == 0) 
        {   /* Se l'id utente è uguale a 0 */
            var_dump("L'utente dev'essere registrato per ottenere lo sconto del 20%");
            return $this->price;
        } 
        elseif($this->id_user != 0) 
        {   /* Altrimenti applica lo sconto */
            return $this->price * $this->sales;
        }
    }



}

/* Avvio dell'istanza di User */
$istanza_user = new User('Alessandro', 'Pecorilla', 27, 'Via di qua', 'prova@prova.com', 'Bancomat', 100, 0.2, 555, 'Alessandro', 'Password');
var_dump("Questa è l'istanza di User");
var_dump($istanza_user);
/* Ora verifico la moltiplicazione di setSales */
var_dump("Questa è l'istanza della moltiplicazione");
var_dump($istanza_user->setSales(100, 555, 0.2));
var_dump($istanza_user->parla())


/* Funziona, se non fosse per il fatto che il Prezzo non può stare qua dentro */




?>