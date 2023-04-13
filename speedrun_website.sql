-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 avr. 2023 à 10:09
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
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `article_cover_picture_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text,
  `user_id` int NOT NULL,
  PRIMARY KEY (`article_id`),
  KEY `fk_article_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_cover_picture_link`, `article_title`, `article_content`, `user_id`) VALUES
(1, 'article01Image.png', 'le speedrun kesako?!', 'Le speedrun est une pratique de jeu vidéo consistant à terminer un jeu aussi rapidement que possible. Les joueurs s\'entraînent pour atteindre des temps records en utilisant des techniques spécifiques, telles que des bugs ou des raccourcis, pour finir le jeu plus rapidement. <br><br>Le speedrun a connu une évolution rapide ces dernières années. Avec l\'essor des réseaux sociaux et des plateformes de streaming, de plus en plus de joueurs ont commencé à s\'intéresser à cette pratique. Les communautés en ligne se sont développées, permettant aux joueurs de partager des astuces et des techniques pour améliorer leurs temps. De plus, de nombreux événements de speedrun ont été organisés à travers le monde, attirant des milliers de spectateurs en ligne et en personne. <br><br>Le speedrun est devenu une pratique très compétitive, avec des records du monde très convoités et une forte culture de la rivalité entre les joueurs. Les jeux les plus populaires pour le speedrun sont souvent les jeux classiques de l\'ère des consoles, comme les jeux Super Mario Bros, The Legend of Zelda ou Sonic the Hedgehog.<br><br> Malgré cette popularité croissante, certains critiques ont mis en avant des inquiétudes concernant l\'utilisation de logiciels tiers pour aider les joueurs à améliorer leurs temps, ou le risque de causer des dommages au matériel de jeu. Cependant, la communauté du speedrun continue à prospérer et à se développer, avec de nouveaux jeux et des records du monde battus régulièrement. <br><br>', 2),
(2, 'HowStartSR.png', 'Tuto: démarrer le speedrun', 'Vous souhaitez démarrer le speedrun? On vous aide, voici quelques étapes de base pour commencer :<br><br>\n\n1.Choisissez un jeu : Tout d\'abord, vous devez choisir le jeu que vous souhaitez speedrunner. Il peut s\'agir de n\'importe quel jeu, mais il est préférable de commencer par un jeu avec lequel vous êtes familier et que vous aimez jouer.<br><br>\n\n2.Apprenez le jeu : Pour réussir un speedrun, vous devez être très familier avec le jeu. Prenez le temps de jouer au jeu plusieurs fois et d\'apprendre tous les niveaux, les ennemis et les objets. Regardez également des vidéos de speedruns existants pour voir comment les autres joueurs ont réussi.<br><br>\n\n3.Trouvez des astuces : Les astuces sont des techniques qui permettent de terminer un jeu plus rapidement. Recherchez sur internet des astuces pour le jeu que vous avez choisi, regardez des vidéos de speedruns pour en apprendre davantage sur les astuces que les autres joueurs utilisent.<br><br>\n\n4.Entraînez-vous : Le speedrun est une pratique qui exige beaucoup de temps et de pratique. Entraînez-vous en utilisant les astuces que vous avez apprises et essayez de battre votre propre temps à chaque fois que vous jouez.<br><br>\n\n5.Utilisez des outils : Pour vous aider à améliorer votre temps de speedrun, utilisez des outils tels que des chronomètres et des compteurs de frames. Ces outils peuvent vous aider à suivre votre progression et à identifier les domaines dans lesquels vous pouvez vous améliorer.<br><br>\n\nEn suivant ces étapes de base, vous pouvez commencer votre voyage dans le monde passionnant du speedrun. N\'oubliez pas de rester patient et persévérant, car le speedrun peut être un défi difficile mais extrêmement gratifiant. Bonne chance !<br><br>', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `game_picture`) VALUES
(1, 'CASTLEVANIA', 'Castlevania est une série de jeux d\'action-aventure gothique avec des éléments de plateforme, de combat et de puzzle. Le joueur y incarne un chasseur de vampires combattant des créatures surnaturelles et explore des châteaux sombres et labyrinthiques.', 'Castlevania_1_Nes.png'),
(2, 'PORTAL', 'Portal est un jeu vidéo de puzzle développé par Valve Corporation. Le joueur utilise un pistolet à portails pour résoudre des énigmes dans des salles d\'essai contrôlées par une intelligence artificielle malveillante.', 'Portal.jpg'),
(3, 'CELESTE', 'Celeste est un jeu vidéo de plateforme qui suit les aventures de Madeline alors qu\'elle escalade une montagne mystérieuse, avec des défis de plateforme difficiles et des thèmes de santé mentale.', 'Celeste.jpeg'),
(4, 'LONELY MOUNTAINS DOWNHILL', 'Jeu de course de descente de montagne où le joueur doit traverser des parcours en évitant les obstacles et en collectant des pièces.', 'Lonely_Mountains_Downhill.jpg'),
(5, 'ROCKMAN 4', 'Jeu de plateforme d\'action où le joueur incarne le robot Mega Man pour vaincre les ennemis et récupérer leurs armes.', 'Rockman_4.png'),
(6, 'ALEX KIDD IN MIRACLE WORLD DX', 'Alex Kidd in Miracle World DX est un jeu de plateforme classique remasterisé qui suit les aventures d\'Alex Kidd dans un monde rempli d\'énigmes, de pièges et de boss difficiles. Le but du jeu est d\'aider Alex Kidd à sauver le royaume de Radaxian de Janken le Grand, en combattant des ennemis, en collectant des pièces et en résolvant des énigmes tout au long de sa quête. Avec des graphismes améliorés et de nouvelles fonctionnalités, Alex Kidd in Miracle World DX est une expérience nostalgique pour les fans du jeu original et une découverte passionnante pour les nouveaux joueurs.', 'Alex-kidd-in-miracle-world-dx.jpg'),
(7, 'THE LUCKY DIME CAPER', 'Dans The Lucky Dime Caper Starring Donald Duck, vous incarnez Donald Duck à la recherche de pièces de monnaie volées par le méchant Magica De Spell pour sauver ses neveux. Le but est de traverser différents niveaux remplis d\'ennemis et d\'obstacles tout en collectant des pièces et en résolvant des énigmes pour récupérer toutes les pièces volées.', 'The_lucky_dime_caper.jpg'),
(8, 'TEENAGE MUTANT NINJA TURTLES', 'Teenage Mutant Ninja Turtles est un jeu vidéo où l\'on incarne les célèbres Tortues Ninja pour combattre les ennemis et sauver leur ville. Le but est de vaincre le chef des méchants et restaurer la paix.', 'tmnt_nes_game_cover.jpg'),
(9, 'RESIDENT EVIL 2 REMAKE', 'Resident Evil 2 Remake est un jeu de survival-horror en vue à la troisième personne, où le joueur incarne un des deux personnages principaux, Leon S. Kennedy ou Claire Redfield, dans leur lutte pour survivre contre des hordes de zombies et autres créatures infectées dans la ville de Raccoon City. Le but du jeu est de résoudre des énigmes, collecter des ressources et progresser à travers différents environnements afin de découvrir la source de l\'épidémie et mettre un terme à la menace virale.', 'Resident_Evil_2_remake.jpg'),
(10, 'LITTLE BIG ADVENTURE', 'Little Big Adventure est un jeu d\'aventure sorti en 1994 où le joueur incarne Twinsen, un héros doté de pouvoirs spéciaux qui doit sauver sa planète du joug d\'un tyran maléfique. Le jeu se déroule dans un monde ouvert où le joueur doit explorer différents lieux, interagir avec les personnages non-joueurs, résoudre des énigmes et combattre des ennemis. Le but ultime est de vaincre le tyran pour sauver la planète et rétablir la paix.', 'LittleBigAdventure_PC.jpg'),
(12, 'THE LION KING', 'Le jeu vidéo Le Roi Lion sur Super Nintendo est un jeu de plateforme publié en 1994 par Virgin Interactive. Il suit l\'histoire du film d\'animation Disney du même nom, où le joueur incarne le personnage de Simba, un lionceau qui doit traverser plusieurs niveaux pour devenir le roi de la savane.\r\n\r\nLe jeu comporte plusieurs niveaux différents, chacun ayant son propre ensemble d\'obstacles, d\'ennemis et de boss. Les niveaux incluent la jungle, les gorges, la caverne, la prairie, le cimetière des éléphants et le Rocher de la fierté.\r\n\r\nLe joueur peut attaquer en sautant sur les ennemis, en leur donnant des coups de griffe ou en utilisant des rugissements pour les paralyser. Il peut également collecter des bonus tels que des vies supplémentaires, des continues et des points bonus.\r\n\r\nLe jeu est connu pour ses graphismes colorés et détaillés, sa musique entraînante et son gameplay solide. Il a été salué pour sa fidélité à l\'histoire originale et est considéré comme l\'un des meilleurs jeux de plateforme jamais créés pour la Super Nintendo.', 'The_Lion_King_Genesis.png'),
(13, 'ELDEN RING', 'Elden Ring est un jeu vidéo d\'action-RPG développé par FromSoftware et édité par Bandai Namco. Il est créé par Hidetaka Miyazaki, le créateur de la série de jeux Dark Souls. Le jeu se déroule dans un monde ouvert de fantasy sombre et mystérieux, avec des éléments de gameplay de la série Souls tels que la difficulté élevée, les combats exigeants et la mort permanente.\r\n\r\nLe joueur incarne un personnage personnalisable qui peut explorer le monde, combattre des ennemis, acquérir des compétences et interagir avec des personnages non-joueurs. Le jeu présente également des éléments de narration complexes, avec une histoire centrée sur un anneau mystique appelé Elden Ring.\r\n\r\nLe jeu est fortement attendu par les fans de la série Souls et de la fantasy en général, en raison de la réputation de Miyazaki pour la création de mondes de jeu immersifs et de gameplay difficile.', 'Eldenring_pc.jpg');

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
  `user_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `registration_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_admin` tinyint NOT NULL DEFAULT '0' COMMENT '0 = non\r\n1 = oui',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `user_email`, `profile_picture`, `password`, `user_description`, `registration_time`, `is_admin`) VALUES
