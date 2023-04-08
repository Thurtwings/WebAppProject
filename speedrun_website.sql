-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 07 avr. 2023 à 14:17
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

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `game_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rankings`
--

CREATE TABLE `rankings` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `game_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `time_seconds` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `runners`
--

CREATE TABLE `runners` (
  `runners_id` int NOT NULL,
  `runners_alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_speedrun_runs`
--

CREATE TABLE `user_speedrun_runs` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `video_url`, `user_id`, `game_id`, `category_id`) VALUES
(1, 'CASTLEVANIA (Any%) en 12:55', NULL, 'https://www.youtube.com/embed/QVeLfzUyngw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', NULL, NULL, NULL),
(2, 'PORTAL en 15:31 par Biiwix | SPEEDONS', NULL, 'https://www.youtube.com/embed/PsirprHHNyw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge', NULL, NULL, NULL),
(3, 'CELESTE en TAS FAREWELL par KILAYE en 10:37.1 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/MsXOlGhJylk?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', NULL, NULL, NULL),
(4, 'LONELY MOUNTAINS DOWNHILL en NG+ / 16 TRACKS par ROLESAFE en 30:56 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/Ka84DSfjiGE?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d', NULL, NULL, NULL),
(5, 'ROCKMAN 4 BCAS en ANY% par BARRYLESJAMBES en 27:02.8 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/bCqe-FqjfT8', NULL, NULL, NULL),
(6, 'ALEX KIDD IN MIRACLE WORLD DX en ANY% par STRACKEL en 20:26.07 | SPEEDONS 2023', NULL, 'https://www.youtube.com/embed/mLMS96jxeK4', NULL, NULL, NULL),
(7, 'THE LUCKY DIME CAPER STARRING DONALD DUCK en BEAT THE GAME par CHACHAMAXX en 16:29 | SPEEDONS 2022', NULL, 'https://www.youtube.com/embed/8X_b--aneik', NULL, NULL, NULL),
(8, 'TEENAGE MUTANT NINJA TURTLES en 22:12 par LF712  | SPEEDONS', NULL, 'https://www.youtube.com/embed/-qe2D99W6nM', NULL, NULL, NULL),
(9, 'RESIDENT EVIL 2 REMAKE en 53:54 par Petrichor | SPEEDONS', NULL, 'https://www.youtube.com/embed/G8GkHg51qnM', NULL, NULL, NULL),
(10, 'LITTLE BIG ADVENTURE (any%) en 30:13 par Blake_Faythe | SPEEDONS', NULL, 'https://www.youtube.com/embed/8-_yIS-w8v8', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `runners`
--
ALTER TABLE `runners`
  ADD PRIMARY KEY (`runners_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_speedrun_runs`
--
ALTER TABLE `user_speedrun_runs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_title` (`game_title`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `runners`
--
ALTER TABLE `runners`
  MODIFY `runners_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user_speedrun_runs`
--
ALTER TABLE `user_speedrun_runs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
