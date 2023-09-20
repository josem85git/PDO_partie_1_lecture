<?php
require_once __DIR__.'/../config/database.php';

try{
    $sql6 = 'SELECT `title`,`performer`,`date`,`startTime` FROM `shows`
    ORDER BY `title`;';
    $sth6 = $maconnection->query($sql6);
    $shows = $sth6->fetchALL(PDO::FETCH_ASSOC);
} catch(PDOException $e){
    die('La requête a retourné une erreur'. $e->getMessage());
}

include __DIR__.'/../views/templates/header.php'; // mon Header
include __DIR__.'/../views/exo6View.php'; // Affichage des clients:
include __DIR__.'/../views/templates/footer.php'; // Footer
?>