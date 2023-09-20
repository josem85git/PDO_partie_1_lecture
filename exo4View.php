<div>
    <h1>
        Voici les clients possédant une carte de fidélité
    </h1>
    <div>
<table class="table">
                <thead>
                    <tr>
                        <th scope="col">numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=0;
                    foreach($clientsFidel as $clientFidel){
                        $i++;
                        echo '<tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$clientFidel["lastName"].'</td>
                        <td>'.$clientFidel["firstName"].'</td>';
                    }
                    ?>
                    
                </tbody>
            </table>


</div>
</div>