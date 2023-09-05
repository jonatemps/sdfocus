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

-- Listage de la structure de table sdfocus. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=643 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table sdfocus.users : ~8 rows (environ)
INSERT INTO `users` (`id`, `name`, `phone`, `fonction`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
	(1, 'admin', '', '', 'admin@admin.com', NULL, '$2y$10$JwzY1gi0Z4EDU9MURvwBt.oYUBvN6VVAvYAlaecbLwAnR3DyZLU22', NULL, NULL, NULL, 'EL6wDPUV6gMZ27hBp3Y3LS5bHkZzSfxrAUBGPCiboPKtuow5kx4JoOZxoyNh', '2023-07-27 20:13:34', '2023-07-30 11:01:33', '{"platform.index": "1", "platform.systems.dir": "1", "platform.systems.funa": "1", "platform.systems.roles": "1", "platform.systems.users": "1", "platform.systems.kikwit": "1", "platform.systems.lukunga": "1", "platform.systems.tshangu": "1", "platform.systems.bandundu": "1", "platform.systems.mont amba": "1", "platform.systems.attachment": "1"}'),
	(2, 'Charly PAMBU', '', '', 'charly.pambu@orange.cd', NULL, '$2y$10$pdUWOPQYahTm8p13Dqc4iOIDEe4vaI6dpnpk/JOS6lXvxN5NSfPUe', NULL, NULL, NULL, NULL, '2023-07-30 09:59:46', '2023-07-30 11:03:08', '{"platform.index": "1", "platform.systems.dir": "1", "platform.systems.funa": "1", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "1", "platform.systems.lukunga": "1", "platform.systems.tshangu": "1", "platform.systems.bandundu": "1", "platform.systems.mont amba": "1", "platform.systems.attachment": "0"}'),
	(3, 'Moise KASONGO', '', '', 'Moise.KASONGO@gmail.com', NULL, '$2y$10$ffr.diUOa.W6bJK0mrdw9uWHDho5CxRJ61SBeBgt7Pjz44WU8nOJ6', NULL, NULL, NULL, NULL, '2023-07-30 10:01:21', '2023-07-30 11:00:42', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "1", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}'),
	(4, 'Eric MUAKA', '', '', 'Eric.MUAKA@gmail.com', NULL, '$2y$10$1pEqyQeuWHvVpqVAr.a/zO0LdhAHqgWAVE5H9QveRVPvV/tYHg8bq', NULL, NULL, NULL, NULL, '2023-07-30 10:02:06', '2023-07-30 11:00:31', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "1", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}'),
	(5, 'Love LUZOLO', '', '', 'Love.LUZOLO@gmail.com', NULL, '$2y$10$Z9ozaM694N3uKzhUPLZ6OubPqlMXwxkVsb3BJUzootwH8GqLDSQcK', NULL, NULL, NULL, NULL, '2023-07-30 10:03:04', '2023-07-30 11:00:17', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "1", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}'),
	(6, 'Prospère KAYOMBA', '', '', 'Prospere.KAYOMBA@orange.com', NULL, '$2y$10$7z9DVdk4VMQl7riyDgx9l.bRZPH0r.KT5LH7Aq0RnNrGMST95lwNe', NULL, NULL, NULL, NULL, '2023-07-30 10:04:23', '2023-07-30 11:00:04', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "1", "platform.systems.attachment": "0"}'),
	(7, 'Patrick DIANTEWA', '', '', 'Patrick.DIANTEWA@orange.com', NULL, '$2y$10$kf417.WbG9PDLRvWmetes.mt6d2JbyjfIKPZhFsSoQ6vVQk0LQ/Di', NULL, NULL, NULL, NULL, '2023-07-30 10:05:29', '2023-07-30 10:59:51', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "1", "platform.systems.tshangu": "0", "platform.systems.bandundu": "0", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}'),
	(8, 'Elie MATONDO', '', '', 'Elie.MATONDO@orange.com', NULL, '$2y$10$gzctO0jb73dhSaddY5RuCOTmVd8XkEi.k/X2zImt9g2/BjGg3cYaS', NULL, NULL, NULL, NULL, '2023-07-30 10:06:13', '2023-07-30 10:59:39', '{"platform.index": "1", "platform.systems.dir": "0", "platform.systems.funa": "0", "platform.systems.roles": "0", "platform.systems.users": "0", "platform.systems.kikwit": "0", "platform.systems.lukunga": "0", "platform.systems.tshangu": "0", "platform.systems.bandundu": "1", "platform.systems.mont amba": "0", "platform.systems.attachment": "0"}');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
