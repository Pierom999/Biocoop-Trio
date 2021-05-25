<?php
session_start();

function controleUtilisateur($dbh, $mail, $mdp) {
    $sql = "SELECT * FROM utilisateur WHERE mail = '$mail';";
    $resultat = $dbh->query($sql);							// Execution de la requete
    if ($resultat === false) {
        afficherErreurSQL("Pb lors de la recherche de l'utilisateur.", $sql, $dbh);
    }
    $user = $resultat->fetch();
    $hash = $user["mdp"];
    return password_verify($mdp, $hash)?$user:null;
}



if (isset($_POST["ztMail"]) && isset($_POST["ztPassword"])) {
    $mail = $_POST["ztMail"];
    $mdp = $_POST["ztPassword"];
    
    include("../donnees/GestionnaireBDD.php");
    $dbh = GestionnaireBDD();
    

    
    
    $unUser = controleUtilisateur($dbh, $mail, $mdp);
    if ($unUser != null) {
        echo "Connexion ok";
        $_SESSION['id'] = $unUser['id'];
        $nom = $_SESSION['nom'] = $unUser['nom'];
        $prenom = $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['mess'] ="Vous êtes bien authentifié $prenom $nom"; 
        $_SESSION['admin'] = $unUser['admin'];
        header('Location:index.php');
        exit();
    } else {
        session_unset();
        $_SESSION['mess'] = "Erreur authentification";
        header('Location:authentification.php');
    
    }
}
