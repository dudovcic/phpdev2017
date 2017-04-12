/* zadatak 2.1

*/

CREATE DATABASE `gbm`;
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

/* zadatak 2.2

*/

Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.

C:\>cd xampp

C:\xampp>cd mysql

C:\xampp\mysql>cd bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 3
Server version: 10.1.21-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2016, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> USE trgovina
Database changed

MariaDB [trgovina]> CREATE TABLE `skladiste1` (`ID` INT(10) UNSIGNED NOT NULL AU
TO_INCREMENT,
    ->  `materijal` VARCHAR(55) NOT NULL,
    -> PRIMARY KEY (`ID`)
    -> )
    -> ENGINE=InnoDB
    -> ;
Query OK, 0 rows affected (0.28 sec)

MariaDB [trgovina]> CREATE TABLE `skladiste2` (`ID` INT(10) UNSIGNED NOT NULL AU
TO_INCREMENT,
    ->  `alat` VARCHAR(55) NOT NULL,
    -> PRIMARY KEY (`ID`)
    -> )
    -> ENGINE=InnoDB
    -> ;
Query OK, 0 rows affected (0.42 sec)

MariaDB [trgovina]> CREATE TABLE `skladiste3` (`ID` INT(10) UNSIGNED NOT NULL AU
TO_INCREMENT,
    ->  `ostalo` VARCHAR(55) NOT NULL,
    ->
    -> PRIMARY KEY (`ID`)
    -> )
    -> ENGINE=InnoDB
    -> ;
Query OK, 0 rows affected (0.34 sec)

MariaDB [trgovina]>