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
CREATE TABLE `filmovi` (
	`Sifra_filma` INT(11) NOT NULL,
	`Naziv` VARCHAR(30) NULL DEFAULT NULL,
	`Reziser` VARCHAR(30) NULL DEFAULT NULL,
	`Glavni_glumci` VARCHAR(100) NULL DEFAULT NULL,
	`Godina_izdanja` INT(11) NULL DEFAULT NULL,
	`Kolicina_dvd` INT(11) NULL DEFAULT NULL,
	`Kolicina_vhs` INT(11) NULL DEFAULT NULL,
	`Slika_naslovnice` BLOB NULL,
	`Sifra_zanra` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`Sifra_filma`),
	INDEX `Sifra_zanra` (`Sifra_zanra`),
	CONSTRAINT `Filmovi_ibfk_1` FOREIGN KEY (`Sifra_zanra`) REFERENCES `zanr` (`Sifra_zanra`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
