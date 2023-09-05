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

-- Listage de la structure de table sdfocus. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sdfocus.roles : ~6 rows (environ)
INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
	(1, 'BANDUNDU', 'BANDUNDU', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "1", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}', '2023-07-30 10:57:09', '2023-07-30 10:57:09'),
	(2, 'FUNA', 'FUNA', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "1", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}', '2023-07-30 10:57:31', '2023-07-30 10:57:31'),
	(3, 'KIKWIT', 'KIKWIT', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "1", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}', '2023-07-30 10:57:59', '2023-07-30 10:57:59'),
	(4, 'LUKUNGA', 'LUKUNGA', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "1", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}', '2023-07-30 10:58:27', '2023-07-30 10:58:27'),
	(5, 'MONT AMBA', 'MONT AMBA', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "1", "platform.systems.attachment": "0"}', '2023-07-30 10:58:47', '2023-07-30 10:58:47'),
	(6, 'TSHANGU', 'TSHANGU', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "1", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}', '2023-07-30 10:59:10', '2023-07-30 10:59:10'),
	(7, 'DIRECTEUR', 'DIRECTEUR', '{"platform.index": "1", "platform.systems.dir": "1", "platform.systems.funa": "1", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "1", "platform.systems.lukunga": "1", "platform.systems.tshangu": "1", "platform.systems.bandundu": "1", "platform.systems.mont amba": "1", "platform.systems.attachment": "0"}', '2023-07-30 11:02:36', '2023-07-30 11:02:36');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
