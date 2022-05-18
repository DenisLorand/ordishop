-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 mai 2021 à 11:12
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ordishop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mdp` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `mail`, `mdp`) VALUES
(1, 'Denis', 'denis.lorand@yahoo.com', '$2y$10$7MGUTmvhpN9G08mKjLCqCuQFMw2ZUHeLOdjIV6R5TO51mU84Yocsa');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brandname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `brandimage` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`id`, `brandname`, `brandimage`) VALUES
(1, 'ASUS', 'asus_logo.jpg'),
(2, 'DELL', 'dell_logo.jpg'),
(3, 'HP', 'hp_logo.jpg'),
(4, 'LENOVO', 'lenovo_logo.jpg'),
(5, 'APPLE', 'apple_logo.jpg'),
(7, 'SAMSUNG', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` smallint(6) DEFAULT NULL,
  `model` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `idPc` int(10) DEFAULT NULL,
  `comment` tinytext DEFAULT NULL,
  `note` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `idPc`, `comment`, `note`) VALUES
(1, 7, 'Très bon appareil pour un prix abordable !', NULL),
(2, 8, 'Encore un bon PC de bureau de DELL, avec processeur Intel très rapide...', NULL),
(3, 7, 'hello', NULL),
(4, 7, '789', NULL),
(5, 7, '123', NULL),
(6, 7, 'Très bon PC pour un prix abordable', NULL),
(7, 7, 'coucou', NULL),
(8, 7, '9999999999999999999999999999', NULL),
(9, 8, '8', NULL),
(10, 19, 'Portable performant avec un beau design !', NULL),
(11, 7, ' PC super', NULL),
(12, 7, 'Portable performant avec un beau design !', '16'),
(13, 8, 'Super ordi Dell très puissant', '15'),
(14, 8, 'Bon produit et pas cher', '14'),
(15, 7, 'Satisfait dans l\'ensemble', '15'),
(16, 7, 'Super ordi !', '16'),
(17, 9, 'Vraiment cool ce pc', '16'),
(18, 9, 'Bien pour un prix imbattable', '18');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `title`, `img`) VALUES
(1, 'ELITEDESK 800', 'hp_elitedesk.jpg'),
(2, 'OPTIFLEX 3020', 'dell_optiflex.jpg'),
(3, 'THINKCENTRE M73', 'lenovo_thinkcentre.jpg'),
(4, 'ASUS VIVOBOOK', 'asus_vivobook.jpg'),
(5, '5454545', 'lenovo_thinkcentre.jpg'),
(6, 'workstation', 'workstation.png'),
(7, 'LATITUDE 7490', 'dell_latitude.jpg'),
(8, 'PROBOOK 640', 'hp_probook.jpg'),
(10, 'THINKPAD L540', 'lenovo_thinkpad.jpg'),
(11, 'slide1', 'slide1.jpg'),
(12, 'slide2', 'slide2.jpg'),
(13, 'slide3', 'slide3.jpg'),
(14, 'slide4', 'slide4.jpg'),
(15, 'portable', 'portable.jpg'),
(16, 'pcbureau', 'pcbureau.jpg'),
(18, 'SLIDER 6', 'app/public/front/images/slider6.jpg'),
(19, 'SLIDER 5', 'app/public/front/images/slider5.jpg'),
(20, 'SLIDER 2', 'slider5.jpg'),
(21, 'MCBOOK AIR', 'apple_macbook_air.jpg'),
(27, 'BMW', 'logo-bmw.jpg'),
(28, 'BMW', 'logo-bmw.jpg'),
(29, 'AUDI', 'audi.png'),
(30, 'BMW pic', 'bmw.png');

-- --------------------------------------------------------

--
-- Structure de la table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `civil` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `firstname` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `cp` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `ville` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `adresse` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sujet` tinytext CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mails`
--

