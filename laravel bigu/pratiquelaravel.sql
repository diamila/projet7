-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 18 mai 2019 à 22:25
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pratiquelaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog_models`
--

CREATE TABLE `blog_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blog_models`
--

INSERT INTO `blog_models` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'adipisci', '2019-05-18 20:22:05', '2019-05-18 20:22:05'),
(2, 'accusantium', '2019-05-18 20:22:05', '2019-05-18 20:22:05'),
(3, 'nisi', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(4, 'similique', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(5, 'odio', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(6, 'repellendus', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(8, 'dolor', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(9, 'eos', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(10, 'et', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(11, 'officia', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(12, 'neque', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(13, 'repudiandae', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(14, 'numquam', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(15, 'provident', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(16, 'soluta', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(17, 'sequi', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(18, 'molestias', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(19, 'sed', '2019-05-18 20:22:06', '2019-05-18 20:22:06'),
(20, 'sunt', '2019-05-18 20:22:06', '2019-05-18 20:22:06');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_16_185146_create_blog_models_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog_models`
--
ALTER TABLE `blog_models`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog_models`
--
ALTER TABLE `blog_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