(1, 'AdministrateurS', 'thurtwings@gmail.com', '6437b39a43034.png', '$2y$10$GgkpH4fAshtVn2m73TZn6unBWkOhzaE/mpMmecUdL6AZjIAewFGz2', NULL, '2023-04-08 21:06:27', 1),
(2, 'AdministrateurG', 'administrateurg@gmail.com', '64350f0da5c64.jpg', '$2y$10$EOoYFoMAPnOTdVTrkfOFEu/O7an/FckzODiQOzovbhEJ1r65XJKuS', NULL, '2023-04-11 07:40:33', 1),
(4, 'KILAYE', 'kilaye@gmail.com', '6434311b7bc71.jpg', '$2y$10$ZpLwRx/oxPGxpmtX6v5ztugThfDyht1100hgNVNc.U.DE7KtX1fb.', NULL, '2023-04-10 15:38:39', 0),
(5, 'Janthe', 'janthe@gmail.com', '64367c9051ff6.png', '$2y$10$sspdXakOdTgYSxnn5VJVLeAtCV7SyqYDnlS5uYI7GCCzgVsE9zCom', 'Speedrunner dans l\'âme!', '2023-04-11 07:07:52', 0),
(6, 'Biiwix', 'biiwix@gmail.com', NULL, '$2y$10$BbCxEV4QAXu6O.DWVh7ozuUfk.Wst5FfbKDtEUym8U27rFkCB0RoK', NULL, '2023-04-11 07:13:16', 0),
(7, 'Rolesafe', 'rolesafe@gmail.com', NULL, '$2y$10$TdMIBAsuGEY/ozRWlWcQJOPdbRL/p6vFsXiVgSIp/w/CwW/S9t0rm', NULL, '2023-04-11 07:16:44', 0),
(8, 'Barrylesjambes', 'barrylesjambes@gmail.com', NULL, '$2y$10$tB0K7ZDAc.Q5A7Mp1sKQ3u.ru5uWA5Jv8cr0rES8DlhNqq9vgDjlK', NULL, '2023-04-11 07:19:54', 0),
(9, 'Strackel', 'strackel@gmail.com', NULL, '$2y$10$9DyELpJ7W7pHeC4wtIdbKec7OQggkTmU2Vs7Eh2m.P/s7/EwsIx1y', NULL, '2023-04-11 07:23:35', 0),
(10, 'Chachamaxx', 'chachamaxx@gmail.com', NULL, '$2y$10$3uNxkkkdgQQuONoU466Df.uWkEd8UIQASdov0vKFKC0LipPqAVqe6', NULL, '2023-04-11 07:26:25', 0),
(11, 'LF712', 'lf712@gmail.com', NULL, '$2y$10$UO6Nqx7HRR/0unqupxLJ9uvEq8whEYuoL2GghmrUqrxyDeyUC2KAS', NULL, '2023-04-11 07:28:35', 0),
(12, 'Petrichor', 'petrichor@gmail.com', NULL, '$2y$10$2d.w5m8iJu60e/uKVklrIO2G4MTJhUJISCdiUpOY63mrttxLNa8qK', NULL, '2023-04-11 07:29:35', 0),
(13, 'Blake_Faythe', 'blakefaythe@gmail.com', NULL, '$2y$10$fBqnRK9kf8ahUn1WAbjJ3e0sf9GU2iNodjg1lXSQJAU/eJBfE1EA.', NULL, '2023-04-11 07:31:29', 0),
(14, 'Neetsel', 'neetsel@gmail.com', NULL, '$2y$10$VO0HfduINXYE4iNevrZKN.Y0TDxtZFAn6G1xHwTiUxQY14Trd/mqu', NULL, '2023-04-11 07:32:16', 0),
(15, 'Canblaster', 'canblaster@gmail.com', NULL, '$2y$10$H0cuVWR5UK2666pnHi0oaOfmRiKMh8gXFPRqXEBywgQmOnw.VWnYu', NULL, '2023-04-11 07:34:45', 0);

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
  `category_speedrun` enum('Any%','TAS','NG+','100%','Glitchless','Beat the Game') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Any%',
  `run_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `game_id` (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_speedrun`, `run_time`) VALUES
