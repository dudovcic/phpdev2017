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


-- Dumping database structure for tvrtka
CREATE DATABASE IF NOT EXISTS `tvrtka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tvrtka`;

-- Dumping structure for table tvrtka.polaznici
CREATE TABLE IF NOT EXISTS `polaznici` (
  `sifra` int(5) NOT NULL AUTO_INCREMENT,
  `ime` varchar(25) NOT NULL,
  `prezime` varchar(25) NOT NULL,
  `mjesto` varchar(55) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tvrtka.polaznici: ~3 rows (approximately)
/*!40000 ALTER TABLE `polaznici` DISABLE KEYS */;
INSERT INTO `polaznici` (`sifra`, `ime`, `prezime`, `mjesto`) VALUES
	(1, 'Ana', 'Milic', 'Zagreb'),
	(2, 'Sanja', 'Tarak', 'Split'),
	(3, 'Mladen', 'Gork', 'Osijek');
/*!40000 ALTER TABLE `polaznici` ENABLE KEYS */;

-- Dumping structure for table tvrtka.tecajevi
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `sifra_tecaja` varchar(5) NOT NULL,
  `naziv_tecaja` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tvrtka.tecajevi: ~0 rows (approximately)
/*!40000 ALTER TABLE `tecajevi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecajevi` ENABLE KEYS */;

-- Dumping structure for table tvrtka.upisi
CREATE TABLE IF NOT EXISTS `upisi` (
  `sifra` int(10) NOT NULL,
  `sifra_tecaja` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tvrtka.upisi: ~0 rows (approximately)
/*!40000 ALTER TABLE `upisi` DISABLE KEYS */;
/*!40000 ALTER TABLE `upisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
