<?php require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $isEmailValid = filter_var(
            $email,
            FILTER_VALIDATE_REGEXP, [
                "options" => [
                    "regexp" => @"^[^@\s]+@[^@\s]+\.[^@\s]+$"
                ]
                ]);
        header('location: user_page.php');
    } else {
        header('location: accesso.php');
    }
?>