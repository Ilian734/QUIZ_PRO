<?php
session_start();

// Connexion à la base de données
include_once('config.php');


// Traitement de la connexion
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $query = "SELECT * FROM utilisateurs WHERE username = :username AND password = :password";
    $result = $conn->prepare($query);
    $result->execute(array(
        'username' => $username,
        'password' => $password
    ));
    echo " test 1";
    if ($result-> rowCount() > 0 ){
        $_SESSION['username'] = $username;echo "ok";
        header('Location: ?page=themes');
    } else {
        header('Location: ?page=moncompte&message=Nom d\'utilisateur ou mot de passe incorrect.');
        echo "ok2";
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà
    $user_check_query = "SELECT * FROM utilisateurs WHERE username=:username LIMIT 1";
    $result = $conn->prepare($user_check_query);
    $result->execute(array(':username' => $username));
    $user = $result->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        header('Location: ?page=moncompte&?message=Le nom d\'utilisateur existe déjà.');
    } else {
        // Insérer l'utilisateur dans la base de données
        $query = "INSERT INTO utilisateurs (username, password) VALUES (:username, :password)";
        $stmt = $conn->prepare($query);
        $stmt->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
        $_SESSION['username'] = $username;
        header('Location: ?page=themes');
    }
}