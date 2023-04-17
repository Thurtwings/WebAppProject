-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 17 avr. 2023 à 12:18
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

CREATE TABLE `articles` (
  `article_id` int NOT NULL,
  `article_cover_picture_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_cover_picture_link`, `article_title`, `article_content`, `user_id`) VALUES
(1, 'article01Image.png', 'le speedrun kesako?!', 'Le speedrun est une pratique de jeu vidéo consistant à terminer un jeu aussi rapidement que possible. Les joueurs s\'entraînent pour atteindre des temps records en utilisant des techniques spécifiques, telles que des bugs ou des raccourcis, pour finir le jeu plus rapidement. <br><br>Le speedrun a connu une évolution rapide ces dernières années. Avec l\'essor des réseaux sociaux et des plateformes de streaming, de plus en plus de joueurs ont commencé à s\'intéresser à cette pratique. Les communautés en ligne se sont développées, permettant aux joueurs de partager des astuces et des techniques pour améliorer leurs temps. De plus, de nombreux événements de speedrun ont été organisés à travers le monde, attirant des milliers de spectateurs en ligne et en personne. <br><br>Le speedrun est devenu une pratique très compétitive, avec des records du monde très convoités et une forte culture de la rivalité entre les joueurs. Les jeux les plus populaires pour le speedrun sont souvent les jeux classiques de l\'ère des consoles, comme les jeux Super Mario Bros, The Legend of Zelda ou Sonic the Hedgehog.<br><br> Malgré cette popularité croissante, certains critiques ont mis en avant des inquiétudes concernant l\'utilisation de logiciels tiers pour aider les joueurs à améliorer leurs temps, ou le risque de causer des dommages au matériel de jeu. Cependant, la communauté du speedrun continue à prospérer et à se développer, avec de nouveaux jeux et des records du monde battus régulièrement. <br><br>', 2);

-- --------------------------------------------------------

--
-- Structure de la table `ban`
--

