-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 07 jan. 2018 à 13:36
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `tj_cat_pub`
--

CREATE TABLE `tj_cat_pub` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `PUB_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tj_igd_pub_uni`
--

CREATE TABLE `tj_igd_pub_uni` (
  `PUB_ID` bigint(20) UNSIGNED NOT NULL,
  `IGD_LABEL` varchar(255) NOT NULL,
  `UNI_LABEL` varchar(30) NOT NULL,
  `IGD_PUB_UNI_QUANTITE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_cat`
--

CREATE TABLE `t_categorie_cat` (
  `CAT_ID` bigint(20) UNSIGNED NOT NULL,
  `CAT_LABEL` varchar(255) NOT NULL,
  `CAT_DESCRIPTION` mediumtext NOT NULL,
  `CAT_ILLUSTRATION` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_categorie_cat`
--

INSERT INTO `t_categorie_cat` (`CAT_ID`, `CAT_LABEL`, `CAT_DESCRIPTION`, `CAT_ILLUSTRATION`) VALUES
(1, 'fantaisie', 'miam-miam', 'dark_mage.jpg'),
(2, 'science-fiction', 'yummy', 'dark_mage.jpg'),
(3, 'post apocalyptique', 'blabla pa', 'pa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire_com`
--

CREATE TABLE `t_commentaire_com` (
  `COM_ID` bigint(20) UNSIGNED NOT NULL,
  `COM_TEXTE` mediumtext NOT NULL,
  `COM_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `PUB_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_ingredient_igd`
--

CREATE TABLE `t_ingredient_igd` (
  `IGD_LABEL` varchar(255) NOT NULL,
  `IGD_DESCRIPTION` mediumtext NOT NULL,
  `IGD_ILLUSTRATION` varchar(80) DEFAULT NULL,
  `IGD_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_publication_pub`
--

CREATE TABLE `t_publication_pub` (
  `PUB_ID` bigint(20) UNSIGNED NOT NULL,
  `PUB_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PUB_TITRE` varchar(80) NOT NULL,
  `PUB_DESCRIPTION` longtext NOT NULL,
  `PUB_DUREE` time NOT NULL,
  `PUB_DIFFICULTE` enum('facile','moyen','difficile') NOT NULL DEFAULT 'facile',
  `PUB_STATUT` enum('brouillon','soumise','finale') NOT NULL DEFAULT 'brouillon',
  `PUB_ILLUSTRATION` varchar(80) NOT NULL,
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `PUB_NBPERSONNE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_publication_pub`
--

INSERT INTO `t_publication_pub` (`PUB_ID`, `PUB_DATE`, `PUB_TITRE`, `PUB_DESCRIPTION`, `PUB_DUREE`, `PUB_DIFFICULTE`, `PUB_STATUT`, `PUB_ILLUSTRATION`, `UTI_ID`, `PUB_NBPERSONNE`) VALUES
(1, '2018-01-07 12:11:42', 'quete du dragon', 'blabla', '00:00:05', 'facile', 'brouillon', 'dragon.jpg', 1, 4),
(2, '2018-01-07 12:13:35', 'quete de la lune', 'blabla', '00:00:08', 'difficile', 'brouillon', 'lune.jpg', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `t_unite_uni`
--

CREATE TABLE `t_unite_uni` (
  `UNI_LABEL` varchar(30) NOT NULL,
  `UNI_SHORT_LABEL` varchar(15) NOT NULL,
  `UNI_DESCRIPTION` mediumtext NOT NULL,
  `UNI_VALIDE` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_ID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur_uti`
--

CREATE TABLE `t_utilisateur_uti` (
  `UTI_ID` bigint(20) UNSIGNED NOT NULL,
  `UTI_LOGIN` varchar(255) NOT NULL,
  `UTI_MAIL` varchar(255) NOT NULL,
  `UTI_NOM` varchar(255) NOT NULL,
  `UTI_PRENOM` varchar(255) NOT NULL,
  `UTI_PASS` varchar(40) NOT NULL,
  `UTI_ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_AVATAR` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_utilisateur_uti`
--

INSERT INTO `t_utilisateur_uti` (`UTI_ID`, `UTI_LOGIN`, `UTI_MAIL`, `UTI_NOM`, `UTI_PRENOM`, `UTI_PASS`, `UTI_ADMIN`, `UTI_AVATAR`) VALUES
(1, 'polo', 'paul@gmail.com', 'paul', 'wolfger', 'mdp789', 0, 'test.jpg'),
(2, 'alexxx', 'alex@gmail.com', 'alex', 'durand', 'mdp004', 0, 'try.jpg'),
(3, 'martaya', 'marta@gmail.com', 'marta', 'uloris', 'mdp456', 0, 'wha.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tj_cat_pub`
--
ALTER TABLE `tj_cat_pub`
  ADD PRIMARY KEY (`CAT_ID`,`PUB_ID`),
  ADD KEY `CAT_ID` (`CAT_ID`),
  ADD KEY `PUB_ID` (`PUB_ID`);

--
-- Index pour la table `tj_igd_pub_uni`
--
ALTER TABLE `tj_igd_pub_uni`
  ADD PRIMARY KEY (`PUB_ID`,`IGD_LABEL`,`UNI_LABEL`),
  ADD KEY `C_FK_IGD_IGD_PUB_UNI` (`IGD_LABEL`),
  ADD KEY `C_FK_UNI_IGD_PUB_UNI` (`UNI_LABEL`);

--
-- Index pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Index pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `PUB_ID` (`PUB_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  ADD PRIMARY KEY (`IGD_LABEL`),
  ADD KEY `IGD_LABEL` (`IGD_LABEL`),
  ADD KEY `C_FK_UTI_IGD` (`UTI_ID`);

--
-- Index pour la table `t_publication_pub`
--
ALTER TABLE `t_publication_pub`
  ADD PRIMARY KEY (`PUB_ID`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD PRIMARY KEY (`UNI_LABEL`),
  ADD KEY `UTI_ID` (`UTI_ID`);

--
-- Index pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  ADD PRIMARY KEY (`UTI_ID`),
  ADD UNIQUE KEY `UTI_LOGIN` (`UTI_LOGIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_categorie_cat`
--
ALTER TABLE `t_categorie_cat`
  MODIFY `CAT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  MODIFY `COM_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_publication_pub`
--
ALTER TABLE `t_publication_pub`
  MODIFY `PUB_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
  MODIFY `UTI_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tj_cat_pub`
--
ALTER TABLE `tj_cat_pub`
  ADD CONSTRAINT `C_FK_CAT_CAT_PUB` FOREIGN KEY (`CAT_ID`) REFERENCES `t_categorie_cat` (`CAT_ID`),
  ADD CONSTRAINT `C_FK_PUB_CAT_PUB` FOREIGN KEY (`PUB_ID`) REFERENCES `t_publication_pub` (`PUB_ID`);

--
-- Contraintes pour la table `tj_igd_pub_uni`
--
ALTER TABLE `tj_igd_pub_uni`
  ADD CONSTRAINT `C_FK_IGD_IGD_PUB_UNI` FOREIGN KEY (`IGD_LABEL`) REFERENCES `t_ingredient_igd` (`IGD_LABEL`),
  ADD CONSTRAINT `C_FK_PUB_IGD_PUB_UNI` FOREIGN KEY (`PUB_ID`) REFERENCES `t_publication_pub` (`PUB_ID`),
  ADD CONSTRAINT `C_FK_UNI_IGD_PUB_UNI` FOREIGN KEY (`UNI_LABEL`) REFERENCES `t_unite_uni` (`UNI_LABEL`);

--
-- Contraintes pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD CONSTRAINT `C_FK_PUB_COM` FOREIGN KEY (`PUB_ID`) REFERENCES `t_publication_pub` (`PUB_ID`),
  ADD CONSTRAINT `C_FK_UTI_COM` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_ingredient_igd`
--
ALTER TABLE `t_ingredient_igd`
  ADD CONSTRAINT `C_FK_UTI_IGD` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_publication_pub`
--
ALTER TABLE `t_publication_pub`
  ADD CONSTRAINT `C_FK_UTI_PUB` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);

--
-- Contraintes pour la table `t_unite_uni`
--
ALTER TABLE `t_unite_uni`
  ADD CONSTRAINT `C_FK_UNI_UTI` FOREIGN KEY (`UTI_ID`) REFERENCES `t_utilisateur_uti` (`UTI_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
