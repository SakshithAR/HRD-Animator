-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 09:18 AM
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
-- Table structure for table `tbl_other_activities_reg`
--

CREATE TABLE `tbl_other_activities_reg` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `clas` varchar(15) NOT NULL,
  `place` varchar(50) NOT NULL,
  `apid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_other_activities_reg`
--

INSERT INTO `tbl_other_activities_reg` (`id`, `name`, `email`, `roll`, `whatsapp`, `clas`, `place`, `apid`) VALUES
(1, 'daya', 'dayabnr@gmail.com', '200911', '5436565', 'III-BSC', 'hostels/pg', '3'),
(2, 'pujith', 'dayanand0138@gmail.com', '1111', '454545', 'III-BCA', 'hostels/pg', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_other_activities_reg`
--
ALTER TABLE `tbl_other_activities_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_other_activities_reg`
--
ALTER TABLE `tbl_other_activities_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
