<?php include ("../include/debutPage.inc.php"); ?>

<h2>Authentification</h2>
<form method="post" action="../../metier/validAuth.php">
    
    <div class="login-container">
        <strong>Je me connecte</strong>
        <br/>
        <input type="text" id="ztMail" name="ztMail" placeholder="Votre adresse mail*">
        <br/>
        <input type="password" id="ztPassword" name="ztPassword" placeholder="Votre mot de passe*">
        <p><a href="recupPassword.php">Vous avez oublié votre mot de passe?</a></p>
        <input type="submit" name="btnValider" value="Connexion">  
    </div>
</form>
<?php
if(isset($_POST['btnValider']))
    if(isset($_POST['ztMail']) && !empty($_POST['ztMail']) &&
            isset($_POST['ztPassword']) && !empty($_POST['ztPassword'])){
        echo'<pre>';
        print_r($_POST);
        echo'</pre>';
    }
?>
<?php include ("../include/finPage.inc.php"); ?>