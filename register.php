<?php require_once('config.php'); 

if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        $stmt = $dbh->prepare("INSERT IGNORE INTO users (password, email) VALUES(:password, :email)");
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
        header('location: welcome.php');
    } else {
        header('location: welcome.php');
    }
?>
