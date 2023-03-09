<?php 

include 'config.php';

// Inizializza la connessione al database
$connection = new mysqli($host, $user, $pwd, $db);

// Verifica se la connessione è stata stabilita con successo
if($connection->connect_error){
    die('Connessione fallita' . $connection->connect_error);
}

// Ottieni il nome utente e la password dal form di login
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


// Query per verificare se l'utente esiste nel database
$sql_login = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result_login = $connection->query($sql_login);


// Verifica se username e password corrispondono
if ($result_login->num_rows == 1) {
    // Login riuscito
    echo 'success';
    session_start();
    $_SESSION['user_id'] = $result_login->fetch_assoc()['id'];
    
} else {
    // Login fallito
    echo 'error';
    
}

// Chiudi la connessione al database
$connection->close();
?>
