<?php require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $isUsernameValid = filter_var(
            $username,
            FILTER_VALIDATE_REGEXP, [
                "options" => [
                    "regexp" => "/^[a-z\d_]{3,20}$/i"
                ]
                ]);
        header('location: user_page.php');
    } else {
        header('location: accesso.php');
    }
?>