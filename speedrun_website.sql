-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 avr. 2023 à 15:15
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `speedrun_website`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `game_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `game_picture` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `game_picture`) VALUES
(1, 'CASTLEVANIA', 'Castlevania est une série de jeux d\'action-aventure gothique avec des éléments de plateforme, de combat et de puzzle. Le joueur y incarne un chasseur de vampires combattant des créatures surnaturelles et explore des châteaux sombres et labyrinthiques.', NULL),
(2, 'PORTAL', 'Portal est un jeu vidéo de puzzle développé par Valve Corporation. Le joueur utilise un pistolet à portails pour résoudre des énigmes dans des salles d\'essai contrôlées par une intelligence artificielle malveillante.', NULL),
(3, 'CELESTE', 'Celeste est un jeu vidéo de plateforme qui suit les aventures de Madeline alors qu\'elle escalade une montagne mystérieuse, avec des défis de plateforme difficiles et des thèmes de santé mentale.', NULL),
(4, 'LONELY MOUNTAINS DOWNHILL', 'Jeu de course de descente de montagne où le joueur doit traverser des parcours en évitant les obstacles et en collectant des pièces.', NULL),
(5, 'ROCKMAN 4', 'Jeu de plateforme d\'action où le joueur incarne le robot Mega Man pour vaincre les ennemis et récupérer leurs armes.', NULL),
(6, 'ALEX KIDD IN MIRACLE WORLD DX', 'Alex Kidd in Miracle World DX est un jeu de plateforme classique remasterisé qui suit les aventures d\'Alex Kidd dans un monde rempli d\'énigmes, de pièges et de boss difficiles. Le but du jeu est d\'aider Alex Kidd à sauver le royaume de Radaxian de Janken le Grand, en combattant des ennemis, en collectant des pièces et en résolvant des énigmes tout au long de sa quête. Avec des graphismes améliorés et de nouvelles fonctionnalités, Alex Kidd in Miracle World DX est une expérience nostalgique pour les fans du jeu original et une découverte passionnante pour les nouveaux joueurs.', NULL),
(7, 'THE LUCKY DIME CAPER STARRING DONALD DUCK', 'Dans The Lucky Dime Caper Starring Donald Duck, vous incarnez Donald Duck à la recherche de pièces de monnaie volées par le méchant Magica De Spell pour sauver ses neveux. Le but est de traverser différents niveaux remplis d\'ennemis et d\'obstacles tout en collectant des pièces et en résolvant des énigmes pour récupérer toutes les pièces volées.', NULL),
(8, 'TEENAGE MUTANT NINJA TURTLES', 'Teenage Mutant Ninja Turtles est un jeu vidéo où l\'on incarne les célèbres Tortues Ninja pour combattre les ennemis et sauver leur ville. Le but est de vaincre le chef des méchants et restaurer la paix.', NULL),
(9, 'RESIDENT EVIL 2 REMAKE', 'Resident Evil 2 Remake est un jeu de survival-horror en vue à la troisième personne, où le joueur incarne un des deux personnages principaux, Leon S. Kennedy ou Claire Redfield, dans leur lutte pour survivre contre des hordes de zombies et autres créatures infectées dans la ville de Raccoon City. Le but du jeu est de résoudre des énigmes, collecter des ressources et progresser à travers différents environnements afin de découvrir la source de l\'épidémie et mettre un terme à la menace virale.', NULL),
(10, 'LITTLE BIG ADVENTURE', 'Little Big Adventure est un jeu d\'aventure sorti en 1994 où le joueur incarne Twinsen, un héros doté de pouvoirs spéciaux qui doit sauver sa planète du joug d\'un tyran maléfique. Le jeu se déroule dans un monde ouvert où le joueur doit explorer différents lieux, interagir avec les personnages non-joueurs, résoudre des énigmes et combattre des ennemis. Le but ultime est de vaincre le tyran pour sauver la planète et rétablir la paix.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rankings`
--

