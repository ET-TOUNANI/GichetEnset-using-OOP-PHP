-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 18:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `enset`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepartement` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `departement` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `departement`) VALUES
('MI', 'Mathématiques-Informatiques'),
('MI', 'Mathématique informatique'),
('GE', 'Génie Mécanique'),
('GM', 'Génie électrique');

-- --------------------------------------------------------

--
-- Structure de la table `documentdepose`
--

CREATE TABLE `documentdepose` (
  `IDDOCDEPO` int(11) NOT NULL,
  `IDETUD` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DATEDEPO` date DEFAULT NULL,
  `LIBELLE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `TAILLE` int(11) DEFAULT NULL,
  `LINK` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `documentdepose`
--

INSERT INTO `documentdepose` (`IDDOCDEPO`, `IDETUD`, `DATEDEPO`, `LIBELLE`, `STATUS`, `TAILLE`, `LINK`) VALUES
(1, 'K13', '2021-12-25', 'Justificatif d\'abscence', 0, 12, ''),
(2, 'K13', '2021-12-25', 'Dossier médical', 1, 12, ''),
(3, 'K13', '2021-12-25', 'Relevès des notes', 1, 13, ''),
(6, 'K13', '2021-12-25', 'Relevés des notes', 0, 0, '../data/uploads/K13-Relevés des notes.jpg'),
(7, 'K13', '2022-01-10', 'Relevés des notes', 1, 52593, '../data/uploads/K13-Relevés des notes.png');

-- --------------------------------------------------------

--
-- Structure de la table `documentextrait`
--

CREATE TABLE `documentextrait` (
  `IDDOC` int(11) NOT NULL,
  `IDETUD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDTYPEDOC` int(11) NOT NULL,
  `DATEREDACTION` date DEFAULT NULL,
  `STATUS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `documentextrait`
--

INSERT INTO `documentextrait` (`IDDOC`, `IDETUD`, `IDTYPEDOC`, `DATEREDACTION`, `STATUS`) VALUES
(1, 'K13', 2, '2021-12-25', '0'),
(2, 'K13', 1, '2021-12-25', '1'),
(3, 'K13', 1, '2021-12-25', '1'),
(4, 'K13', 2, '2021-12-26', '0'),
(10, 'K13', 1, '2022-01-10', '1'),
(11, 'K13', 1, '2022-01-10', '1');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `IDETUD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CINE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NOMETU` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PRENOMETUD` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idFiliere` int(11) DEFAULT NULL,
  `EmailEtud` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PassEtud` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statutCmp` tinyint(1) NOT NULL,
  `PAYS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VILLE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ADRESSE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  `SEXE` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`IDETUD`, `CINE`, `NOMETU`, `PRENOMETUD`, `idFiliere`, `EmailEtud`, `PassEtud`, `statutCmp`, `PAYS`, `VILLE`, `ADRESSE`, `DATENAISSANCE`, `SEXE`) VALUES
('1', 'U136957', 'ETOULLALI', 'ayoub', 1, 'ayoub1@gmail.com', '12345678', 0, 'Maroc', 'ERRACHIDIA', '05 rue nahda', '2002-01-05', 'M'),
('10', 'K136957', 'DAOUD', 'hajar', 1, 'hajar11@gmail.com', '11345678', 0, 'Maroc', 'TANGER', '50 rue Rimi', '2001-12-10', 'F'),
('2', 'M136957', 'HAMMADI', 'Fatima', 2, 'fatima2@gmail.com', '22345678', 0, 'Maroc', 'MEKNES', '08 rue limane', '2002-11-05', 'F'),
('3', 'I196957', 'FARAHI', 'khalid', 1, 'khalid3@gmail.com', '32345678', 0, 'Maroc', 'RABAT', '202 rue ain ati', '2001-01-05', 'M'),
('4', 'A136957', 'FAROUI', 'badr', 1, 'badr4@gmail.com', '42345678', 0, 'Maroc', 'FES', '90 rue hdab', '2000-01-06', 'M'),
('5', 'L136957', 'BADRAOUI', 'mehdi', 2, 'mehdi5@gmail.com', '52345678', 0, 'Maroc', 'MOHAMMEDIA', '03 rue mohammedia', '2001-09-15', 'M'),
('6', 'L186957', 'AMIN', 'Amine', 1, 'amine6@gmail.com', '62345678', 0, 'Maroc', 'CASA', '200 rue oud dahab', '2000-12-05', 'M'),
('7', 'B136957', 'HAJARI', 'naima', 2, 'naima7@gmail.com', '72345678', 0, 'Maroc', 'MARRAKECH', '17 rue errachidia', '2002-01-15', 'F'),
('8', 'W137957', 'LOUNMAR', 'Farah', 2, 'farah8@gmail.com', '82345678', 0, 'GABON', 'CASA', '10 rue hamama', '2001-01-05', 'F'),
('9', 'M936957', 'NURI', 'ayoub', 1, 'ayoub9@gmail.com', '92345678', 0, 'Maroc', 'ERRACHIDIA', '05 rue ouarda', '2002-10-05', 'M'),
('K13', 'LL000000', 'Ennani', 'abderrahmane', 2, 'kinghakimo123@gmail.com', 'hello123', 1, 'Maroc', 'Mohammedia', '123 Random street', '1900-01-01', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idFiliere` int(11) NOT NULL,
  `filiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idDepartement` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idFiliere`, `filiere`, `idDepartement`) VALUES
(1, 'II-BDCC', 'MI'),
(2, 'GLSID', 'MI'),
(3, 'GIL', 'GM'),
(4, 'SEER', 'GE'),
(5, 'GECSI', 'GE'),
(6, 'GEMSI', 'GM');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `IDRDV` int(11) NOT NULL,
  `IDETUD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDTYPERDV` int(11) NOT NULL,
  `DATERDV` date DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT NULL,
  `HEURERDV` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`IDRDV`, `IDETUD`, `IDTYPERDV`, `DATERDV`, `STATUS`, `HEURERDV`) VALUES
(1, 'K13', 1, '2021-12-18', 0, '09:00'),
(2, 'K13', 2, '2021-12-18', 0, '13:30'),
(3, 'K13', 3, '2021-12-18', 0, '10:00');

-- --------------------------------------------------------

--
-- Structure de la table `typedocument`
--

CREATE TABLE `typedocument` (
  `IDTYPEDOC` int(11) NOT NULL,
  `INTITULETYPE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typedocument`
--

INSERT INTO `typedocument` (`IDTYPEDOC`, `INTITULETYPE`) VALUES
(1, 'Attestation de scolarité'),
(2, 'Attestation d\'inscription'),
(3, 'Relevés Des Notes'),
(4, 'Document X');

-- --------------------------------------------------------

--
-- Structure de la table `typerdv`
--

CREATE TABLE `typerdv` (
  `IDTYPERDV` int(11) NOT NULL,
  `INTITULETYPERDV` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typerdv`
