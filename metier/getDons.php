<?php  
	/***********************************************************
	 *  Alimentation liste des Dons                      *
	 ***********************************************************/
        include_once 'autoload.php';
//        $id = (isset($_REQUEST['zlLotID'])?$_REQUEST['zlLotID']:""); 
//        $designation = (isset($_REQUEST['zlDesign'])?$_REQUEST['zlDesign']:"");
//        $qte = (isset($_REQUEST['zlQteProduit'])?$_REQUEST['zlQteProduit']:"");
        $donMySQL = new DonMySQL();
        $lesDons = $DonMySQL->readAllDons();
	foreach ($lesDons as $unDon) {
            $id = $unDon->id();
            $designation = $unDon->designation();
            $qte = $unDon->quantite();
           
            echo "<OPTION value='$id'>$designation</OPTION>";	            
        }
?> 

