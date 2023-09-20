<?php
require_once __DIR__.'/../config/database.php';


try{
    // Requête permettant de recuperer les clients fideles
    $sql4 = 'SELECT `lastName`, `firstName` FROM `clients` WHERE card = 1;';
    $sth4 = $maconnection->query($sql4);
    // permet de sortir un tableau composé de tableau associatifs
    $clientsFidel = $sth4->fetchALL(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}


include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo4View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>