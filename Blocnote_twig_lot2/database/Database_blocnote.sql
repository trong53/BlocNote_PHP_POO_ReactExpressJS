-- --------------------------------------------------------
-- Hôte:                         localhost
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour blocnote
CREATE DATABASE IF NOT EXISTS `blocnote` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blocnote`;

-- Listage de la structure de la table blocnote. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Listage des données de la table blocnote.posts : ~7 rows (environ)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `description`, `created_at`) VALUES
	(1, 'test1', 'test1', '2023-01-23 10:35:08'),
	(2, 'test2', 'test2', '2023-01-23 17:53:34'),
	(3, 'test3', 'test3', '2023-01-23 17:53:47'),
	(4, 'Test5', 'Test5', '2023-01-24 18:27:30'),
	(5, 'Test5', 'Test5', '2023-01-24 18:29:58'),
	(6, 'Test5', 'Test5', '2023-01-24 20:29:08'),
	(7, 'test6', 'test6', '2023-01-24 20:29:38'),
	(8, 'test7', 'test7', '2023-01-25 10:58:57');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
