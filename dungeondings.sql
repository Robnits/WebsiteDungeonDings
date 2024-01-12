-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jan 2024 um 16:35
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dungeondings`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `account`
--

CREATE TABLE `account` (
  `account_ID` int(11) NOT NULL,
  `vorname` varchar(255) DEFAULT NULL,
  `nachname` varchar(255) DEFAULT NULL,
  `benutzername` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `passwort` varchar(255) DEFAULT NULL,
  `profilebild_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `account`
--

INSERT INTO `account` (`account_ID`, `vorname`, `nachname`, `benutzername`, `email`, `mobile`, `passwort`, `profilebild_url`) VALUES
(1, 'nnn', 'nnn', 'akak', 'nourwahbeh03@gmail.com', '017655213776', 'nourwahbeh', 'http://localhost/phpmyadmin/index.php?route=/table/change&db=dungeondings&table=account'),
(2, 'Nour', 'Wahbeh', 'Akera', 'nourwahbeh03@gmail.com', '017655213776', 'Nourwahbeh2001', 'https://cdn.discordapp.com/attachments/926961045753434223/1176199082025435249/1.png?ex=6589af41&is=65773a41&hm=4233e14b4d0840df3abd45fc63666c2e92afc8e9dd7bd9435d4d942db28345e6&');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `community`
--

CREATE TABLE `community` (
  `beitrag_id` int(11) NOT NULL,
  `benutzername` varchar(255) DEFAULT NULL,
  `beitraginhalt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `community`
--

INSERT INTO `community` (`beitrag_id`, `benutzername`, `beitraginhalt`) VALUES
(6, 'Akera', 'Test \r\nTest'),
(7, 'Akera', 'wadawdwada'),
(8, 'Akera', 'juigjkgjk'),
(9, 'Akera', 'fsefesfes');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `score`
--

CREATE TABLE `score` (
  `accoun_ID` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `high_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `support`
--

CREATE TABLE `support` (
  `nachricht_ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nachricht` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `support`
--

INSERT INTO `support` (`nachricht_ID`, `name`, `email`, `nachricht`) VALUES
(1, 'Nour Wahbeh', 'nourwahbeh03@gmail.com', 'dawdawdawdawawd\r\nawd\r\nawdaw\r\ndawd\r\nawd\r\nawd\r\nawd\r\naw'),
(2, 'Nour Wahbeh', 'nourwahbeh03@gmail.com', 'dawdawdawdawawd\r\nawd');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_ID`),
  ADD UNIQUE KEY `benutzername` (`benutzername`);

--
-- Indizes für die Tabelle `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`beitrag_id`);

--
-- Indizes für die Tabelle `score`
--
ALTER TABLE `score`
  ADD KEY `accoun_ID` (`accoun_ID`);

--
-- Indizes für die Tabelle `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`nachricht_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `community`
--
ALTER TABLE `community`
  MODIFY `beitrag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `support`
--
ALTER TABLE `support`
  MODIFY `nachricht_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`accoun_ID`) REFERENCES `account` (`account_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
