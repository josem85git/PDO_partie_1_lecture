<div>
    <h3>Afficher tous les clients</h3>
    <br>
    
    <?php
    $i=0;
    foreach($clients7 as $client7)
    {
        $i++;
        echo '<p><strong>Nom: </strong>'.$client7["lastName"].'</p>';
        echo '<p><strong>Prénom: </strong>'.$client7["firstName"].'</p>';
        echo '<p><strong>Date de naissance: </strong>'.$client7["birthDate"].'</p>';
        echo '<p><strong>Carte de fidélité: </strong>'.$client7["card"] .'</p>' ;
        echo '<p><strong>Numéro de carte: </strong>'.$client7["cardNumber"].'</p>';
        echo '<br>';
    }
    ?>
</div>