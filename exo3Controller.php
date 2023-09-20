<?php
require_once __DIR__.'/../config/database.php';


try{
    // Requête permettant de recuperer  les 20 clients
    $sql3 = 'SELECT `lastName`, `firstName` FROM `clients` LIMIT 20 OFFSET 0;';
    $sth3 = $maconnection->query($sql3);
    // permet de sortir un tableau composé de tableau associatifs
    $clients20 = $sth3->fetchALL(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}


include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo3View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>