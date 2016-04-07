-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 apr 2016 om 20:07
-- Serverversie: 10.1.9-MariaDB
-- PHP-versie: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_comments`
--

CREATE TABLE `db_comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_following`
--

CREATE TABLE `db_following` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_follower` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_likes`
--

CREATE TABLE `db_likes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_voterequest` int(11) NOT NULL,
  `id_picture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_picture`
--

CREATE TABLE `db_picture` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_tags`
--

CREATE TABLE `db_tags` (
  `id` int(11) NOT NULL,
  `id_picture` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `db_users`
--

CREATE TABLE `db_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `db_users`
--

INSERT INTO `db_users` (`id`, `username`, `fullname`, `email`, `password`, `picture`, `role`) VALUES
(4, 'Stalin', 'Stalin Vlad', 'Somerussian@ussr.com', '$2y$12$aasfzRJIx.YMFGy3HXKKwOO5a/Zh7v6/KbL9DIOnQ4/a42ChG8hvq\n', '', 0),
(5, 'ianhitler', 'Ian Hitler', 'Ian@MeinReich.de', '$2y$12$ULedQcs8EA05h4KONymJxeZ0tVt.m66NNW6inqRXepEULsdpMOe/G\n', '', 0),
(6, 'test', 'test', 'test@test.be', '$2y$12$40bJyXjOnEBdzd0QQZ4bNeE4nMXfd8REOIR0tvY7EWm0O4ptdiEai\n', '', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `db_comments`
--
ALTER TABLE `db_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `db_following`
--
ALTER TABLE `db_following`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `db_likes`
--
ALTER TABLE `db_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `db_picture`
--
ALTER TABLE `db_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `db_comments`
--
ALTER TABLE `db_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `db_following`
--
ALTER TABLE `db_following`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `db_likes`
--
ALTER TABLE `db_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `db_picture`
--
ALTER TABLE `db_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
