-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for trgovina
CREATE DATABASE IF NOT EXISTS `trgovina` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `trgovina`;

-- Dumping structure for table trgovina.gradja
CREATE TABLE IF NOT EXISTS `gradja` (
  `id` int(11) NOT NULL,
  `materijal` char(55) NOT NULL,
  `id_skladista` int(11) unsigned NOT NULL AUTO_INCREMENT,
  KEY `FK_gradja_skladista` (`id_skladista`),
  CONSTRAINT `FK_gradja_skladista` FOREIGN KEY (`id_skladista`) REFERENCES `skladista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table trgovina.gradja: ~8 rows (approximately)
/*!40000 ALTER TABLE `gradja` DISABLE KEYS */;
INSERT INTO `gradja` (`id`, `materijal`, `id_skladista`) VALUES
	(1, 'stolica', 1),
	(2, 'stol', 2),
	(3, 'lampe', 1),
	(4, 'čavli', 2),
	(5, 'daske', 3),
	(6, 'ormari', 1),
	(8, 'krevet', 1),
	(7, 'posude', 2);
/*!40000 ALTER TABLE `gradja` ENABLE KEYS */;

-- Dumping structure for table trgovina.skladista
CREATE TABLE IF NOT EXISTS `skladista` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `skladiste` char(55) NOT NULL,
  `voditelj` char(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table trgovina.skladista: ~3 rows (approximately)
/*!40000 ALTER TABLE `skladista` DISABLE KEYS */;
INSERT INTO `skladista` (`id`, `skladiste`, `voditelj`) VALUES
	(1, 'skladiste1', 'marko marković'),
	(2, 'skladiste2', 'goran goranić'),
	(3, 'skladiste3', 'ivan ivanić');
/*!40000 ALTER TABLE `skladista` ENABLE KEYS */;

-- Dumping structure for table trgovina.zaposlenici
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `id` int(11) NOT NULL,
  `zaposlenik` char(55) NOT NULL,
  `id_skladista` int(11) unsigned NOT NULL AUTO_INCREMENT,
  KEY `FK2` (`id_skladista`),
  CONSTRAINT `FK2` FOREIGN KEY (`id_skladista`) REFERENCES `skladista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table trgovina.zaposlenici: ~0 rows (approximately)
/*!40000 ALTER TABLE `zaposlenici` DISABLE KEYS */;
INSERT INTO `zaposlenici` (`id`, `zaposlenik`, `id_skladista`) VALUES
	(1, 'Kristijan Krstić', 2),
	(2, 'Ivica ivić', 3),
	(3, 'Damir Damirković', 1),
	(4, 'Toni Tonković', 1),
	(5, 'Božo Božić', 2),
	(6, 'Jura Jurić', 3),
	(7, 'Igor Igić', 2);
/*!40000 ALTER TABLE `zaposlenici` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
