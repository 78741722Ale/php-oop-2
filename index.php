<?php 

/* Richiamo il componente di classe padre per i Prodotti */
require __DIR__ . "/Models/Products.php";
/* Richiamo il componente di classe padre per gli Utenti */
require __DIR__ . "/Models/Users.php";
/* Richiamo il componente di classe padre per il Singolo utente */
require __DIR__ . "/Models/User.php";

/* 
Consegna : 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

- Products genitore
- Product (cibo, giochi , cucce)

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e 
ricevere il 20% di sconto su tutti i prodotti.

- Users (classe Genitore)
- User-registrato (classe figlia | Martina, ALessandro, Andrea, Fabiola Ecc..) (ottiene il 20% di sconto)
- user-non-registrato (non ottiene il 20% di sconto)

Il pagamento avviene con la carta di credito, che non deve essere scaduta.
carta di credito appartiene a user singolo
*/

/* String $nome, String $cognome, Int $eta, String $email, String $payment, Int $id_user */
$istanza = new User('Alessandro', 'Pecorilla', 27, 'Via Leonardo Da Vinci 5', 'prova@prova.com', 'Bancomat', 555);
var_dump("Questa è l'istanza di User");
var_dump($istanza);


?>