<div>
    <h1>Voici les noms et prénoms des 20 premiers clients</h1>
<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=0;
                    foreach($clients20 as $client20){
                        $i++;
                        echo '<tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$client20["lastName"].'</td>
                        <td>'.$client20["firstName"].'</td>';
                    }
                    ?>
                    
                </tbody>
            </table>


</div>