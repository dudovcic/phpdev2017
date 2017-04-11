CREATE TABLE `clanovi` (
	`Clanski_broj` INT(11) NOT NULL,
	`Ime` VARCHAR(30) NULL DEFAULT NULL,
	`Prezime` VARCHAR(30) NULL DEFAULT NULL,
	`Adresa` VARCHAR(30) NULL DEFAULT NULL,
	`Telefon` CHAR(15) NULL DEFAULT NULL,
	`Datum_uclanjenja` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`Clanski_broj`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE TABLE `zanr` (
	`Sifra_zanra` INT(11) NOT NULL,
	`Naziv` VARCHAR(30) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_zanra`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
