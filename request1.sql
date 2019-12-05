-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 09:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `request1`
--

CREATE TABLE `request1` (
  `id` int(10) NOT NULL,
  `heading` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `tag` text COLLATE utf8mb4_bin NOT NULL,
  `describe` text COLLATE utf8mb4_bin NOT NULL,
  `confirm` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `request1`
--

INSERT INTO `request1` (`id`, `heading`, `tag`, `describe`, `confirm`) VALUES
(66, 'cs', 'html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', 1),
(67, 'mridul', 'cs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', 1),
(68, 'satya', '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request1`
--
ALTER TABLE `request1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request1`
--
ALTER TABLE `request1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
