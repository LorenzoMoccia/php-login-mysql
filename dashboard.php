<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // L'utente non ha effettuato il login, reindirizza alla pagina di login
    header("Location: php/login.php");
    exit();
}

// L'utente ha effettuato il login, continua con la visualizzazione della pagina protetta

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>