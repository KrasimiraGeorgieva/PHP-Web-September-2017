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


-- Dumping database structure for php-course
CREATE DATABASE IF NOT EXISTS `php-course` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php-course`;

-- Dumping structure for procedure php-course.all_students_data
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `all_students_data`(
	INOUT `Param1` INT
)
BEGIN
SELECT concat(first_name, last_name) AS full_name, student_number, course_name 
FROM student 
INNER JOIN student_subscriptions 
USING (student_id) 
ORDER BY student_number;
END//
DELIMITER ;

-- Dumping structure for table php-course.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table php-course.courses: ~5 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT IGNORE INTO `courses` (`course_id`, `course_name`) VALUES
	(1, 'PHP'),
	(2, 'Java'),
	(3, 'C++'),
	(4, 'JavaScript'),
	(5, 'C#');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table php-course.student
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `student_number` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_number` (`student_number`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table php-course.student: ~2 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT IGNORE INTO `student` (`student_id`, `first_name`, `last_name`, `student_number`) VALUES
	(1, 'Asen', 'Asenov', '123'),
	(2, 'Boris', 'Borisov', '124'),
	(3, 'Viktor', 'Ivanov', '125'),
	(4, 'Victor', 'Todorov', '128');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Dumping structure for table php-course.student_subscriptions
CREATE TABLE IF NOT EXISTS `student_subscriptions` (
  `course_id` int(11) unsigned NOT NULL,
  `student_id` int(11) unsigned NOT NULL,
  KEY `FK1_courses` (`course_id`),
  KEY `FK2_student` (`student_id`),
  CONSTRAINT `FK1_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK2_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table php-course.student_subscriptions: ~2 rows (approximately)
/*!40000 ALTER TABLE `student_subscriptions` DISABLE KEYS */;
INSERT IGNORE INTO `student_subscriptions` (`course_id`, `student_id`) VALUES
	(5, 1),
	(5, 2),
	(1, 4),
	(3, 3);
/*!40000 ALTER TABLE `student_subscriptions` ENABLE KEYS */;

-- Dumping structure for trigger php-course.student_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `student_before_insert` BEFORE INSERT ON `student` FOR EACH ROW BEGIN
IF LENGTH (NEW.student_number) > 5 THEN
CALL `'The number must be at least 5 digits.'`;
END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
