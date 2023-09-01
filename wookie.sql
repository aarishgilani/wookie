-- -------------------------------------------------------------
-- TablePlus 5.3.9(502)
--
-- https://tableplus.com/
--
-- Database: wookie
-- Generation Time: 2023-08-31 18:12:45.0250
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'Aarish', 'aarishgilani10@gmail.com', 'password'),
(4, 'Aarish', 'aarish@vincentdesign.ca', 'password'),
(5, 'Aarsh', 'aarish@gmail.com', 'password'),
(6, 'Aarish', 'giberish@gmail.com', 'password'),
(7, 'Aarish', 'jksdhg@gmail.com', 'pas'),
(8, 'Aarish', 'skdgfslak@email.com', 'skalfsdk'),
(9, 'aaasfa', 'skjdgfhskaj', 'skdlgkj'),
(10, 'dsfsd', 'kjsdk', 'jlskdjfl'),
(11, 'ksdngklsajglk', 'kjsdkljgldk', 'kfjsdlkagjl'),
(12, 'sdg,asngd', 'ksjdg', 'ksdjlkgj'),
(13, 'sdg,asngd', 'ksjdgksljv', 'sdlkvs'),
(14, 'sfjsldkfjlsdj', 'khsafkhsdkjh', 'jsdklvjsdkljv'),
(15, 'Manny', 'mannydelgato@gmail.com', 'password');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;