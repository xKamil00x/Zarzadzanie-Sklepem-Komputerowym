-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2016 at 03:41 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluednvj_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `baza`
--

CREATE TABLE IF NOT EXISTS `baza` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  `koszt` varchar(255) NOT NULL,
  `kategoria` int(255) NOT NULL,
  `ilosc_akt` int(255) NOT NULL,
  `ilosc` int(255) NOT NULL,
  `ean` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategorie`
--

CREATE TABLE IF NOT EXISTS `kategorie` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `klienci`
--

CREATE TABLE IF NOT EXISTS `klienci` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dane` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adres` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `kod` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `miasto` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(9) NOT NULL,
  `punkty` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ustawienia`
--

CREATE TABLE IF NOT EXISTS `ustawienia` (
  `id` int(1) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `punkty` int(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `uprawnienia` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `zamowienia`
--

CREATE TABLE IF NOT EXISTS `zamowienia` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_produktu` int(255) NOT NULL,
  `id_klienta` int(255) NOT NULL,
  `ilosc` int(255) NOT NULL,
  `koszt1` int(255) NOT NULL,
  `rabat` int(255) NOT NULL,
  `koszt2` int(255) NOT NULL,
  `data` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
