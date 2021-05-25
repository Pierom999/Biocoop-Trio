<?php
// debutPage.php
// Début de chaque page

session_start();
if (isset($_SESSION['mess'])) {    // Message 
    $mess = $_SESSION['mess'];
} else {
    $mess = "";
}
if (isset($pageAuthentification)) {
    session_unset();
} else {
    $pageAuthentification = 0;
}
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
} else {
    $admin = -1;  // non authentifié
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BIOCOOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="vue/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="vue/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> </head>

    <body>      
        <header>
        
            <nav class="nav justify-content-end"> <!-- alignement droite -->
                <?php
                //if ($admin == -1 && $pageAuthentification != 1 ) { 
                //header('Location:authentification.php');
                //exit();
                //}
                echo $mess;
                if ($admin != -1) {
                    ?>
                    <a href="deconnexion.php">Déconnexion</a>
                <?php } ?>
                <div class='inner'>
                    <div class='h-logo'>
                        <h1>BIOCOOP</h1>
                        <h3>La bio nous rassemble</h3>
                    </div>
                    <div class="h-search">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class='h-link'>
                        <a class="d-inline nav-link active" href="#"><i class="fas fa-home"></i> Accueil</a>
                        <a class="d-inline nav-link" href="#">A propos</a>
                        <a class="d-inline nav-link" href="#">Services</a>
                        <a class="d-inline nav-link" href="#">Contact</a>
                        <a class="d-inline nav-link" href="vue/authentification/authentification.php">Se connecter</a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
