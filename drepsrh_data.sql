-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 14 oct. 2022 à 16:31
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `drepsrh_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chemin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume4` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datePublication` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `chemin`, `titre`, `resume1`, `resume2`, `resume3`, `resume4`, `datePublication`) VALUES
(9, 'img/220928144922.jpg', 'Ministère en charge du numérique', 'Ouagadougou, le 26 septembre 2022).  Le Secrétaire Général du Ministère de la Transition digitale, des Postes et des Communications Elec', '0', '0', '0', '2022-09-07'),
(7, 'img//220928142516.jpg', 'Campagne pour la réélection du Burkina Faso au Conseil de l’UIT', '(Bucarest, le 28 septembre 2022. TU+3). La Délégation du Burkina Faso conduite par Docteure Aminata ZERBO/SABANE a échangé ce jour avec la délégation de la Lituanie en marge des travaux de la 21ème Conférence des Plénipotentiaires de l’UI', 'T. \r\nLe Burkina Faso est candidat pour sa réélection au Conseil de l’UIT et la délégation lituanienne soutient la candidature de son compatriote au poste de Secrétaire général adjoint de l’UIT. Les deux délégations (burkinabè et lituan', '0', '0', '2022-09-08'),
(8, 'img//220928142547.jpg', 'Harmonisation des priorités de l’espace francophone africain et de l’UIT dans le domaine du numérique', '(Bucarest, le 27 septembre 2022. TU+3). Les Ministres IT des pays membres du Réseau francophone des ministres en charge de l’économie numérique (RFMEN) dont Docteure Aminata ZERBO/SABANE, Ministre de la Transition Digitale, des Postes et des Co', 'mmunications Electroniques, ont tenu une réunion en marge de la 21ème Conférence des Plénipotentiaires de l’UIT en fin d’après-midi de ce jour au Palais du Parlement. \r\nIl s’est agi pour les Ministres au cours de cette réunion, d’écha', 'tion des e-services…\r\nIntervenant sur le sujet de la cybersécurité, les Ministres ont indiqué qu’elle constitue un élément fondamental pour assurer une confiance numérique. En effet, la cybersécurité est cruciale pour garantir un accès ', 'niversel, fiable et équitable aux produits et services en ligne, pour créer un cyberespace digne de confiance.\r\nLa rencontre a été présidée par la Ministre en charge du numérique du Bénin, Aurélie ADAM SOULE ZOUMAROU, présidente en exercic', '2022-09-14'),
(6, 'img//220928142414.jpg', 'Coopération multilatérale dans le secteur du numérique', '(Bucarest, le 28 septembre 2022. TU+3). Le Secrétaire général de l’UIT, Houlin ZHAO, a reçu en audience ce jour, la Ministre de la Transition Digitale, des Postes et des Communications Electroniques, Docteure Aminata ZERBO/SABANE. \r\nPrésente ', 'à Bucarest en Roumanie dans le cadre de la 21ème Conférence des Plénipotentiaires de l’UIT, Docteure Aminata ZERBO/SABANE a saisi l’occasion pour rendre une visite de courtoisie au Secrétaire général de l\'institution spécialisée des Nat', '0', '0', '2022-09-20'),
(5, 'img//220925234224.webp', 'Rentrée Scolaire a la DREPS Nord', 'Ayant parcouru minutieusement le programme de la formation via votre site web, cette dernière \r\ns’inscrit parfaitement dans la logique de mon projet d’étude ainsi que mon projet professionnel. En effet le \r\ndomaine de l’Informatique est un d', 'omaine qui m’intéresse pour plusieurs raisons.\r\nTout d’abord, il s’agit d’un domaine transversal aux autres domaines de travail. L’informatique \r\npermet d’apporter des solutions aussi bien dans l’agriculture que dans les finances ou d', 'roblème est \r\ntellement attrayant ou disons grisant', '0', '2022-09-20');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matriculeAgent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomAgent` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomAgent` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexeAgent` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateDeNaissanceAgent` date NOT NULL,
  `DateDerniereDecoration` date NOT NULL,
  `Titrehonorifique` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateIntegrationFP` date NOT NULL,
  `DatePriseServiceLieuTravail` date NOT NULL,
  `DatePriseServiceProvinceRegion` date NOT NULL,
  `LieuDeNaissanceAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeDePersonnel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LieuDeTravailAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmploiAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FonctionAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DernierDiplomeAccademique` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategorieAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EchelleAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EchellonAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeAgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCreateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `matriculeAgent`, `nomAgent`, `prenomAgent`, `sexeAgent`, `DateDeNaissanceAgent`, `DateDerniereDecoration`, `Titrehonorifique`, `DateIntegrationFP`, `DatePriseServiceLieuTravail`, `DatePriseServiceProvinceRegion`, `LieuDeNaissanceAgent`, `TypeDePersonnel`, `LieuDeTravailAgent`, `EmploiAgent`, `FonctionAgent`, `DernierDiplomeAccademique`, `CategorieAgent`, `EchelleAgent`, `EchellonAgent`, `TypeAgent`, `idCreateur`) VALUES