INSERT INTO `mails` (`id`, `civil`, `lastname`, `firstname`, `mail`, `phone`, `cp`, `ville`, `adresse`, `sujet`, `content`) VALUES
(2, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Bienvenue Admin !', 'Bonjour,'),
(3, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Bienvenue Admin !', 'Bonjour,'),
(4, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Bonjour', 'Demande d\'info'),
(5, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Test du MVC', 'Info SVP'),
(6, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'Test du formulaire complet'),
(7, NULL, 'on', 'Lorand', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Denis', '0297979797'),
(8, NULL, '', 'Lorand', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Denis', ''),
(9, NULL, 'on', 'Lorand', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, 'Denis', '0297979797'),
(10, 'on', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '32767', '32767', 'Vannes', '38 rue Jean Jaurès', 'Nouveau test', 'Test form'),
(11, '', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '32767', '56000', 'Vannes', '38 rue Jean Jaurès', 'Nouveau test', 'jfdmlkjqsdflkjjf'),
(12, 'on', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '32767', '44100', 'Nantes', '10 Rue des Renardières', 'djlmkfdj', 'lkjrgfljglkj'),
(13, 'on', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '32767', '56000', 'Vannes', '38 rue Jean Jaures', 'lkrtgg', '(g(g(-g(-t'),
(15, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'gqgdgg', 'fdgfdgdgffg'),
(16, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'lksd,dlkfg', 'dflkgdflkjgmfdlgkv'),
(17, 'Madame', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'gjgjgjgj', 'gjjhhjgj'),
(18, 'Mademoiselle', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '35000', 'Nantes', '10 Rue Ginguené', 'gdsgdfgd', 'fghjhjklo'),
(19, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '72000', 'Le Mans', '10 Rue Nationale', 'hkljglkhggf', 'fjsdmklfjdsf'),
(20, NULL, 'Lorand', 'Denis', 'denis.lorand@yahoo.com', NULL, NULL, NULL, NULL, '11414', 'gdsgùkùdfgkùdk'),
(21, NULL, 'fooo', 'hfdrtyd', 'dqwqg@gqwn.fr', NULL, NULL, NULL, NULL, 'alert(&quot;hello&quot;)', 'tqnt(,-srt-,s-,sq  xy sun'),
(22, NULL, 'dgdfgfdg', 'gddfgg', 'dqwqg@gqwn.fr', NULL, NULL, NULL, NULL, 'gffdgdfg', 'fdgdfgdfg'),
(23, 'Madame', 'dgdfgfdg', 'gddfgg', 'dqwqg@gqwn.fr', '0614850549', '56000', 'Vannes', '38 rue Jean Jaures', 'gffdgdfg', 'fdgdfgdfg'),
(24, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'hgfhfhfgh', 'hfghfgh'),
(25, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '', '', '', 'fdsdfsf', 'dfskfdskf^sif$dsif'),
(26, 'Madame', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'fdgdfgdg', 'dgdsfgdsfgdg'),
(27, '', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '', '', '', 'Nouveau test', 'gdsfshghjhgk'),
(28, 'Monsieur', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '56000', 'Vannes', '38 rue Jean Jaurès', 'Test form', 'ddsgjhg'),
(29, 'Mademoiselle', 'Lorand', 'Denis', 'denis.lorand@yahoo.com', '0297979797', '72000', 'Le Mans', '10 Rue Nationale', 'Bienvenue !', 'Javascipt enabled submit button test');

-- --------------------------------------------------------

--
-- Structure de la table `pc`
--

CREATE TABLE `pc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `brand` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `model` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `processor` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ram` smallint(5) DEFAULT NULL,
  `hd` smallint(5) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `idImg` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pc`
--

INSERT INTO `pc` (`id`, `title`, `brand`, `model`, `processor`, `ram`, `hd`, `price`, `idImg`) VALUES
(7, 'ELITEDESK 800', 'ASUS', 'PC de bureau', 'Intel Core 2.50 GHz', 8, 240, 379.95, 1),
(8, 'OPTIFLEX 3020', 'DELL', 'PC de bureau', 'Intel Core 3.20 GHz', 8, 500, 219.9, 2),
(9, 'THINKCENTRE M73', 'LENOVO', 'PC de bureau', 'Intel Pentium 3.00 GHz', 8, 500, 179.9, 3),
(12, 'PROBOOK 640', 'HP', 'Portable', 'Intel Core 2.50 GHz', 8, 320, 455.5, 8),
(14, 'THINKPAD L540', 'LENOVO', 'Portable', 'Intel Core 1.60 GHz', 16, 240, 589.9, 10),
(19, 'LATITUDE 7490', 'ASUS', 'Tablette', 'Intel Core 1.60 GHz', 8, 320, 219.9, 7),
(21, 'MCBOOK AIR', 'asus', 'portable', 'Intel Core 1.60 GHz', 4, 128, 699.99, 1),
(39, 'toto', 'toto', 'Portable', 'Intel Core 1.60 GHz', 4, 128, 1, 5),
(40, 'MCBOOK AIR', 'APPLE', 'Portable', 'Intel Core 1.60 GHz', 4, 128, 699.99, 6),
(45, 'MCBOOK AIR', '', 'Portable', 'azd', 4, 128, 699.99, 5),
(48, 'MCBOOK AIR', 'ASUS', 'Portable', 'Intel Core 1.60 GHz', 4, 128, 455.5, 1),
(50, 'MCBOOK PRO', 'LENOVO', 'PC de bureau', 'Intel Core 1.60 GHz', 4, 128, 455.5, 4),
(51, 'BMW', 'APPLE', 'PC de bureau', 'Intel Core 1.60 GHz', 8, 128, 12, 27);

-- --------------------------------------------------------

--
-- Structure de la table `portable`
--

CREATE TABLE `portable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `brand` tinytext DEFAULT NULL,
  `processor` text DEFAULT NULL,
  `ram` smallint(6) DEFAULT NULL,
  `hd` smallint(6) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `mdp` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `mail`, `mdp`) VALUES
(4, 'Denis', 'denis.lorand@yahoo.com', '$2y$10$Vw5EwTRtDJ0B.l5.K2hk9u57oCuDCDytJIecYunLwcnFKyj8h3yjO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idImg` (`idImg`);

--
-- Index pour la table `portable`
--
ALTER TABLE `portable`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `portable`
--
ALTER TABLE `portable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `idImg` FOREIGN KEY (`idImg`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
