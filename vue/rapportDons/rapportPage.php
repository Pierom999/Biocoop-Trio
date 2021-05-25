<?php include ("../include/debutPage.inc.php"); ?>



<section class="rapport">
    <h2>Rapport d'activité des dons</h2>
    <table summary="Liste des lots" class='table table-bordered table-striped table-condensed table-responsive'>
        <caption>
            <label for=day>Rapport d'activité des dons pour l'année : </label>
            <select name=day><option></option>
                <script>
                    var annee = new Date(); // variable année en cours
                    for (i = annee.getFullYear(); i >= 1990; i--) //liste les année entre 1990 et aujourd'hui
                    {
                        if (i === annee.getFullYear())
                        {
                            document.write('<option value=' + i + ' selected>' + i + '</option>');
                        }
                        document.write('<option value=' + i + '>' + i + '</option>');
                    }
                </script>
            </select>
        </caption> 
        <thead>
            <tr>
                <th>Identifiant lot</th><th>Désignation</th><th>Quantité produit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Alimentation</td>
                <td>60</td>
            </tr>
            <!-- <tr>
                <td>2</td>
                <td>Fais pas ci, fais pas ça</td>
                <td class="text-center"><input type ='checkbox' checked="true" disabled /></td>
                <td>10/03/2016</td>
                <td><a href="#" class="btn btn-primary" role="button">Détail</a>
                    <a href="#" class="btn btn-primary" role="button">Modifier</a>
                    <a href="#" class="btn btn-primary" role="button">Supprimer</a>
                </td>
            </tr> -->
            <?php
            require_once("../../donnees/GestionnaireBDD.php");
            $dbh = GestionnaireBDD();
//            $lesDons = readAllDons();
//            echo $lesDons;
//            // Parcours du jeu d'enregistrement
//            $unDon = $lesDons->fetch();
//            while ($unDon) {
//                $id = $unDon["id"];
//                $designation = $unDon["designation"];
//                $qte = $unDon["nbrProduits"];
//                echo "<tr><td>$id</td><td>$designation</td><td class='text-center'>$qte</td>";
//                $unDon = $lesDons->fetch();
//            }
            ?>
        </tbody>
    </table>
</section>



<?php include ("../include/finPage.inc.php"); ?>
