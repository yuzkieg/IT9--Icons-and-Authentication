-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2025 at 08:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it9-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `productName`, `quantity`, `price`) VALUES
(37, 'intel 9 gen ', 5, 10000),
(38, 'RTX 4090', 4, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Mname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Mname`, `Lname`, `username`, `password`) VALUES
(8, 'Gerid ', 'Kent', 'Degara', 'admin', '$2y$10$ZVIu5bHfweWlXmtbhxPwCOdxES1qZ2pJ2UnO0l9K2h22WuvTEzyEm'),
(11, 'asd', 'asd', 'asd', 'asd', '$2y$10$8mn2oCa3J22ipLTuJNV0Mur43gBgMcu0rGxs5V17a3T8evM0RbL.S'),
(12, 'asdas', 'asdasd', 'asdads', 'sad', '$2y$10$DSOlL.MOIMDjypAhckXoY.Yj5yjIkPnfBoxkFM8L/kwT3PuDq1MwG'),
(14, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '$2y$10$ds97jm1ylDqw3DnfTkV7t.80mq2gik/.jRZaF13rjsSb5g6PQT4I2'),
(16, 'asd', 'asdasda', 'asdad', 'asdas', '$2y$10$0vZ3zHCtdSsokdoabGpc3OwSxiPa7roJ21343smW3KIHLd3HcZ.iu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
