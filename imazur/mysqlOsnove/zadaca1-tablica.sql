/* zadatak 1

*/
CREATE TABLE `odjeli` (
	`ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`odjel` VARCHAR(55) NOT NULL,
	`voditelj` VARCHAR(66) NOT NULL,
	PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
;
CREATE TABLE `zaposlenici` (
	`ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`odjel` VARCHAR(55) NOT NULL,
	`ime` VARCHAR(55) NOT NULL,
	`prezime` VARCHAR(77) NOT NULL,
	PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
AUTO_INCREMENT=10
;
CREATE TABLE `voditelji` (
	`ID` INT(11) NOT NULL,
	`ime` VARCHAR(55) NOT NULL,
	`prezime` VARCHAR(79) NOT NULL,
	`odjel` VARCHAR(79) NOT NULL
)
ENGINE=InnoDB
;
INSERT INTO `zaposlenici` (`ID`,`odjel`, `ime`, `prezime`) VALUES

    -> (1, 'market', 'ivo','ivoo'),
    -> (2, 'market', 'pero', 'perin'),
    -> (3, 'market', 'ana', 'anina'),
    -> (4, 'racun', 'eva', 'evina'),
    -> (5, 'sklad', 'simo', 'simic'),
    -> (6, 'sklad', 'kaja', 'katicina'),
    -> (7, 'sklad', 'joka', 'joke'),
    -> (8, 'racun', 'ivan', 'ivin'),
    -> (9, 'market', 'maja', 'majic');

INSERT INTO `voditelji` (`ID`, `ime`, `prezime`, `odjel`) VALUES
    -> (1, 'ivo', 'ivoo', 'market'),
    -> (2, 'kaja', 'katicina', 'sklad'),
    -> (3, 'eva', 'evina', 'racun');

INSERT INTO `odjeli` (`ID`, `odjel`) VALUES
    -> (1, 'market'),
    -> (2, 'racun'),
    -> (3, 'sklad');

--------------------------------------------