(2, 'H515M545', 'Ouedraogo', 'Moussa', 'M', '1985-01-01', '2000-01-01', 'Chevalier de l\'ordre national', '2000-01-01', '2000-01-01', '2000-01-01', 'OHG', '1', 'DREPS Nord', '2', 'Chef de service SCTIC', 'Master en Imagerie', '1', '2', '2', 'MIN', 0),
(5, 'H515M54', 'Ilboudo', 'Zack', 'M', '2022-09-12', '2022-09-15', 'Chevalier', '2022-09-21', '2022-09-13', '2022-09-22', 'OHG', '1', '1', '1', '1', '3', '4', '5', '4', 'MIN', 3),
(7, 'H515M54ff', 'Ouedraogo', 'Moussa', 'M', '2000-01-01', '2022-09-20', 'dfsfdfdf', '2022-09-13', '2022-09-28', '2022-09-08', 'OHG', 'Personnel Interne', 'Indeterminé', 'Professeurs de Math', 'Professeur Certifié', 'Ingeniorat', 'A', '2', '6', 'MIN', 4),
(1, 'H515M5451', 'Ouedraogo', 'Moussa', 'M', '1985-01-01', '2000-01-01', 'Chevalier de l\'ordre national', '2000-01-01', '2000-01-01', '2000-01-01', 'OHG', '1', 'DREPS Nord', '2', 'Chef de service SCTIC', 'Master en Imagerie', '1', '2', '2', 'MIN', 0),
(3, 'H515M54D1S', 'Drabo', 'Salimata', 'F', '1970-01-01', '1970-01-01', 'Chevalier de l\'ordre des palmes académiques', '1970-01-01', '1970-01-01', '1970-01-01', 'Tougan', '1', '1', '1', '1', '6', '2', '7', '6', 'MIN', 2),
(6, 'H515M541', 'Ilboudo', 'Zack', 'M', '2022-12-09', '1970-01-01', 'Chevalier', '1970-01-01', '1970-01-01', '1970-01-01', 'OHG', '1', '1', '1', '1', '3', '4', '5', '4', 'MIN', 3),
(8, 'H515M54ff1', 'Ouedraogo', 'Moussa', 'M', '2000-01-01', '1970-01-01', 'dfsfdfdf', '1970-01-01', '1970-01-01', '2022-08-09', 'OHG', 'Personnel Interne', 'Indeterminé', 'Professeurs de Math', 'Professeur Certifié', 'Ingeniorat', 'A', '2', '6', 'MIN', 4);

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chemin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePublication` date NOT NULL,
  `tailleFichier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `chemin`, `titre`, `datePublication`, `tailleFichier`) VALUES