DROP TABLE IF EXISTS `rankings`;
CREATE TABLE IF NOT EXISTS `rankings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `game_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `time_seconds` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `game_id` (`game_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `runners`
--

DROP TABLE IF EXISTS `runners`;
CREATE TABLE IF NOT EXISTS `runners` (
  `runners_id` int NOT NULL AUTO_INCREMENT,
  `runners_alias` varchar(255) NOT NULL,
  PRIMARY KEY (`runners_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(320) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` char(60) NOT NULL,
  `registration_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `user_email`, `profile_picture`, `password`, `registration_time`) VALUES
(2, 'AdministrateurS', 'thurtwings@gmail.com', '6433c26e01cf6.jpeg', '$2y$10$GgkpH4fAshtVn2m73TZn6unBWkOhzaE/mpMmecUdL6AZjIAewFGz2', '2023-04-08 21:06:27'),
(3, 'AdministrateurG', 'thurtwings@gmail.com', '6433d0d85ac72.jpeg', '$2y$10$wZQQhWFTtAj.SyKJhlfsAeURc4itQF5BZDdn3kDverfA.E2zVO97S', '2023-04-10 09:02:45');

-- --------------------------------------------------------

--
-- Structure de la table `user_speedrun_runs`
--

DROP TABLE IF EXISTS `user_speedrun_runs`;
CREATE TABLE IF NOT EXISTS `user_speedrun_runs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `game_title` (`game_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `video_url` varchar(255) NOT NULL,
  `user_id` int DEFAULT NULL,
  `game_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `game_id` (`game_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_id`) VALUES
(1, 'CASTLEVANIA (Any%) en 12:55', NULL, 'https://www.youtube.com/embed/QVeLfzUyngw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', 2, NULL, NULL),
(2, 'PORTAL en 15:31 par Biiwix | SPEEDONS', NULL, 'https://www.youtube.com/embed/PsirprHHNyw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', 2, NULL, NULL),
(3, 'CELESTE en TAS FAREWELL par KILAYE en 10:37.1 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/MsXOlGhJylk?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', NULL, NULL, NULL),
(4, 'LONELY MOUNTAINS DOWNHILL en NG+ / 16 TRACKS par ROLESAFE en 30:56 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/Ka84DSfjiGE?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', NULL, NULL, NULL),
(5, 'ROCKMAN 4 BCAS en ANY% par BARRYLESJAMBES en 27:02.8 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/bCqe-FqjfT8', NULL, NULL, NULL),
(6, 'ALEX KIDD IN MIRACLE WORLD DX en ANY% par STRACKEL en 20:26.07 | SPEEDONS 2023', NULL, 'https://www.youtube.com/embed/mLMS96jxeK4', NULL, NULL, NULL),
(7, 'THE LUCKY DIME CAPER STARRING DONALD DUCK en BEAT THE GAME par CHACHAMAXX en 16:29 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/8X_b--aneik', NULL, NULL, NULL),
(8, 'TEENAGE MUTANT NINJA TURTLES en 22:12 par LF712  | SPEEDONS', NULL, 'https://www.youtube.com/embed/-qe2D99W6nM', NULL, NULL, NULL),
(9, 'RESIDENT EVIL 2 REMAKE en 53:54 par Petrichor | SPEEDONS', NULL, 'https://www.youtube.com/embed/G8GkHg51qnM', 2, NULL, NULL),
(10, 'LITTLE BIG ADVENTURE (any%) en 30:13 par Blake_Faythe | SPEEDONS', NULL, 'https://www.youtube.com/embed/8-_yIS-w8v8', NULL, NULL, NULL);
(11, 'LION KING en ANY% EASY par NEETSEL en 13:16.06', NULL, 'https://www.youtube.com/embed/ljp2BXJ3Kcw', NULL, NULL, NULL),
(12, 'CONCERT CANBLASTER', NULL, 'https://www.youtube.com/embed/pcv4NLaPSIs', NULL, NULL, NULL);
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_categories_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rankings`
--
ALTER TABLE `rankings`
  ADD CONSTRAINT `fk_rankings_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rankings_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rankings_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_videos_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_videos_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_videos_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
