<?php
require_once __DIR__.'/../config/database.php';

try{
    // Requête permettant de recuperer tous les clients
    $sql7 = 'SELECT `lastName`, `firstName`, `birthDate`,`card`,`cardNumber`FROM `clients`
    WHERE `cardNumber` IS NOT NULL ;';
    $sth7 = $maconnection->query($sql7);
    // permet de sortir un tableau composé de tableau associatifs
    $clients7 = $sth7->fetchALL(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}

include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo7View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer

?>