(1, 'files//221005113625.pdf', 'Nouvel organigramme de la DREPS', '2022-05-10', '1334410'),
(2, 'files//221005113746.pdf', 'Note sur les affectations', '2022-05-10', '111527'),
(3, 'files//221005113813.pdf', 'Note debut de la rentrée academique', '2022-05-10', '151129'),
(4, 'files//221005113827.pdf', 'Rentrée Scolaire a la DREPS Nord-Communiqué', '2022-05-10', '151129'),
(5, 'files//221005113906.pdf', 'Recrutement d\'enseignement', '2022-05-10', '123774'),
(6, 'files//221005113927.pdf', 'Liste des admis', '2022-05-10', '317151'),
(7, 'files//221005114000.pdf', 'Note de prise service', '2022-05-10', '68894'),
(8, 'files//221005114013.pdf', 'Note de prise de service', '2022-05-10', '111527'),
(9, 'files//221005114034.pdf', 'Note-Respect des heures de service', '2022-05-10', '123774');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomCategorie` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `NomCategorie`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCommune` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPEPS` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commune_dpeps_foreign` (`DPEPS`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id`, `nomCommune`, `DPEPS`) VALUES
(1, 'Lebba', 1),
(2, 'Zogoré', 1),
(3, 'Soumiaga', 1);

-- --------------------------------------------------------

--
-- Structure de la table `diplomeaccademique`
--

DROP TABLE IF EXISTS `diplomeaccademique`;
CREATE TABLE IF NOT EXISTS `diplomeaccademique` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomDiplome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `diplomeaccademique`
--

INSERT INTO `diplomeaccademique` (`id`, `NomDiplome`) VALUES
(1, 'Baccalaureat'),
(2, 'BEPC'),
(3, 'CEP'),
(4, 'Licence'),
(5, 'Ingeniorat'),
(6, 'Maitrise'),
(7, 'Doctorat');

-- --------------------------------------------------------

--
-- Structure de la table `dpeps`
--

DROP TABLE IF EXISTS `dpeps`;
CREATE TABLE IF NOT EXISTS `dpeps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomDPEPS` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom1erRespDPEPS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom1erRespDPEPS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emploi1erRespDPEPS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titreHonor1respDPEPS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DREPS` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dpeps_nomdpeps_unique` (`nomDPEPS`),
  KEY `dpeps_dreps_foreign` (`DREPS`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dpeps`
--

INSERT INTO `dpeps` (`id`, `nomDPEPS`, `nom1erRespDPEPS`, `prenom1erRespDPEPS`, `Emploi1erRespDPEPS`, `titreHonor1respDPEPS`, `DREPS`) VALUES
(1, 'DPEPS Yatenga', 'Zongo', 'Alidou', 'Professeur certifié', 'Chevalier des palmes académiques', 1),
(2, 'DPEPS Sanematenga', 'Ouedraogo', 'Bourkary', 'Professeur Certifié', 'Chevalier de l\'ordre national', 2),
(3, 'DPEPS-Ziniaré', 'Guiro', 'Abdoulaye', 'Professeur certifié', 'Chevalier de l\'ordre national', 3);

-- --------------------------------------------------------

--
-- Structure de la table `dreps`
--

DROP TABLE IF EXISTS `dreps`;
CREATE TABLE IF NOT EXISTS `dreps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomDREPS` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emploi1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titreHonorifique1resp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dreps_nomdreps_unique` (`nomDREPS`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dreps`
--

INSERT INTO `dreps` (`id`, `nomDREPS`, `nom1erResponsable`, `prenom1erResponsable`, `Emploi1erResponsable`, `titreHonorifique1resp`) VALUES
(1, 'DREPS-Nord', 'Ouedraogo', 'Hypolite', 'Directeur', 'Chevalier de l\'ordre des palmes académiques'),
(2, 'DREPS-Centre', 'Zongo', 'Abdoul Latif', 'Directeur', 'Chevalier de l\'ordre des palmes académiques'),
(3, 'DREPS-Cascade', 'Barry', 'Assane', 'Directeur', 'Chevalier de l\'ordre  académique'),
(4, 'DREPS-Haut Bassin', 'SY', 'Assane', 'Directeur', 'Chevalier de l\'ordre  académique');

-- --------------------------------------------------------

--
-- Structure de la table `echelle`
--

DROP TABLE IF EXISTS `echelle`;
CREATE TABLE IF NOT EXISTS `echelle` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomEchelle` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `echellon`
--

DROP TABLE IF EXISTS `echellon`;
CREATE TABLE IF NOT EXISTS `echellon` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomEchellon` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomEmploi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `NomEmploi`) VALUES
(1, 'Professeurs de Math'),
(2, 'Professeurs de Chimie');

-- --------------------------------------------------------

--
-- Structure de la table `etablissements`
--

DROP TABLE IF EXISTS `etablissements`;
CREATE TABLE IF NOT EXISTS `etablissements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomEtablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localite` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDpeps` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `etablissements_iddpeps_foreign` (`idDpeps`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etablissements`
--

