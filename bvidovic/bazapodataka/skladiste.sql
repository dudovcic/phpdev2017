CREATE TABLE `skladisno_mjesto` (
	`Sifra_skladista` INT(11) NOT NULL,
	`Naziv` CHAR(30) NULL DEFAULT NULL,
	`Mjesto` CHAR(20) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_skladista`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE TABLE `radnik` (
	`Sifra_radnika` INT(11) NOT NULL,
	`Ime` CHAR(30) NULL DEFAULT NULL,
	`Prezime` CHAR(30) NULL DEFAULT NULL,
	`Sifra_skladista` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_radnika`),
	INDEX `Sifra_skladista` (`Sifra_skladista`),
	CONSTRAINT `Radnik_ibfk_1` FOREIGN KEY (`Sifra_skladista`) REFERENCES `skladisno_mjesto` (`Sifra_skladista`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE TABLE `proizvod` (
	`Sifra_proizvoda` INT(11) NOT NULL,
	`Naziv` CHAR(30) NULL DEFAULT NULL,
	`Sifra_skladista` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_proizvoda`),
	INDEX `Sifra_skladista` (`Sifra_skladista`),
	CONSTRAINT `Proizvod_ibfk_1` FOREIGN KEY (`Sifra_skladista`) REFERENCES `skladisno_mjesto` (`Sifra_skladista`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
