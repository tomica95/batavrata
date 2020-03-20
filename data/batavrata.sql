-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 10:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batavrata`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Sigurnosna vrata', NULL),
(2, 'Sobna vrata', NULL),
(3, 'Medijapan', 2),
(8, 'Domaca', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `big` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `small` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `big`, `small`, `product_id`) VALUES
(22, 'assets/img/1573407318sigurnosnavrata20.jpg', 'assets/img/small/1573407318sigurnosnavrata20.jpg', 23),
(24, 'assets/img/1573407929sigurnosnavrata5.jpg', 'assets/img/small/1573407929sigurnosnavrata5.jpg', 25),
(25, 'assets/img/1573408066sigurnosnavrata18.jpg', 'assets/img/small/1573408066sigurnosnavrata18.jpg', 26),
(26, 'assets/img/1573408181sigurnosnavrata6.jpg', 'assets/img/small/1573408181sigurnosnavrata6.jpg', 27),
(27, 'assets/img/1573408679sigurnosnavrata12.jpg', 'assets/img/small/1573408679sigurnosnavrata12.jpg', 28),
(28, 'assets/img/1573408866sigurnosnavrata13.jpg', 'assets/img/small/1573408866sigurnosnavrata13.jpg', 29),
(29, 'assets/img/1573409013sigurnosnavrata14.jpg', 'assets/img/small/1573409013sigurnosnavrata14.jpg', 30),
(30, 'assets/img/1573409203sigurnosnavrata15.jpg', 'assets/img/small/1573409203sigurnosnavrata15.jpg', 31),
(31, 'assets/img/1573409533luxsigurnosna1.png', 'assets/img/small/1573409533luxsigurnosna1.png', 32),
(32, 'assets/img/1573409951luxsigurnosna2.png', 'assets/img/small/1573409951luxsigurnosna2.png', 33),
(33, 'assets/img/1573686326sobnavrata1.jpg', 'assets/img/small/1573686326sobnavrata1.jpg', 34),
(34, 'assets/img/1573686398sobnavrata7.jpg', 'assets/img/small/1573686398sobnavrata7.jpg', 35),
(36, 'assets/img/1573686572sobnavrata5.jpg', 'assets/img/small/1573686572sobnavrata5.jpg', 37),
(37, 'assets/img/1575829454nase.jpg', 'assets/img/small/1575829454nase.jpg', 38),
(39, 'assets/img/1575830411sobnavrata2.jpg', 'assets/img/small/1575830411sobnavrata2.jpg', 40),
(41, 'assets/img/1575830707sobnavrata3.jpg', 'assets/img/small/1575830707sobnavrata3.jpg', 42),
(42, 'assets/img/1575830802sobnavrata6.jpg', 'assets/img/small/1575830802sobnavrata6.jpg', 43),
(43, 'assets/img/157583134220190318_121025.jpg', 'assets/img/small/157583134220190318_121025.jpg', 44),
(44, 'assets/img/157583153620190318_120958.jpg', 'assets/img/small/157583153620190318_120958.jpg', 45);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dimension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_locks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchasetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `width`, `dimension`, `number_locks`, `purchasetime`, `description`, `price`, `cat_id`) VALUES
(23, 'Kabral', 'Braon', '5cm', '90x202 i 96x202', 'Jedna brava', '24h', '5 tačaka zaključavanja, 13 šipova', '17500', 1),
(25, 'Trilajn', 'Braon', '7cm', '90X202, 96x202, i na upit 100x205.', 'Dve brave', '24h', '6 tačaka zaključavanja i ukupno 15 šipova. Ključevi su kodirani i proizvedeni po EU standardima', '23.500,00', 1),
(26, 'Kabral', 'Bela', '5cm', '90x202 i 96x202', 'Jedna brava', '24h', '5 tačaka zaključavanja, 13 šipova', '17.500,00', 1),
(27, 'Trilajn', 'Bela', '7cm', '90X202, 96x202, i na upit 100x205.', 'Dve brave', '24h', '6 tačaka zaključavanja i ukupno 15 šipova. Ključevi su kodirani i proizvedeni po EU standardima.', '23.500,00', 1),
(28, 'Bata Lux', 'Braon', '7cm', '90X202, 96x202, i na upit 100x205.', 'Dve brave', '24h', '6 tačaka zaključavanja, ukupno 15 šipova. Ključevi su kodirani i proizvedeni po EU standardima. UV zaštita preko vrata. Ispuna kamena vuna', '26.000,00', 1),
(29, 'Bata Lux', 'Bela', '7cm', '90X202, 96x202, i na upit 100x205.', 'Dve brave', '24h', '6 tačaka zaključavanja, ukupno 15 šipova. Ključevi su kodirani i proizvedeni po EU standardima. UV zaštita preko vrata. Ispuna kamena vuna', '26.000,00', 1),
(30, 'Sankara', 'Braon', '7cm', '90x202 i 96x202', 'Dve brave', '24h', '6 tačaka zaključavanja, ukupno 15 šipova. Ispuna karton saće. Debljina lima na krilu je 0,9mm, na štoku 1,1mm.  Ključevi su kodirani i proizvedeni po EU standardima. ', '26.000,00', 1),
(31, 'Sankara', 'Bela', '7cm', '90x202 i 96x202', 'Dve brave', '24h', '6 tačaka zaključavanja, ukupno 15 šipova. Ispuna karton saće. Debljina lima na krilu je 0,9mm, na štoku 1,1mm.  Ključevi su kodirani i proizvedeni po EU standardima. ', '26.000,00', 1),
(32, 'Lux Vrata', 'Braon', '6,5cm', '90X202, 100x205.', 'Jedna brava', '24h', 'Medijapan obloga 7mm sa jedne i sa druge strane, pocinkovani lim u sredini. Ispuna stiropor ili kamena vuna. Italijanske brave i cilindri Sekurema. Debljina lima na krilu je 1mm a na štoku 1,5mm, širina štoka 6cm.', '36.000,00', 1),
(33, 'Lux Vrata', 'Bela', '6,5cm', '90X202, 100x205.', 'Jedna brava', '24h', 'Medijapan obloga 7mm sa jedne i sa druge strane, pocinkovani lim u sredini. Ispuna stiropor ili kamena vuna. Italijanske brave i cilindri Sekurema. Debljina lima na krilu je 1mm a na štoku 1,5mm, širina štoka 6cm.', '36.000,00', 1),
(34, 'Sankara sobna vrata', 'Bela', '/', 'u standardu za otvore 70,80 i 90, po meri', 'Jedna brava', '24h', 'Ova unutrašnja vrata se izrađuju od medijapana. Medijapan je presvučen visokokvalitetnom PVC folijom u boji drveta koja deluje prilično uverljivo (jasen, wenge) ili u beloj boji koja je bez mirisa i nije štetna po zdravlje.', '15.800,00din + 2.900,00 ugradnja', 3),
(35, 'Sankara sobna vrata', 'Mapl', '/', 'upit', 'Jedna brava', '24h', 'Ova unutrašnja vrata se izrađuju od medijapana. Medijapan je presvučen visokokvalitetnom PVC folijom u boji drveta koja deluje prilično uverljivo (jasen, wenge) ili u beloj boji koja je bez mirisa i nije štetna po zdravlje.', '15.800,00din + 2.900,00 ugradnja', 3),
(36, 'Sankara BT bela staklo', 'Bela', '40mm', 'u standardu za otvore 80 i 90', 'Jedna brava', 'Na stanju', 'Sankara BT bela staklo', '18.200,00 rsd sa bravom i kvakom', 3),
(37, 'Sankara sobna vrata', 'Mahagoni', '/', 'upit', 'Jedna brava', '24h', 'Ova unutrašnja vrata se izrađuju od medijapana. Medijapan je presvučen visokokvalitetnom PVC folijom u boji drveta koja deluje prilično uverljivo (jasen, wenge) ili u beloj boji koja je bez mirisa i nije štetna po zdravlje.', '15.800,00din + 2.900,00 ugradnja', 3),
(38, 'Medijapan farban poliuretanom', 'Po izboru', '40mm', 'Po meri i u standardu', 'Jedna brava', '2-15 dana', 'Medijapan vrata farbana poliuretanom domace proizvodnje, pervajz lajsne sirine 70mm. Italijanski AGB okov. ', '21.900,00', 8),
(40, 'Sankara BT mapl staklo', 'Beljeni hrast', '40mm', 'u standardu za otvore 80 i 90', 'Jedna brava', 'na upit', 'Sankara BT mapl staklo', '18.200,00 rsd sa bravom i kvakom', 3),
(43, 'Sankara BT braon', 'Braon', '40mm', 'u standardu za otvore 80 i 90', 'Jedna brava', 'na upit', 'Sankara BT braon staklo', '18.200,00 rsd sa bravom i kvakom', 3),
(44, 'Sobna BT Koral', 'Beljeni hrast', '40mm', 'u standardu za otvore 70,80 i 90, po meri', 'Jedna brava', '48h', 'Krilo i stok od medijapana presvucena eko furnirom(Lamitex Italijanska folija). Italijanski AGB okov. Odlican odnos cene i hvaliteta. ', '18.900,00 rsd(sa bravom i kvakom)', 8),
(45, 'Sobna Timau', 'Tamno braon', '40mm', 'u standardu za otvore 80 i 90', 'Jedna brava', '48h', 'Krilo i stok od medijapana presvucena eko furnirom(Lamitex Italijanska folija). Italijanski AGB okov. Odlican odnos cene i hvaliteta.', '18.900,00 rsd(sa bravom i kvakom)', 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `logged` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role_id`, `logged`) VALUES
(5, 'toma@gmail.com', '638c0b4686a50a471bf74fc5511c5fb6', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
