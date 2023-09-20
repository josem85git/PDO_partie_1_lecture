
<div class="container">
    <h1 class="text-center">Voici les type de spectacle avec leur numéro de salle
</h1>
    <div class="card mb-3">
        <div class="card-body">
            <!-- Tous les clients -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type de spectacles</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
                      $i=0;
                      foreach($showtypes as $type){
                          $i++;
                          echo '<tr>
                        <th scope="row">'.$i.'</th>
                        <td>'. $type["type"].'</td>
                                </tr>' ;
                      }     
                        ?>
                </tbody>
            </table>

        </div>
    </div>

</div>