INSERT INTO `etablissements` (`id`, `nomEtablissement`, `localite`, `idDpeps`) VALUES
(1, 'Lycée Yadega', 'Yatenga', 1),
(2, 'Lycée El Chadai', 'Ziniaré', 3);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomFonction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `NomFonction`) VALUES
(1, 'Professeur Certifié'),
(2, 'Professeur Vacataire');

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chemin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galleries`
--

INSERT INTO `galleries` (`id`, `chemin`, `titre`) VALUES
(16, 'img/220928170252.jpg', 'L\'enfance'),
(15, 'img/220928170239.jpg', 'L\'enseignement:Une Passion avant tout'),
(14, 'img/220928170225.webp', 'L\'enseignement:Une Passion avant tout'),
(13, 'img/220928170211.jpg', 'L\'enseignement:Une Passion avant tout'),
(11, 'img/220928170151.webp', 'L\'enseignement:Une Passion avant tout'),
(12, 'img/220928170200.jpg', 'L\'enseignement:Une Passion avant tout'),
(17, 'img/220928170312.jpg', 'L\'enseignement:Une Passion avant tout'),
(18, 'img/220928170401.jpg', 'L\'enseignement:Une Passion avant tout'),
(19, 'img/220928170418.jpg', 'L\'enseignement:Une Passion avant tout');

-- --------------------------------------------------------

--
-- Structure de la table `lieudetravail`
--

DROP TABLE IF EXISTS `lieudetravail`;
CREATE TABLE IF NOT EXISTS `lieudetravail` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomLieuDeTravail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeLieuDeTravail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Localite` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lieudetravail_localite_foreign` (`Localite`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lieudetravail`
--

INSERT INTO `lieudetravail` (`id`, `nomLieuDeTravail`, `TypeLieuDeTravail`, `Localite`) VALUES
(1, 'Indeterminé', 'Indeterminé', 1);

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

DROP TABLE IF EXISTS `localite`;
CREATE TABLE IF NOT EXISTS `localite` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomLocalite` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Commune` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `localite_commune_foreign` (`Commune`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`id`, `nomLocalite`, `Commune`) VALUES
(1, 'Lebba', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_08_083303_create_sessions_table', 1),
(7, '2022_04_18_114457_autres_tables', 1),
(8, '2022_09_25_201125_actualites', 2),
(9, '2022_09_25_211808_gallery', 3),
(10, '2022_09_30_132957_annonce', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ministeres`
--

DROP TABLE IF EXISTS `ministeres`;
CREATE TABLE IF NOT EXISTS `ministeres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomMinistere` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emploi1erResponsable` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titreHonorifique1resp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ministeres_nomministere_unique` (`nomMinistere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gpS181SsoMOq2eHJHU5WvD6KygZnmPxlCTOUfvFu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:105.0) Gecko/20100101 Firefox/105.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkNuTGNkR1NyQWkyRXNPS1NsZ21YVXFSOHFZamRZZ21xQVZ0YnM2ciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9kcmVwc3JoL3B1YmxpYyI7fX0=', 1665765010);

-- --------------------------------------------------------

--
-- Structure de la table `typepersonnel`
--

DROP TABLE IF EXISTS `typepersonnel`;
CREATE TABLE IF NOT EXISTS `typepersonnel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TypePersonnel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typepersonnel`
--

INSERT INTO `typepersonnel` (`id`, `TypePersonnel`) VALUES
(1, 'Personnel Interne'),
(2, 'Stagiaire');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verifie_le` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `email_verifie_le`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin530', 'Admin530@gmail.com', NULL, '$2y$10$LVSplh6IHIJ2ZOjRJlOhPOBcE6CSxRTAJ1ZAwtsKD4bOjvfYoo1ga', NULL, NULL, 1, NULL, NULL, NULL),
(2, 'Dreps530', 'Dreps530@gmail.com', NULL, '$2y$10$rHG9XGa1rQN9twcBdPuu..dCChZA6gp9ZkTa9ee4Kp8CsdtWQWrZa', NULL, NULL, 3, NULL, NULL, NULL),
(3, 'Dpeps530', 'Dpeps530@gmail.com', NULL, '$2y$10$GptRHc/vvfEGlevlXRiYpusG3D3w7LwDybTF41gHd9/vwcMQXxM3W', NULL, NULL, 4, NULL, NULL, NULL),
(4, 'Ministere530', 'Ministere530@gmail.com', NULL, '$2y$10$gZM0WSb6IcwNNmVYXnk1YeUJgdHtMxzDxxdVBHQZkkDjlJqhqclIy', NULL, NULL, 2, NULL, NULL, NULL),
(5, 'Ets530', 'Ets530@gmail.com', NULL, '$2y$10$yhhWNEwAMzaaaGTS825dZOHlGqc7aSn5LDigOkfRze5EedeHQ3hBq', NULL, NULL, 0, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
