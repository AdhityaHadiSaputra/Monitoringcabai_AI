-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2023 at 11:20 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21005724_sensorweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabai1`
--

CREATE TABLE `cabai1` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cabai1`
--

INSERT INTO `cabai1` (`id`, `tanggal`, `tinggi`) VALUES
(1, '2023-06-13', 30),
(2, '2023-06-14', 30),
(3, '2023-06-15', 30),
(4, '2023-06-16', 32),
(5, '2023-06-17', 32),
(6, '2023-06-18', 32),
(7, '2023-06-19', 33),
(8, '2023-06-20', 34),
(9, '2023-06-21', 34),
(10, '2023-06-22', 35),
(11, '2023-06-23', 36),
(12, '2023-06-24', 37),
(13, '2023-06-25', 38),
(14, '2023-06-26', 38),
(15, '2023-06-27', 38),
(16, '2023-06-28', 40),
(17, '2023-06-29', 40),
(18, '2023-06-30', 41),
(19, '2023-07-01', 42),
(20, '2023-07-02', 42),
(21, '2023-07-03', 42),
(22, '2023-07-04', 42),
(23, '2023-07-05', 43),
(24, '2023-07-06', 43),
(25, '2023-07-07', 43),
(26, '2023-07-08', 44),
(27, '2023-07-09', 44),
(28, '2023-07-10', 45),
(29, '2023-07-11', 45),
(30, '2023-07-12', 46),
(31, '2023-07-13', 46),
(32, '2023-07-14', 47),
(33, '2023-07-15', 47),
(34, '2023-07-16', 48),
(35, '2023-07-17', 48),
(36, '2023-07-18', 49),
(37, '2023-07-19', 50),
(38, '2023-07-20', 50),
(39, '2023-07-21', 51),
(40, '2023-07-22', 51);

-- --------------------------------------------------------

--
-- Table structure for table `cabai2`
--

CREATE TABLE `cabai2` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cabai2`
--

INSERT INTO `cabai2` (`id`, `tanggal`, `tinggi`) VALUES
(1, '2023-06-13', 25),
(2, '2023-06-14', 25),
(3, '2023-06-15', 26),
(4, '2023-06-16', 27),
(5, '2023-06-17', 27),
(6, '2023-06-18', 28),
(7, '2023-06-19', 28),
(8, '2023-06-20', 29),
(9, '2023-06-21', 29),
(10, '2023-06-22', 31),
(11, '2023-06-23', 32),
(12, '2023-06-24', 32),
(13, '2023-06-25', 33),
(14, '2023-06-26', 35),
(15, '2023-06-27', 35),
(16, '2023-06-28', 36),
(17, '2023-06-29', 37),
(18, '2023-06-30', 37),
(19, '2023-07-01', 37),
(20, '2023-07-02', 38),
(21, '2023-07-03', 39),
(22, '2023-07-04', 40),
(23, '2023-07-05', 41),
(24, '2023-07-06', 41),
(25, '2023-07-07', 41),
(26, '2023-07-08', 42),
(27, '2023-07-09', 44),
(28, '2023-07-10', 45),
(29, '2023-07-11', 45),
(30, '2023-07-12', 46),
(31, '2023-07-13', 47),
(32, '2023-07-14', 48),
(33, '2023-07-15', 48),
(34, '2023-07-16', 49),
(35, '2023-07-17', 49),
(36, '2023-07-18', 50),
(37, '2023-07-19', 50),
(38, '2023-07-20', 51),
(39, '2023-07-21', 51),
(40, '2023-07-22', 52);

-- --------------------------------------------------------

--
-- Table structure for table `cabai3`
--

CREATE TABLE `cabai3` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cabai3`
--

INSERT INTO `cabai3` (`id`, `tanggal`, `tinggi`) VALUES
(1, '2023-06-13', 27),
(2, '2023-06-14', 27),
(3, '2023-06-15', 27),
(4, '2023-06-16', 28),
(5, '2023-06-17', 28),
(6, '2023-06-18', 28),
(7, '2023-06-19', 29),
(8, '2023-06-20', 29),
(9, '2023-06-21', 30),
(10, '2023-06-22', 30),
(11, '2023-06-23', 31),
(12, '2023-06-24', 32),
(13, '2023-06-25', 32),
(14, '2023-06-26', 34),
(15, '2023-06-27', 35),
(16, '2023-06-28', 35),
(17, '2023-06-29', 36),
(18, '2023-06-30', 36),
(19, '2023-07-01', 37),
(20, '2023-07-02', 37),
(21, '2023-07-03', 38),
(22, '2023-07-04', 38),
(23, '2023-07-05', 39),
(24, '2023-07-06', 40),
(25, '2023-07-07', 42),
(26, '2023-07-08', 43),
(27, '2023-07-09', 44),
(28, '2023-07-10', 44),
(29, '2023-07-11', 46),
(30, '2023-07-12', 46),
(31, '2023-07-13', 47),
(32, '2023-07-14', 48),
(33, '2023-07-15', 48),
(34, '2023-07-16', 49),
(35, '2023-07-17', 50),
(36, '2023-07-18', 50),
(37, '2023-07-19', 52),
(38, '2023-07-20', 52),
(39, '2023-07-21', 53),
(40, '2023-07-22', 53);

-- --------------------------------------------------------

--
-- Table structure for table `duas`
--

CREATE TABLE `duas` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duas`
--

INSERT INTO `duas` (`id`, `tanggal`, `status`) VALUES
(26, '2023-07-29', 0),
(27, '2023-07-29', 1),
(28, '2023-07-29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabai1`
--
ALTER TABLE `cabai1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabai2`
--
ALTER TABLE `cabai2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabai3`
--
ALTER TABLE `cabai3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duas`
--
ALTER TABLE `duas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabai1`
--
ALTER TABLE `cabai1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cabai2`
--
ALTER TABLE `cabai2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cabai3`
--
ALTER TABLE `cabai3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `duas`
--
ALTER TABLE `duas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
