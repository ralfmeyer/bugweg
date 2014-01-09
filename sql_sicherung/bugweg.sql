-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Nov 2013 um 16:01
-- Server Version: 5.5.32
-- PHP-Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `bugweg`
--
CREATE DATABASE IF NOT EXISTS `bugweg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bugweg`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `anhang`
--

CREATE TABLE IF NOT EXISTS `anhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eintrag_id` int(11) DEFAULT NULL,
  `nachricht_id` int(11) DEFAULT NULL,
  `dateiname` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `anmeldename` varchar(20) NOT NULL,
  `kennwort` varchar(20) NOT NULL,
  `gesperrt` tinyint(1) NOT NULL DEFAULT '0',
  `extern` tinyint(1) NOT NULL DEFAULT '0',
  `berechtigung` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bereich`
--

CREATE TABLE IF NOT EXISTS `bereich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eintrag`
--

CREATE TABLE IF NOT EXISTS `eintrag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) DEFAULT '0',
  `bereich_id` int(11) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(80) NOT NULL,
  `beschreibung` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `letzterstand` text NOT NULL,
  `wichtig` tinyint(1) NOT NULL DEFAULT '0',
  `dringend` tinyint(1) NOT NULL DEFAULT '0',
  `termin` date NOT NULL,
  `anfang` date NOT NULL,
  `ende` date NOT NULL,
  `zeitrahmen` varchar(30) NOT NULL,
  `sichtbarkeit` int(11) NOT NULL,
  `benutzer_id_gemeldetvon` int(11) NOT NULL,
  `gemeldetam` date NOT NULL,
  `benutzer_id_rueckmelungvon` int(11) NOT NULL,
  `rueckmeldungam` date NOT NULL,
  `benutzer_id_angelegtvon` int(11) NOT NULL,
  `angelegtam` date NOT NULL,
  `benutzer_id_geaednertvon` int(11) NOT NULL,
  `geaendertam` date NOT NULL,
  `externenr` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `konfig`
--

CREATE TABLE IF NOT EXISTS `konfig` (
  `id` varchar(15) NOT NULL,
  `wert` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kontakt`
--

CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benutzer_id` int(11) NOT NULL,
  `kontaktart_id` int(11) NOT NULL,
  `bezeichnung` varchar(30) NOT NULL,
  `inhalt` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kontaktart`
--

CREATE TABLE IF NOT EXISTS `kontaktart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bezeichnung` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nachricht`
--

CREATE TABLE IF NOT EXISTS `nachricht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eintrag_id` int(11) NOT NULL,
  `benutzer_id` int(11) NOT NULL,
  `kontakt_id` int(11) NOT NULL,
  `angelegtam` datetime NOT NULL,
  `eingehend` tinyint(1) NOT NULL,
  `inhalt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
