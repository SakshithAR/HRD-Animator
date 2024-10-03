-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 09:16 AM
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
-- Table structure for table `tbl_add_admin`
--

CREATE TABLE `tbl_add_admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `signupPassword` varchar(50) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_add_admin`
--

INSERT INTO `tbl_add_admin` (`id`, `name`, `profession`, `image`, `signupPassword`, `confirmPassword`) VALUES
(19, 'abc', 'HOD', 'abcddd.jpg', '123', '123'),
(21, 'aaa', 'Asst Prof', 'aaaa16.jpg', '123', '123');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campus`
--

CREATE TABLE `tbl_campus` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `g_form` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_campus`
--

INSERT INTO `tbl_campus` (`id`, `company`, `description`, `date`, `g_form`, `image`) VALUES
(14, 'infosys', 'It is recruitment drive', '9/9/2023', 'https:/www.google.com', 'a16.jpg'),
(16, 'canara bank', 'fhsdfhgfh', '9/12/2023', 'https://www.google.co.in/', 'rr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_activities`
--

CREATE TABLE `tbl_other_activities` (
  `id` int(255) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_other_activities`
--

INSERT INTO `tbl_other_activities` (`id`, `heading`, `description`, `date`, `image`) VALUES
(4, 'helooo', 'fgfdgf', 'gfgfg', 'a10.jpg'),
(5, 'ok', 'safdsfds', '10/10/2022', 'eee.jpg');

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
-- Indexes for table `tbl_add_admin`
--
ALTER TABLE `tbl_add_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aptitude`
--
ALTER TABLE `tbl_aptitude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aptitude_reg`
--
ALTER TABLE `tbl_aptitude_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_campus`
--
ALTER TABLE `tbl_campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_activities`
--
ALTER TABLE `tbl_other_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_activities_reg`
--
ALTER TABLE `tbl_other_activities_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add_admin`
--
ALTER TABLE `tbl_add_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_aptitude`
--
ALTER TABLE `tbl_aptitude`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_aptitude_reg`
--
ALTER TABLE `tbl_aptitude_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_campus`
--
ALTER TABLE `tbl_campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_other_activities`
--
ALTER TABLE `tbl_other_activities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_other_activities_reg`
--
ALTER TABLE `tbl_other_activities_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
