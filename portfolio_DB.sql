-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2021 om 14:53
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `color` varchar(225) NOT NULL DEFAULT '#0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `languages`
--

INSERT INTO `languages` (`id`, `title`, `color`) VALUES
(1, 'Lua', '#5FC7FF'),
(2, 'C# - Sharp', '#BC4FFF'),
(3, 'JavaScript', '#FFF55D'),
(4, 'Html', '#FF7A33'),
(5, 'CSS', '#1B5DFF'),
(6, 'Vue', '#64FF6D'),
(7, 'PHP', '#BF64FF');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `discription` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `githublink` varchar(225) NOT NULL,
  `downloadlink` varchar(225) NOT NULL,
  `testlink` varchar(225) NOT NULL,
  `languages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `discription`, `date`, `githublink`, `downloadlink`, `testlink`, `languages`) VALUES
(3, 'Valuta Calculator', 'This calculator can calculate dollar to euro and the other way around.', '2021-04-19', 'https://github.com/Mdegeus/new', '', 'https://mdegeus.github.io/new/projectHtmls/ValutaCalculator.html', 3),
(4, 'Tic Tac Toe', 'Play tic tac toe with 2 players. you can add them yourself (note: resetting the game wil start a new round to play a new game refresh the page.)', '2021-06-19', 'https://github.com/Mdegeus/new', '', 'https://mdegeus.github.io/new/projectHtmls/bke.html', 3),
(5, 'Music App', 'This app is made in vue. You can play and pause the music. it also includes a quote generator from api services.', '2021-06-26', 'https://github.com/Mdegeus/musicApp_Source', 'https://github.com/Mdegeus/music_App/archive/refs/heads/main.zip', 'https://mdegeus.github.io/music_App', 6),
(7, 'Rune app', 'Type in a text or serie of words and get a list of runes back.', '2021-10-17', '', '', 'Apps/runeApp/index.php', 7);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages` (`languages`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`languages`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
