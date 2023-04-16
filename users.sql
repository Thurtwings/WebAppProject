-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 16 avr. 2023 à 08:50
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
  `user_status` enum('Active','1-Week-Ban','1-Month-Ban','Perma-Ban','Soft-Ban') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `user_role` enum('Admin','Forum Mod','Content-Mod','User') NOT NULL DEFAULT 'User',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `user_email`, `profile_picture`, `password`, `user_description`, `registration_time`, `is_admin`, `user_status`, `user_role`) VALUES
(1, 'AdministrateurS', 'thurtwings@gmail.com', '6437b39a43034.png', '$2y$10$GgkpH4fAshtVn2m73TZn6unBWkOhzaE/mpMmecUdL6AZjIAewFGz2', NULL, '2023-04-08 21:06:27', 1, 'Active', 'Admin'),
(2, 'AdministrateurG', 'administrateurg@gmail.com', '64350f0da5c64.jpg', '$2y$10$EOoYFoMAPnOTdVTrkfOFEu/O7an/FckzODiQOzovbhEJ1r65XJKuS', NULL, '2023-04-11 07:40:33', 1, 'Active', 'Admin'),
(4, 'KILAYE', 'kilaye@gmail.com', '6434311b7bc71.jpg', '$2y$10$ZpLwRx/oxPGxpmtX6v5ztugThfDyht1100hgNVNc.U.DE7KtX1fb.', NULL, '2023-04-10 15:38:39', 0, 'Active', 'User'),
(5, 'Janthe', 'janthe@gmail.com', '64367c9051ff6.png', '$2y$10$sspdXakOdTgYSxnn5VJVLeAtCV7SyqYDnlS5uYI7GCCzgVsE9zCom', 'Speedrunner dans l\'âme!', '2023-04-11 07:07:52', 0, 'Active', 'User'),
(6, 'Biiwix', 'biiwix@gmail.com', NULL, '$2y$10$BbCxEV4QAXu6O.DWVh7ozuUfk.Wst5FfbKDtEUym8U27rFkCB0RoK', NULL, '2023-04-11 07:13:16', 0, 'Active', 'User'),
(7, 'Rolesafe', 'rolesafe@gmail.com', NULL, '$2y$10$TdMIBAsuGEY/ozRWlWcQJOPdbRL/p6vFsXiVgSIp/w/CwW/S9t0rm', NULL, '2023-04-11 07:16:44', 0, 'Active', 'User'),
(8, 'Barrylesjambes', 'barrylesjambes@gmail.com', NULL, '$2y$10$tB0K7ZDAc.Q5A7Mp1sKQ3u.ru5uWA5Jv8cr0rES8DlhNqq9vgDjlK', NULL, '2023-04-11 07:19:54', 0, 'Active', 'User'),
(9, 'Strackel', 'strackel@gmail.com', NULL, '$2y$10$9DyELpJ7W7pHeC4wtIdbKec7OQggkTmU2Vs7Eh2m.P/s7/EwsIx1y', NULL, '2023-04-11 07:23:35', 0, 'Active', 'User'),
(10, 'Chachamaxx', 'chachamaxx@gmail.com', NULL, '$2y$10$3uNxkkkdgQQuONoU466Df.uWkEd8UIQASdov0vKFKC0LipPqAVqe6', NULL, '2023-04-11 07:26:25', 0, 'Active', 'User'),
(11, 'LF712', 'lf712@gmail.com', NULL, '$2y$10$UO6Nqx7HRR/0unqupxLJ9uvEq8whEYuoL2GghmrUqrxyDeyUC2KAS', NULL, '2023-04-11 07:28:35', 0, 'Active', 'User'),
(12, 'Petrichor', 'petrichor@gmail.com', NULL, '$2y$10$2d.w5m8iJu60e/uKVklrIO2G4MTJhUJISCdiUpOY63mrttxLNa8qK', NULL, '2023-04-11 07:29:35', 0, 'Active', 'User'),
(13, 'Blake_Faythe', 'blakefaythe@gmail.com', NULL, '$2y$10$fBqnRK9kf8ahUn1WAbjJ3e0sf9GU2iNodjg1lXSQJAU/eJBfE1EA.', NULL, '2023-04-11 07:31:29', 0, 'Active', 'User'),
(14, 'Neetsel', 'neetsel@gmail.com', NULL, '$2y$10$VO0HfduINXYE4iNevrZKN.Y0TDxtZFAn6G1xHwTiUxQY14Trd/mqu', NULL, '2023-04-11 07:32:16', 0, 'Active', 'User'),
(15, 'Canblaster', 'canblaster@gmail.com', NULL, '$2y$10$H0cuVWR5UK2666pnHi0oaOfmRiKMh8gXFPRqXEBywgQmOnw.VWnYu', NULL, '2023-04-11 07:34:45', 0, 'Active', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
