-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 mei 2022 om 00:59
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winkelmandje`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`product`)),
  `email_recipient` varchar(255) NOT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `status`, `product`, `email_recipient`, `order_number`) VALUES
(4, 2, '{\"id\":\"1\",\"amount\":\"5\"}', 'D287878@edu.rocwb.nl', 7925),
(5, 1, '{\"id\":\"1\",\"amount\":\"2\"}', 'D287878@edu.rocwb.nl', 5940),
(6, 1, '{\"id\":\"2\",\"amount\":\"2\"}', 'D287878@edu.rocwb.nl', 417);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` int(9) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `category`, `image`) VALUES
(1, 'HEREN T-SHIRT!\r\n', 17.5, 5, 'Modern shirt met korte mouwen, gemaakt van 100% voor gekrompen en ring gesponnen katoen met een zijdezachte touch (satijnlabel). De buisvormige snit zorgt voor een hoge bewegingsvrijheid. Wasbaar tot 40 ° C.', 1, '/img/merchandise/Schermafbeelding 2022-04-13 131236.png'),
(2, 'Under Armor Rival Fleece Hoodie', 73, 2, 'Dit wordt je nieuwe favoriete lichtgewicht lievelings hoodie om in te sporten. Hij is licht, comfortabel en superzacht aan de binnenkant.\r\n', 1, '/img/merchandise/Schermafbeelding 2022-04-13 131430.png'),
(3, 'Jako Longsleeve Run 2.0 Heren!', 23.9, 15, 'Dit heren T-shirt met lange mouwen heeft een comfortabele, licht aansluitende snit. De mouw is iets langer, maar niet onnodig breed aan de schouders .De nek band, zijnaden en dubbel stiksel zorgen voor een uitstekende vormvastheid, wasbeurt na wasbeurt! Het materiaal voelt heel zacht aan en het lagere gewicht zorgt voor extra comfort.\r\n\r\n', 1, '/img/merchandise/Schermafbeelding 2022-04-13 131630.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `role_status`) VALUES
(1, 'normal'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'inbehandeling'),
(2, 'ophalen'),
(3, 'verzonden');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` text NOT NULL,
  `role` int(9) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `pass`, `role`) VALUES
(1, 'user1', 'karim', 'D287878@edu.rocwb.nl', '$2y$10$AjXrcLbHrnLRsf7BGyRXhugA6KKBbJ8byKeuFD3fm/ZdsdJ4Ihv3q', 2),
(2, 'test1', 'karim', 'D287878@edu.rocwb.nl\r\n', '$2y$10$AjXrcLbHrnLRsf7BGyRXhugA6KKBbJ8byKeuFD3fm/ZdsdJ4Ihv3q', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
