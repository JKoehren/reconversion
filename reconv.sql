-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 28 Mai 2018 à 23:13
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reconv`
--

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `contrat`
--

INSERT INTO `contrat` (`id`, `type`) VALUES
(1, 'En veille'),
(2, 'En recherche'),
(3, 'CDD'),
(4, 'CDI'),
(5, 'Intérim');

-- --------------------------------------------------------

--
-- Structure de la table `c_s_p`
--

CREATE TABLE IF NOT EXISTS `c_s_p` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `c_s_p`
--

INSERT INTO `c_s_p` (`id`, `type`) VALUES
(1, 'employé'),
(2, 'Agent de maitrise'),
(3, 'Technicien'),
(4, 'Cadre'),
(5, 'Ingénieur');

-- --------------------------------------------------------

--
-- Structure de la table `etudes`
--

CREATE TABLE IF NOT EXISTS `etudes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `etudes`
--

INSERT INTO `etudes` (`id`, `type`) VALUES
(1, 'équivalent au CAP/BEP'),
(2, 'équivalent au BAC'),
(3, 'équivalent à un BAC + 2'),
(4, 'équivalent à un BAC + 3'),
(5, 'Supérieur à un BAC + 3');

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE IF NOT EXISTS `situation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contrat_id` int(11) DEFAULT NULL,
  `csp_id` int(11) DEFAULT NULL,
  `etudes_id` int(11) DEFAULT NULL,
  `taille_id` int(11) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anneeExp` int(11) NOT NULL,
  `nomEntreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poleemploie` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE IF NOT EXISTS `taille` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `taille`
--

INSERT INTO `taille` (`id`, `type`) VALUES
(1, '1 à 9'),
(2, '10 à 19'),
(3, '20 à 49'),
(4, '50 à 249'),
(5, '250 à 999'),
(6, '+ 1000');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categorie` int(11) DEFAULT '1',
  `civilite` tinyint(1) DEFAULT '0',
  `dateDeNaissance` date DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codePostal` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projet` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attente` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `c_s_p`
--
ALTER TABLE `c_s_p`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudes`
--
ALTER TABLE `etudes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EC2D9ACAA76ED395` (`user_id`),
  ADD KEY `IDX_EC2D9ACA1823061F` (`contrat_id`),
  ADD KEY `IDX_EC2D9ACA448A1682` (`etudes_id`),
  ADD KEY `IDX_EC2D9ACAFF25611A` (`taille_id`),
  ADD KEY `IDX_EC2D9ACA73EFFAF6` (`csp_id`);

--
-- Index pour la table `taille`
--
ALTER TABLE `taille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `c_s_p`
--
ALTER TABLE `c_s_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `etudes`
--
ALTER TABLE `etudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `situation`
--
ALTER TABLE `situation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `taille`
--
ALTER TABLE `taille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `situation`
--
ALTER TABLE `situation`
  ADD CONSTRAINT `FK_EC2D9ACA1823061F` FOREIGN KEY (`contrat_id`) REFERENCES `contrat` (`id`),
  ADD CONSTRAINT `FK_EC2D9ACA448A1682` FOREIGN KEY (`etudes_id`) REFERENCES `etudes` (`id`),
  ADD CONSTRAINT `FK_EC2D9ACA73EFFAF6` FOREIGN KEY (`csp_id`) REFERENCES `c_s_p` (`id`),
  ADD CONSTRAINT `FK_EC2D9ACAA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_EC2D9ACAFF25611A` FOREIGN KEY (`taille_id`) REFERENCES `taille` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
