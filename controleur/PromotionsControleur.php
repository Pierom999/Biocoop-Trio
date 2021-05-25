<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PromotionsControleur
 *
 * @author Dominique_2
 */
require '../donnees/GestionnaireBDD.php';
class PromotionsControleur {

    private $_leGestionnaire; // instance de la classe GestionnaireBDD

    public function __construct() {
        $this->_leGestionnaire = new GestionnaireBDD();  // connexion du serveur web à la base de données
    }

    /* retourne toutes les promotions d’un mois et d’une année donnés. Si les paramètres ne sont pas
      donnés dans l’URI alors $mois et $annee contiendront respectivement  le mois et l’année courants */
    public function lister($mois, $annee) {
               
        // Recherche des promotions
        $lesPromotions = $this->_leGestionnaire->getLesPromotions($mois, $annee);
        
        
         // -------- création du flux JSON en sortie ------------
        
        // 0-construction de l'élément reponse
        $reponse = count($lesPromotions) . " promotions pour le mois choisi.";
               
        // 1-construction d'un tableau contenant les promotions
        // une promotion est représentée par un tableau associatif 
        $lesLignesDuTableau = array();
        foreach ($lesPromotions as $unePromotion) {
            // ajoute une ligne promotion dans le tableau $lesLignesDuTableau
            $uneLigne = array();
            $uneLigne["id"] = $unePromotion->id();
            $uneLigne["libelle"] = $unePromotion->libelle();
            $uneLigne["mois"] = $unePromotion->mois();
            $uneLigne["annee"] = $unePromotion->annee();
            $uneLigne["idFamille"] = $unePromotion->laFamille()->id();
            $lesLignesDuTableau[] = $uneLigne;            
        }
        
        // 2-construction de l'élément "promotions" avec un tableau associatif, ensemble de paires
        // clé => valeur
        $eltPromotions = ["promotions" => $lesLignesDuTableau];
        
        // 3-construction de l'élément "data"
        $eltData = ["reponse" => $reponse, "donnees" => $eltPromotions];
        
        // 4-construction de la racine
        $eltRacine = ["data" => $eltData];
        
        // 5-retourne le code statut 200 et un contenu JSON construit à partir du tableau associatif $eltRacine
        header("Content-type:application/json");
        header('HTTP/1.0 200 ok'); 
        return(json_encode($eltRacine));
    }

}
