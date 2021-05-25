<?php

/*
 * LignePromotion.php
 * Classe LignePromotion
 */

class LignePromotion {

    private $_dateDebut; // la date de début de la promotion pour le produit
    private $_dateFin; // la date de fin de la promotion pour le produit
    private $_prix; // le prix du produit pendant la promotion
    private $_prixBase; // le prix du produit sans promotion
    private $_leProduit; // le produit concerné par la ligne (objet Produit)

    // le constructeur
    public function __construct($unProduit, $uneDateDebut, $uneDateFin, $unPrix, $unPrixBase) {
        $this->setLeProduit($unProduit);
        $this->setDateDebut($uneDateDebut);
        $this->setDateFin($uneDateFin);
        $this->setPrix($unPrix);
        $this->setPrixBase($unPrixBase);
    }

    // les accesseurs
    public function dateDebut() {
        return $this->_dateDebut;
    }

    public function dateFin() {
        return $this->_dateFin;
    }

    public function prix() {
        return $this->_prix;
    }

    public function leProduit() {
        return $this->_leProduit;
    }

    function setDateDebut($dateDebut): void {
        $this->_dateDebut = $dateDebut;
    }

    function setDateFin($dateFin): void {
        $this->_dateFin = $dateFin;
    }

    function setPrix($tarif): void {
        $this->_prix = $tarif;
    }

    function setLeProduit($leProduit): void {
        $this->_leProduit = $leProduit;
    }

    function prixBase() {
        return $this->_prixBase;
    }

    function setPrixBase($prixBase): void {
        $this->_prixBase = $prixBase;
    }

    /**
     * Méthode qui retourne le pourcentage de réduction appliqué au prix lors de la promotion. 
     * Ce  pourcentage est calculé ainsi : 100 * (tarif de base – tarif de promotion) / tarif de base
     * ou 100*(1-(tarif réduit/tarif de base))
     */
    public function getPourcentageReduction($prixBase, $tarif) {
        $pourcentageReduc = 100*(1-($prixBase/$tarif));
        return number_format($pourcentageReduc, 2, '.', ''); 
    }

}
