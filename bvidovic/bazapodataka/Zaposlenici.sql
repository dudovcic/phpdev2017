CREATE TABLE `odjeli` (
	`Sifra_odjela` CHAR(10) NOT NULL,
	`Naziv_odjela` VARCHAR(50) NOT NULL,
	`Lokacija_odjela` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`Sifra_odjela`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
CREATE TABLE `zaposlenici` (
	`Sifra_zaposlenika` BIGINT(20) NOT NULL,
	`Ime` VARCHAR(50) NOT NULL,
	`Prezime` VARCHAR(50) NOT NULL,
	`Sifra_odjela` CHAR(10) NOT NULL,
	PRIMARY KEY (`Sifra_zaposlenika`),
	INDEX `Sifra_odjela` (`Sifra_odjela`),
	CONSTRAINT `Zaposlenici_ibfk_1` FOREIGN KEY (`Sifra_odjela`) REFERENCES `odjeli` (`Sifra_odjela`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
