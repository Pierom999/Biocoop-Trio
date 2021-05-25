<?php
/* 
 * autoload.php
 * A inclure en cas d'utilisation de classes
 */

spl_autoload_register("chargerClasse");

/**
 * Chargement de la classe passée en paramètre
 * @param type $classe
 */
function chargerClasse($classe) {
    require $classe."php";
}
