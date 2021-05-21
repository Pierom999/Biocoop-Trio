## REQUETE

DROP TRIGGER IF EXISTS check_etat_before_update;
DELIMITER $$
CREATE TRIGGER check_etat_before_update 
BEFORE UPDATE ON lot 
FOR EACH ROW
BEGIN
  SELECT etat INTO @etat FROM lot WHERE OLD.id=NEW.id;
    IF @etat=1 AND NEW.etat=4 THEN
    SIGNAL sqlstate '45000'SET message_text = 'Ce lot doit passer par le statut de lot à éliminer avant le statut d éliminé';

        ELSEIF @etat=1 AND NEW.etat=6 THEN
    SIGNAL sqlstate '45000'SET message_text = 'Ce lot doit passer par le statut de lot à donner à une association caritative avant le statut de donné à une association caritative';

        ELSEIF @etat=2 THEN
        SIGNAL sqlstate '45000'SET message_text = 'Ce lot a été vendu';

        ELSEIF @etat=3 AND NEW.etat!=4 THEN
       SIGNAL sqlstate '45000'SET message_text = 'Ce lot est trop détérioré pour être vendu et/ou la DLC est dépassée';

        ELSEIF @etat=4 THEN
        SIGNAL sqlstate '45000'SET message_text = 'Ce lot a été éliminé';

        ELSEIF @etat=5 AND NEW.etat<3 THEN
        SIGNAL sqlstate '45000'SET message_text = 'Ce lot ne peut plus être à vendre ou vendu';

        ELSEIF @etat=6 THEN
        SIGNAL sqlstate '45000'SET message_text = 'Ce lot a été donné'; 

    END IF;
END $$
DELIMITER ;
