<<<<<<< HEAD
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
=======
<?php
/**
 * connexionPdo fournit un objet Pdo $conn
 * pour effectuer ensuite des requêtes
*/
function connexionPDO() {
    $login = 'employer';
    $mdp = 'employer';
    $bd = 'gsb';
    $serveur = 'localhost:3308';

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
>>>>>>> 7a1f98712547e2b106438e673412aeab431a99e8