--

INSERT INTO `typerdv` (`IDTYPERDV`, `INTITULETYPERDV`) VALUES
(1, 'Réclamation'),
(2, 'Signature document'),
(3, 'Non-spécifié');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD KEY `idDepartement` (`idDepartement`);

--
-- Index pour la table `documentdepose`
--
ALTER TABLE `documentdepose`
  ADD PRIMARY KEY (`IDDOCDEPO`),
  ADD KEY `FK_SOUMETTRE` (`IDETUD`);

--
-- Index pour la table `documentextrait`
--
ALTER TABLE `documentextrait`
  ADD PRIMARY KEY (`IDDOC`),
  ADD KEY `FK_APPARTENIR` (`IDTYPEDOC`),
  ADD KEY `FK_DEMANDER` (`IDETUD`),
  ADD KEY `IDTYPEDOC` (`IDTYPEDOC`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`IDETUD`),
  ADD KEY `idFiliere` (`idFiliere`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idFiliere`),
  ADD KEY `idDepartement` (`idDepartement`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`IDRDV`),
  ADD KEY `FK_CONCERNER` (`IDTYPERDV`),
  ADD KEY `FK_RESERVER` (`IDETUD`);

--
-- Index pour la table `typedocument`
--
ALTER TABLE `typedocument`
  ADD PRIMARY KEY (`IDTYPEDOC`);

--
-- Index pour la table `typerdv`
--
ALTER TABLE `typerdv`
  ADD PRIMARY KEY (`IDTYPERDV`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `documentdepose`
--
ALTER TABLE `documentdepose`
  MODIFY `IDDOCDEPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `documentextrait`
--
ALTER TABLE `documentextrait`
  MODIFY `IDDOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idFiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `IDRDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typedocument`
--
ALTER TABLE `typedocument`
  MODIFY `IDTYPEDOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `typerdv`
--
ALTER TABLE `typerdv`
  MODIFY `IDTYPERDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`idDepartement`) REFERENCES `filiere` (`idDepartement`);

--
-- Contraintes pour la table `documentdepose`
--
ALTER TABLE `documentdepose`
  ADD CONSTRAINT `documentdepose_ibfk_1` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`);

--
-- Contraintes pour la table `documentextrait`
--
ALTER TABLE `documentextrait`
  ADD CONSTRAINT `documentextrait_ibfk_1` FOREIGN KEY (`IDTYPEDOC`) REFERENCES `typedocument` (`IDTYPEDOC`),
  ADD CONSTRAINT `documentextrait_ibfk_2` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`idFiliere`) REFERENCES `filiere` (`idFiliere`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`IDTYPERDV`) REFERENCES `typerdv` (`IDTYPERDV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
