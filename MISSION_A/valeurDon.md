CREATE VIEW valeurDon AS 

SELECT idFActure,dateFacture, familleproduit.libelle, idLot, getPrix(produit.id, dateFacture) AS valeurMarchandise 

FROM facturedon 

INNER JOIN lignefacture ON id = idFacture 

INNER JOIN lot ON lot.id=idLot 

INNER JOIN produit ON idProduit=produit.id 

INNER JOIN familleproduit ON idFamille=familleproduit.id
