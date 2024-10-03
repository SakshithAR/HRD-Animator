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
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `signupName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `roll` varchar(10) NOT NULL,
  `clas` varchar(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sslc` varchar(3) NOT NULL,
  `puc` varchar(3) NOT NULL,
  `signupPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `signupName`, `dob`, `roll`, `clas`, `phone`, `email`, `sslc`, `puc`, `signupPassword`) VALUES
(3, 'daya', '2023-04-25', '200911', 'BCA', '8971656912', 'daya@gmail.com', '55', '66', '1'),
(7, 'Dayananda', '0001-01-01', '987', 'BA', '0990 153 5062', 'dayanand0138@gmail.com', '66', '77', '123'),
(8, 'keerthan', '2023-04-18', '200111', 'BA', '435353', '200919@sdmcujire.in', '77', '99', '123'),
(9, 'Sanjana', '2023-04-20', '3423423', 'BSC', '6676757766', '200918@sdmcujire.in', '77', '88', 'sdm1@'),
(11, 'Syndicate Bank', '2023-05-26', '987', 'BA', '990 153 5062', 'dayabnr5@gmail.com', '33', '32', 'qwe'),
(21, 'samrat', '2023-05-11', '200911', 'BA', '2345555', '200958@sdmcujire.in', '7', '8', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
