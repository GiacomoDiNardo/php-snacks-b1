<!-- 
    ## Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola
    e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


<?php 

$name = key_exists("name", $_GET) ? trim($_GET["name"]) : false;
$email = key_exists("email", $_GET) ? trim($_GET["email"]) : false;
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : false;

// controllo se il nome è maggiore di 3 lettere
if (strlen($name) <= 3) {
  $name = false;
}

// controllo che l'email contenga un punto e una chiocciola
if(!strpos($email, ".") || !strpos($email, "@")) {
  $email = false;
}

// controllo che age sia un numero

if (is_numeric($age) === false) {
  $age = false;
}

if ($age === false || $name === false || $email === false) {
  echo "<div>Accesso Negato</div>";
} else {
  echo "<div>Accesso Riuscito</div>";
}

?>