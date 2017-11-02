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


-- Dumping database structure for cars
CREATE DATABASE IF NOT EXISTS `cars` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cars`;

-- Dumping structure for table cars.cars
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year_of_production` smallint(6) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.cars: ~16 rows (approximately)
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT IGNORE INTO `cars` (`car_id`, `make`, `model`, `year_of_production`) VALUES
	(16, 'Audi', ' A4', 2004),
	(17, 'BMW', ' 116', 2010),
	(18, 'BMW', ' 116', 2010),
	(19, 'Ford', ' Focus', 2004),
	(20, 'BMW', ' 116', 2010),
	(21, 'BMW', ' 116', 2010),
	(22, 'BMW', ' 116', 2010),
	(23, 'Ford', ' Focus', 2004),
	(24, 'BMW', ' 116', 2009),
	(25, 'BMW', ' 116', 2011),
	(26, 'BMW', ' 116', 2012),
	(27, 'Opel', ' Astra', 2011),
	(28, 'Audi', ' Q3', 2012),
	(29, 'Audi', ' Q3', 2012),
	(30, 'Audi', ' Q7', 2012),
	(31, 'Audi', ' Q7', 2012);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;

-- Dumping structure for table cars.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table cars.customers: ~16 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT IGNORE INTO `customers` (`customer_id`, `first_name`, `family_name`) VALUES
	(14, ' Ivan', ' Ivanov'),
	(15, ' Ilia', ' Petrov'),
	(16, ' Ilia', ' Petrov'),
	(17, ' Stoyan', ' Lazarov'),
	(18, ' Ilia', ' Petrov'),
	(19, ' Ilia', ' Petrov'),
	(20, ' Ilia', ' Petrov'),
	(21, ' Stoyan', ' Lazarov'),
	(22, ' Iliaa', ' Petrova'),
	(23, ' Iliaa', ' Petrova'),
	(24, ' Katq', ' Ivanova'),
	(25, ' Teodor', ' Ivanov'),
	(26, ' Mincho', ' Minchov'),
	(27, ' Mincho', ' Minchov'),
	(28, ' Rado', ' Stoyanov'),
	(29, ' Rado', ' Stoyanov');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for view cars.deal
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `deal` (
	`date_sale` DATETIME NOT NULL,
	`amount` FLOAT NULL,
	`make` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`model` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`year_of_production` SMALLINT(6) NOT NULL,
	`first_name` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	`family_name` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for table cars.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(10) unsigned DEFAULT NULL,
  `customer_id` int(10) unsigned DEFAULT NULL,
  `date_sale` datetime NOT NULL,
  `amount` float DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `FK1_cars_id` (`car_id`),
  KEY `FK2_customers` (`customer_id`),
  CONSTRAINT `FK1_cars_id` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK2_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table cars.sales: ~16 rows (approximately)
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT IGNORE INTO `sales` (`sale_id`, `car_id`, `customer_id`, `date_sale`, `amount`) VALUES
	(1, 16, 14, '2017-10-24 20:50:07', 7000),
	(2, 17, 15, '2017-10-24 20:52:04', 24000),
	(3, 18, 16, '2017-10-24 20:59:31', 24000),
	(4, 19, 17, '2017-10-24 21:00:31', 3800),
	(5, 20, 18, '2017-10-25 19:05:43', 24000),
	(6, 21, 19, '2017-10-25 19:18:04', 24000),
	(7, 22, 20, '2017-10-25 19:18:31', 24000),
	(8, 23, 21, '2017-10-25 19:19:22', 3800),
	(9, 24, 22, '2017-10-25 21:02:16', 22000),
	(10, 25, 23, '2017-10-25 21:03:46', 22000),
	(11, 26, 24, '2017-10-25 21:05:54', 26000),
	(12, 27, 25, '2017-10-25 21:08:38', 16000),
	(13, 28, 26, '2017-10-25 21:14:40', 58000),
	(14, 29, 27, '2017-10-25 21:15:01', 28000),
	(15, 30, 28, '2017-10-25 21:16:42', 68000),
	(16, 31, 29, '2017-10-25 21:19:24', 68000);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

-- Dumping structure for view cars.deal
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `deal`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `deal` AS SELECT sales . `date_sale`, sales . `amount`, cars . `make`, cars . `model`, cars .`year_of_production`, customers.`first_name`, customers .`family_name`
FROM sales, cars, customers 
WHERE sales.`car_id` = cars.`car_id` 
AND sales.`customer_id` = customers.`customer_id` WITH CASCADED CHECK OPTION ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
