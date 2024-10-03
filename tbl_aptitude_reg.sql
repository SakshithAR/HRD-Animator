-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aptitude_reg`
--

CREATE TABLE `tbl_aptitude_reg` (
  `id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `apid` varchar(50) NOT NULL,
  `s_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_aptitude_reg`
--

INSERT INTO `tbl_aptitude_reg` (`id`, `place`, `amount`, `apid`, `s_id`) VALUES
(14, 'hostels/pg', 'yes', '49', '3'),
(15, 'hostels/pg', 'yes', '49', '3'),
(16, 'bus/own vehicle', 'no', '49', '3'),
(17, 'bus/own vehicle', 'no', '49', '3'),
(18, 'bus/own vehicle', 'yes', '51', '3'),
(19, 'hostels/pg', 'no', '50', '3'),
(20, 'hostels/pg', 'yes', '51', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aptitude_reg`
--
ALTER TABLE `tbl_aptitude_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aptitude_reg`
--
ALTER TABLE `tbl_aptitude_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
