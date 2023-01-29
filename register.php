<?php require_once('config.php'); 

if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        $stmt = $dbh->prepare("INSERT IGNORE INTO users (password, email) VALUES(:password, :email)");
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
        $pwdLenght = mb_strlen($password);

        if (empty($email) || empty($password)) {
            $msg = 'Compila tutti i campi %s';
        } elseif (false === $isEmailValid) {
            $msg = 'L\'email non è valida. Sono ammessi solamente caratteri 
                    alfanumerici e la @. Lunghezza minina 25 caratteri.
                    ';
        } elseif ($pwdLenght < 8 || $pwdLenght > 20) {
            $msg = 'Lunghezza minima password 8 caratteri.
                    Lunghezza massima 20 caratteri';
        } else {
            $msg = 'Registrazione avvenuta con successo %s';
        }
    
    printf($msg, '<a href="welcome.php">torna indietro</a>');
     if ($stmt->rowCount() > 0) {    
        header('location: welcome.php');
      } else {
        header('location: user_page.php');
      }
    //     header('location: welcome.php');
    // } else {
    //     header('location: user_page.php');
}
?>
