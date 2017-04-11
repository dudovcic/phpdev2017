CREATE TABLE `odjeli` (
	`ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`odjel` VARCHAR(55) NOT NULL,
	`voditelj` VARCHAR(66) NOT NULL,
	`zaposelnici odjela` VARCHAR(77) NOT NULL,
	PRIMARY KEY (`ID`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;


