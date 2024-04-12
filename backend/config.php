<?php


$db_host = "localhost:3306";
$db_name = "utilisateur";


try {
    $conn= new PDO('mysql:host=localhost;dbname=utilisateur', "root", "");
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

