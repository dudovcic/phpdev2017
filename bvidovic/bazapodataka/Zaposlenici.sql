CREATE TABLE `odjeli` (
	`Sifra_odjela` CHAR(10) NOT NULL,
	`Naziv_odjela` VARCHAR(50) NOT NULL,
	`Lokacija_odjela` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`Sifra_odjela`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;