<?php ?>

<?php include ("../include/debutPage.inc.php"); ?>

<h2>Mot de passe oublié?</h2>
<form method="post">
    <div class="login-container">
        <p>Veuillez entrer votre adresse email ci-dessous pour recevoir un lien de réinitialisation de mot de passe.</p>

        <input type="text" id="ztMailRecup" name="ztMailRecup" placeholder="Votre adresse mail*"/>
        <br/>
        <input type="submit" id="btnValider" name="btnValider" value="Récupérer mon mot de passe"/>
    </div>
</form>

<?php include ("../include/finPage.inc.php"); ?>