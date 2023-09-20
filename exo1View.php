<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="text-center">Voici la liste de tous les clients</h3>
            <!-- Tous les clients -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date anniversaire</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            $i=0;
                            foreach($clients as $client){
                                $i++;
                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$client["lastName"].'</td>
                                    <td>'.$client["firstName"].'</td>
                                    <td>'.date('d.m.Y', strtotime($client["birthDate"])).'</td>
                                    <td></td>
                                </tr>';
                            }
                        ?>
                </tbody>
            </table>

        </div>
    </div>

</div>