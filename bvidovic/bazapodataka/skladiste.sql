CREATE TABLE `skladisno_mjesto` (
	`Sifra_skladista` INT(11) NOT NULL,
	`Naziv` CHAR(30) NULL DEFAULT NULL,
	`Mjesto` CHAR(20) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_skladista`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
