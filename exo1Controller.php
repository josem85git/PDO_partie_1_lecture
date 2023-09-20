<?php
require_once __DIR__.'/../config/database.php';

try{
    // Requête permettant de recuperer tous les clients
    $sql = 'SELECT `lastName`, `firstName`, `birthDate` FROM `clients`;';
    $sth = $maconnection->query($sql);
    
    // permet de sortir un tableau composé de tableau associatifs
    $clients = $sth->fetchALL(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}


include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo1View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>