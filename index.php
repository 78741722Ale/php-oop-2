<?php 


/* Richiamo il componente di classe padre per l'utente */
include __DIR__ . "/Models/User.php";
/* Richiamo il componente di classe padre per i Prodotti */
include __DIR__ . "/Models/Products.php";

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

/* Avvio nuove istanze */
$pallina = new Products("Pallina", "Oggetto Inanimato", "Oggetto inanimato senza utilizzo", "Non ha utilizzo");
$pallina->setSales(15, 200, 0.2); // Applico il prezzo
/*********/
$astuccio = new Products("Astuccio", "Oggetto Inanimato", "Oggetto Inanimato", "Serve per raccogliere i tuoi strumenti");
$astuccio->setSales(5, 0, 0.2); // Applico il prezzo
/*********/
$pentola = new Products("Pentola", "Oggetto Inanimato", "Oggetto Inanimato", "Serve per cucinare");
$pentola->setSales(25, 100, 0.2); // Applico il prezzo

/* Per dichiarare le istanze a schermo apro un array vuoto e pusho tutto al suo interno */
$products = []; // Array vuoto, pusho tutte le istanze
array_push($products, $pallina, $astuccio, $pentola);
var_dump("Questo è il var_dump finale di prodotti : ");
var_dump($products)
 
?>