-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:20 PM
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
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Sigurnosna vrata'),
(3, 'Sobna vrata');

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
(6, 'assets/img/1572370776sigurnosnavrata1.jpg', 'assets/img/small/1572370776sigurnosnavrata1.jpg', 7),
(7, 'assets/img/1572370904sigurnosnavrata2.jpg', 'assets/img/small/1572370904sigurnosnavrata2.jpg', 8),
(8, 'assets/img/1572370955sigurnosnavrata3.jpg', 'assets/img/small/1572370955sigurnosnavrata3.jpg', 9),
(9, 'assets/img/1572371030sigurnosnavrata4.jpg', 'assets/img/small/1572371030sigurnosnavrata4.jpg', 10),
(10, 'assets/img/1572371111sigurnosnavrata5.jpg', 'assets/img/small/1572371111sigurnosnavrata5.jpg', 11),
(11, 'assets/img/1572371220sigurnosnavrata6.jpg', 'assets/img/small/1572371220sigurnosnavrata6.jpg', 12),
(12, 'assets/img/1572431697sobnavrata1.jpg', 'assets/img/small/1572431697sobnavrata1.jpg', 13),
(13, 'assets/img/1572431773sobnavrata2.jpg', 'assets/img/small/1572431773sobnavrata2.jpg', 14),
(14, 'assets/img/1572431797sobnavrata3.jpg', 'assets/img/small/1572431797sobnavrata3.jpg', 15),
(18, 'assets/img/1572432249sobnavrata4.jpg', 'assets/img/small/1572432249sobnavrata4.jpg', 19);

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
(5, 'carssskiiii', 'dsdada', '1280', 'dsa2', 'dasdsa', 'dsada', 'dasdsa', '21313', 1),
(7, 'Sigurnosna 1', 'Braon', '611', '123X123', '2', '2', 'Prva vrata', '12000', 1),
(8, 'Sigurnosna 2', 'Bela', '611', '120X120', '3', '23', 'Bela vrata', '14000', 1),
(9, 'Sigurnosna 3', 'braon', '612', '150X150', '4', '2', 'Sigurnosna vrata ', '18000', 1),
(10, 'Sigurnosna 4', 'braon', '611', '180X200', '4', '2', 'Sigurnosna 4', '15200', 1),
(11, 'Sigurnosna 5', 'Crna', '612', '180X90', '4', '2', 'Sigurnosna vrata ', '18000', 1),
(12, 'Sigurnosna 6', 'Bela', '611', '120X120', '4', '2', 'Sigurnosna vrata ', '18000', 1),
(13, 'Sobna vrata 1', 'Bela', '700', '180X90', '1', '2', 'Sobna vrata 1', '16000', 3),
(14, 'Sobna vrata 2', 'dsa', '700', '123', '31', '312', '321', '321', 3),
(15, 'dsada', 'dsadsa', '700', 'dasd', 'das', 'dsa', 'dsa', 'dsad', 3),
(19, 'Sobna vrata 4', 'sda', '700', 'da', 'sada', 'dasd', '123', 'dsad', 3);

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
(3, 'toma95@gmail.com', '638c0b4686a50a471bf74fc5511c5fb6', 1, 0),
(4, 'nemanja@gmail.com', 'f93898a8314bd4cd8110fa2b6c093717', 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
