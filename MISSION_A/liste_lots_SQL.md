##REQUETE :

SELECT lot.id, produit.designation,lot.nbrProduits FROM lot INNER JOIN produit ON produit.id = lot.idProduit WHERE lot.etat='6'


##RESULTAT : 
id designation nbrProduits
1   Crème 25cl     15
2  Beurre 250gr     20
3   Beurre 250gr   12
4   Crème 25cl      20