CREATE TABLE `ban` (
  `ban_id` int NOT NULL,
  `ban_reason` enum('ForbiddenWord','Spam') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ban_type` enum('aucun','softBan','weekBan','monthBan','permaBan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ban_start_date` datetime NOT NULL,
  `ban_end_date` datetime DEFAULT NULL,
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `game_picture` varchar(320) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(320) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` char(60) NOT NULL,
  `user_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `registration_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` enum('Active','WeekBan','MonthBan','PermaBan','SoftBan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `user_role` enum('Admin','ForumMod','ContentMod','User') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `user_email`, `profile_picture`, `password`, `user_description`, `registration_time`, `user_status`, `user_role`) VALUES
(1, 'AdministrateurS', 'thurtwings@gmail.com', '643c26fd07b98.png', '$2y$10$V28ZsK8O1OBsxgT72r.VD.al3mJfn59j.TQz7AvhBgPqQgeMt9TPW', NULL, '2023-04-16 10:55:30', 'Active', 'Admin'),
(2, 'AdministrateurG', 'administrateurg@gmail.com', '643bcbffd777f.jpg', '$2y$10$EOoYFoMAPnOTdVTrkfOFEu/O7an/FckzODiQOzovbhEJ1r65XJKuS', NULL, '2023-04-11 07:40:33', 'Active', 'Admin'),
(4, 'KILAYE', 'kilaye@gmail.com', '6434311b7bc71.jpg', '$2y$10$ZpLwRx/oxPGxpmtX6v5ztugThfDyht1100hgNVNc.U.DE7KtX1fb.', NULL, '2023-04-10 15:38:39', 'Active', 'User'),
(5, 'Janthe', 'janthe@gmail.com', '64367c9051ff6.png', '$2y$10$sspdXakOdTgYSxnn5VJVLeAtCV7SyqYDnlS5uYI7GCCzgVsE9zCom', 'Speedrunner dans l\'âme!', '2023-04-11 07:07:52', 'Active', 'User'),
(6, 'Biiwix', 'biiwix@gmail.com', NULL, '$2y$10$BbCxEV4QAXu6O.DWVh7ozuUfk.Wst5FfbKDtEUym8U27rFkCB0RoK', NULL, '2023-04-11 07:13:16', 'Active', 'User'),
(7, 'Rolesafe', 'rolesafe@gmail.com', NULL, '$2y$10$TdMIBAsuGEY/ozRWlWcQJOPdbRL/p6vFsXiVgSIp/w/CwW/S9t0rm', NULL, '2023-04-11 07:16:44', 'Active', 'User'),
(8, 'Barrylesjambes', 'barrylesjambes@gmail.com', NULL, '$2y$10$tB0K7ZDAc.Q5A7Mp1sKQ3u.ru5uWA5Jv8cr0rES8DlhNqq9vgDjlK', NULL, '2023-04-11 07:19:54', 'Active', 'User'),
(9, 'Strackel', 'strackel@gmail.com', NULL, '$2y$10$9DyELpJ7W7pHeC4wtIdbKec7OQggkTmU2Vs7Eh2m.P/s7/EwsIx1y', NULL, '2023-04-11 07:23:35', 'Active', 'User'),
(10, 'Chachamaxx', 'chachamaxx@gmail.com', NULL, '$2y$10$3uNxkkkdgQQuONoU466Df.uWkEd8UIQASdov0vKFKC0LipPqAVqe6', NULL, '2023-04-11 07:26:25', 'Active', 'User'),
(11, 'LF712', 'lf712@gmail.com', NULL, '$2y$10$UO6Nqx7HRR/0unqupxLJ9uvEq8whEYuoL2GghmrUqrxyDeyUC2KAS', NULL, '2023-04-11 07:28:35', 'Active', 'User'),
(12, 'Petrichor', 'petrichor@gmail.com', NULL, '$2y$10$2d.w5m8iJu60e/uKVklrIO2G4MTJhUJISCdiUpOY63mrttxLNa8qK', NULL, '2023-04-11 07:29:35', 'Active', 'User'),
(13, 'Blake_Faythe', 'blakefaythe@gmail.com', NULL, '$2y$10$fBqnRK9kf8ahUn1WAbjJ3e0sf9GU2iNodjg1lXSQJAU/eJBfE1EA.', NULL, '2023-04-11 07:31:29', 'Active', 'User'),
(14, 'Neetsel', 'neetsel@gmail.com', NULL, '$2y$10$VO0HfduINXYE4iNevrZKN.Y0TDxtZFAn6G1xHwTiUxQY14Trd/mqu', NULL, '2023-04-11 07:32:16', 'Active', 'User'),
(15, 'Canblaster', 'canblaster@gmail.com', NULL, '$2y$10$H0cuVWR5UK2666pnHi0oaOfmRiKMh8gXFPRqXEBywgQmOnw.VWnYu', NULL, '2023-04-11 07:34:45', 'Active', 'User'),
(22, 'AdministrateurE', 'thu', NULL, '$2y$10$CYChnFmjTneMo2x5TqtDL.NveHhoZkH6qm5wkYheQZ23lx8AvFsiS', NULL, '2023-04-16 11:01:59', 'Active', 'User'),
(23, 'AdministrateurF', 'AdministrateurF@gmail.com', NULL, '$2y$10$mzpzi2YibjAkBiqKCTS83eJfIR9fo1UZPm0zPM2Hakh29NvjtlvBO', NULL, '2023-04-16 14:41:30', 'Active', 'User'),
(24, 'AdminGeneral', 'admin_general@gmail.com', '', 'AdminGeneral', NULL, '2023-04-16 14:47:07', 'Active', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `video_url` varchar(255) NOT NULL,
  `user_id` int DEFAULT NULL,
  `game_id` int DEFAULT NULL,
  `category_speedrun` enum('Any%','TAS','NG+','100%','Glitchless','Beat the Game') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Any%',
  `run_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `fk_article_user_id` (`user_id`);

--
-- Index pour la table `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`ban_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ban`
--
ALTER TABLE `ban`
  MODIFY `ban_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ban`
--
ALTER TABLE `ban`
  ADD CONSTRAINT `fk_ban_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
