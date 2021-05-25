<?php
/**
 * Description of Don
 *
 * @author Vincent
 */
class Don {
    private $_id;
    private $_designation;
    private $_quantite;
    
    public function __construct($id, $designation, $quantite) {
        $this->setId($id);
        $this->setDesignation($designation);
        $this->setLesProduits($quantite);
    }
    function id() {
        return $this->_id;
    }

    function designation() {
        return $this->_designation;
    }
    
    function quantite() {
        return $this->_quantite;
    }
    
}