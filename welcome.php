<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" action="register.php">
        <h1>Registrazione</h1>
        <label for="">Email*</label>
        <input type="email" id="email" placeholder="Inserisci la tua Email" name="email" maxlength="50" required>
        <label for="">Password*</label>
        <input type="password" id="password" placeholder="Inserisci la tua Password" name="password" required>
        <button type="submit" name="register">Registrati</button>
        <p>Sei già registrato? <a href="accesso.php">Clicca qui</a></p>
    </form>
</body>
</html>