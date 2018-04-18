-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 10. 09 2017 kl. 03:21:41
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
-- Database: `creativeadv2017videodb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `platforms`
--

CREATE TABLE `platforms` (
  `id` int(11) NOT NULL,
  `platformname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `platforms`
--

INSERT INTO `platforms` (`id`, `platformname`) VALUES
(1, 'Nintendo DS'),
(2, 'Nintendo 64'),
(3, 'Playstation 2'),
(4, 'Playstation 3'),
(5, 'Playstation 4'),
(6, 'Gameboy'),
(7, 'Gameboy II'),
(8, 'Gameboy III'),
(9, 'Gameboy IIII');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `publishername` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `publishers`
--

INSERT INTO `publishers` (`id`, `publishername`, `website`) VALUES
(1, 'bethesda', 'https://bethesda.net/'),
(2, 'Activision Blizzard', 'http://www.activisionblizzard.com/'),
(3, 'Codemasters', 'http://www.codemasters.com/'),
(4, 'Rockstar', 'http://www.rockstargames.com/'),
(5, 'Blizzard Entertainment', 'http://www.blizzard.com'),
(6, 'Ubisoft', 'https://www.ubisoft.com'),
(7, 'Sony Entertainment', 'https://www.playstation.com'),
(8, 'EB Games', 'http://www.ebgames.com'),
(9, 'Maverick Games', 'http://www.maverick-games.com'),
(10, 'Kingston Games', 'http://www.kingstonggames.com');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `videogames`
--

