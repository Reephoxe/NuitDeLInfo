<?php

 
/**
 * connexionPdo fournit un objet Pdo $conn
 * pour effectuer ensuite des requêtes
*/
function connexionPDO() {
    $login = 'wetnnqse_JeanBonds';
    $mdp = 'Jeanbonddu37';
    $bd = 'wetnnqse_ndli';
    $serveur = '127.0.0.1';

    try {
        $conn = new PDO("mysql:host=$serveur;port=3306;dbname=$bd",$login,$mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO: " . $e;
        die();
    }
}

?>
