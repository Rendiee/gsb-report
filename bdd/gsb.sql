-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : mar. 21 déc. 2021 à 00:11
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsb`
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
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', '29000', 'BREST', '1992-12-11 00:00:00', 2, 1, 'E', 'BN'),
('a17', 'Andre', 'David', '1 r Aimon de Chissée', '38100', 'GRENOBLE', '1991-08-26 00:00:00', 1, 2, NULL, 'RA'),
('a55', 'Bedos', 'Christian', '1 r Bénédictins', '65000', 'TARBES', '1987-07-17 00:00:00', 2, 3, NULL, 'RO'),
('a93', 'Tusseau', 'Louis', '22 r Renou', '86000', 'POITIERS', '1999-01-02 00:00:00', 2, 4, NULL, 'PC'),
('b13', 'Bentot', 'Pascal', '11 av 6 Juin', '67000', 'STRASBOURG', '1996-03-11 00:00:00', 1, 5, NULL, 'AL'),
('b16', 'Bioret', 'Luc', '1 r Linne', '35000', 'RENNES', '1997-03-21 00:00:00', 2, 6, NULL, 'BG'),
('b19', 'Bunisset', 'Francis', '10 r Nicolas Chorier', '85000', 'LA ROCHE SUR YON', '1999-01-31 00:00:00', 2, 7, NULL, 'PL'),
('b25', 'Bunisset', 'Denise', '1 r Lionne', '49100', 'ANGERS', '1994-07-03 00:00:00', 1, 8, NULL, 'PL'),
('b28', 'Cacheux', 'Bernard', '114 r Authie', '34000', 'MONTPELLIER', '2000-08-02 00:00:00', 2, 9, NULL, 'LG'),
('b34', 'Cadic', 'Eric', '123 r Caponière', '41000', 'BLOIS', '1993-12-06 00:00:00', 2, 10, NULL, 'CE'),
('b4', 'Charoze', 'Catherine', '100 pl Géants', '33000', 'BORDEAUX', '1997-09-25 00:00:00', 1, 11, NULL, 'AQ'),
('b50', 'Clepkens', 'Christophe', '12 r Fédérico Garcia Lorca', '13000', 'MARSEILLE', '1998-01-18 00:00:00', 2, 12, NULL, 'PA'),
('b59', 'Cottin', 'Vincenne', '36 sq Capucins', '5000', 'GAP', '1995-10-21 00:00:00', 1, 13, NULL, 'RA'),
('c14', 'Daburon', 'François', '13 r Champs Elysées', '6000', 'NICE', '1989-02-01 00:00:00', 1, 14, NULL, 'PA'),
('c3', 'De', 'Philippe', '13 r Charles Peguy', '10000', 'TROYES', '1992-05-05 00:00:00', 1, 15, NULL, 'CA'),
('c54', 'Debelle', 'Michel', '181 r Caponière', '88000', 'EPINAL', '1991-04-09 00:00:00', 2, 16, NULL, 'AL'),
('d13', 'Debelle', 'Jeanne', '134 r Stalingrad', '44000', 'NANTES', '1991-12-05 00:00:00', 2, 17, NULL, 'PL'),
('d51', 'Debroise', 'Michel', '2 av 6 Juin', '70000', 'VESOUL', '1997-11-18 00:00:00', 1, 18, NULL, 'FC'),
('e22', 'Desmarquest', 'Nathalie', '14 r Fédérico Garcia Lorca', '54000', 'NANCY', '1989-03-24 00:00:00', 2, 19, NULL, 'AL'),
('e24', 'Desnost', 'Pierre', '16 r Barral de Montferrat', '55000', 'VERDUN', '1993-05-17 00:00:00', 1, 20, NULL, 'AL'),
('e39', 'Dudouit', 'Frederic', '18 quai Xavier Jouvin', '75000', 'PARIS', '1988-04-26 00:00:00', 2, 21, NULL, 'IF'),
('e49', 'Duncombe', 'Claude', '19 av Alsace Lorraine', '9000', 'FOIX', '1996-02-19 00:00:00', 1, 22, NULL, 'MP'),
('e5', 'Enault-Pascreau', 'Celine', '25B r Stalingrad', '40000', 'MONT DE MARSAN', '1990-11-27 00:00:00', 2, 23, NULL, 'MP'),
('e52', 'Eynde', 'Valerie', '3 r Henri Moissan', '76000', 'ROUEN', '1991-10-31 00:00:00', 2, 24, NULL, 'HN'),
('f21', 'Finck', 'Jacques', 'rte Montreuil Bellay', '74000', 'ANNECY', '1993-06-08 00:00:00', 1, 25, NULL, 'RA'),
('f39', 'Fremont', 'Fernande', '4 r Jean Giono', '69000', 'LYON', '1997-02-15 00:00:00', 2, 26, NULL, 'RA'),
('f4', 'Gest', 'Alain', '30 r Authie', '46000', 'FIGEAC', '1994-05-03 00:00:00', 2, 27, NULL, 'MP'),
('g19', 'Gheysen', 'Galassus', '32 bd Mar Foch', '75000', 'PARIS', '1996-01-18 00:00:00', 2, 28, NULL, 'IF'),
('g30', 'Girard', 'Yvon', '31 av 6 Juin', '80000', 'AMIENS', '1999-03-27 00:00:00', 1, 29, NULL, 'PI'),
('g53', 'Gombert', 'Luc', '32 r Emile Gueymard', '56000', 'VANNES', '1985-10-02 00:00:00', 2, 30, NULL, 'BG'),
('g7', 'Guindon', 'Caroline', '40 r Mar Montgomery', '87000', 'LIMOGES', '1996-01-13 00:00:00', 1, 31, NULL, 'LI'),
('h13', 'Guindon', 'François', '44 r Picotière', '19000', 'TULLE', '1993-05-08 00:00:00', 1, 32, NULL, 'LI'),
('h30', 'Igigabel', 'Guy', '33 gal Arlequin', '94000', 'CRETEIL', '1998-04-26 00:00:00', 1, 33, NULL, 'IF'),
('h35', 'Jourdren', 'Pierre', '34 av Jean Perrot', '15000', 'AURRILLAC', '1993-08-26 00:00:00', 2, 34, NULL, 'AU'),
('h40', 'Juttard', 'Pierre-Raoul', '34 cours Jean Jaurès', '8000', 'SEDAN', '1992-11-01 00:00:00', 2, 35, NULL, 'CA'),
('j45', 'Laboure-Morel', 'Saout', '38 cours Berriat', '52000', 'CHAUMONT', '1998-02-25 00:00:00', 1, 36, NULL, 'CA'),
('j50', 'Landre', 'Philippe', '4 av Gén Laperrine', '59000', 'LILLE', '1992-12-16 00:00:00', 1, 37, NULL, 'NP'),
('j8', 'Langeard', 'Hugues', '39 av Jean Perrot', '93000', 'BAGNOLET', '1998-06-18 00:00:00', 2, 38, NULL, 'IF'),
('k4', 'Lanne', 'Bernard', '4 r Bayeux', '30000', 'NIMES', '1996-11-21 00:00:00', 1, 39, NULL, 'LG'),
('k53', 'Le', 'Noel', '4 av Beauvert', '68000', 'MULHOUSE', '1983-03-23 00:00:00', 1, 40, NULL, 'CA'),
('l14', 'Le', 'Jean', '39 r Raspail', '53000', 'LAVAL', '1995-02-02 00:00:00', 1, 41, NULL, 'PL'),
('l23', 'Leclercq', 'Servane', '11 r Quinconce', '18000', 'BOURGES', '1995-06-05 00:00:00', 2, 42, NULL, 'PC'),
('l46', 'Lecornu', 'Jean-Bernard', '4 bd Mar Foch', '72000', 'LA FERTE BERNARD', '1997-01-24 00:00:00', 1, 43, NULL, 'PL'),
('l56', 'Lecornu', 'Ludovic', '4 r Abel Servien', '25000', 'BESANCON', '1996-02-27 00:00:00', 1, 44, NULL, 'FC'),
('m35', 'Lejard', 'Agnès', '4 r Anthoard', '82000', 'MONTAUBAN', '1987-10-06 00:00:00', 2, 45, NULL, 'MP'),
('m45', 'Lesaulnier', 'Pascal', '47 r Thiers', '57000', 'METZ', '1990-10-13 00:00:00', 1, 46, NULL, 'AL'),
('n42', 'Letessier', 'Stephane', '5 chem Capuche', '27000', 'EVREUX', '1996-03-06 00:00:00', 1, 47, NULL, 'HN'),
('n58', 'Loirat', 'Didier', 'Les Pêchers cité Bourg la Croix', '45000', 'ORLEANS', '1992-08-30 00:00:00', 1, 48, NULL, 'CE'),
('n59', 'Maffezzoli', 'Thibaud', '5 r Chateaubriand', '2000', 'LAON', '1994-12-19 00:00:00', 2, 49, NULL, 'PI'),
('o26', 'Mancini', 'Anne', '5 r D\'Agier', '48000', 'MENDE', '1995-01-05 00:00:00', 1, 50, NULL, 'LG'),
('p32', 'Marcouiller', 'Gerard', '7 pl St Gilles', '91000', 'ISSY LES MOULINEAUX', '1992-12-24 00:00:00', 2, 51, NULL, 'IF'),
('p40', 'Michel', 'Jean-Claude', '5 r Gabriel Péri', '61000', 'FLERS', '1992-12-14 00:00:00', 1, 52, NULL, 'BN'),
('p41', 'Montecot', 'Françoise', '6 r Paul Valéry', '17000', 'SAINTES', '1998-07-27 00:00:00', 1, 53, NULL, 'PC'),
('p42', 'Notini', 'Veronique', '5 r Lieut Chabal', '60000', 'BEAUVAIS', '1994-12-12 00:00:00', 1, 54, NULL, 'PI'),
('p49', 'Onfroy', 'Den', '5 r Sidonie Jacolin', '37000', 'TOURS', '1977-10-03 00:00:00', 2, 55, NULL, 'CE'),
('p6', 'Pascreau', 'Charles', '57 bd Mar Foch', '64000', 'PAU', '1997-03-30 00:00:00', 2, 56, NULL, 'AQ'),
('p7', 'Pernot', 'Claude-Noël', '6 r Alexandre 1 de Yougoslavie', '11000', 'NARBONNE', '1990-03-01 00:00:00', 1, 57, NULL, 'RO'),
('p8', 'Perrier', 'Maitre', '6 r Aubert Dubayet', '71000', 'CHALON SUR SAONE', '1991-06-23 00:00:00', 1, 58, NULL, 'BO'),
('q17', 'Petit', 'Jean-Louis', '7 r Ernest Renan', '50000', 'SAINT LO', '1997-09-06 00:00:00', 1, 59, NULL, 'BN'),
('r24', 'Piquery', 'Patrick', '9 r Vaucelles', '14000', 'CAEN', '1984-07-29 00:00:00', 2, 60, NULL, 'BN'),
('r58', 'Quiquandon', 'Joel', '7 r Ernest Renan', '29000', 'QUIMPER', '1990-06-30 00:00:00', 1, 61, NULL, 'BG'),
('s10', 'Retailleau', 'Josselin', '88Bis r Saumuroise', '39000', 'DOLE', '1995-11-14 00:00:00', 2, 62, NULL, 'FC'),
('s21', 'Retailleau', 'Pascal', '32 bd Ayrault', '23000', 'MONTLUCON', '1992-09-25 00:00:00', 2, 63, NULL, 'LI'),
('t43', 'Souron', 'Maryse', '7B r Gay Lussac', '21000', 'DIJON', '1995-03-09 00:00:00', 2, 64, NULL, 'BO'),
('t47', 'Tiphagne', 'Patrick', '7B r Gay Lussac', '62000', 'ARRAS', '1997-08-29 00:00:00', 2, 65, NULL, 'PI'),
('t55', 'Trehet', 'Alain', '7D chem Barral', '12000', 'RODEZ', '1994-11-29 00:00:00', 2, 66, NULL, 'MP'),
('t60', 'Tusseau', 'Josselin', '63 r Bon Repos', '28000', 'CHARTRES', '1991-03-29 00:00:00', 1, 67, NULL, 'CE');

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
  `LOG_MOTDEPASSE` varchar(255) COLLATE utf8_bin NOT NULL,
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`LOG_ID`),
  UNIQUE KEY `login_collaborateur0_AK` (`COL_MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`LOG_ID`, `LOG_LOGIN`, `LOG_MOTDEPASSE`, `COL_MATRICULE`) VALUES
