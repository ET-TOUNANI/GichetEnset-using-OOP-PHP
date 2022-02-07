-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 11:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enset`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `idDepartement` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `departement` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`idDepartement`, `departement`) VALUES
('MI', 'Mathématiques-Informatiques');

-- --------------------------------------------------------

--
-- Table structure for table `documentdepose`
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
-- Dumping data for table `documentdepose`
--

INSERT INTO `documentdepose` (`IDDOCDEPO`, `IDETUD`, `DATEDEPO`, `LIBELLE`, `STATUS`, `TAILLE`, `LINK`) VALUES
(1, 'K13', '2021-12-25', 'Justificatif d\'abscence', 0, 12, ''),
(2, 'K13', '2021-12-25', 'Dossier médical', 1, 12, ''),
(3, 'K13', '2021-12-25', 'Relevès des notes', 1, 13, ''),
(6, 'K13', '2021-12-25', 'Relevés des notes', 0, 0, '../data/uploads/K13-Relevés des notes.jpg'),
(7, 'K13', '2022-01-10', 'Relevés des notes', 1, 52593, '../data/uploads/K13-Relevés des notes.png');

-- --------------------------------------------------------

--
-- Table structure for table `documentextrait`
--

CREATE TABLE `documentextrait` (
  `IDDOC` int(11) NOT NULL,
  `IDETUD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDTYPEDOC` int(11) NOT NULL,
  `DATEREDACTION` date DEFAULT NULL,
  `STATUS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documentextrait`
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
-- Table structure for table `etudiant`
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
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`IDETUD`, `CINE`, `NOMETU`, `PRENOMETUD`, `idFiliere`, `EmailEtud`, `PassEtud`, `statutCmp`, `PAYS`, `VILLE`, `ADRESSE`, `DATENAISSANCE`, `SEXE`) VALUES
('K13', 'LL000000', 'Ennani', 'abderrahmane', 2, 'kinghakimo123@gmail.com', 'hello123', 1, 'Maroc', 'Mohammedia', '123 Random street', '1900-01-01', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

CREATE TABLE `filiere` (
  `idFiliere` int(11) NOT NULL,
  `filiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idDepartement` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`idFiliere`, `filiere`, `idDepartement`) VALUES
(1, 'II-BDCC', 'MI'),
(2, 'GLSID', 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
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
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`IDRDV`, `IDETUD`, `IDTYPERDV`, `DATERDV`, `STATUS`, `HEURERDV`) VALUES
(1, 'K13', 1, '2021-12-18', 0, '09:00'),
(2, 'K13', 2, '2021-12-18', 0, '13:30'),
(3, 'K13', 3, '2021-12-18', 0, '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `typedocument`
--

CREATE TABLE `typedocument` (
  `IDTYPEDOC` int(11) NOT NULL,
  `INTITULETYPE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typedocument`
--

INSERT INTO `typedocument` (`IDTYPEDOC`, `INTITULETYPE`) VALUES
(1, 'Attestation de scolarité'),
(2, 'Attestation d\'inscription'),
(3, 'Relevés Des Notes'),
(4, 'Document X');

-- --------------------------------------------------------

--
-- Table structure for table `typerdv`
--

CREATE TABLE `typerdv` (
  `IDTYPERDV` int(11) NOT NULL,
  `INTITULETYPERDV` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typerdv`
--

INSERT INTO `typerdv` (`IDTYPERDV`, `INTITULETYPERDV`) VALUES
(1, 'Réclamation'),
(2, 'Signature document'),
(3, 'Non-spécifié');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD KEY `idDepartement` (`idDepartement`);

--
-- Indexes for table `documentdepose`
--
ALTER TABLE `documentdepose`
  ADD PRIMARY KEY (`IDDOCDEPO`),
  ADD KEY `FK_SOUMETTRE` (`IDETUD`);

--
-- Indexes for table `documentextrait`
--
ALTER TABLE `documentextrait`
  ADD PRIMARY KEY (`IDDOC`),
  ADD KEY `FK_APPARTENIR` (`IDTYPEDOC`),
  ADD KEY `FK_DEMANDER` (`IDETUD`),
  ADD KEY `IDTYPEDOC` (`IDTYPEDOC`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`IDETUD`),
  ADD KEY `idFiliere` (`idFiliere`);

--
-- Indexes for table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idFiliere`),
  ADD KEY `idDepartement` (`idDepartement`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`IDRDV`),
  ADD KEY `FK_CONCERNER` (`IDTYPERDV`),
  ADD KEY `FK_RESERVER` (`IDETUD`);

--
-- Indexes for table `typedocument`
--
ALTER TABLE `typedocument`
  ADD PRIMARY KEY (`IDTYPEDOC`);

--
-- Indexes for table `typerdv`
--
ALTER TABLE `typerdv`
  ADD PRIMARY KEY (`IDTYPERDV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentdepose`
--
ALTER TABLE `documentdepose`
  MODIFY `IDDOCDEPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documentextrait`
--
ALTER TABLE `documentextrait`
  MODIFY `IDDOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idFiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `IDRDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `typedocument`
--
ALTER TABLE `typedocument`
  MODIFY `IDTYPEDOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `typerdv`
--
ALTER TABLE `typerdv`
  MODIFY `IDTYPERDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`idDepartement`) REFERENCES `filiere` (`idDepartement`);

--
-- Constraints for table `documentdepose`
--
ALTER TABLE `documentdepose`
  ADD CONSTRAINT `documentdepose_ibfk_1` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`);

--
-- Constraints for table `documentextrait`
--
ALTER TABLE `documentextrait`
  ADD CONSTRAINT `documentextrait_ibfk_1` FOREIGN KEY (`IDTYPEDOC`) REFERENCES `typedocument` (`IDTYPEDOC`),
  ADD CONSTRAINT `documentextrait_ibfk_2` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`);

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`idFiliere`) REFERENCES `filiere` (`idFiliere`);

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`IDETUD`) REFERENCES `etudiant` (`IDETUD`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`IDTYPERDV`) REFERENCES `typerdv` (`IDTYPERDV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
