-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 08:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `dob` date DEFAULT NULL,
  `c_name` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `c_year` date DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `img` blob DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8mb4 DEFAULT NULL,
  `curr_loc` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `curr_comp` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `curr_role` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `linked` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fb` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `github` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `certify` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `skill` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `student` tinyint(4) DEFAULT NULL,
  `alumini` tinyint(4) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `dob`, `c_name`, `c_year`, `email`, `mobile`, `img`, `gender`, `curr_loc`, `curr_comp`, `curr_role`, `linked`, `fb`, `github`, `certify`, `skill`, `student`, `alumini`, `password`) VALUES
(7, 'mridu', NULL, 'M.C', NULL, 'm@gmail.com', NULL, NULL, NULL, 'Madhya Pradesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