(1, 'villou', '6cf17e0501b8078722f316f094e230341b4f1b2d4d14cc082c41494d6b462024f031beff6fc25145ed02a58181fc90a7fca58f0d879b349638df19dca85efa7f', 'a131'),
(2, 'anddav', 'ff781e873746adf59e3165b217034477ca29d4f2322720e05492ea90d21010378252a85f2d66025874647c6d162d45df2766e8003f33c885bbc3c4dbbe92141f', 'a17'),
(3, 'bedchr', 'dbb65dd51a8348771883fae9cd7cc40ce1cf33e3756b4ca798bfcdcc37499b7e7236af7bd16d469bdaf8b039f3d5f414cb8a840d3675862675c0dc4a18fb5946', 'a55'),
(4, 'tuslou', 'd0f2a12b1928e2a54043a3e360b2f9ed7df27b780f668b066ed9de61e0007898a07ff05fbf2f062348d55cb4bf824c8c96e9102050271204713f228034ce709c', 'a93'),
(5, 'benpas', '9a07a357cc916422bf1c22ad26a1fbf87298ca0842531b1bf39f42802885e1006b3f1f0f94d7fe3722bd13dce1924c43d85ff310216a1c1b9494ebc0920af5ae', 'b13'),
(6, 'bioluc', '339ba91f5fb96b88de6e708ec7d474da3bacca9d716ddde2b1a6f823b69a0673b68b4b1befa8d0166719e75d2b215f710b40ee846b023f515d5248c369a4c123', 'b16'),
(7, 'bunfra', '969e3a1370ee3cfd2ad66a4625d234d35d394fd7a41a17d5c9990ad7682fbac7f7fb48c1294792d48d9e4e1f8d62a44cf47de23a5de07997d91051fed2355df3', 'b19'),
(8, 'bunden', '63b1fc033109ff454b5f206d694331ea9ff59d063bb82f1814c1cda1c0e39b846e59a2c14bc0059f0c7209703017e6c95e4eaf5a76a2bc65b62aa23d232e2473', 'b25'),
(9, 'cacber', 'cf83dbc8c8342dbcc14d5f8bdf9fb1d553e63a123f8ca0b66712e82aaddd35cb62c1a82545bb7f791c5d038fc0563a641f0f53cde79428991f521f136bdc0cdc', 'b28'),
(10, 'caderi', '91aab2882ec9ecc6d99d4f54c79e62bca477aed8e581744a82903c93404a5c64fa5214bab11cc646d4414eda1ba9f2b4bf30f37eb858cd576f184c92edc0e543', 'b34'),
(11, 'chacat', '76c0ddffa104f6dd5ecea921b6f8eeea52ea6e97d42c9643cee29cc21ecbf91ccfc7ec1e10a0cbacf5c3c3cd79f99edf860c55333889aa9dffc1a615b421821d', 'b4'),
(12, 'clechr', '2795af0f6816bee5afa40d65017e91f0bb74b40d355d7570a775acf6d90795b857e0475dba12dd5c3abd6f8d9e40cf83105502901e2c2225bc62fd465fb2db90', 'b50'),
(13, 'cotvin', '733fca838b5eef95d0c591ae6839db3e9be78265b62af31fc885b41ce145969a311569cc63bcaa4d85d87eef846e8db277e1adac34ba4d604561c611c00b912b', 'b59'),
(14, 'dabfra', '3b35c54ac57dac17f7075312440a2e6287e46751a07c6ec0457dad257ace9494748f43df0bd87a17faa1ca3956e75c50e753be1f005e59aa0e93877d0e2b38d2', 'c14'),
(15, 'dephi', '2caee44259e51e536fba90c1a24deb98f64aca25691acd61bf8f056b8cca0c66c6e9df3b29a8f0eb928f305cc272ce32ef2a9b51de9ddab45f4226c36b90956e', 'c3'),
(16, 'debmic', 'f77970e99958536d97bec3e8ba62a47c5b0897b175f12c19b7b43dcd9ba5ad15052ce414bf824abfd5daa09e281e8bf5838a1e6acd6ee90a2c040474e0be9e0d', 'c54'),
(17, 'debjea', 'dffebdcfcc45ec47f43d35b54fcbf6983b718a27a8c78a1f3d780cc927001143860ae4288e3598b46a8ef036398af81b6f7b044f63c31127ae90b1e9550a9732', 'd13'),
(18, 'debmic', 'f77970e99958536d97bec3e8ba62a47c5b0897b175f12c19b7b43dcd9ba5ad15052ce414bf824abfd5daa09e281e8bf5838a1e6acd6ee90a2c040474e0be9e0d', 'd51'),
(19, 'desnat', '1a793b1672cf59b0478e392047b0f29609df8788a9beb03e965b1a7163e2023fbd2924a414666f9a9a1d675b6c8ea8584e34c1c681e8d73b7f4ee49cbd5e040f', 'e22'),
(20, 'despie', '6919c5787511961929533dc7bfb759e95a94b60063220513950bc0a8e153f90ef3c08879fa8de6c4310b5db9b399b60f51dac5367e67838f8d8ded73f0008cd7', 'e24'),
(21, 'dudfre', '6c95f16cb8cf78b7f0c717336fcaf458e8f766f7ddf48e4ff18246a958618869cd21a74bf05f52fc4e0a6224ade11c9b8411fcc9763bd9b2b7a081216330fcca', 'e39'),
(22, 'duncla', '9035376e47e1212f1258a200dcf654df7d1156e421cd86039d9c4ec1223b6ca2f7e3d062ec7ff1320afa882a8f19dbaa052915b8f35401f6eb7a9841e8c208f6', 'e49'),
(23, 'enacel', 'f101b88fd3f1d7776ee80ba245e044ece6de9b8286bbc187a68978724d18306c4bcf3d5ed77f8c8a40aad2e796e9c5156df0cd894e5498cf056b8e63feae1216', 'e5'),
(24, 'eynval', 'cbf0bf2b1e57bf452c341b191e567cc8343957dd9d398db16b7542d1684a5f3720eefcf9c67958931c9bcf7f7376b2ba434d73175f41490d902a369687ff4542', 'e52'),
(25, 'finjac', 'e6093bb93c2b53e6dd2ef83f4697d6846b38a66d1ae319e909a9aebfbf2a05937dfea9f6631c3b4bb9daa19b18d3e1fe929a6b579e67b242610ce28240615c16', 'f21'),
(26, 'frefer', '146fe375fb5c1c1bd19975f576099e34a89641d2bdfd71b1de62eadd32449831243ca426b2469c171bac936272a52fa4131e4603fd9629176119c8fd882a43f7', 'f39'),
(27, 'gesala', '383bb2585655939860f7f917620a91252a847341edcd7a7168ff089f1eebb570c90514da4314b593bfb418167446c8c0783baae2f96d9a15c951472b91f65ab3', 'f4'),
(28, 'ghegal', 'de6e285bfd9539f908825ce2f2ddee5efbb4f035105ad06e1be5bb653e98d40db3783c70cf4f702e80567b7cc49788ac0158aee70db64ea7c8a9eca8e6d34d42', 'g19'),
(29, 'giryvo', '8be0ebb8d359cbe7c163a2c630aa63abd56a988206e18afd45ca6728872dc09c5d2471a5ba5e9b1ac2aefc5a9a168dc786d898077dbcd185f9f8061d52b9ebf7', 'g30'),
(30, 'gomluc', 'df3dfc478b19e00e977d5346239d5bbfa06923a9a43153a35fa8a059489a410763c29c070f8d942ceec21e10c0909af104fccd191295c2c0b5d9e43509d3b818', 'g53'),
(31, 'guicar', '59fdbaeceec754782f70dd5c0efba4435130edb3b2d724f7b0a000e9845d70a9a5b40c0a6ab8e7aa63f703e19dc8ccd55cbf878c6b72a868872e841add8a0cf3', 'g7'),
(32, 'guifra', 'cb1c15b80b495f9e0bf0d2c429526b42ea9f99471ad0d82b0c478012002e55d6fc471e7553d64292bbd24ac3b5e2330e5de4f2b6674ff88458ff03c177da919b', 'h13'),
(33, 'igiguy', 'e88790d960f391931e4f1b831c80b776c268344e1c29456b45a5fd0af6f82dc8209dce94dcab008afdc1d476ca0b47a5031ca56336832c8acd5c4c78da55e7f9', 'h30'),
(34, 'joupie', 'f000be744d88609975fe735db078989b1bd277ea35763640560244f4229d9ec7fcc4b7015cffe42fe008730dfdb7acc21cdd11ca1b418ced459ba23c8ec513e8', 'h35'),
(35, 'jutpie', 'd7db32148c75497ed6446403af6eb8773213c9a551684552972740c9b7f0300dc98fc630ea551bedd895d598a0c98ffe5ea88f18e5c6b8dd718ab708d151542d', 'h40'),
(36, 'labsao', '1acbd857f93ca3ba6050107689f8fb6cbb8f639d3c2450a7a04ec5c6ee7afad0742cea77477e1e951e3f0023e123e0c0f1f893a43c6e87c9cd06a2254000b4dd', 'j45'),
(37, 'lanphi', '75af3ff0a387399d7f1be1a3bb50be50b741a2834547ccbfdca9b743b3c5fd3e6717f61a7b5cfce975b4d1111a373f1a8f3e66811b68765271ff5f7367ad855b', 'j50'),
(38, 'lanhug', 'd2bc36ede00e7b9e68bea2bf6aeb18d7a9855a2f30e2f43e2ed88812c1b27a2230de8e0354b6d288dde19b330d818feb43c262fa2534cb1293c97c98e2431093', 'j8'),
(39, 'lanber', '17fd4130affbd475176ed982d41f3b12cd1da1702af7619b7a2f97659de6f649c14ceddf60f928b6c495e3a16550e620318154632aef406cf1d14f5a85c83307', 'k4'),
(40, 'lenoe', 'e3a68084cdd3032eb63de50d61372648fe918a02521fdc5900e3898d269e16bea226fed690f24be42d35e9cee6212c2c29890aae9b097ad5b45fe56b5941ef75', 'k53'),
(41, 'lejea', 'eb50906909d28002c243e0d9b18fd39a71d1287f7aa8692ef145650a19edcc440402b0984cb147ad761752b01eccab4eee2e57a3acd431f4ed52dcb097919b0b', 'l14'),
(42, 'lecser', 'bd5c49103d2d50c8ea110552a05bd16956c45009798243579c77a28ef896fd078fd46e843b5397f400e9d95c52be1e08e851020dbbb5c06bd9a60e42f4e33f9a', 'l23'),
(43, 'lecjea', 'acf0f1d2eac6c55b69a1cad60c86ac187fb0422b056954b5a2536ca916338b17edcade4dbd06dd5efc2c8d2f97c58afeb2794813f4cd82fe4330b3567764a1a1', 'l46'),
(44, 'leclud', 'a4f68ca436749d73fe16df1edf58d3112be93531b9b42f5e4620d500de3cad63566f8c5fa203dac0696076cb8301efc4d4a9e5b8c3e2f1e5fa364688e96ffc68', 'l56'),
(45, 'lejagn', '1c4cffd664ba15faa34e37b6e2e6e04422e11af0ed376f7dc9e57e6b81bd7b18506b79e7137acb816162bdde66c50506313521962505fa6ba282160ba5735c86', 'm35'),
(46, 'lespas', '985154ac603c023db2a9301b0a4dceaadb168d51a40f3b58d779c4c5d974a5c79d5204bfbe873d79d1904063f889a3dfb6a75dfc4770da478633685b91a90b5c', 'm45'),
(47, 'letste', '0aca1487747010d826216de4d2cb35ee183d6a047711e5899ca4a97d5bd2473e8975d533629a710b048d5776246a9c6ee90d50e49ef113f6d7227b9672a253e6', 'n42'),
(48, 'loidid', '0a06fbb541eff83c5c43c1be921dc3b1976f344efcdb7f633ba02ac5782b52e9acbc5a2d262188c47859a31ddcc6e5bd0202f6c2ada1ff29a9b1eaca66b3e7f5', 'n58'),
(49, 'mafthi', 'c796a58b8a719b2f7d5b7665092bdadb289bb416665f703eb4ab0c8c76fee86cf62d12abafa1041016c4c68ea1dfcbdca811a48a6936d9f435df6f8ea7784dae', 'n59'),
(50, 'manann', '432bdbf5a83a65ef974d3b64713c724ddd1a5f1e037a65ab0e5ee40857924d4fa0d640aaafdc2476d5efc86135e58252cd4041144719c56d276feb58ffacf856', 'o26'),
(51, 'marger', '28907d3a82837f33e5f07ec04f8e339a1ef29058047de974de8126f4b722be41e6a2c7c62412b22fa3a5db5b6d92a6a41ab4dc402e8face6efd2a42efcaa676e', 'p32'),
(52, 'micjea', 'ed23c76097f58a3bcf27dbe19354d629ada17a6745fc3f2b8d4b8e1d30a6a87817bb06397f85dee7cffbed9dd92b3409cd666d4f247dbe9212b951dacb13f523', 'p40'),
(53, 'monfra', 'dc59679d058555ba1389ea93a297d539284b45e703e331d0ddc9d72dfa525a58b97568998a07a35d2f74681a4e6c27579eec3a4c07ff999546d2c844bd609bed', 'p41'),
(54, 'notver', 'fdf4478cc744563c6182325b4f6e08ec734c62654ac2ec3c7d1c21d5aa26776e81557cca6780aed5d19a5d6ee61839cf22dab0c07c232b03b62453051e2c4722', 'p42'),
(55, 'onfden', '0e625b7c29b24692bfb043a4e58cb4539a23650aea84ddc48b0274e7f7b60ca409b3cca528fbdfb3efc0d9e6389e53f26c9026b7ddb72e136d9164b789f71bed', 'p49'),
(56, 'pascha', '815cbc523e993c1b50609dd65aa6846ca89d2c13990d43c6b97a5960f5d68834cc1b3d88eced62f5bd86407ea740667052a7c3dee0969e5be004e6309bb9e864', 'p6'),
(57, 'percla', 'a0e844f2f2751251df39cc16b177bb25f9e8d879fdd0cc1eabe6574dc833587b1571d3095e390efd351f1b13117933d42fdd8e2d496253ccce7fe73450d810cc', 'p7'),
(58, 'permai', 'bd5a3714fa7f982fd540f855d4ec9b51f331287325a316c65ccb6910fedfb6a78c206158173962ca4f831af66105f611aa20c0e7cb9917f0d6ee7b012b678e1b', 'p8'),
(59, 'petjea', 'ebdb37ab2458d2440dc0a4481c9558ab3f99837ee78d89d940e4acb9968f787288ed71d8d7897999b3a2bf17fe494397b72c04c56a625124d7079fbf35a85eb3', 'q17'),
(60, 'piqpat', 'ee73f708c315ee56438e9e8561659ae9b2c8d14ce1213002a2ba1f70636a6665715732647d938b9d84d6cc9fc541ab2a59c933d2f1a7dbfb4427bb6cbbfcffa4', 'r24'),
(61, 'quijoe', '4ddb4228cb57582c02f378a4c7bcd2040e4e024f2190aafca6b11758c11cd12fd27287dbee6df0965811b4820395ebebc09d02fc7864836ef8783af704436d6a', 'r58'),
(62, 'retjos', 'bb36d52d3fd19525bf5e8964f2aa8aff702f3d6b4ed10e6db240f0269411dde6800e75222363ad35f43524bbaf7bb70c5e6e0e35365e30b2e471b0eb2837feea', 's10'),
(63, 'retpas', 'ced009a403b112c23413e5ba5c0652635b3fb619a595079de7bf0ddb9eb9a7846cb5ad77afcf5b8299563dda4b01c1a393f76a9b6773b802bde90382a589b76c', 's21'),
(64, 'soumar', 'b313e263b2da6234fbcd1857b3489fcc8a869aa867cdb97544a6e9b7542956a36a1fee10c3302970f98b26ff6b9cfbfc3e8a26cf1d246e1d777f36b66fbae953', 't43'),
(65, 'tippat', 'a0f3eadec0fb3394620a574223ec0913a19e234ec56068a41f6d8691d62c8f4cd61c55c861cf3c13064be26b8eecb66d2d36c84270f37cb7d8f736814857194c', 't47'),
(66, 'treala', '393ebc6460be306b8600a89c3394d830bcf4e8119465c6b6b5c57b0948dee82c7b695a8fb923184687d4bf27f094ee1cbc53ef25b1a3eb4476653814a074520a', 't55'),
(67, 'tusjos', 'd49fe42f1ce6ebd4d2f147ed3e14fc5816c6ef735c2a3cd7b60e143cafa30db0d835fe37bac1340b7fc6f7cb6f34b307ba869cdf341c2c09e216b21021104d84', 't60');

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
('3MYC7', 'TRIMYCINE', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', 78.99, 'CRT'),
('ADIMOL9', 'ADIMOL', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.', 40.99, 'ABP'),
('AMOPIL7', 'AMOPIL', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', 29.99, 'ABP'),
('AMOX45', 'AMOXAR', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', 24.99, 'ABP'),
('AMOXIG12', 'AMOXI Gé', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.', 25.99, 'ABP'),
('APATOUX22', 'APATOUX Vitamine C', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.', 89.99, 'ALO'),
('BACTIG10', 'BACTIGEL', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', 46.99, 'ABC'),
('BACTIV13', 'BACTIVIL', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 34.99, 'AFM'),
('BITALV', 'BIVALIC', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.', 87.99, 'AAA'),
('CARTION6', 'CARTION', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.', 50.99, 'AAA'),
('CLAZER6', 'CLAZER', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 46.99, 'AFM'),
('DEPRIL9', 'DEPRAMIL', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.', 96.99, 'AIM'),
('DIMIRTAM6', 'DIMIRTAM', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.', 74.99, 'AAC'),
('DOLRIL7', 'DOLORIL', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.', 22.99, 'AAA'),
('DORNOM8', 'NORMADOR', 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.', 79.99, 'HYP'),
('EQUILARX6', 'EQUILAR', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.', 66.99, 'AAH'),
('EVILR7', 'EVEILLOR', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', 41.99, 'PSA'),
('INSXT5', 'INSECTIL', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.', 19.99, 'AH'),
('JOVAI8', 'JOVENIL', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).', 63.99, 'AFM'),
('LIDOXY23', 'LIDOXYTRACINE', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.', 74.99, 'AFC'),
('LITHOR12', 'LITHORINE', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.', 84.99, 'AP'),
('PARMOL16', 'PARMOCODEINE', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.', 54.99, 'AA'),
('PHYSOI8', 'PHYSICOR', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.', 67.99, 'PSA'),
('PIRIZ8', 'PIRIZAN', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.', 72.99, 'ABA'),
('POMDI20', 'POMADINE', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.', 46.99, 'AO'),
('TROXT21', 'TROXADET', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d\'allergie au produit.', 37.99, 'AIN'),
('TXISOL22', 'TOUXISOL Vitamine C', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.', 57.99, 'ALO'),
('URIEG6', 'URIREGUL', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.', 42.99, 'AUM');

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
(7, 'Besoin d\'information complémentaire'),
(8, 'Constatation d\'effets bizarres');

-- --------------------------------------------------------

--
-- Structure de la table `offrir`
--

DROP TABLE IF EXISTS `offrir`;
CREATE TABLE IF NOT EXISTS `offrir` (
  `MED_DEPOTLEGAL` varchar(10) COLLATE utf8_bin NOT NULL,
  `COL_MATRICULE` varchar(10) COLLATE utf8_bin NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `OFF_QTE` int(11) NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`COL_MATRICULE`,`RAP_NUM`),
  KEY `OFFRIR_rapport_visite0_FK` (`COL_MATRICULE`,`RAP_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `RAP_DATEVISITE` date DEFAULT NULL,
  `RAP_BILAN` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `RAP_DATESAISIT` date NOT NULL,
  `RAP_SAISITDEFINITIVE` tinyint(1) NOT NULL,
  `RAP_MOTIFAUTRE` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MED_DEPOTLEGAL_1` varchar(10) COLLATE utf8_bin DEFAULT NULL,
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

INSERT INTO `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`, `RAP_DATEVISITE`, `RAP_BILAN`, `RAP_DATESAISIT`, `RAP_SAISITDEFINITIVE`, `RAP_MOTIFAUTRE`, `MED_DEPOTLEGAL_1`, `MED_DEPOTLEGAL_2`, `PRA_NUM`, `MOT_ID`, `PRA_NUM_remplacant`) VALUES
('a131', 1, '2002-04-18', 'Médecin curieux, à recontacter en décembre pour réunion.', '2002-04-18', 0, NULL, 'AMOXIG12', NULL, 23, 2, NULL),
('a131', 2, '2003-03-23', 'RAS.\r\nChangement de tel : 05 89 89 89 89.', '2003-03-23', 1, NULL, 'BITALV', 'JOVAI8', 41, 3, NULL),
('a131', 3, '2021-12-03', 'Médecin énervé, ancien boxeur !', '2021-12-04', 0, NULL, 'EQUILARX6', NULL, 7, 2, NULL),
('a17', 1, '2003-05-21', 'Changement de direction, redéfinition de la politique médicamenteuse, recours au générique.', '2003-05-21', 1, NULL, 'PIRIZ8', NULL, 4, 6, NULL);

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
-- Contraintes pour la table `offrir`
--
ALTER TABLE `offrir`
  ADD CONSTRAINT `OFFRIR_medicament_FK` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `OFFRIR_rapport_visite0_FK` FOREIGN KEY (`COL_MATRICULE`,`RAP_NUM`) REFERENCES `rapport_visite` (`COL_MATRICULE`, `RAP_NUM`);

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