(1, 'CASTLEVANIA (Any%) en 12:55', NULL, 'https://www.youtube.com/embed/QVeLfzUyngw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', 5, 1, 'Any%', '00:12:55'),
(2, 'PORTAL en 15:31', NULL, 'https://www.youtube.com/embed/PsirprHHNyw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', 6, 2, 'Beat the Game', '00:15:31'),
(3, 'CELESTE en TAS FAREWELL en 10:37.1', NULL, 'https://www.youtube.com/embed/MsXOlGhJylk?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', 4, 3, 'TAS', '00:10:37'),
(4, 'LMD NG+ / 16 TRACKS en 30:56', NULL, 'https://www.youtube.com/embed/Ka84DSfjiGE?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', 7, 4, 'NG+', '00:30:56'),
(5, 'ROCKMAN 4 BCAS en ANY% en 27:02.8', NULL, 'https://www.youtube.com/embed/bCqe-FqjfT8', 8, 5, 'Any%', '00:27:02'),
(6, 'ALEX KIDD IN M.W. DX ANY% en 20:26.07', NULL, 'https://www.youtube.com/embed/mLMS96jxeK4', 9, 6, 'Any%', '00:20:26'),
(7, 'T.L.D.C. DONALD DUCK BEAT THE GAME en 16:29', NULL, 'https://www.youtube.com/embed/8X_b--aneik', 10, 7, 'Beat the Game', '00:16:29'),
(8, 'TEENAGE MUTANT NINJA TURTLES en 22:12 ', NULL, 'https://www.youtube.com/embed/-qe2D99W6nM', 11, 8, 'Any%', '00:22:12'),
(9, 'RESIDENT EVIL 2 REMAKE (CAPCOM) en 53:54', NULL, 'https://www.youtube.com/embed/G8GkHg51qnM', 12, 9, 'Any%', '00:53:54'),
(10, 'LITTLE BIG ADVENTURE (any%) en 30:13', NULL, 'https://www.youtube.com/embed/8-_yIS-w8v8', 13, 10, 'Any%', '00:30:13'),
(11, 'LION KING en ANY% EASY en 13:16.06', NULL, 'https://www.youtube.com/embed/ljp2BXJ3Kcw', 14, 12, 'Any%', '00:13:16'),
(12, 'ELDEN RING en ANY% GLITCHLESS par KEMIST en 1:35:04 ', NULL, 'https://www.youtube.com/embed/uIqASNq6Qr4', 15, 13, 'Glitchless', '01:35:04');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
