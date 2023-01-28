<?php

$url="localhost";
$username="root";
$password="root";
$db="login_db";
try {
    $dbh = new PDO("mysql:host=$url;dbname=$db", $username, $password);
    $dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database";   
}
catch (PDOException $e)
{
    print $e->getMessage();
    echo "Error connecting to database";
    die();
}
?>