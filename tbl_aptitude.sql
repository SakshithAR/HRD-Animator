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
-- Table structure for table `tbl_aptitude`
--

CREATE TABLE `tbl_aptitude` (
  `id` int(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_aptitude`
--

INSERT INTO `tbl_aptitude` (`id`, `heading`, `description`, `date`, `image`) VALUES
(49, 'aptitude 1', 'aptitude training program', '7/8/2022', 'a7.jpg'),
(50, 'aptitude 2', 'jfhdsghbgshcgshfj', '9/9/2023', 'a6.jpg'),
(51, 'title', 'ffghdrgdr', '09/04/2023', 'a16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aptitude`
--
ALTER TABLE `tbl_aptitude`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aptitude`
--
ALTER TABLE `tbl_aptitude`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
