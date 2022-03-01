<?php

session_start();

function connexionPDO() {
    $login = 'employer';
    $mdp = 'employer';
    $bd = 'gsb';
    $serveur = 'localhost:3306';

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd",$login,$mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}

?>
