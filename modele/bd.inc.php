<?php
/**
 * connexionPdo fournit un objet Pdo $conn
 * pour effectuer ensuite des requêtes
*/
function connexionPDO() {
    $login = 'employer';
    $mdp = 'employer';
    $bd = 'gsb';
    $serveur = 'localhost';

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
