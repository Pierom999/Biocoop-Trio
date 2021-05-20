DELIMITER //
CREATE DEFINER=root@localhost FUNCTION getPrix(unProduit INT, uneDate DATE) RETURNS decimal(10,1)
BEGIN
SELECT dateDebut INTO @dateD FROM tarif WHERE idProduit=unProduit AND dateFin IS NULL;
IF uneDate<@dateD THEN
    RETURN (SELECT prix FROM tarif WHERE idProduit=unProduit AND uneDate>=dateDebut AND uneDate<dateFin);
ELSE
    RETURN (SELECT prix FROM tarif WHERE idProduit=unProduit AND uneDate>@dateD AND dateFin IS NULL) ;
END IF;
END //
DELIMITER ;
