<?php
require_once __DIR__.'/../config/database.php';

try {
    $sql1 = 'SELECT `type` FROM `showtypes`;';
    $sth1 = $maconnection->query($sql1);
    $showtypes = $sth1->fetchALL(PDO::FETCH_ASSOC);
} catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}


include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo2View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>