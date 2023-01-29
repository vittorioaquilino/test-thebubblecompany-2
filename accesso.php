<?php require_once('config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <form method="post" action="login.php">
            <h1>Login</h1>
            <label for="">Email*</label>
            <input type="text" id="email" placeholder="Inserisci la tua Email" name="email">
            <label for="">Password*</label>
            <input type="password" id="password" placeholder="Inserisci la tua Password" name="password">
            <button type="submit" name="login">Accedi</button>
        </form>
    </body>
</html>