<div>
<h3>
Voici la liste de tous les spectacles par ordre alphabétique
ainsi que l'artiste, la date et l'heure. <br>

</h3>
<br>

    <?php
    $i=0;
    foreach($shows as $show){
        $i++;
        echo '<ul>
                <li>'.$show["title"].' par '. $show["performer"].', le '.date('d.m.Y', strtotime($show["date"])).' à '.$show["startTime"].'</li>
            </ul>';
        
        echo '<br>';
    }
    ?>
</div>