CREATE TABLE `videogames` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `platformid` int(11) NOT NULL,
  `publisherid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `videogames`
--

INSERT INTO `videogames` (`id`, `title`, `price`, `description`, `platformid`, `publisherid`) VALUES
(1, 'Uncharted 4', '329.00', 'Tre år efter begivenhederne i Uncharted 3: Drakes Deception har Nathan Drake tilsyneladende lagt skattejagterne bag sig.', 5, 7),
(2, 'Grand Theft Auto V', '389.00', 'Grand Theft Auto V (GTA 5) finder sted i Los Santos som er fyldt med natur, bakker og strande i det største spil i serien.', 5, 4),
(3, 'Grand Theft Auto V', '399.00', 'Grand Theft Auto V (GTA 5) finder sted i Los Santos som er fyldt med natur, bakker og strande i det største spil i serien.', 4, 4),
(4, 'DOOM 4', '349.00', 'DOOM is  a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat.', 5, 1),
(5, 'DOOM 4', '369.00', 'DOOM is  a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat.', 5, 1),
(6, 'DOOM 4', '349.00', 'DOOM is  a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat.', 2, 1),
(7, 'Fifa 16', '219.00', 'FIFA 16 byder på nyskabelser overalt på banen for at sikre en afbalanceret, autentisk og spændende fodboldoplevelse, der lader dig spille på DIN måde i alle dine foretrukne spilvarianter.', 5, 7),
(8, 'Fifa 16', '179.00', 'FIFA 16 byder på nyskabelser overalt på banen for at sikre en afbalanceret, autentisk og spændende fodboldoplevelse, der lader dig spille på DIN måde i alle dine foretrukne spilvarianter.', 4, 7),
(9, 'Fifa 16', '199.00', 'FIFA 16 byder på nyskabelser overalt på banen for at sikre en afbalanceret, autentisk og spændende fodboldoplevelse, der lader dig spille på DIN måde i alle dine foretrukne spilvarianter.', 5, 7),
(10, 'Fifa 16', '209.00', 'FIFA 16 byder på nyskabelser overalt på banen for at sikre en afbalanceret, autentisk og spændende fodboldoplevelse, der lader dig spille på DIN måde i alle dine foretrukne spilvarianter.', 4, 6),
(11, 'Fallout 4', '323.00', 'Bethesda Game Studios, er de prisbelønnede skabere af Fallout 3 og The Elder Scrolls V: Skyrim og de byder dig velkommen til Fallout 4 - Deres mest ambitiøse spil nogensinde, og den næste generation af Open-world.', 5, 1),
(12, 'Fallout 4', '299.00', 'Bethesda Game Studios, er de prisbelønnede skabere af Fallout 3 og The Elder Scrolls V: Skyrim og de byder dig velkommen til Fallout 4 - Deres mest ambitiøse spil nogensinde, og den næste generation af Open-world.', 5, 1),
(13, 'Fallout 4', '289.00', 'Bethesda Game Studios, er de prisbelønnede skabere af Fallout 3 og The Elder Scrolls V: Skyrim og de byder dig velkommen til Fallout 4 - Deres mest ambitiøse spil nogensinde, og den næste generation af Open-world spil.', 4, 1),
(14, 'Call of Duty', '199.00', 'Det nye Call of Duty vil levere fantastisk action i single player og multiplayer, som fans af FPS genren og Call of Duty-serien vil elske!', 3, 2),
(15, 'Call of Duty', '249.00', 'Det nye Call of Duty vil levere fantastisk action i single player og multiplayer, som fans af FPS genren og Call of Duty-serien vil elske!', 2, 2),
(16, 'Call of Duty', '279.00', 'Det nye Call of Duty vil levere fantastisk action i single player og multiplayer, som fans af FPS genren og Call of Duty-serien vil elske!', 5, 2),
(17, 'Battlefield 4', '164.00', 'Battlefield 4 er et genre-definerende storspil, som bygger på øjeblikke, der udvisker grænsen mellem spil og ægte krigsførelse.', 4, 5),
(18, 'Battlefield 4', '199.00', 'Battlefield 4 er et genre-definerende storspil, som bygger på øjeblikke, der udvisker grænsen mellem spil og ægte krigsførelse.', 3, 5),
(19, 'Battlefield 4', '199.00', 'Battlefield 4 er et genre-definerende storspil, som bygger på øjeblikke, der udvisker grænsen mellem spil og ægte krigsførelse.', 2, 5),
(20, 'World of Warcraft', '199.00', 'Lorem ipsum text text ipsum lorem text.', 4, 2),
(21, 'Mad Max', '208.00', 'Mad Max leverer åben verden gameplay i en post-apokalyptisk verden, hvor biler er nøglen til overlevelse.', 4, 4),
(22, 'Super Mario 3D World', '359.00', 'Bowser har kidnappet prinsessen af Sprixie Kingdom, og nu er det op til Mario og hans venner at redde hende, mens de på deres vej sprinter mod flagstangen på de forskellige niveauer!', 3, 4),
(23, 'NHL 16 ', '219.00', 'NHL 16, der bygger på endnu flere input fra vore fans end nogensinde før, går på isen med helt nye måder at konkurrere som et hold på, nye spilmuligheder til alle de mest populære single-player-varianter, nyskabelser til alle positioner på isen og en uovertruffen kampdag-atmosfære.', 5, 2),
(24, 'NHL 16 ', '219.00', 'NHL 16, der bygger på endnu flere input fra vore fans end nogensinde før, går på isen med helt nye måder at konkurrere som et hold på, nye spilmuligheder til alle de mest populære single-player-varianter, nyskabelser til alle positioner på isen og en uovertruffen kampdag-atmosfære.', 4, 2),
(25, 'Batman', '208.00', 'Den store finale til Arkham serien, Batman er oppe imod den ultimative trussel mod byen, han har svoret at beskytte. Scarecrow vender tilbage til forene et hold af superskurker, herunder Penguin, Two-Face og Harley Quinn, med formålet om at stoppe Batman én gang for alle.', 5, 7),
(26, 'Fifa 2018', '379.00', 'Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text. Lorem ipsum text', 2, 6),
(27, 'Fifa2020', '299.00', 'jklia.kjdfnssa.df,m sad', 9, 2);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`id`),
  ADD KEY `platformid` (`platformid`),
  ADD KEY `publisherid` (`publisherid`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tilføj AUTO_INCREMENT i tabel `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tilføj AUTO_INCREMENT i tabel `videogames`
--
ALTER TABLE `videogames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
