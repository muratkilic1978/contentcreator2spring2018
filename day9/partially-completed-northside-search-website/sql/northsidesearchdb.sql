-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 09. 10 2017 kl. 21:38:31
-- Serverversion: 10.1.25-MariaDB
-- PHP-version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northsidedb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artistname` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `artist`
--

INSERT INTO `artist` (`id`, `artistname`, `country`) VALUES
(1, 'Tom Odell', 'Danmark'),
(2, 'Perter Sommer', 'Danmark'),
(3, 'The Floor Is Made Of Lava', 'Belgien'),
(4, 'Left Boy', 'Holland'),
(5, 'Daugther', 'Belgien'),
(6, 'Bloc Party', 'Holland'),
(7, 'Kaizers Orchestra', 'Østrig'),
(8, 'Phoenix', 'Østring'),
(9, 'Keane', 'United Kingdom'),
(10, 'Tegan And Sara', 'United Kingdom'),
(11, 'Nephew', 'Sverige'),
(12, 'Spleen United', 'Sverige'),
(13, 'Poul Køller', 'Danmark');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `artiststage`
--

CREATE TABLE `artiststage` (
  `id` int(11) NOT NULL,
  `stageid` int(11) NOT NULL,
  `artistid` int(11) NOT NULL,
  `yeaar` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `clock` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `artiststage`
--

INSERT INTO `artiststage` (`id`, `stageid`, `artistid`, `yeaar`, `month`, `day`, `clock`) VALUES
(1, 1, 1, '2017', '06', '20', '14:00'),
(2, 1, 1, '2017', '06', '21', '14:00'),
(5, 1, 1, '2017', '06', '22', '14:00'),
(6, 1, 2, '2017', '06', '20', '16:00'),
(8, 1, 2, '2017', '06', '20', '18:00'),
(11, 3, 3, '2017', '06', '20', '16:00'),
(12, 2, 7, '2017', '06', '20', '14:00'),
(13, 2, 4, '2017', '06', '19', '15:00'),
(14, 3, 5, '2017', '06', '19', '16:00');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `stage`
--

CREATE TABLE `stage` (
  `id` int(11) NOT NULL,
  `stagename` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `stage`
--

INSERT INTO `stage` (`id`, `stagename`, `capacity`) VALUES
(1, 'Red Stage', 16000),
(2, 'Blue Stage', 20000),
(3, 'Green Stage', 10000);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `artiststage`
--
ALTER TABLE `artiststage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artistid` (`artistid`,`month`,`day`,`yeaar`,`clock`),
  ADD KEY `stageid` (`stageid`);

--
-- Indeks for tabel `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tilføj AUTO_INCREMENT i tabel `artiststage`
--
ALTER TABLE `artiststage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Tilføj AUTO_INCREMENT i tabel `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `artiststage`
--
ALTER TABLE `artiststage`
  ADD CONSTRAINT `artiststage_ibfk_1` FOREIGN KEY (`stageid`) REFERENCES `stage` (`id`),
  ADD CONSTRAINT `artiststage_ibfk_2` FOREIGN KEY (`artistid`) REFERENCES `artist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
