<?php

/* FamilleProduit.php
 * Classe FamilleProduit
 */

class FamilleProduit {

    private $_id; // l'identifiant est au format entier
    private $_libelle; // le libellé

    // le constructeur
    public function __construct($unId, $unLibelle) {
        $this->setId($unId);
        $this->setLibelle($unLibelle);
    }

    // les accesseurs
    public function id() {
        return $this->_id;
    }

    function libelle() {
        return $this->_libelle;
    }

    function setLibelle($libelle): void {
        $this->_libelle = $libelle;
    }

    function setId($id): void {
        $this->_id = $id;
    }

}
