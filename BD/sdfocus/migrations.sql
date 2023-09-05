-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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

-- Listage de la structure de table sdfocus. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sdfocus.migrations : ~14 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2015_10_19_214424_create_orchid_roles_table', 1),
	(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
	(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
	(7, '2017_09_17_125801_create_notifications_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(11, '2023_07_29_095051_create_sessions_table', 2),
	(12, '2023_07_29_122246_create_parcs_table', 3),
	(13, '2023_08_27_091547_add_phone_to_users_table', 4),
	(14, '2023_08_27_091936_dcm_evaluations_create_table', 5),
	(16, '2014_10_12_000000_create_users_table', 6),
	(17, '2014_10_12_200000_add_two_factor_columns_to_users_table', 7),
	(18, '2015_04_12_000000_create_orchid_users_table', 7);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
