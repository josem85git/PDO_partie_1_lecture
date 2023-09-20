<?PHP
require_once __DIR__.'/config.php';

try{
    // Nouvelle instance de PDO
    $maconnection = new PDO(DSN, LOGIN, PASSWORD);

    // permet de renvoyer un resultat sous forme d'objet
    $maconnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
    
    echo 'connexion réussi !';
    
}   
catch(PDOException $e){
    echo 'erreur de connexion à la BDD: '. $e->getMessage();
}
?>