<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chargement via un CDN, mais en PROD on utiliser plutot des ressources locales téléchargées dans /assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>PDO: Exercices corrigés</title>
</head>

<body>

    <div class="container-fluid bg-manu p-0">
        <div class="alert-transparent" role="alert">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
                <h1 class="text-center">PDO - Lire des données</h1>

                <div class="blur label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice</span></h2>
                    <div class='m-3'><?=$title ?? ''?></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="exo1Controller.php">Exercice1</a>
                            <a class="nav-link" href="exo2Controller.php">Exercice2</a>
                            <a class="nav-link" href="exo3Controller.php">Exercice3</a>
                            <a class="nav-link" href="exo4Controller.php">Exercice4</a>
                            <a class="nav-link" href="exo5Controller.php">Exercice5</a>
                            <a class="nav-link" href="exo6Controller.php">Exercice6</a>
                            <a class="nav-link" href="exo7Controller.php">Exercice7</a>
                            
                           
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">