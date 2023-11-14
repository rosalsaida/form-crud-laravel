-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for form_crud
CREATE DATABASE IF NOT EXISTS `form_crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `form_crud`;

-- Dumping structure for table form_crud.students
CREATE TABLE IF NOT EXISTS `students` (
  `students_id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` float NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`students_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table form_crud.students: ~0 rows (approximately)
INSERT INTO `students` (`students_id`, `name`, `email`, `gpa`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 'rosa', 'rosa@gmail.com', 3.96, '2023-11-13 09:50:50', '2023-11-13 09:50:50', NULL),
	(4, 'salsa', 'salsa@gmail.com', 3.8, '2023-11-13 10:25:25', '2023-11-13 10:25:25', NULL),
	(5, 'anna', 'anna@gmail.com', 3, '2023-11-13 10:43:59', '2023-11-13 23:14:25', '2023-11-13 23:14:25'),
	(6, 'jane (edited)', 'jane@gmail.com', 3.55, '2023-11-13 11:19:17', '2023-11-13 22:58:34', NULL),
	(7, 'james', 'james@yahoo.com', 4, '2023-11-13 11:22:46', '2023-11-13 22:23:14', '2023-11-13 22:23:14'),
	(8, 'jacob', 'jacob@gmail.com', 3.88, '2023-11-13 22:29:11', '2023-11-13 22:55:54', '2023-11-13 22:55:54'),
	(9, 'watanabe haruto', 'haruto@yahoo.com', 3.46, '2023-11-13 23:13:26', '2023-11-13 23:14:20', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
