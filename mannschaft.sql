-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 30. Mai 2016 um 21:35
-- Server Version: 5.5.33a-MariaDB
-- PHP-Version: 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `em-tippspiel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mannschaft`
--

CREATE TABLE IF NOT EXISTS `mannschaft` (
  `mannschaftID` int(11) NOT NULL AUTO_INCREMENT,
  `mannschaftName` text NOT NULL,
  PRIMARY KEY (`mannschaftID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Daten für Tabelle `mannschaft`
--

INSERT INTO `mannschaft` (`mannschaftID`, `mannschaftName`) VALUES
(1, 'Frankreich'),
(2, 'Rumänien'),
(3, 'Albanien'),
(4, 'Schweiz'),
(5, 'Wales'),
(6, 'Slowakei'),
(7, 'England'),
(8, 'Russland'),
(11, 'Polen'),
(12, 'Nordirland'),
(13, 'Deutschland'),
(14, 'Ukraine'),
(15, 'Türkei'),
(16, 'Kroatien'),
(17, 'Spanien'),
(18, 'Tschechien'),
(19, 'Irland'),
(20, 'Schweden'),
(21, 'Belgien'),
(22, 'Italien'),
(23, 'Österreich'),
(24, 'Ungarn'),
(25, 'Portugal'),
(26, 'Island');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
