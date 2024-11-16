-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 16, 2024 at 06:02 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `przychodnia`
--
CREATE DATABASE IF NOT EXISTS `przychodnia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `przychodnia`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konta`
--

CREATE TABLE IF NOT EXISTS `konta` (
  `id_konta` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `id_lekarza` int(11) DEFAULT NULL,
  `id_pacjenta` int(11) DEFAULT NULL,
  `id_pracownika` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_konta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konta`
--

INSERT INTO `konta` (`id_konta`, `login`, `haslo`, `id_lekarza`, `id_pacjenta`, `id_pracownika`) VALUES
(1, 'NowaAngelica', 'AngelicaNowa', 1, NULL, NULL),
(2, 'OrkaAntek', 'AntekOrka', 2, NULL, NULL),
(3, 'NowakKacper', 'KacperNowak', NULL, 1, NULL),
(4, 'PająkKatarzyna', 'KatarzynaPająk', NULL, 2, NULL),
(5, 'DudekAndrzej', 'AndrzejDudek', NULL, NULL, 1),
(6, 'MoniakAneta', 'AnetaMoniak', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekarze`
--

CREATE TABLE IF NOT EXISTS `lekarze` (
  `id_lekarza` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `id_przychodni` int(11) NOT NULL,
  `nr_pokoju` int(11) NOT NULL,
  PRIMARY KEY (`id_lekarza`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lekarze`
--

INSERT INTO `lekarze` (`id_lekarza`, `imie`, `nazwisko`, `id_przychodni`, `nr_pokoju`) VALUES
(1, 'Angelica', 'Nowa', 1, 301),
(2, 'Antek', 'Orka', 2, 207);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjenci`
--

CREATE TABLE IF NOT EXISTS `pacjenci` (
  `id_pacjenta` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pacjenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pacjenci`
--

INSERT INTO `pacjenci` (`id_pacjenta`, `imie`, `nazwisko`) VALUES
(1, 'Kacper', 'Nowak'),
(2, 'Katarzyna', 'Pająk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE IF NOT EXISTS `pracownicy` (
  `id_pracownnika` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `posada` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pracownnika`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`id_pracownnika`, `imie`, `nazwisko`, `posada`) VALUES
(1, 'Andrzej', 'Dudek', 'farmaceuta'),
(2, 'Aneta', 'Moniak', 'pielegniarka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przychodnie`
--

CREATE TABLE IF NOT EXISTS `przychodnie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przychodnie`
--

INSERT INTO `przychodnie` (`id`, `nazwa`) VALUES
(1, 'Słoneczko'),
(2, 'Księżyc');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyty`
--

CREATE TABLE IF NOT EXISTS `wizyty` (
  `id_wizyty` int(11) NOT NULL AUTO_INCREMENT,
  `data_wizyty` date NOT NULL,
  `id_lekarza` int(11) NOT NULL,
  `id_pacjenta` int(11) NOT NULL,
  `id_przychodnie` int(11) NOT NULL,
  `zalecenia` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_wizyty`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wizyty`
--

INSERT INTO `wizyty` (`id_wizyty`, `data_wizyty`, `id_lekarza`, `id_pacjenta`, `id_przychodnie`, `zalecenia`) VALUES
(1, '2024-11-16', 1, 1, 1, 'Ibuprom 1x rano 1x wieczorem'),
(2, '2024-11-17', 2, 1, 1, 'hartak 1x wieczorem'),
(3, '2024-11-10', 1, 2, 2, 'Gripex 3x dziennie'),
(4, '2024-10-11', 2, 2, 2, 'Mainako 1x rano Ibuprom 2x wieczorem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
