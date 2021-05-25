<?php

/**
 * Liste des dons 
 *
 * @author Vincent
 */
class DonMySQL {
    private $_laConnexion;    
    
    function __construct() {
        $this->_laConnexion =  new GestionnaireBDD();        
    }
    function readAllDons() {
        $lesDons = []; // tableau de Categorie        
        $sql = "SELECT lot.id, designation, nbrProduits FROM produit INNER JOIN lot ON produit.id=lot.idProduit WHERE etat=6;";
	$resultat = $this->_laConnexion->cnx()->query($sql);	// Execution de la requete
	if ($resultat === false) {
            $this->_laConnexion->afficherErreurSQL("Pb lors de la recherche des categories", $sql);
	}
        // Parcours du jeu d'enregistrement
//        $uneLigne = $resultat->fetch();	// Lecture 1ere ligne 
//        while ($uneLigne) {
//            $unDon = new Categorie($uneLigne['id'], $uneLigne['intitule']);
//            array_push($lesDons, $unDon);
//            $uneLigne = $resultat->fetch(); // Lecture ligne suivante	
//        }
        return $lesDons;
    }
    
    function readAllAsso(){
        //$lesAssos = []; // tableau des association        
        $sql = "SELECT nom, adresse FROM association WHERE NOT EXISTS (SELECT idAssociation FROM facturedon WHERE facturedon.idAssociation=association.id);";
	$lesAssos = $this->_laConnexion->cnx()->query($sql);	// Execution de la requete
	if ($resultat === false) {
            $this->_laConnexion->afficherErreurSQL("Pb lors de la recherche des categories", $sql);
	}
        // Parcours du jeu d'enregistrement
//        $uneLigne = $resultat->fetch();	// Lecture 1ere ligne 
//        while ($uneLigne) {
//            $uneAsso = new Categorie($uneLigne['nom'], $uneLigne['adresse']);
//            array_push($lesAssos, $uneAsso);
//            $uneLigne = $resultat->fetch(); // Lecture ligne suivante	
//        }
        return $lesAssos;
    }
   
    function readMontCumul(){
        $lesMontants = []; // tableau des montants cumulés de la valeur des marchandises par famille de produit        
        $sql = "SELECT libelle, sum(valeurMarchandise) FROM bdbiocoop.valeurdon GROUP BY libelle;";
	$resultat = $this->_laConnexion->cnx()->query($sql);	// Execution de la requete
	if ($resultat === false) {
            $this->_laConnexion->afficherErreurSQL("Pb lors de la recherche des categories", $sql);
	}
        // Parcours du jeu d'enregistrement
//        $uneLigne = $resultat->fetch();	// Lecture 1ere ligne 
//        while ($uneLigne) {
//            $unMontant = new Categorie($uneLigne['libelle'], $uneLigne['montant']);
//            array_push($lesMontants, $unMontant);
//            $uneLigne = $resultat->fetch(); // Lecture ligne suivante	
//        }
        return $lesMontants;
    }
}
?>

//<?php include ("vue/include/debutPage.inc.php"); ?>

//<?php 
//$test = readAllDons();
//echo $test;
//?>

//<?php include ("vue/include/finPage.inc.php"); ?>

