-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 mars 2020 à 16:19
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appli_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

DROP TABLE IF EXISTS `candidature`;
CREATE TABLE IF NOT EXISTS `candidature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  `moyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `reponse` int(11) NOT NULL,
  `delai_reponse` int(11) DEFAULT NULL,
  `formation_id` int(11) NOT NULL,
  `date_envoie_candidature` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E33BD3B8A76ED395` (`user_id`),
  KEY `IDX_E33BD3B8A4AEAFEA` (`entreprise_id`),
  KEY `IDX_E33BD3B85200282E` (`formation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`id`, `user_id`, `entreprise_id`, `moyen`, `etat`, `reponse`, `delai_reponse`, `formation_id`, `date_envoie_candidature`) VALUES
(17, 15, 10, '1', 0, 0, NULL, 1, '2020-03-03'),
(18, 15, 10, '1', 0, 0, NULL, 1, '2020-03-03'),
(19, 14, 10, '1', 1, 3, 8, 1, '2020-03-10'),
(20, 14, 11, '1', 0, 0, 5, 1, '2020-03-01'),
(21, 15, 11, '2', 1, 3, 2, 3, '2020-03-01'),
(22, 15, 11, '3', 1, 4, 5, 3, '2020-03-04'),
(23, 14, 12, '1', 1, 3, 1, 1, '2020-02-04'),
(24, 14, 13, '2', 0, 0, NULL, 1, '2020-03-31');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C62E638A4AEAFEA` (`entreprise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `entreprise_id`, `nom`, `fonction`, `tel`, `mail`, `linkedin`) VALUES
(13, 10, 'mr machin', 'directeur dsi', NULL, 'machin.cooperl.fr', NULL),
(14, 10, 'mr truc', 'developpeur', NULL, 'truc.cooperl.fr', 'truc.Machin'),
(15, 11, 'mr machin', 'developpeur', '0606060606', NULL, NULL),
(16, 12, 'jeremy', 'recruteur ninja', NULL, 'ninja@yes.com', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secteur_activite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `historique_modif` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D19FA606C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `secteur_activite`, `adresse`, `code_postal`, `departement`, `tel`, `mail`, `historique_modif`) VALUES
(10, 'cooperl', 'agro_alimentaire', 'balballba', 22400, '22', '060606', '0', 'a:5:{s:16:\"2020-03-11 10:05\";a:1:{i:0;s:5:\"ajout\";}s:16:\"2020-03-11 10:06\";a:2:{i:0;s:39:\"ajout contact :mr machin, directeur dsi\";i:1;s:35:\"ajout contact :mr truc, developpeur\";}s:16:\"2020-03-11 10:24\";a:1:{i:0;s:22:\"modif entreprise :Mail\";}s:16:\"2020-03-11 10:35\";a:2:{i:0;s:21:\"modif entreprise :Tel\";i:1;s:22:\"modif entreprise :Mail\";}s:16:\"2020-03-11 10:37\";a:2:{i:0;s:21:\"modif entreprise :Tel\";i:1;s:22:\"modif entreprise :Mail\";}}'),
(11, 'error404', 'communication', '25 rue machin', 22000, '22', NULL, 'contact@contact.fr', 'a:1:{s:16:\"2020-03-11 10:09\";a:2:{i:0;s:5:\"ajout\";i:1;s:37:\"ajout contact :mr machin, developpeur\";}}'),
(12, 'YesWeDev', 'service', '2 rue machin', 35000, '35', '06060606060', 'contact@contact.com', 'a:2:{s:16:\"2020-03-11 10:16\";a:1:{i:0;s:5:\"ajout\";}s:16:\"2020-03-11 10:21\";a:1:{i:0;s:38:\"ajout contact :jeremy, recruteur ninja\";}}'),
(13, 'test', 'test', 'test', 22000, '22', '0', '0', 'a:1:{s:16:\"2020-03-11 13:43\";a:1:{i:0;s:5:\"ajout\";}}');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise_formation`
--

DROP TABLE IF EXISTS `entreprise_formation`;
CREATE TABLE IF NOT EXISTS `entreprise_formation` (
  `entreprise_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  PRIMARY KEY (`entreprise_id`,`formation_id`),
  KEY `IDX_DDC08616A4AEAFEA` (`entreprise_id`),
  KEY `IDX_DDC086165200282E` (`formation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise_formation`
--

INSERT INTO `entreprise_formation` (`entreprise_id`, `formation_id`) VALUES
(10, 1),
(10, 4),
(11, 1),
(11, 3),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `tag`, `promotion`) VALUES
(1, 'cda', 'cda/2019-2020', '2019-2020'),
(2, 'cda', 'cda/2018-2019', '2018-2019'),
(3, 'wd', 'wd/2019-2020', '2019-2020'),
(4, 'Plaquiste-platrier', 'Plaquiste-platrier/2019-2020', '2019-2020');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200228081021', '2020-02-28 08:10:37'),
('20200228084334', '2020-02-28 08:43:46'),
('20200228090109', '2020-02-28 09:01:23'),
('20200228090419', '2020-02-28 09:04:29'),
('20200228094024', '2020-02-28 09:40:34'),
('20200304101356', '2020-03-04 10:16:35'),
('20200304132826', '2020-03-04 13:30:12');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation_password` datetime NOT NULL,
  `liste_pwd` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `etat_compte` int(11) NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  UNIQUE KEY `UNIQ_8D93D6497BA2F5EB` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `date_creation_password`, `liste_pwd`, `etat_compte`, `api_token`) VALUES
(14, 'test', '[]', '$argon2id$v=19$m=65536,t=4,p=1$cWlvMS40d04xbG5qZHNFTA$DB25R0zk22CePd/nwK54f6TUDVODRSnJjDof7vXO3yg', 'test', 'test2', '2020-03-11 10:03:26', 'a:5:{i:0;s:97:\"$argon2id$v=19$m=65536,t=4,p=1$b2JSRVFIWkxZODVTbktEMw$eCWtF6J1IR04DeOgGJ0Ax3+WyM2jrIRUVq0mzQg4efU\";i:1;N;i:2;N;i:3;N;i:4;N;}', 1, 'ryyLbGSd697hck6sVrTbTXNG8VmHStADv52Jmxvqy7Bvt0NRHK'),
(15, 'admin', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$cWlvMS40d04xbG5qZHNFTA$DB25R0zk22CePd/nwK54f6TUDVODRSnJjDof7vXO3yg', 'admin', 'admin', '2020-03-11 10:03:45', 'a:5:{i:0;s:97:\"$argon2id$v=19$m=65536,t=4,p=1$L2VTUUtTTVFEVUR3cks4Rg$7gQWw1Vx5SofpODDXwyMbTeV3KqQiCNAG4cQsBwbM1g\";i:1;N;i:2;N;i:3;N;i:4;N;}', 1, 'NfWUyieg2SYg3DqIsJzGpXcfeeHwIT3gg322ApXxqbLcX3s8ub');

-- --------------------------------------------------------

--
-- Structure de la table `user_formation`
--

DROP TABLE IF EXISTS `user_formation`;
CREATE TABLE IF NOT EXISTS `user_formation` (
  `user_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`formation_id`),
  KEY `IDX_40A0AC5BA76ED395` (`user_id`),
  KEY `IDX_40A0AC5B5200282E` (`formation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_formation`
--

INSERT INTO `user_formation` (`user_id`, `formation_id`) VALUES
(14, 1),
(15, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `FK_E33BD3B85200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_E33BD3B8A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`),
  ADD CONSTRAINT `FK_E33BD3B8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E638A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `entreprise_formation`
--
ALTER TABLE `entreprise_formation`
  ADD CONSTRAINT `FK_DDC086165200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DDC08616A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_formation`
--
ALTER TABLE `user_formation`
  ADD CONSTRAINT `FK_40A0AC5B5200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_40A0AC5BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
