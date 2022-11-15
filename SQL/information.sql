-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 03:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membership`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `areaCode` int(11) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `fname`, `lname`, `email`, `areaCode`, `phoneNumber`, `address1`, `address2`) VALUES
(7, 'Alfonso', 'Gatbonton', 'ggatbonton.cs@gmail.com', 2002, '09472421933', 'Block 20 Lot 26', 'Holy Angel Village Phase 2 '),
(9, 'Johnny', 'Codes', 'johnnyC@gmail.com', 2000, '09456231934', 'Linux', 'Apple Mac'),
(10, 'Patrick Jude ', 'Rivera', 'patrickjude@gmail.com', 2009, '09472421933', '32 Maria Clara Street L & S Subdivision', 'Angeles City, Pampanga'),
(12, 'Aicel', 'Malubay', 'aicelreyesspccf@gmail.com', 2001, '09637272382', 'Kang tatay', 'Minalin'),
(18, 'Lovely Joy', 'Malubay', 'kalugurandakababatak@gmail.com', 2019, '09054043199', 'Minalin', 'Pampanga'),
(19, 'Lovely Joy', 'Malubay', 'kanandaka@gmail.com', 2019, '09233133234', 'Minalin', 'Pampanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
