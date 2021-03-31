-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tutor
CREATE DATABASE IF NOT EXISTS `tutor` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tutor`;

-- Dumping structure for table tutor.add_courses
CREATE TABLE IF NOT EXISTS `add_courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tutor.add_courses: ~2 rows (approximately)
/*!40000 ALTER TABLE `add_courses` DISABLE KEYS */;
INSERT INTO `add_courses` (`id`, `year`, `degree`, `semester`, `subject`, `question_1`, `marks_1`, `answer_1`, `question_2`, `marks_2`, `answer_2`, `question_3`, `marks_3`, `answer_3`, `price`, `created_at`, `updated_at`) VALUES
	(2, '2021', 'BS CS', '2nd', 'Programming', 'CRM', '10', 'CRM', 'CMS', '10', 'CMS', 'CRM-2', '10', 'CRM-2', '300000', '2021-03-02 11:15:33', '2021-03-08 09:39:51'),
	(3, '2022', 'BS IT', '3rd', 'Networking', 'CCNA', '20', 'CCNA', 'MCSE', '20', 'MCSE', 'SAP', '20', 'SAP', '60', '2021-03-02 11:51:47', '2021-03-02 11:51:47'),
	(6, '2035', 'MS IT', '5', 'Certifications', 'HTML', '5', '987', 'CMS', '5', '90987', 'CRM-2', '4', '1244', '22000', '2021-03-03 06:35:24', '2021-03-03 06:35:59');
/*!40000 ALTER TABLE `add_courses` ENABLE KEYS */;

-- Dumping structure for table tutor.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tutor.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table tutor.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tutor.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_03_02_100949_create_add_courses_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tutor.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tutor.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tutor.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tutor.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `role`, `status_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nouman', 'noman.aslam408@gmail.com', 1, NULL, NULL, '$2y$10$z3ZBnvtRP.fEIDX5CliPf.Ti4qXj1YGLzZDWy1mFfbZqprU.CEwsG', NULL, '2021-03-02 10:26:30', '2021-03-02 10:26:30'),
	(2, 'Ali Raza', 'ali@asad.com', 2, NULL, NULL, '$2y$10$hx4NjeB.jdPm2IUQwKXqqeyQgYwYfWAB915aCdGlJfmqr69.xpdzq', NULL, '2021-03-02 10:59:50', '2021-03-02 10:59:50'),
	(6, 'Bilal', 'bilal@farman.com', 2, NULL, NULL, '$2y$10$3i2.IUyIrmwU6Dcmqa01vuysFlPoMC8YVAYuZVdUz5Y1ZBppnoSgi', NULL, '2021-03-08 12:12:26', '2021-03-08 12:12:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
