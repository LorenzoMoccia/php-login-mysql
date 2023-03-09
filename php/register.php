<?php

include 'config.php';

//Creo una connessione al database.
$connection = new mysqli($host, $user, $pwd, $db);

if($connection->connect_error){
    die("Connection failed: ") . $connection->connect_error;
}

//Assegno alle variabili il valore degli input del form register.
$email = $_POST['InputEmail'];
$username = $_POST['InputUsername'];
$password = $_POST['InputPassword'];


// Query SQL per l'inserimento dei dati
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

// Esecuzione della query SQL
if (mysqli_query($connection, $sql)) {
  echo "Registrazione completata con successo";
  header('Location: http://localhost/php-login-mysql/php/login.php');
} else {
  echo "Errore durante la registrazione: " . mysqli_error($connection);
}

// Chiusura della connessione al database
mysqli_close($connection);

?>
