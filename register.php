<?php require_once('config.php'); 

// controllo se l'email e la password sono stati passati tramite POST
if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        // preparo la query
        $stmt = $dbh->prepare("INSERT IGNORE INTO users (password, email) VALUES(:password, :email)");
        // sostituisco i parametri con i valori passati tramite POST
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);
        // la eseguo
        $stmt->execute();
        // se la query ha restituito un risultato, l'utente è stato trovato
        // controllo la validità dell'email
        $isEmailValid = filter_var(
            $email,
            FILTER_VALIDATE_REGEXP, [
                "options" => [
                    "regexp" => @"^[^@\s]+@[^@\s]+\.[^@\s]+$"
                    
                ]
        ]);
        // verifico la lunghezza della password
        $pwdLenght = mb_strlen($password);

        // faccio un controllo sui campi email e password
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
    // stampo il messaggio 
    printf($msg, '<a href="welcome.php">torna indietro</a>');
     if ($stmt->rowCount() > 0) {    
        header('location: user_page.php');
      } else {
        header('location: welcome.php');
      }
}
?>
