<div>
    <h1>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".    </h1>
    <br>
    <p>Les afficher comme ceci :<br>
        Nom : Nom du client<br>
        Prénom : Prénom du client<br>
        Trier les noms par ordre alphabétique.<br>
    </p>
    <br>
    <?php
    $i=0;
    foreach($clientsM as $clientM){
        $i++;
        echo '<p><strong>Nom: </strong>'.$clientM["lastName"].'</p>
         <p><strong>Prénom: </strong>'.$clientM["firstName"].'</p>';
        echo '<br>';
    }
    ?>
</div>