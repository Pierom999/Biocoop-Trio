<?php

/*
 * Promotion.php
 * Classe Promotion
 */

class Promotion {

    private $_id; // l'identifiant
    private $_libelle; // le libellé
    private $_mois; // le mois
    private $_annee; // l'année
    private $_laFamille; // la famille de produit (objet FamilleProduit)
    private $_lesLignes; // la collection des lignes de promotion (tableau array)

    // le constructeur
    public function __construct($unId, $unLibelle, $unMois, $uneAnnee, $uneFamille, $desLignes) {
        $this->setId($unId);
        $this->setLibelle($unLibelle);
        $this->setMois($unMois);
        $this->setAnnee($uneAnnee);
        $this->setLaFamille($uneFamille);
        $this->setLesLignes($desLignes);
    }

    // les accesseurs
    public function id() {
        return $this->_id;
    }

    public function libelle() {
        return $this->_libelle;
    }

    public function mois() {
        return $this->_mois;
    }

    public function annee() {
        return $this->_annee;
    }

    public function laFamille() {
        return $this->_laFamille;
    }

    public function lesLignes() {
        return $this->_lesLignes;
    }

    function setId($id): void {
        $this->_id = $id;
    }

    function setLibelle($libelle): void {
        $this->_libelle = $libelle;
    }

    function setMois($mois): void {
        $this->_mois = $mois;
    }

    function setAnnee($annee): void {
        $this->_annee = $annee;
    }

    function setLaFamille($laFamille): void {
        $this->_laFamille = $laFamille;
    }

    function setLesLignes($lesLignes): void {
        $this->_lesLignes = $lesLignes;
    }

    /**
     * Méthode qui retourne les lignes de promotions pour lesquelles le pourcentage de réduction 
     * est supérieur ou égal au paramètre de la méthode
     * @param type réel  $pourcentageReduc
     */
    public function getLesLignesPromoRed($pourcentageReduc) {
        
        // À compléter
    }
    

}
