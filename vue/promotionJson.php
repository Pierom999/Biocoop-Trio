<?php
/* 
 * promotionJson.php
 * Retourne les promotions au format json du mois et de l'année précisées dans l'URI 
 * URI attendue : Biocoop/vue/promotionJson.php/mois/4/annee/2021
 * Si le mois ou l'année ne sont pas précisés, mois de l'annee courante
 */
require '../controleur/PromotionsControleur.php';

// Recherche du mois et de l'année
$mois=$annee=null;
$param = filter_input(INPUT_SERVER, "PATH_INFO", FILTER_SANITIZE_STRING);
$vars = explode ( "/", $param , 8 );
if (count($vars) == 5) {
    if ($vars[1]==="mois" and $vars[3]==="annee") {       
        $mois = filter_var($vars[2], FILTER_VALIDATE_INT);
        $annee = filter_var($vars[4], FILTER_VALIDATE_INT);        
    }
}
//echo "Mois: $mois, Annee: $annee";
if ($mois===false or $mois===null or $mois>12 or $annee===false or $annee===null) {
    $mois = date("m");
    $annee = date("Y");
}

// recherche des données via le controleur
$promoCtrl = new PromotionsControleur();
echo $promoCtrl->lister($mois, $annee);


