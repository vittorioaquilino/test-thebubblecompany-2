<?php require_once('config.php');

// dichiaro variabili email e password e le inizializzo con i valori passati tramite POST
$email = $_POST['email'];
$password = $_POST['password'];

// controllo se l'email e la password sono stati passati tramite POST
if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    
        /** @var PDO $dbh */
        // preparo la query
        $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        // sostituisco i parametri con i valori passati tramite POST
        // controllo se l'email e la password sono stati passati tramite POST
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
        // se va a buon fine, la variabile $dbh conterrà un oggetto PDO 
        // la rotta porterà l'utente alla pagina dell'utente loggato
        header('location: user_page.php');
    } else {
        // altrimenti, la rotta porterà l'utente alla pagina di login
        header('location: accesso.php');
    }
?>