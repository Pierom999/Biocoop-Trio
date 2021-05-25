<?php
// debutPage.php
// Début de chaque page
include_once("donnees/autoload.php");

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
        <header class='menu'>
            <div class="inner">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="row">
                                <div class="col-5 m-logo">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                                    </button>
                                    <a class="navbar-brand" href="#">BIOCOOP</a>
                                    <p class='slog' style="white-space: nowrap">La bio qui vous rassemble</p>                   
                                    <h1> Page Modif par 20cent</h1>
                                </div>

                                <div class="col-4 offset-3 m-search">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 offset-3 m-link">
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 sm">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i> Accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">A propos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="vue/rapportDons/rapportPage.php">Rapport des dons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="vue/authentification/authentification.php">Se connecter</a>
                                            </li>
                                        </ul>                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container">

