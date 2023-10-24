-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 02:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seed`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `email`, `reference`, `amount`, `created`, `status`) VALUES
(1, 'victor@gmail.com', '0', 1000.00, '2023-10-19 14:38:21.672599', 'pending'),
(4, 'chinwenma@gmail.com', 'x6k5cpdg9m', 10000.00, '2023-10-19 16:57:30.723351', 'pending'),
(5, 'chinwenma@gmail.com', 'pl4bec8qj3', 10000.00, '2023-10-19 17:06:24.655957', 'pending'),
(6, 'chinwenma@gmail.com', 'e6uvjizmhw', 10000.00, '2023-10-19 17:08:49.179513', 'pending'),
(7, 'chinwenma@gmail.com', 'baaxja8rtf', 1000.00, '2023-10-20 15:07:57.090424', 'pending'),
(8, 'chinwenma@gmail.com', 'x99ywq1a2e', 1000.00, '2023-10-20 15:10:40.096649', 'pending'),
(9, 'chinwenma@gmail.com', '5mh944ejp5', 1000.00, '2023-10-20 15:20:35.000998', 'pending'),
(10, 'chinwenma@gmail.com', 's0jnynbbeq', 1000.00, '2023-10-20 16:03:24.835520', 'pending'),
(11, 'chinwenma@gmail.com', '4wgpagc3jz', 1007.00, '2023-10-24 10:31:32.557681', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `role` varchar(200) NOT NULL DEFAULT 'user',
  `password` varchar(200) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `balance` decimal(11,2) NOT NULL DEFAULT 0.00,
  `invest` decimal(10,2) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `referer` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `password`, `phone`, `balance`, `invest`, `created`, `updated`, `referer`) VALUES
(1, 'chinwenma', 'chinwenma', 'chinwenma@gmail.com', 'user', '12345', '', 300000.00, 0.00, '0000-00-00 00:00:00.000000', '2023-10-20 16:32:47.724731', NULL),
(2, 'victor', 'vicman', 'victor@gmail.com', 'admin', '12345', '', 0.00, 0.00, '2023-10-19 14:13:15.716225', '2023-10-20 16:28:25.104288', 1),
(3, 'victor', 'vicman', 'victor@gmail.com', 'user', '12345', '', 0.00, 0.00, '2023-10-19 14:13:15.752635', NULL, 1),
(4, 'MercyKamso', 'mercy', 'mercy@gmail.com', 'user', '12345', '', 0.00, 0.00, '2023-10-20 14:53:45.012213', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
