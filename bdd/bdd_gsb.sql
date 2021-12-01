-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 01 déc. 2021 à 16:17
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
-- Base de données :  `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite_compl`
--

DROP TABLE IF EXISTS `activite_compl`;
CREATE TABLE IF NOT EXISTS `activite_compl` (
  `AC_NUM` int(11) NOT NULL,
  `AC_DATE` datetime DEFAULT NULL,
  `AC_LIEU` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `AC_THEME` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`AC_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

DROP TABLE IF EXISTS `collaborateur`;
CREATE TABLE IF NOT EXISTS `collaborateur` (
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `COL_NOM` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `COL_PRENOM` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `COL_ADRESSE` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `COL_CP` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `COL_VILLE` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `COL_DATEEMBAUCHE` datetime DEFAULT NULL,
  `HAB_ID` int(11) DEFAULT NULL,
  `LOG_ID` int(11) DEFAULT NULL,
  `SEC_CODE` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `REG_CODE` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`COL_MATRICULE`),
  UNIQUE KEY `collaborateur_login0_AK` (`LOG_ID`),
  KEY `collaborateur_habilitation0_FK` (`HAB_ID`),
  KEY `collaborateur_secteur0_FK` (`SEC_CODE`),
  KEY `collaborateur_region1_FK` (`REG_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `collaborateur`
--

INSERT INTO `collaborateur` (`COL_MATRICULE`, `COL_NOM`, `COL_PRENOM`, `COL_ADRESSE`, `COL_CP`, `COL_VILLE`, `COL_DATEEMBAUCHE`, `HAB_ID`, `LOG_ID`, `SEC_CODE`, `REG_CODE`) VALUES
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', '29000', 'BREST', '1992-12-11 00:00:00', 1, 1, 'E', 'BN'),
('a17', 'Andre', 'David', '1 r Aimon de Chissée', '38100', 'GRENOBLE', '1991-08-26 00:00:00', NULL, NULL, NULL, 'RA'),
('a55', 'Bedos', 'Christian', '1 r Bénédictins', '65000', 'TARBES', '1987-07-17 00:00:00', NULL, NULL, NULL, 'RO'),
('a93', 'Tusseau', 'Louis', '22 r Renou', '86000', 'POITIERS', '1999-01-02 00:00:00', NULL, NULL, NULL, 'PC'),
('b13', 'Bentot', 'Pascal', '11 av 6 Juin', '67000', 'STRASBOURG', '1996-03-11 00:00:00', NULL, NULL, NULL, 'AL'),
('b16', 'Bioret', 'Luc', '1 r Linne', '35000', 'RENNES', '1997-03-21 00:00:00', NULL, NULL, NULL, 'BG'),
('b19', 'Bunisset', 'Francis', '10 r Nicolas Chorier', '85000', 'LA ROCHE SUR YON', '1999-01-31 00:00:00', NULL, NULL, NULL, 'PL'),
('b25', 'Bunisset', 'Denise', '1 r Lionne', '49100', 'ANGERS', '1994-07-03 00:00:00', NULL, NULL, NULL, 'PL'),
('b28', 'Cacheux', 'Bernard', '114 r Authie', '34000', 'MONTPELLIER', '2000-08-02 00:00:00', NULL, NULL, NULL, 'LG'),
('b34', 'Cadic', 'Eric', '123 r Caponière', '41000', 'BLOIS', '1993-12-06 00:00:00', NULL, NULL, NULL, 'CE'),
('b4', 'Charoze', 'Catherine', '100 pl Géants', '33000', 'BORDEAUX', '1997-09-25 00:00:00', NULL, NULL, NULL, 'AQ'),
('b50', 'Clepkens', 'Christophe', '12 r Fédérico Garcia Lorca', '13000', 'MARSEILLE', '1998-01-18 00:00:00', NULL, NULL, NULL, 'PA'),
('b59', 'Cottin', 'Vincenne', '36 sq Capucins', '5000', 'GAP', '1995-10-21 00:00:00', NULL, NULL, NULL, 'RA'),
('c14', 'Daburon', 'François', '13 r Champs Elysées', '6000', 'NICE', '1989-02-01 00:00:00', NULL, NULL, NULL, 'PA'),
('c3', 'De', 'Philippe', '13 r Charles Peguy', '10000', 'TROYES', '1992-05-05 00:00:00', NULL, NULL, NULL, 'CA'),
('c54', 'Debelle', 'Michel', '181 r Caponière', '88000', 'EPINAL', '1991-04-09 00:00:00', NULL, NULL, NULL, 'AL'),
('d13', 'Debelle', 'Jeanne', '134 r Stalingrad', '44000', 'NANTES', '1991-12-05 00:00:00', NULL, NULL, NULL, 'PL'),
('d51', 'Debroise', 'Michel', '2 av 6 Juin', '70000', 'VESOUL', '1997-11-18 00:00:00', NULL, NULL, NULL, 'FC'),
('e22', 'Desmarquest', 'Nathalie', '14 r Fédérico Garcia Lorca', '54000', 'NANCY', '1989-03-24 00:00:00', NULL, NULL, NULL, 'AL'),
('e24', 'Desnost', 'Pierre', '16 r Barral de Montferrat', '55000', 'VERDUN', '1993-05-17 00:00:00', NULL, NULL, NULL, 'AL'),
('e39', 'Dudouit', 'Frédéric', '18 quai Xavier Jouvin', '75000', 'PARIS', '1988-04-26 00:00:00', NULL, NULL, NULL, 'IF'),
('e49', 'Duncombe', 'Claude', '19 av Alsace Lorraine', '9000', 'FOIX', '1996-02-19 00:00:00', NULL, NULL, NULL, 'MP'),
('e5', 'Enault-Pascreau', 'Céline', '25B r Stalingrad', '40000', 'MONT DE MARSAN', '1990-11-27 00:00:00', NULL, NULL, NULL, 'MP'),
('e52', 'Eynde', 'Valérie', '3 r Henri Moissan', '76000', 'ROUEN', '1991-10-31 00:00:00', NULL, NULL, NULL, 'HN'),
('f21', 'Finck', 'Jacques', 'rte Montreuil Bellay', '74000', 'ANNECY', '1993-06-08 00:00:00', NULL, NULL, NULL, 'RA'),
('f39', 'Frémont', 'Fernande', '4 r Jean Giono', '69000', 'LYON', '1997-02-15 00:00:00', NULL, NULL, NULL, 'RA'),
('f4', 'Gest', 'Alain', '30 r Authie', '46000', 'FIGEAC', '1994-05-03 00:00:00', NULL, NULL, NULL, 'MP'),
('g19', 'Gheysen', 'Galassus', '32 bd Mar Foch', '75000', 'PARIS', '1996-01-18 00:00:00', NULL, NULL, NULL, 'IF'),
('g30', 'Girard', 'Yvon', '31 av 6 Juin', '80000', 'AMIENS', '1999-03-27 00:00:00', NULL, NULL, NULL, 'PI'),
('g53', 'Gombert', 'Luc', '32 r Emile Gueymard', '56000', 'VANNES', '1985-10-02 00:00:00', NULL, NULL, NULL, 'BG'),
('g7', 'Guindon', 'Caroline', '40 r Mar Montgomery', '87000', 'LIMOGES', '1996-01-13 00:00:00', NULL, NULL, NULL, 'LI'),
('h13', 'Guindon', 'François', '44 r Picotière', '19000', 'TULLE', '1993-05-08 00:00:00', NULL, NULL, NULL, 'LI'),
('h30', 'Igigabel', 'Guy', '33 gal Arlequin', '94000', 'CRETEIL', '1998-04-26 00:00:00', NULL, NULL, NULL, 'IF'),
('h35', 'Jourdren', 'Pierre', '34 av Jean Perrot', '15000', 'AURRILLAC', '1993-08-26 00:00:00', NULL, NULL, NULL, 'AU'),
('h40', 'Juttard', 'Pierre-Raoul', '34 cours Jean Jaurès', '8000', 'SEDAN', '1992-11-01 00:00:00', NULL, NULL, NULL, 'CA'),
('j45', 'Labouré-Morel', 'Saout', '38 cours Berriat', '52000', 'CHAUMONT', '1998-02-25 00:00:00', NULL, NULL, NULL, 'CA'),
('j50', 'Landré', 'Philippe', '4 av Gén Laperrine', '59000', 'LILLE', '1992-12-16 00:00:00', NULL, NULL, NULL, 'NP'),
('j8', 'Langeard', 'Hugues', '39 av Jean Perrot', '93000', 'BAGNOLET', '1998-06-18 00:00:00', NULL, NULL, NULL, 'IF'),
('k4', 'Lanne', 'Bernard', '4 r Bayeux', '30000', 'NIMES', '1996-11-21 00:00:00', NULL, NULL, NULL, 'LG'),
('k53', 'Le', 'Noël', '4 av Beauvert', '68000', 'MULHOUSE', '1983-03-23 00:00:00', NULL, NULL, NULL, 'CA'),
('l14', 'Le', 'Jean', '39 r Raspail', '53000', 'LAVAL', '1995-02-02 00:00:00', NULL, NULL, NULL, 'PL'),
('l23', 'Leclercq', 'Servane', '11 r Quinconce', '18000', 'BOURGES', '1995-06-05 00:00:00', NULL, NULL, NULL, 'PC'),
('l46', 'Lecornu', 'Jean-Bernard', '4 bd Mar Foch', '72000', 'LA FERTE BERNARD', '1997-01-24 00:00:00', NULL, NULL, NULL, 'PL'),
('l56', 'Lecornu', 'Ludovic', '4 r Abel Servien', '25000', 'BESANCON', '1996-02-27 00:00:00', NULL, NULL, NULL, 'FC'),
('m35', 'Lejard', 'Agnès', '4 r Anthoard', '82000', 'MONTAUBAN', '1987-10-06 00:00:00', NULL, NULL, NULL, 'MP'),
('m45', 'Lesaulnier', 'Pascal', '47 r Thiers', '57000', 'METZ', '1990-10-13 00:00:00', NULL, NULL, NULL, 'AL'),
('n42', 'Letessier', 'Stéphane', '5 chem Capuche', '27000', 'EVREUX', '1996-03-06 00:00:00', NULL, NULL, NULL, 'HN'),
('n58', 'Loirat', 'Didier', 'Les Pêchers cité Bourg la Croix', '45000', 'ORLEANS', '1992-08-30 00:00:00', NULL, NULL, NULL, 'CE'),
('n59', 'Maffezzoli', 'Thibaud', '5 r Chateaubriand', '2000', 'LAON', '1994-12-19 00:00:00', NULL, NULL, NULL, 'PI'),
('o26', 'Mancini', 'Anne', '5 r D\'Agier', '48000', 'MENDE', '1995-01-05 00:00:00', NULL, NULL, NULL, 'LG'),
('p32', 'Marcouiller', 'Gérard', '7 pl St Gilles', '91000', 'ISSY LES MOULINEAUX', '1992-12-24 00:00:00', NULL, NULL, NULL, 'IF'),
('p40', 'Michel', 'Jean-Claude', '5 r Gabriel Péri', '61000', 'FLERS', '1992-12-14 00:00:00', NULL, NULL, NULL, 'BN'),
('p41', 'Montecot', 'Françoise', '6 r Paul Valéry', '17000', 'SAINTES', '1998-07-27 00:00:00', NULL, NULL, NULL, 'PC'),
('p42', 'Notini', 'Veronique', '5 r Lieut Chabal', '60000', 'BEAUVAIS', '1994-12-12 00:00:00', NULL, NULL, NULL, 'PI'),
('p49', 'Onfroy', 'Den', '5 r Sidonie Jacolin', '37000', 'TOURS', '1977-10-03 00:00:00', NULL, NULL, NULL, 'CE'),
('p6', 'Pascreau', 'Charles', '57 bd Mar Foch', '64000', 'PAU', '1997-03-30 00:00:00', NULL, NULL, NULL, 'AQ'),
('p7', 'Pernot', 'Claude-Noël', '6 r Alexandre 1 de Yougoslavie', '11000', 'NARBONNE', '1990-03-01 00:00:00', NULL, NULL, NULL, 'RO'),
('p8', 'Perrier', 'Maître', '6 r Aubert Dubayet', '71000', 'CHALON SUR SAONE', '1991-06-23 00:00:00', NULL, NULL, NULL, 'BO'),
('q17', 'Petit', 'Jean-Louis', '7 r Ernest Renan', '50000', 'SAINT LO', '1997-09-06 00:00:00', NULL, NULL, NULL, 'BN'),
('r24', 'Piquery', 'Patrick', '9 r Vaucelles', '14000', 'CAEN', '1984-07-29 00:00:00', NULL, NULL, NULL, 'BN'),
('r58', 'Quiquandon', 'Joël', '7 r Ernest Renan', '29000', 'QUIMPER', '1990-06-30 00:00:00', NULL, NULL, NULL, 'BG'),
('s10', 'Retailleau', 'Josselin', '88Bis r Saumuroise', '39000', 'DOLE', '1995-11-14 00:00:00', NULL, NULL, NULL, 'FC'),
('s21', 'Retailleau', 'Pascal', '32 bd Ayrault', '23000', 'MONTLUCON', '1992-09-25 00:00:00', NULL, NULL, NULL, 'LI'),
('t43', 'Souron', 'Maryse', '7B r Gay Lussac', '21000', 'DIJON', '1995-03-09 00:00:00', NULL, NULL, NULL, 'BO'),
('t47', 'Tiphagne', 'Patrick', '7B r Gay Lussac', '62000', 'ARRAS', '1997-08-29 00:00:00', NULL, NULL, NULL, 'PI'),
('t55', 'Tréhet', 'Alain', '7D chem Barral', '12000', 'RODEZ', '1994-11-29 00:00:00', NULL, NULL, NULL, 'MP'),
('t60', 'Tusseau', 'Josselin', '63 r Bon Repos', '28000', 'CHARTRES', '1991-03-29 00:00:00', NULL, NULL, NULL, 'CE');

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

DROP TABLE IF EXISTS `composant`;
CREATE TABLE IF NOT EXISTS `composant` (
  `CMP_CODE` varchar(4) COLLATE utf8_bin NOT NULL,
  `CMP_LIBELLE` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`CMP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `constituer`
--

DROP TABLE IF EXISTS `constituer`;
CREATE TABLE IF NOT EXISTS `constituer` (
  `CMP_CODE` varchar(4) COLLATE utf8_bin NOT NULL,
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `CST_QTE` float NOT NULL,
  PRIMARY KEY (`CMP_CODE`,`MED_DEPOTLEGAL`),
  KEY `CONSTITUER_medicament1_FK` (`MED_DEPOTLEGAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `dosage`
--

DROP TABLE IF EXISTS `dosage`;
CREATE TABLE IF NOT EXISTS `dosage` (
  `DOS_CODE` varchar(10) COLLATE utf8_bin NOT NULL,
  `DOS_QUANTITE` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `DOS_UNITE` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`DOS_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `FAM_CODE` varchar(3) COLLATE utf8_bin NOT NULL,
  `FAM_LIBELLE` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`FAM_CODE`, `FAM_LIBELLE`) VALUES
('AA', 'Antalgiques en association'),
('AAA', 'Antalgiques antipyrétiques en association'),
('AAC', 'Antidépresseur d\'action centrale'),
('AAH', 'Antivertigineux antihistaminique H1'),
('ABA', 'Antibiotique antituberculeux'),
('ABC', 'Antibiotique antiacnéique local'),
('ABP', 'Antibiotique de la famille des béta-lactamines (pénicilline A)'),
('AFC', 'Antibiotique de la famille des cyclines'),
('AFM', 'Antibiotique de la famille des macrolides'),
('AH', 'Antihistaminique H1 local'),
('AIM', 'Antidépresseur imipraminique (tricyclique)'),
('AIN', 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine'),
('ALO', 'Antibiotique local (ORL)'),
('ANS', 'Antidépresseur IMAO non sélectif'),
('AO', 'Antibiotique ophtalmique'),
('AP', 'Antipsychotique normothymique'),
('AUM', 'Antibiotique urinaire minute'),
('CRT', 'Corticoïde, antibiotique et antifongique à  usage local'),
('HYP', 'Hypnotique antihistaminique'),
('PSA', 'Psychostimulant, antiasthénique');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_frais`
--

DROP TABLE IF EXISTS `fiche_frais`;
CREATE TABLE IF NOT EXISTS `fiche_frais` (
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `FF_MOIS` date NOT NULL,
  `FF_NBHORSCLASSIF` int(11) NOT NULL,
  `FF_MONTANTHORSCLASSIF` float NOT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`FF_MOIS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `formuler`
--

DROP TABLE IF EXISTS `formuler`;
CREATE TABLE IF NOT EXISTS `formuler` (
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `PRE_CODE` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`PRE_CODE`),
  KEY `FORMULER_presentation1_FK` (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `HAB_ID` int(11) NOT NULL,
  `HAB_LIB` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`HAB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `habilitation`
--

INSERT INTO `habilitation` (`HAB_ID`, `HAB_LIB`) VALUES
(1, 'Visiteur'),
(2, 'Délégué Régional'),
(3, 'Responsable Secteur');

-- --------------------------------------------------------

--
-- Structure de la table `inclure`
--

DROP TABLE IF EXISTS `inclure`;
CREATE TABLE IF NOT EXISTS `inclure` (
  `TF_CODE` int(11) NOT NULL,
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `FF_MOIS` date NOT NULL,
  `INC_QTE` int(11) NOT NULL,
  `INC_MONTANT` float NOT NULL,
  PRIMARY KEY (`TF_CODE`,`COL_MATRICULE`,`FF_MOIS`),
  KEY `INCLURE_fiche_frais1_FK` (`COL_MATRICULE`,`FF_MOIS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `interagir`
--

DROP TABLE IF EXISTS `interagir`;
CREATE TABLE IF NOT EXISTS `interagir` (
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `MED_DEPOTLEGAL_medicament` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`MED_DEPOTLEGAL_medicament`),
  KEY `INTERAGIR_medicament1_FK` (`MED_DEPOTLEGAL_medicament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `inviter`
--

DROP TABLE IF EXISTS `inviter`;
CREATE TABLE IF NOT EXISTS `inviter` (
  `AC_NUM` int(11) NOT NULL,
  `PRA_NUM` int(11) NOT NULL,
  `SPECIALISATION` tinyint(4) NOT NULL,
  PRIMARY KEY (`AC_NUM`,`PRA_NUM`),
  KEY `INVITER_praticien1_FK` (`PRA_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `LOG_ID` int(11) NOT NULL,
  `LOG_LOGIN` varchar(50) COLLATE utf8_bin NOT NULL,
  `LOG_MOTDEPASSE` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`LOG_ID`),
  UNIQUE KEY `login_collaborateur0_AK` (`COL_MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`LOG_ID`, `LOG_LOGIN`, `LOG_MOTDEPASSE`, `COL_MATRICULE`) VALUES
(1, 'villou', '6cf17e0501b8078722f316f094e230341b4f1b2d4d14cc082c41494d6b462024f031beff6fc25145ed02a58181fc90a7fca58f0d879b349638df19dca85efa7f', 'a131');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `MED_NOMCOMMERCIAL` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `MED_COMPOSITION` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MED_EFFETS` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MED_CONTREINDIC` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MED_PRIXECHANTILLON` float DEFAULT NULL,
  `FAM_CODE` varchar(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`),
  KEY `medicament_famille0_FK` (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`MED_DEPOTLEGAL`, `MED_NOMCOMMERCIAL`, `MED_COMPOSITION`, `MED_EFFETS`, `MED_CONTREINDIC`, `MED_PRIXECHANTILLON`, `FAM_CODE`) VALUES
('3MYC7', 'TRIMYCINE', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', NULL, 'CRT'),
('ADIMOL9', 'ADIMOL', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', NULL, 'ABP'),
('AMOPIL7', 'AMOPIL', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', NULL, 'ABP'),
('AMOX45', 'AMOXAR', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', NULL, 'ABP'),
('AMOXIG12', 'AMOXI Gé', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', NULL, 'ABP'),
('APATOUX22', 'APATOUX Vitamine C', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.', NULL, 'ALO'),
('BACTIG10', 'BACTIGEL', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', NULL, 'ABC'),
('BACTIV13', 'BACTIVIL', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL, 'AFM'),
('BITALV', 'BIVALIC', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.', NULL, 'AAA'),
('CARTION6', 'CARTION', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.', NULL, 'AAA'),
('CLAZER6', 'CLAZER', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL, 'AFM'),
('DEPRIL9', 'DEPRAMIL', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', NULL, 'AIM'),
('DIMIRTAM6', 'DIMIRTAM', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.', NULL, 'AAC'),
('DOLRIL7', 'DOLORIL', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', NULL, 'AAA'),
('DORNOM8', 'NORMADOR', 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', NULL, 'HYP'),
('EQUILARX6', 'EQUILAR', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', NULL, 'AAH'),
('EVILR7', 'EVEILLOR', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', NULL, 'PSA'),
('INSXT5', 'INSECTIL', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.', NULL, 'AH'),
('JOVAI8', 'JOVENIL', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', NULL, 'AFM'),
('LIDOXY23', 'LIDOXYTRACINE', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.', NULL, 'AFC'),
('LITHOR12', 'LITHORINE', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.', NULL, 'AP'),
('PARMOL16', 'PARMOCODEINE', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.', NULL, 'AA'),
('PHYSOI8', 'PHYSICOR', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', NULL, 'PSA'),
('PIRIZ8', 'PIRIZAN', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.', NULL, 'ABA'),
('POMDI20', 'POMADINE', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.', NULL, 'AO'),
('TROXT21', 'TROXADET', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d\'allergie au produit.', NULL, 'AIN'),
('TXISOL22', 'TOUXISOL Vitamine C', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.', NULL, 'ALO'),
('URIEG6', 'URIREGUL', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.', NULL, 'AUM');

-- --------------------------------------------------------

--
-- Structure de la table `motif_principale`
--

DROP TABLE IF EXISTS `motif_principale`;
CREATE TABLE IF NOT EXISTS `motif_principale` (
  `MOT_ID` int(11) NOT NULL,
  `MOT_LIBELLE` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`MOT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `motif_principale`
--

INSERT INTO `motif_principale` (`MOT_ID`, `MOT_LIBELLE`) VALUES
(1, 'Périodicité'),
(2, 'Nouveauté'),
(3, 'Actualisation'),
(4, 'Nouvelle législation'),
(5, 'Changement taux de remboursement'),
(6, 'Chute de prescription'),
(7, 'Sollicitation du médecin : besoin d\'information complémentaire sur un médicament'),
(8, 'Sollicitation du médecin : constatation d\'effets bizarres, besoin de précision');

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `SPE_CODE` varchar(5) COLLATE utf8_bin NOT NULL,
  `PRA_NUM` int(11) NOT NULL,
  `POS_DIPLOME` varchar(10) COLLATE utf8_bin NOT NULL,
  `POS_COEFPRESCRIPTIO` float NOT NULL,
  PRIMARY KEY (`SPE_CODE`,`PRA_NUM`),
  KEY `POSSEDER_praticien1_FK` (`PRA_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
CREATE TABLE IF NOT EXISTS `praticien` (
  `PRA_NUM` int(11) NOT NULL,
  `PRA_PRENOM` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `PRA_NOM` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `PRA_ADRESSE` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `PRA_CP` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `PRA_VILLE` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `PRA_COEFNOTORIETE` float DEFAULT NULL,
  `PRA_COEFCONFIANCE` float DEFAULT NULL,
  `TYP_CODE` varchar(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`PRA_NUM`),
  KEY `praticien_type_praticien0_FK` (`TYP_CODE`)
) ;

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`PRA_NUM`, `PRA_PRENOM`, `PRA_NOM`, `PRA_ADRESSE`, `PRA_CP`, `PRA_VILLE`, `PRA_COEFNOTORIETE`, `PRA_COEFCONFIANCE`, `TYP_CODE`) VALUES
(1, 'Alain', 'Notini', '114 r Authie', '85000', 'LA ROCHE SUR YON', 290.03, NULL, 'MH'),
(2, 'Albert', 'Gosselin', '13 r Devon', '41000', 'BLOIS', 307.49, NULL, 'MV'),
(3, 'André', 'Delahaye', '36 av 6 Juin', '25000', 'BESANCON', 185.79, NULL, 'PS'),
(4, 'André', 'Leroux', '47 av Robert Schuman', '60000', 'BEAUVAIS', 172.04, NULL, 'PH'),
(5, 'Anne', 'Desmoulins', '31 r St Jean', '30000', 'NIMES', 94.75, NULL, 'PO'),
(6, 'Anne', 'Mouel', '27 r Auvergne', '80000', 'AMIENS', 45.2, NULL, 'MH'),
(7, 'Antoine', 'Desgranges-Lentz', '1 r Albert de Mun', '29000', 'MORLAIX', 20.07, NULL, 'MV'),
(8, 'Arnaud', 'Marcouiller', '31 r St Jean', '68000', 'MULHOUSE', 396.52, NULL, 'PS'),
(9, 'Benoit', 'Dupuy', '9 r Demolombe', '34000', 'MONTPELLIER', 395.66, NULL, 'PH'),
(10, 'Bernard', 'Lerat', '31 r St Jean', '59000', 'LILLE', 257.79, NULL, 'PO'),
(11, 'Bertrand', 'Marçais-Lefebvre', '86Bis r Basse', '67000', 'STRASBOURG', 450.96, NULL, 'MH'),
(12, 'Bruno', 'Boscher', '94 r Falaise', '10000', 'TROYES', 356.14, NULL, 'MV'),
(13, 'Catherine', 'Morel', '21 r Chateaubriand', '75000', 'PARIS', 379.57, NULL, 'PS'),
(14, 'Chantal', 'Guivarch', '4 av Gén Laperrine', '45000', 'ORLEANS', 114.56, NULL, 'PH'),
(15, 'Christophe', 'Bessin-Grosdoit', '92 r Falaise', '6000', 'NICE', 222.06, NULL, 'PO'),
(16, 'Claire', 'Rossa', '14 av Thiès', '6000', 'NICE', 529.78, NULL, 'MH'),
(17, 'Denis', 'Cauchy', '5 av Ste Thérèse', '11000', 'NARBONNE', 458.82, NULL, 'MV'),
(18, 'Dominique', 'Gaffé', '9 av 1ère Armée Française', '35000', 'RENNES', 213.4, NULL, 'PS'),
(19, 'Dominique', 'Guenon', '98 bd Mar Lyautey', '44000', 'NANTES', 175.89, NULL, 'PH'),
(20, 'Dominique', 'Prévot', '29 r Lucien Nelle', '87000', 'LIMOGES', 151.36, NULL, 'PO'),
(21, 'Eliane', 'Houchard', '9 r Demolombe', '49100', 'ANGERS', 436.96, NULL, 'MH'),
(22, 'Elisabeth', 'Desmons', '51 r Bernières', '29000', 'QUIMPER', 281.17, NULL, 'MV'),
(23, 'Elisabeth', 'Flament', '11 r Pasteur', '35000', 'RENNES', 315.6, NULL, 'PS'),
(24, 'Emmanuel', 'Goussard', '9 r Demolombe', '41000', 'BLOIS', 40.72, NULL, 'PH'),
(25, 'Eric', 'Desprez', '9 r Vaucelles', '33000', 'BORDEAUX', 406.85, NULL, 'PO'),
(26, 'Evelyne', 'Coste', '29 r Lucien Nelle', '19000', 'TULLE', 441.87, NULL, 'MH'),
(27, 'Frédéric', 'Lefebvre', '2 pl Wurzburg', '55000', 'VERDUN', 573.63, NULL, 'MV'),
(28, 'Frédéric', 'Lemée', '29 av 6 Juin', '56000', 'VANNES', 326.4, NULL, 'PS'),
(29, 'Frédéric', 'Martin', 'Bât A 90 r Bayeux', '70000', 'VESOUL', 506.06, NULL, 'PH'),
(30, 'Frédérique', 'Marie', '172 r Caponière', '70000', 'VESOUL', 313.31, NULL, 'PO'),
(31, 'Geneviève', 'Rosenstech', '27 r Auvergne', '75000', 'PARIS', 366.82, NULL, 'MH'),
(32, 'Ghislaine', 'Pontavice', '8 r Gaillon', '86000', 'POITIERS', 265.58, NULL, 'MV'),
(33, 'Guillaume', 'Leveneur-Mosquet', '47 av Robert Schuman', '64000', 'PAU', 184.97, NULL, 'PS'),
(34, 'Guy', 'Blanchais', '30 r Authie', '8000', 'SEDAN', 502.48, NULL, 'PH'),
(35, 'Hugues', 'Leveneur', '7 pl St Gilles', '62000', 'ARRAS', 7.39, NULL, 'PO'),
(36, 'Isabelle', 'Mosquet', '22 r Jules Verne', '76000', 'ROUEN', 77.1, NULL, 'MH'),
(37, 'Jean-Christophe', 'Giraudon', '1 r Albert de Mun', '38100', 'VIENNE', 92.62, NULL, 'MV'),
(38, 'Jean-Claude', 'Marie', '26 r Hérouville', '69000', 'LYON', 120.1, NULL, 'PS'),
(39, 'Jean-François', 'Maury', '5 r Pierre Girard', '71000', 'CHALON SUR SAONE', 13.73, NULL, 'PH'),
(40, 'Jean-Louis', 'Dennel', '7 pl St Gilles', '28000', 'CHARTRES', 550.69, NULL, 'PO'),
(41, 'Jean-Pierre', 'Ain', '4 résid Olympia', '2000', 'LAON', 5.59, NULL, 'MH'),
(42, 'Jean-Pierre', 'Chemery', '51 pl Ancienne Boucherie', '14000', 'CAEN', 396.58, NULL, 'MV'),
(43, 'Jean-Pierre', 'Comoz', '35 r Auguste Lechesne', '18000', 'BOURGES', 340.35, NULL, 'PS'),
(44, 'Jean-Pierre', 'Desfaudais', '7 pl St Gilles', '29000', 'BREST', 71.76, NULL, 'PH'),
(45, 'JérÃ´me', 'Phan', '9 r Clos Caillet', '79000', 'NIORT', 451.61, NULL, 'PO'),
(46, 'Line', 'Riou', '43 bd Gén Vanier', '77000', 'MARNE LA VALLEE', 193.25, NULL, 'MH'),
(47, 'Louis', 'Chubilleau', '46 r Eglise', '17000', 'SAINTES', 202.07, NULL, 'MV'),
(48, 'Lucette', 'Lebrun', '178 r Auge', '54000', 'NANCY', 410.41, NULL, 'PS'),
(49, 'Marc', 'Goessens', '6 av 6 Juin', '39000', 'DOLE', 548.57, NULL, 'PH'),
(50, 'Marc', 'Laforge', '5 résid Prairie', '50000', 'SAINT LO', 265.05, NULL, 'PO'),
(51, 'Marc', 'Millereau', '36 av 6 Juin', '72000', 'LA FERTE BERNARD', 430.42, NULL, 'MH'),
(52, 'Marie-Christine', 'Dauverne', '69 av Charlemagne', '21000', 'DIJON', 281.05, NULL, 'MV'),
(53, 'Myriam', 'Vittorio', '3 pl Champlain', '94000', 'BOISSY SAINT LEGER', 356.23, NULL, 'PS'),
(54, 'Nhieu', 'Lapasset', '31 av 6 Juin', '52000', 'CHAUMONT', 107, NULL, 'PH'),
(55, 'Nicole', 'Plantet-Besnier', '10 av 1ère Armée Française', '86000', 'CHATELLEREAULT', 369.94, NULL, 'PO'),
(56, 'Pascal', 'Chubilleau', '3 r Hastings', '15000', 'AURRILLAC', 290.75, NULL, 'MH'),
(57, 'Pascal', 'Robert', '31 r St Jean', '93000', 'BOBIGNY', 162.41, NULL, 'MV'),
(58, 'Pascale', 'Jean', '114 r Authie', '49100', 'SAUMUR', 375.52, NULL, 'PS'),
(59, 'Patrice', 'Chanteloube', '14 av Thiès', '13000', 'MARSEILLE', 478.01, NULL, 'PH'),
(60, 'Patrice', 'Lecuirot', 'résid St Pères 55 r Pigacière', '54000', 'NANCY', 239.66, NULL, 'PO'),
(61, 'Patrick', 'Gandon', '47 av Robert Schuman', '37000', 'TOURS', 599.06, NULL, 'MH'),
(62, 'Patrick', 'Mirouf', '22 r Puits Picard', '74000', 'ANNECY', 458.42, NULL, 'MV'),
(63, 'Philippe', 'Boireaux', '14 av Thiès', '10000', 'CHALON EN CHAMPAGNE', 454.48, NULL, 'PS'),
(64, 'Philippe', 'Cendrier', '7 pl St Gilles', '12000', 'RODEZ', 164.16, NULL, 'PH'),
(65, 'Philippe', 'Duhamel', '114 r Authie', '34000', 'MONTPELLIER', 98.62, NULL, 'PO'),
(66, 'Philippe', 'Grigy', '15 r Mélingue', '44000', 'CLISSON', 285.1, NULL, 'MH'),
(67, 'Philippe', 'Linard', '1 r Albert de Mun', '81000', 'ALBI', 486.3, NULL, 'MV'),
(68, 'Philippe', 'Lozier', '8 r Gaillon', '31000', 'TOULOUSE', 48.4, NULL, 'PS'),
(69, 'Pierre', 'Dechâtre', '63 av Thiès', '23000', 'MONTLUCON', 253.75, NULL, 'PH'),
(70, 'Pierre', 'Goessens', '22 r Jean Romain', '40000', 'MONT DE MARSAN', 426.19, NULL, 'PO'),
(71, 'Pierre', 'Leménager', '39 av 6 Juin', '57000', 'METZ', 118.7, NULL, 'MH'),
(72, 'Pierre', 'Née', '39 av 6 Juin', '82000', 'MONTAUBAN', 72.54, NULL, 'MV'),
(73, 'Pierre-Laurent', 'Guyot', '43 bd Gén Vanier', '48000', 'MENDE', 352.31, NULL, 'PS'),
(74, 'Roger', 'Chauchard', '9 r Vaucelles', '13000', 'MARSEILLE', 552.19, NULL, 'PH'),
(75, 'Roland', 'Mabire', '11 r Boutiques', '67000', 'STRASBOURG', 422.39, NULL, 'PO'),
(76, 'Soazig', 'Leroy', '45 r Boutiques', '61000', 'ALENCON', 570.67, NULL, 'MH'),
(77, 'Stéphane', 'Guyot', '26 r Hérouville', '46000', 'FIGEAC', 28.85, NULL, 'MV'),
(78, 'Sylvain', 'Delposen', '39 av 6 Juin', '27000', 'DREUX', 292.01, NULL, 'PS'),
(79, 'Sylvie', 'Rault', '15 bd Richemond', '2000', 'SOISSON', 526.6, NULL, 'PH'),
(80, 'Sylvie', 'Renouf', '98 bd Mar Lyautey', '88000', 'EPINAL', 425.24, NULL, 'PO'),
(81, 'Thierry', 'Alliet-Grach', '14 av Thiès', '7000', 'PRIVAS', 451.31, NULL, 'MH'),
(82, 'Thierry', 'Bayard', '92 r Falaise', '42000', 'SAINT ETIENNE', 271.71, NULL, 'MV'),
(83, 'Thierry', 'Gauchet', '7 r Desmoueux', '38100', 'GRENOBLE', 406.1, NULL, 'PS'),
(84, 'Tristan', 'Bobichon', '219 r Caponière', '9000', 'FOIX', 218.36, NULL, 'PH'),
(85, 'Véronique', 'Duchemin-Laniel', '130 r St Jean', '33000', 'LIBOURNE', 265.61, NULL, 'PO'),
(86, 'Younès', 'Laurent', '34 r Demolombe', '53000', 'MAYENNE', 496.1, NULL, 'MH');

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

DROP TABLE IF EXISTS `prescrire`;
CREATE TABLE IF NOT EXISTS `prescrire` (
  `TIN_CODE` varchar(5) COLLATE utf8_bin NOT NULL,
  `DOS_CODE` varchar(10) COLLATE utf8_bin NOT NULL,
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `PRE_POSOLOGIE` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`TIN_CODE`,`DOS_CODE`,`MED_DEPOTLEGAL`),
  KEY `PRESCRIRE_dosage1_FK` (`DOS_CODE`),
  KEY `PRESCRIRE_medicament2_FK` (`MED_DEPOTLEGAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `PRE_CODE` varchar(2) COLLATE utf8_bin NOT NULL,
  `PRE_LIBELLE` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `presentation_produit`
--

DROP TABLE IF EXISTS `presentation_produit`;
CREATE TABLE IF NOT EXISTS `presentation_produit` (
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`COL_MATRICULE`,`RAP_NUM`),
  KEY `PRESENTATION_PRODUIT_rapport_visite1_FK` (`COL_MATRICULE`,`RAP_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rapport_visite`
--

DROP TABLE IF EXISTS `rapport_visite`;
CREATE TABLE IF NOT EXISTS `rapport_visite` (
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `RAP_DATEVISITE` datetime DEFAULT NULL,
  `RAP_BILAN` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `RAP_DATESAISIT` date NOT NULL,
  `RAP_SAISITDEFINITIVE` tinyint(1) NOT NULL,
  `RAP_MOTIFAUTRE` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `OFF_QTE` int(11) NOT NULL,
  `MED_DEPOTLEGAL_1` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `MED_DEPOTLEGAL_2` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `PRA_NUM` int(11) NOT NULL,
  `MOT_ID` int(11) NOT NULL,
  `PRA_NUM_remplacant` int(11) DEFAULT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`RAP_NUM`),
  KEY `rapport_visite_medicament1_FK` (`MED_DEPOTLEGAL_1`),
  KEY `rapport_visite_medicament2_FK` (`MED_DEPOTLEGAL_2`),
  KEY `rapport_visite_praticien2_FK` (`PRA_NUM`),
  KEY `rapport_visite_motif_principale3_FK` (`MOT_ID`),
  KEY `rapport_visite_praticien4_FK` (`PRA_NUM_remplacant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `rapport_visite`
--

INSERT INTO `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`, `RAP_DATEVISITE`, `RAP_BILAN`, `RAP_DATESAISIT`, `RAP_SAISITDEFINITIVE`, `RAP_MOTIFAUTRE`, `OFF_QTE`, `MED_DEPOTLEGAL_1`, `MED_DEPOTLEGAL_2`, `PRA_NUM`, `MOT_ID`, `PRA_NUM_remplacant`) VALUES
('a131', 3, '2002-04-18 14:51:22', 'Médecin curieux, à recontacter en décembre pour réunion.', '2002-04-18', 0, NULL, 1, 'AMOXIG12', NULL, 23, 3, NULL),
('a131', 7, '2003-03-23 12:23:45', 'RAS.\r\nChangement de tel : 05 89 89 89 89.', '2003-03-23', 1, NULL, 2, 'BITALV', 'JOVAI8', 41, 3, NULL),
('a17', 4, '2003-05-21 17:51:42', 'Changement de direction, redéfinition de la politique médicamenteuse, recours au générique.', '2003-05-21', 1, NULL, 1, 'PIRIZ8', NULL, 4, 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

DROP TABLE IF EXISTS `realiser`;
CREATE TABLE IF NOT EXISTS `realiser` (
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `AC_NUM` int(11) NOT NULL,
  PRIMARY KEY (`COL_MATRICULE`,`AC_NUM`),
  KEY `REALISER_activite_compl1_FK` (`AC_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `REG_CODE` varchar(2) COLLATE utf8_bin NOT NULL,
  `REG_NOM` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `SEC_CODE` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`REG_CODE`),
  KEY `region_secteur0_FK` (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`REG_CODE`, `REG_NOM`, `SEC_CODE`) VALUES
('AL', 'Alsace Lorraine', 'E'),
('AQ', 'Aquitaine', 'S'),
('AU', 'Auvergne', 'P'),
('BG', 'Bretagne', 'O'),
('BN', 'Basse Normandie', 'O'),
('BO', 'Bourgogne', 'E'),
('CA', 'Champagne Ardennes', 'N'),
('CE', 'Centre', 'P'),
('FC', 'Franche Comté', 'E'),
('HN', 'Haute Normandie', 'N'),
('IF', 'Ile de France', 'P'),
('LG', 'Languedoc', 'S'),
('LI', 'Limousin', 'P'),
('MP', 'Midi Pyrénée', 'S'),
('NP', 'Nord Pas de Calais', 'N'),
('PA', 'Provence Alpes Cote d\'Azur', 'S'),
('PC', 'Poitou Charente', 'O'),
('PI', 'Picardie', 'N'),
('PL', 'Pays de Loire', 'O'),
('RA', 'Rhone Alpes', 'E'),
('RO', 'Roussilon', 'S'),
('VD', 'Vendée', 'O');

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

DROP TABLE IF EXISTS `secteur`;
CREATE TABLE IF NOT EXISTS `secteur` (
  `SEC_CODE` varchar(1) COLLATE utf8_bin NOT NULL,
  `SEC_LIBELLE` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`SEC_CODE`, `SEC_LIBELLE`) VALUES
('E', 'Est'),
('N', 'Nord'),
('O', 'Ouest'),
('P', 'Paris centre'),
('S', 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `SPE_CODE` varchar(5) COLLATE utf8_bin NOT NULL,
  `SPE_LIBELLE` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`SPE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`SPE_CODE`, `SPE_LIBELLE`) VALUES
('ACP', 'anatomie et cytologie pathologiques'),
('AMV', 'angéiologie, médecine vasculaire'),
('ARC', 'anesthésiologie et réanimation chirurgicale'),
('BM', 'biologie médicale'),
('CAC', 'cardiologie et affections cardio-vasculaires'),
('CCT', 'chirurgie cardio-vasculaire et thoracique'),
('CG', 'chirurgie générale'),
('CMF', 'chirurgie maxillo-faciale'),
('COM', 'cancérologie, oncologie médicale'),
('COT', 'chirurgie orthopédique et traumatologie'),
('CPR', 'chirurgie plastique reconstructrice et esthétique'),
('CU', 'chirurgie urologique'),
('CV', 'chirurgie vasculaire'),
('DN', 'diabétologie-nutrition, nutrition'),
('DV', 'dermatologie et vénéréologie'),
('EM', 'endocrinologie et métabolismes'),
('ETD', 'évaluation et traitement de la douleur'),
('GEH', 'gastro-entérologie et hépatologie (appareil digestif)'),
('GMO', 'gynécologie médicale, obstétrique'),
('GO', 'gynécologie-obstétrique'),
('HEM', 'maladies du sang (hématologie)'),
('MBS', 'médecine et biologie du sport'),
('MDT', 'médecine du travail'),
('MMO', 'médecine manuelle - ostéopathie'),
('MN', 'médecine nucléaire'),
('MPR', 'médecine physique et de réadaptation'),
('MTR', 'médecine tropicale, pathologie infectieuse et tropicale'),
('NEP', 'néphrologie'),
('NRC', 'neurochirurgie'),
('NRL', 'neurologie'),
('ODM', 'orthopédie dento maxillo-faciale'),
('OPH', 'ophtalmologie'),
('ORL', 'oto-rhino-laryngologie'),
('PEA', 'psychiatrie de l\'enfant et de l\'adolescent'),
('PME', 'pédiatrie maladies des enfants'),
('PNM', 'pneumologie'),
('PSC', 'psychiatrie'),
('RAD', 'radiologie (radiodiagnostic et imagerie médicale)'),
('RDT', 'radiothérapie (oncologie option radiothérapie)'),
('RGM', 'reproduction et gynécologie médicale'),
('RHU', 'rhumatologie'),
('STO', 'stomatologie'),
('SXL', 'sexologie'),
('TXA', 'toxicomanie et alcoologie');

-- --------------------------------------------------------

--
-- Structure de la table `type_frais`
--

DROP TABLE IF EXISTS `type_frais`;
CREATE TABLE IF NOT EXISTS `type_frais` (
  `TF_CODE` int(11) NOT NULL,
  `TF_LIBELLE` varchar(30) COLLATE utf8_bin NOT NULL,
  `TF_FORFAIT` float NOT NULL,
  PRIMARY KEY (`TF_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_individu`
--

DROP TABLE IF EXISTS `type_individu`;
CREATE TABLE IF NOT EXISTS `type_individu` (
  `TIN_CODE` varchar(5) COLLATE utf8_bin NOT NULL,
  `TIN_LIBELLE` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`TIN_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_praticien`
--

DROP TABLE IF EXISTS `type_praticien`;
CREATE TABLE IF NOT EXISTS `type_praticien` (
  `TYP_CODE` varchar(3) COLLATE utf8_bin NOT NULL,
  `TYP_LIBELLE` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `TYP_LIEU` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_praticien`
--

INSERT INTO `type_praticien` (`TYP_CODE`, `TYP_LIBELLE`, `TYP_LIEU`) VALUES
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD CONSTRAINT `collaborateur_habilitation0_FK` FOREIGN KEY (`HAB_ID`) REFERENCES `habilitation` (`HAB_ID`),
  ADD CONSTRAINT `collaborateur_login1_FK` FOREIGN KEY (`LOG_ID`) REFERENCES `login` (`LOG_ID`),
  ADD CONSTRAINT `collaborateur_region1_FK` FOREIGN KEY (`REG_CODE`) REFERENCES `region` (`REG_CODE`),
  ADD CONSTRAINT `collaborateur_secteur0_FK` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`);

--
-- Contraintes pour la table `constituer`
--
ALTER TABLE `constituer`
  ADD CONSTRAINT `CONSTITUER_composant0_FK` FOREIGN KEY (`CMP_CODE`) REFERENCES `composant` (`CMP_CODE`),
  ADD CONSTRAINT `CONSTITUER_medicament1_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `fiche_frais`
--
ALTER TABLE `fiche_frais`
  ADD CONSTRAINT `fiche_frais_collaborateur0_FK` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`);

--
-- Contraintes pour la table `formuler`
--
ALTER TABLE `formuler`
  ADD CONSTRAINT `FORMULER_medicament0_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `FORMULER_presentation1_FK` FOREIGN KEY (`PRE_CODE`) REFERENCES `presentation` (`PRE_CODE`);

--
-- Contraintes pour la table `inclure`
--
ALTER TABLE `inclure`
  ADD CONSTRAINT `INCLURE_fiche_frais1_FK` FOREIGN KEY (`COL_MATRICULE`,`FF_MOIS`) REFERENCES `fiche_frais` (`COL_MATRICULE`, `FF_MOIS`),
  ADD CONSTRAINT `INCLURE_type_frais0_FK` FOREIGN KEY (`TF_CODE`) REFERENCES `type_frais` (`TF_CODE`);

--
-- Contraintes pour la table `interagir`
--
ALTER TABLE `interagir`
  ADD CONSTRAINT `INTERAGIR_medicament0_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `INTERAGIR_medicament1_FK` FOREIGN KEY (`MED_DEPOTLEGAL_medicament`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `inviter`
--
ALTER TABLE `inviter`
  ADD CONSTRAINT `INVITER_activite_compl0_FK` FOREIGN KEY (`AC_NUM`) REFERENCES `activite_compl` (`AC_NUM`),
  ADD CONSTRAINT `INVITER_praticien1_FK` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`);

--
-- Contraintes pour la table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_collaborateur0_FK` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`);

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `medicament_famille0_FK` FOREIGN KEY (`FAM_CODE`) REFERENCES `famille` (`FAM_CODE`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `POSSEDER_praticien1_FK` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `POSSEDER_specialite0_FK` FOREIGN KEY (`SPE_CODE`) REFERENCES `specialite` (`SPE_CODE`);

--
-- Contraintes pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD CONSTRAINT `praticien_type_praticien0_FK` FOREIGN KEY (`TYP_CODE`) REFERENCES `type_praticien` (`TYP_CODE`);

--
-- Contraintes pour la table `prescrire`
--
ALTER TABLE `prescrire`
  ADD CONSTRAINT `PRESCRIRE_dosage1_FK` FOREIGN KEY (`DOS_CODE`) REFERENCES `dosage` (`DOS_CODE`),
  ADD CONSTRAINT `PRESCRIRE_medicament2_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `PRESCRIRE_type_individu0_FK` FOREIGN KEY (`TIN_CODE`) REFERENCES `type_individu` (`TIN_CODE`);

--
-- Contraintes pour la table `presentation_produit`
--
ALTER TABLE `presentation_produit`
  ADD CONSTRAINT `PRESENTATION_PRODUIT_medicament0_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `PRESENTATION_PRODUIT_rapport_visite1_FK` FOREIGN KEY (`COL_MATRICULE`,`RAP_NUM`) REFERENCES `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`);

--
-- Contraintes pour la table `rapport_visite`
--
ALTER TABLE `rapport_visite`
  ADD CONSTRAINT `rapport_visite_collaborateur0_FK` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`),
  ADD CONSTRAINT `rapport_visite_medicament1_FK` FOREIGN KEY (`MED_DEPOTLEGAL_1`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `rapport_visite_medicament2_FK` FOREIGN KEY (`MED_DEPOTLEGAL_2`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `rapport_visite_motif_principale3_FK` FOREIGN KEY (`MOT_ID`) REFERENCES `motif_principale` (`MOT_ID`),
  ADD CONSTRAINT `rapport_visite_praticien2_FK` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `rapport_visite_praticien4_FK` FOREIGN KEY (`PRA_NUM_remplacant`) REFERENCES `praticien` (`PRA_NUM`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `REALISER_activite_compl1_FK` FOREIGN KEY (`AC_NUM`) REFERENCES `activite_compl` (`AC_NUM`),
  ADD CONSTRAINT `REALISER_collaborateur0_FK` FOREIGN KEY (`COL_MATRICULE`) REFERENCES `collaborateur` (`COL_MATRICULE`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_secteur0_FK` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
