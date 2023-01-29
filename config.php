<?php

//dichiaro delle variabili per la connessione al database
$url="localhost";
$username="root";
$password="root";
$db="login_db";
//creo una variabile per la connessione al database
try {
    // se la connessione va a buon fine, la variabile $dbh conterrà un oggetto PDO
    $dbh = new PDO("mysql:host=$url;dbname=$db", $username, $password);
    $dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connected to database";   
}
catch (PDOException $e)
{
    // se la connessione non va a buon fine, stampo un messaggio d'errore
    print $e->getMessage();
    echo "Error connecting to database";
    die();
}
?>