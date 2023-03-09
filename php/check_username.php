<?php

include 'config.php';

//Creo una connessione al database.
$connection = new mysqli($host, $user, $pwd, $db);

if($connection->connect_error){
    die("Connessione fallita: " . $connection->connect_error);
}

//Assegno alle variabili il valore degli input del form register.
$email = $_POST['email'];
$username = $_POST['username'];

// Query SQL per verificare se esiste già un utente con lo stesso username o la stessa email
$sql_check_username = "SELECT * FROM users WHERE username = '$username'";
$result_check_username = $connection->query($sql_check_username);

$sql_check_email = "SELECT * FROM users WHERE email = '$email'";
$result_check_email = $connection->query($sql_check_email);

if ($result_check_username->num_rows > 0) {
    // L'username esiste già
    echo "username_exists";
} else if ($result_check_email->num_rows > 0) {
    // L'email esiste già
    echo "email_exists";
} else {
    // L'username e l'email non esistono ancora
    echo "valid";
}

// Chiusura della connessione al database
mysqli_close($connection);

?>
