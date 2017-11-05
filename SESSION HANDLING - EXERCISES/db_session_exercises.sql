-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for session_exercises
DROP DATABASE IF EXISTS `session_exercises`;
CREATE DATABASE IF NOT EXISTS `session_exercises` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `session_exercises`;

-- Dumping structure for table session_exercises.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `born_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table session_exercises.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `born_on`) VALUES
	(4, 'Viktor', '$2y$10$U7fDkX5QtCVxS3D45Kkc2On6aaIE1cEz2pQWp.MuH/pZdAUk1sdXK', 'Viktor', 'Kirov', '1988-06-08 00:00:00'),
	(5, 'Gogata', '$2y$10$YB6V5.IV1CCq16ji//U.5ecNTLpbVlooRiOI4E8AXKga.W7P2adRO', 'Gosho', 'Peshev', '1987-07-03 00:00:00'),
	(6, 'Stamat', '$2y$10$6RhAxb6wivILyVjfoqc4hePiTxSeIe26FyIAfLYAe98OUfInj3Sgi', 'Kireto', 'Kirilov', '1988-02-02 00:00:00'),
	(7, 'Misha', '$2y$10$CIBUO5MWw3OQiHZkLO3dZOtseQ8scOkNdTONQFekzHVIokDWQEGAW', '', 'Petrova', '1987-01-01 00:00:00'),
	(8, 'Gosho', '$2y$10$hd3Lt/EQA7s3ndb576nXMe7XVChKTHbN37DRGhcY7C97tilt7.fhu', 'Gosho', 'Goshov', '1990-05-05 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
