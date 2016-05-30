-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 27. Mai 2016 um 21:56
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tippspiel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gruppe`
--

CREATE TABLE `gruppe` (
  `gruppeID` int(11) NOT NULL,
  `mannschaftA` text NOT NULL,
  `mannschaftB` text NOT NULL,
  `mannschaftC` text NOT NULL,
  `mannschaftD` text NOT NULL,
  `gruppenbezeichnung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gruppe`
--

INSERT INTO `gruppe` (`gruppeID`, `mannschaftA`, `mannschaftB`, `mannschaftC`, `mannschaftD`, `gruppenbezeichnung`) VALUES
(1, 'Frankreich', 'Rumänien', 'Albanien', 'Schweiz', 'Gruppe A'),
(2, 'Wales', 'Slowakei', 'England', 'Russland', 'Gruppe B'),
(3, 'Polen', 'Nordirland', 'Deutschland', 'Ukraine', 'Gruppe C'),
(4, 'Türkei', 'Kroatien', 'Spanien', 'Tschechien', 'Gruppe D'),
(5, 'Irland', 'Schweden', 'Belgien', 'Italien', 'Gruppe E'),
(6, 'Österreich', 'Ungarn', 'Portugal', 'Island', 'Gruppe F');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `spieler`
--

CREATE TABLE `spieler` (
  `spielerID` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `spieler`
--

INSERT INTO `spieler` (`spielerID`, `name`) VALUES
(1, 'MaxM'),
(2, 'OliMuster');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tabelle`
--

CREATE TABLE `tabelle` (
  `tabelleID` int(11) NOT NULL,
  `spielerID` int(11) NOT NULL,
  `punkte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gruppe`
--
ALTER TABLE `gruppe`
  ADD PRIMARY KEY (`gruppeID`);

--
-- Indizes für die Tabelle `spieler`
--
ALTER TABLE `spieler`
  ADD PRIMARY KEY (`spielerID`);

--
-- Indizes für die Tabelle `tabelle`
--
ALTER TABLE `tabelle`
  ADD PRIMARY KEY (`tabelleID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gruppe`
--
ALTER TABLE `gruppe`
  MODIFY `gruppeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `spieler`
--
ALTER TABLE `spieler`
  MODIFY `spielerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `tabelle`
--
ALTER TABLE `tabelle`
  MODIFY `tabelleID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
