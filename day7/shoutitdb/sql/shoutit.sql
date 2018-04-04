-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 02. 04 2018 kl. 00:02:04
-- Serverversion: 10.1.28-MariaDB
-- PHP-version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoutit`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `shouts`
--

CREATE TABLE `shouts` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `shouts`
--

INSERT INTO `shouts` (`id`, `user`, `message`, `time`) VALUES
(4, 'Harry Donalds', 'I am selling Pokemon cards for 50 cent. I have 100 different cards ', '22:47:54'),
(5, 'Mike Kington', 'Do you have following Pokemon cards: 1,4,18, 19, 34, 29?', '22:49:51'),
(6, 'Larry Ullman', 'Do you have Pokemon Card number 10, 16, 47?', '23:48:29'),
(7, 'Mike Kington', 'Yes I have card number 10, 16 and 47', '23:50:55'),
(8, 'Mike Kington', 'I have also card number 1, 4, 19 and 34 but I unfortunately not card number 18 and 29', '23:52:23');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `shouts`
--
ALTER TABLE `shouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
