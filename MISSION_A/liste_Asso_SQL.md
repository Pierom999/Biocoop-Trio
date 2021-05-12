## REQUETE :

SELECT nom, adresse FROM association WHERE NOT EXISTS (SELECT * FROM facturedon WHERE facturedon.idAssociation = association.id)

## RESULTAT :

Secours Populaire
