<?php

/*
 * Produit.php
 * Classe Produit
 */

class Produit {

    private $_reference;    // la référence du produit
    private $_designation;  // la désignation du produit    
    private $_laFamille;    // la famille du produit (objet FamilleProduit)

    // le constructeur
    public function __construct($uneReference, $uneDesignation, $uneFamille) {
        $this->setReference($uneReference);
        $this->setDesignation($uneDesignation);       
        $this->setLaFamille($uneFamille);
    }

    public function reference() {
        return $this->_reference;
    }

    public function designation() {
        return $this->_designation;
    }

    public function laFamille() {
        return $this->_laFamille;
    }

    public function setReference($reference): void {
        $this->_reference = $reference;
    }

    public function setDesignation($designation): void {
        $this->_designation = $designation;
    }

    public function setLaFamille($laFamille): void {
        $this->_laFamille = $laFamille;
    }


}
