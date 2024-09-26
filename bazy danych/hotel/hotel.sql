-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 26, 2024 at 01:22 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hotel`
--

CREATE TABLE `hotel` (
  `IDHotelu` int(11) NOT NULL,
  `NazwaHotelu` varchar(20) DEFAULT NULL,
  `Kod_pocztowy` varchar(6) DEFAULT NULL,
  `Poczta` varchar(30) DEFAULT NULL,
  `Miejscowosc` varchar(30) DEFAULT NULL,
  `Ulica` varchar(30) DEFAULT NULL,
  `Nr_lokalu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoba`
--

CREATE TABLE `osoba` (
  `IdOsoby` int(11) NOT NULL,
  `Nazwisko` varchar(30) DEFAULT NULL,
  `Imie` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pokoj`
--

CREATE TABLE `pokoj` (
  `IdP` int(11) NOT NULL,
  `NrPokoju` varchar(50) DEFAULT NULL,
  `Kategoria` int(11) DEFAULT NULL,
  `IleOsob` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `Stanowisko` varchar(30) DEFAULT NULL,
  `Kod_Pocztowy` varchar(6) DEFAULT NULL,
  `Poczta` varchar(30) DEFAULT NULL,
  `Miejscowosc` varchar(30) DEFAULT NULL,
  `Ulica` varchar(30) DEFAULT NULL,
  `Nr_lokalu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj_wyposarzenia`
--

CREATE TABLE `rodzaj_wyposarzenia` (
  `IDRW` int(11) NOT NULL,
  `NazwaRW` varchar(20) DEFAULT NULL,
  `KategoriaRW` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `siec_hoteli`
--

CREATE TABLE `siec_hoteli` (
  `IDSH` int(11) NOT NULL,
  `NazwaSH` varchar(30) DEFAULT NULL,
  `KodSH` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usluga`
--

CREATE TABLE `usluga` (
  `idU` int(11) NOT NULL,
  `NazwaUslugi` varchar(30) DEFAULT NULL,
  `CenaUslugi` decimal(15,2) DEFAULT NULL,
  `StawkaVAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi_wizyty`
--

CREATE TABLE `uslugi_wizyty` (
  `Liczba_elem` int(11) DEFAULT NULL,
  `Cena_jednostkowa` decimal(15,2) DEFAULT NULL,
  `Data_Od` date DEFAULT NULL,
  `Data_Do` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyposazenie_pokoju`
--

CREATE TABLE `wyposazenie_pokoju` (
  `Liczba_elem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`IDHotelu`);

--
-- Indeksy dla tabeli `osoba`
--
ALTER TABLE `osoba`
  ADD PRIMARY KEY (`IdOsoby`);

--
-- Indeksy dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  ADD PRIMARY KEY (`IdP`);

--
-- Indeksy dla tabeli `rodzaj_wyposarzenia`
--
ALTER TABLE `rodzaj_wyposarzenia`
  ADD PRIMARY KEY (`IDRW`);

--
-- Indeksy dla tabeli `siec_hoteli`
--
ALTER TABLE `siec_hoteli`
  ADD PRIMARY KEY (`IDSH`);

--
-- Indeksy dla tabeli `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `IDHotelu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `osoba`
--
ALTER TABLE `osoba`
  MODIFY `IdOsoby` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pokoj`
--
ALTER TABLE `pokoj`
  MODIFY `IdP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rodzaj_wyposarzenia`
--
ALTER TABLE `rodzaj_wyposarzenia`
  MODIFY `IDRW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siec_hoteli`
--
ALTER TABLE `siec_hoteli`
  MODIFY `IDSH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usluga`
--
ALTER TABLE `usluga`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
