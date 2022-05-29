<?php 

/* Avvio di un trait */
trait userTrait {
    public $string; // Stringa del trait per verificarne l'effettivo utilizzo
    public $id_user; // id user, nella condizione set/get
    public $sales; // sconto se registrato
    /* Function per verificare funzionamento del trait */
    public function setSaySomething(String $string) {
        return $this->string = $string;
    }

    /* Funzione Pubblica per ricavare lo sconto in base all'utente */
    /* Dovrei spostarla in products dato che di la c'è il prezzo */
    /*  Qui non ha senso utiliizzare il prezzo */
    /** 
     * @78741722Ale => Funzione per calcolare il prezzo in base all'id User
     * @param price => Prezzo del prodotto
     * @param id_user => ID user
     * @param sales => lo sconto
     */
    public function setSales(Int $price, Int $id_user, float $sales) {
        $this->price = $price;
        $this->id_user = $id_user;
        $this->sales = $sales;
        /* Se l'id utente è uguale a 0 */
        if($this->id_user == 0) 
        {   var_dump("L'utente dev'essere registrato per ottenere lo sconto del 20%");
            return $this->price;
        } 
        /* Altrimenti applica lo sconto */
        elseif($this->id_user !== 0) {   
            $this->price = $this->price * $this->sales;
        }
        /* Provo ad Avviare un'eccezione nel caso in cui il prezzo sia 0 */
        /* Errore dell'eccezione scatenato 
        Risultato : PHP Fatal error:  Uncaught Exception: il prezzo non può essere pari a 0 in C:\MAMP\htdocs\PHP\php-oop-2\Models\User.php:40*/
        if ($this->price == 0) {
            throw new Exception("il prezzo non può essere pari a 0");
        }
    }
}

class User {
    /* Passo tramite Traits */
    use userTrait;

    public $nome; // Nome Persona
    public $cognome; // Cognome Persona
    public $eta; // Età utente
    public $indirizzo; // Indirizzo utente 
    public $email; // indirizzo email
    public $payment; // pagamenti
    protected $username; // il nome dell'utente --> dovrebbe essere protected
    protected $password; // la password dell'utente --> dovrebbe essere restricted

    /* Qui il costrutto della classe User */
    public function __construct(String $nome, String $cognome, Int $eta, String $indirizzo, String $email, String $payment,  String $username, String $password ) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
        $this->payment = $payment;
        $this->username = $username; 
        $this->password = $password;
    }   
}

/* Avvio dell'istanza di User */
/* $istanza_user = new User('Alessandro', 'Pecorilla', 27, 'Via di qua', 'prova@prova.com', 'Bancomat', 'Alessandro', 'Password');
var_dump("Questa è l'istanza di User");
var_dump($istanza_user); */
/* Qui il trait funziona */
/* var_dump($istanza_user->setSaySomething("Questo è un trait presente solo in User.php")); */

?>