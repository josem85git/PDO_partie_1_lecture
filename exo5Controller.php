<?php
require_once __DIR__.'/../config/database.php';


try{
    // Requête permettant de recuperer les clients 
    // dont le nom commence par la lettre M
    $sql5 = 'SELECT `lastName`, `firstName` FROM `clients` WHERE LEFT( lastName, 1) = "M"
    ORDER BY `lastName` ASC;';
    $sth5 = $maconnection->query($sql5);
    // permet de sortir un tableau composé de tableau associatifs
    $clientsM = $sth5->fetchALL(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}


include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo5View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>