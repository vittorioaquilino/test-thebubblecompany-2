<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" action="register.php">
        <h1>Registrazione</h1>
        <input type="email" id="email" placeholder="Email" name="email" maxlength="50" required>
        <input type="password" id="password" placeholder="Password" name="password" required>
        <button type="submit" name="register">Registrati</button>
        <a href="accesso.php">Hai già un account? Clicca qui</a>
    </form>
</body>
</html>