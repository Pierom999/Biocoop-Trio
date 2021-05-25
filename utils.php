
<?php

// 
// PHPSESSID 
// session_status(); return 0 PHP_SESSION_DISABLED
//                          1 PHP_SESSION_NONE
//                          2 PHP_SESSION_ACTIVE
// session_id();
// session_name(); recupérer ou modifie le nom de la session
// session_start();
// session_unset(); supprime toute les variables de session
// session_destroy();
// session_write_close(); met fin et tout et supprime la session

function init_session() : bool
{
  if(!session_id())
    {
        session_start();
        session_regenerate_id();
        return true;

    }  
    return false;
}

function clean_session() : void
{
// fermeture et nettoyage session
session_unset(); 
session_destroy();
//session_write_close();
//setcookie(session_name(), '', 0, null, null, false, false, true);
//session_regenerate_id(true);
}

function is_logged() : bool
{
    return true;
}


function is_admin() : bool
{
    if($_SESSION['user_admin'] === 1)
    {
        return true;
    }
    return false;
}