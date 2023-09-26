<?php date_default_timezone_set('Europe/Paris'); ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PDO: Partie 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
    
    <h1>Bonjour,<br>
        veuillez ouvrir votre session</h1>
        <a href="login.php">
            <button>Se connecter</button>
        </a>
        <h2>Nous sommes le <?php echo date('d-m-Y'); ?> </h2>
        <h3>Il est <?php echo date('H:i:s'); ?> </h3>
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
                crossorigin="anonymous">
        </script>
        <script></script>
    </body>
</html>


