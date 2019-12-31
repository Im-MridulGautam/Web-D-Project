-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 08:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `q_no` int(10) NOT NULL,
  `answer_username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer`, `q_no`, `answer_username`, `time`) VALUES
(30, 'qwertyuo', 68, 'sadfe', '2019-12-05 10:35:03'),
(43, 'qwert', 66, 'satya098', '2019-12-06 13:17:01'),
(44, 'okey', 92, 'satya098', '2019-12-06 13:59:45'),
(45, 'jhftd', 66, 'satya098', '2019-12-06 14:24:28'),
(46, 'drjhtykiuy', 93, 'satya098', '2019-12-11 06:28:41'),
(47, 'h4tru4tg', 94, 'satya098', '2019-12-11 11:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 2, 'hii', '2019-10-25 06:42:47', 0),
(2, 1, 2, 'How are you??', '2019-10-25 06:43:13', 0),
(3, 1, 2, '??', '2019-10-25 06:44:35', 0),
(4, 2, 1, 'ok', '2019-10-25 06:45:29', 0),
(5, 2, 1, 'hello', '2019-10-25 07:29:55', 0),
(6, 1, 2, 'fghj', '2019-10-25 07:30:28', 0),
(7, 2, 1, 'giugik', '2019-10-25 07:30:36', 0),
(8, 2, 1, 'jgffjvj', '2019-10-25 07:30:53', 0),
(9, 2, 1, '78', '2019-10-25 07:31:07', 0),
(10, 2, 1, '4158', '2019-10-25 07:31:13', 0),
(11, 1, 2, 'hmm', '2019-10-25 07:31:22', 0),
(12, 1, 2, 'whats now', '2019-10-25 07:31:43', 0),
(13, 1, 2, 'fine', '2019-10-25 07:31:48', 0),
(14, 2, 1, '😜dfg', '2019-10-25 12:31:10', 0),
(15, 2, 1, '😎', '2019-10-25 12:31:16', 0),
(16, 2, 1, '', '2019-10-25 12:31:19', 0),
(17, 1, 2, 'dsfhdsg', '2019-10-25 14:08:37', 0),
(18, 1, 2, 'dsfhdsg', '2019-10-25 14:08:41', 0),
(19, 1, 2, 'dsfhdsg', '2019-10-25 14:11:05', 0),
(20, 2, 1, 'fyi', '2019-10-25 17:16:30', 0),
(21, 2, 1, 'ftjdfghfdghjgfd', '2019-10-25 17:16:45', 0),
(22, 2, 1, 'o', '2019-10-25 17:17:01', 0),
(23, 2, 1, 'fghfg', '2019-10-25 17:17:51', 0),
(24, 2, 1, 'fghfgdfhfthrtrrrrrrrrrrrrrrrrrrrr', '2019-10-25 17:17:57', 0),
(25, 2, 1, 'fg1', '2019-10-25 17:18:07', 0),
(26, 2, 1, 'fg1', '2019-10-25 17:18:09', 0),
(27, 2, 1, 'fg1', '2019-10-25 17:18:10', 0),
(28, 2, 1, 'fg1', '2019-10-25 17:18:10', 0),
(29, 2, 1, 'qqqqqqqqqqqqqqqqqqqqqq', '2019-10-25 17:19:31', 0),
(30, 2, 1, 'qqqqqqqqqqqqqqqqqqqqqqreye', '2019-10-25 17:19:36', 0),
(31, 2, 1, 'qqqqqqqqqqqqqqqqqqqqqqreye', '2019-10-25 17:19:38', 0),
(32, 2, 1, 'qqqqqqqqqqqqqqqqqqqqqqreye', '2019-10-25 17:19:38', 0),
(33, 2, 1, 'qqqqqqqqqqqqqqqqqqqqqqreye', '2019-10-25 17:19:38', 0),
(34, 2, 1, '23', '2019-10-25 17:21:09', 0),
(35, 2, 1, '23', '2019-10-25 17:21:14', 0),
(36, 2, 1, '23', '2019-10-25 17:21:17', 0),
(37, 2, 1, '7', '2019-10-25 17:22:11', 0),
(38, 2, 1, '7', '2019-10-25 17:22:13', 0),
(39, 2, 1, 'wat', '2019-10-25 17:22:22', 0),
(40, 2, 1, 'wat', '2019-10-25 17:22:24', 0),
(41, 2, 1, 'wat', '2019-10-25 17:22:24', 0),
(42, 2, 1, 'wat', '2019-10-25 17:22:24', 0),
(43, 2, 1, 'wat', '2019-10-25 17:22:24', 0),
(44, 2, 1, 'tu', '2019-10-25 17:29:13', 0),
(45, 2, 1, 'u0po', '2019-10-25 17:35:37', 0),
(46, 2, 1, 'u0po', '2019-10-25 17:35:42', 0),
(47, 2, 1, 'u0po', '2019-10-25 17:35:45', 0),
(48, 2, 1, 'u0po', '2019-10-25 17:35:47', 0),
(49, 2, 1, 'u0po', '2019-10-25 17:35:59', 0),
(50, 2, 1, 'u0poktu', '2019-10-25 17:36:11', 0),
(51, 2, 1, '11', '2019-10-25 17:36:24', 0),
(52, 2, 1, 'asf', '2019-10-25 17:37:09', 0),
(53, 2, 1, 'asfsdf', '2019-10-25 17:37:23', 0),
(54, 2, 1, 'lkjhgf', '2019-10-25 17:38:23', 0),
(55, 2, 1, 'lkjhgf', '2019-10-25 17:38:35', 0),
(56, 2, 1, 'jytr', '2019-10-25 17:43:37', 0),
(57, 2, 1, 'jytr', '2019-10-25 17:43:44', 0),
(58, 2, 1, 'adfds', '2019-10-25 17:57:27', 0),
(59, 2, 1, 'rty', '2019-10-26 07:04:19', 0),
(60, 2, 1, 'Chat Application using PHP Ajax Jquery', '2019-10-26 07:04:40', 0),
(61, 3, 1, 'hii', '2019-10-26 07:06:00', 1),
(62, 2, 1, 'jj', '2019-10-26 07:48:42', 0),
(63, 2, 1, '', '2019-10-26 08:50:28', 0),
(64, 2, 1, 'dhd', '2019-10-26 08:55:03', 0),
(65, 2, 1, 'dhdyo', '2019-10-26 08:55:15', 0),
(66, 2, 1, 'rdj', '2019-10-26 08:56:24', 0),
(67, 2, 1, 'rdjfky', '2019-10-26 08:56:35', 0),
(68, 2, 1, 'adgfds', '2019-10-26 08:59:37', 0),
(69, 2, 1, 'd', '2019-10-26 09:02:04', 0),
(70, 2, 1, 'dd', '2019-10-26 09:02:26', 0),
(71, 2, 1, 'sdh', '2019-10-26 09:04:58', 0),
(72, 2, 1, 'fs', '2019-10-26 09:10:54', 0),
(73, 2, 1, 'fs', '2019-10-26 09:10:59', 0),
(74, 2, 1, 'fs', '2019-10-26 09:11:00', 0),
(75, 2, 1, 'fs', '2019-10-26 09:11:00', 0),
(76, 2, 1, 'fs', '2019-10-26 09:11:03', 0),
(77, 2, 1, 'dv', '2019-10-26 09:11:30', 0),
(78, 2, 1, 'sdf', '2019-10-26 09:12:30', 0),
(79, 2, 1, 'ds', '2019-10-26 09:12:50', 0),
(80, 2, 1, 'd', '2019-10-26 09:13:42', 0),
(81, 2, 1, 'sdf', '2019-10-26 09:17:00', 0),
(82, 2, 1, 'sdfg', '2019-10-26 09:18:21', 0),
(83, 2, 1, 'sdfgsg', '2019-10-26 09:18:24', 0),
(84, 2, 1, 'asf', '2019-10-26 09:19:00', 0),
(85, 2, 1, 'asfsf', '2019-10-26 09:19:09', 0),
(86, 2, 1, 'sfg', '2019-10-26 09:19:42', 0),
(87, 2, 1, 'fgd', '2019-10-26 09:20:09', 0),
(88, 2, 1, 'fgddfhf', '2019-10-26 09:20:15', 0),
(89, 2, 1, 'fgddfhf', '2019-10-26 09:20:18', 0),
(90, 2, 1, 'cc', '2019-10-26 09:21:32', 0),
(91, 2, 1, 'ccdd', '2019-10-26 09:21:40', 0),
(92, 2, 1, 'ccddcc', '2019-10-26 09:21:44', 0),
(93, 2, 1, 'dvfsd', '2019-10-26 09:22:13', 0),
(94, 2, 1, 'dfsa', '2019-10-26 09:25:50', 0),
(95, 2, 1, 'dd', '2019-10-26 09:28:39', 0),
(96, 2, 1, 'adfa', '2019-10-26 09:29:20', 0),
(97, 2, 1, 'adfa', '2019-10-26 09:29:28', 0),
(98, 2, 1, 'af', '2019-10-26 09:31:03', 0),
(99, 2, 1, 'afafads', '2019-10-26 09:31:09', 0),
(100, 2, 1, 'sg', '2019-10-26 09:31:20', 0),
(101, 2, 1, '45', '2019-10-26 09:32:40', 0),
(102, 2, 1, 'jhg', '2019-10-26 09:33:25', 0),
(103, 2, 1, '44', '2019-10-26 09:33:55', 0),
(104, 2, 1, 'ih', '2019-10-26 09:34:18', 0),
(105, 2, 1, 'srg', '2019-10-26 09:34:40', 0),
(106, 2, 1, 'srgftj', '2019-10-26 09:34:45', 0),
(107, 2, 1, 'wef', '2019-10-26 10:11:49', 0),
(108, 2, 1, 'wf', '2019-10-26 10:12:14', 0),
(109, 2, 1, 'wfrge', '2019-10-26 10:12:20', 0),
(110, 2, 1, 'wfrge', '2019-10-26 10:12:27', 0),
(111, 2, 1, 'wfrgewg', '2019-10-26 10:12:31', 0),
(112, 2, 1, 'adf', '2019-10-26 10:21:03', 0),
(113, 2, 1, 'sfd', '2019-10-26 10:21:19', 0),
(114, 2, 1, 'sredg', '2019-10-26 10:21:36', 0),
(115, 2, 1, 'sredg', '2019-10-26 10:21:42', 0),
(116, 2, 1, 'sredgDBkjsfhbkjsfhnbv', '2019-10-26 10:21:50', 0),
(117, 3, 1, 'sgs', '2019-10-26 10:27:15', 1),
(118, 3, 1, 'sgs', '2019-10-26 10:27:34', 1),
(119, 3, 1, 'sgs', '2019-10-26 10:27:35', 1),
(120, 3, 1, 'sgs', '2019-10-26 10:27:38', 1),
(121, 2, 1, 'hello', '2019-10-26 11:09:11', 0),
(122, 2, 1, 'hi', '2019-10-26 11:09:25', 0),
(123, 2, 1, 'hey', '2019-10-26 11:10:07', 0),
(124, 1, 2, 'mhhfy😝', '2019-10-26 12:38:10', 0),
(125, 2, 1, 'sfbfbdf', '2019-10-26 12:44:31', 0),
(126, 2, 1, 'sfbfbdf', '2019-10-26 12:44:37', 0),
(127, 2, 1, '', '2019-10-26 12:47:59', 0),
(128, 2, 1, 'sdgsf', '2019-10-26 12:48:10', 0),
(129, 2, 1, '', '2019-10-26 12:48:44', 0),
(130, 2, 1, 'sdfgv', '2019-10-26 12:48:51', 0),
(131, 2, 1, 'gjjg', '2019-10-26 12:54:46', 0),
(132, 2, 1, 'gliu', '2019-10-26 13:59:33', 0),
(133, 2, 1, 'hhil  ', '2019-10-26 13:59:40', 0),
(134, 2, 1, '   joh   kgj  ', '2019-10-26 13:59:47', 0),
(135, 1, 2, '1232', '2019-10-28 04:36:47', 1),
(136, 1, 2, '153', '2019-10-28 04:36:56', 1),
(137, 1, 2, '33', '2019-10-28 04:37:07', 1),
(138, 10, 9, 'lfkjlkdfgjklfjgk', '2019-10-30 05:34:09', 0),
(139, 9, 10, 'jgeslkgjkrg', '2019-10-30 05:34:22', 0),
(140, 10, 9, 'djkjfgbjf', '2019-10-30 05:34:36', 0),
(141, 10, 9, 'jfhgkerjgj', '2019-10-30 05:34:42', 0),
(142, 10, 9, '     vgfg   ', '2019-10-30 05:40:12', 0),
(143, 10, 11, 'hello stya bhai', '2019-11-05 06:28:45', 1),
(144, 10, 11, 'kaise ho', '2019-11-05 06:28:59', 1),
(145, 10, 11, 'mele babu ne thana thaya', '2019-11-05 06:29:11', 1),
(146, 12, 11, 'kaun ho bhaiya', '2019-11-05 06:30:00', 0),
(147, 11, 9, 'aeee mridul', '2019-11-05 06:30:09', 0),
(148, 12, 11, 'aise kaise kahi bhi ghus jaoge kya', '2019-11-05 06:30:11', 0),
(149, 12, 11, 'mtlb kuch privacy hai ki nahi', '2019-11-05 06:30:21', 0),
(150, 11, 12, 'shikari kudi', '2019-11-05 06:30:21', 0),
(151, 11, 12, 'tmhre kyu chunne ladre hai', '2019-11-05 06:30:31', 0),
(152, 12, 11, 'jab dekho muh utha ke aa gye', '2019-11-05 06:30:38', 0),
(153, 11, 9, 'etdfyu', '2019-11-05 06:30:44', 0),
(154, 12, 11, 'chunune hota hai be. ladre nahi. kaat re hota hai', '2019-11-05 06:31:04', 0),
(155, 9, 11, 'mele babu ne thana thaya?', '2019-11-05 06:31:22', 0),
(156, 12, 11, 'abe chup', '2019-11-05 06:31:51', 0),
(157, 11, 12, 'aryy jo bola hai vo suno', '2019-11-05 06:31:54', 0),
(158, 11, 12, 'shut up', '2019-11-05 06:32:13', 0),
(159, 13, 11, 'mere babu ne thana thaya?', '2019-11-05 06:32:20', 0),
(160, 12, 11, 'bola kaha hai be', '2019-11-05 06:33:06', 0),
(161, 12, 11, 'likha hai', '2019-11-05 06:33:11', 0),
(162, 11, 13, 'hello', '2019-11-05 06:34:24', 0),
(163, 11, 13, 'skdgkrsg', '2019-11-05 06:36:30', 0),
(164, 11, 9, ' fghjk', '2019-11-05 06:36:34', 0),
(165, 11, 13, 'ehrgherjgi', '2019-11-05 06:36:50', 0),
(166, 12, 11, 'tu chup', '2019-11-05 06:36:58', 0),
(167, 11, 12, 'kyaa hai bey khuni', '2019-11-05 06:37:01', 0),
(168, 12, 11, 'din hai. andhi hai kaya', '2019-11-05 06:37:42', 0),
(169, 12, 9, 'sdfghj', '2019-11-05 06:38:06', 0),
(170, 9, 11, 'hello', '2019-11-05 06:40:57', 0),
(171, 9, 11, 'hi', '2019-11-05 06:41:02', 0),
(172, 9, 11, 'kya ho raha', '2019-11-05 06:41:11', 0),
(173, 9, 11, 'kya ho raha', '2019-11-05 06:41:17', 0),
(174, 9, 11, 'kyu ho raha', '2019-11-05 06:41:24', 0),
(175, 11, 13, 'jjkklm', '2019-11-05 06:42:10', 0),
(176, 11, 9, 'ayeeeeee.....mridulll', '2019-11-05 07:04:52', 0),
(177, 13, 9, 'hello', '2019-11-05 07:39:50', 0),
(178, 12, 11, 'hi', '2019-11-05 07:40:54', 0),
(179, 9, 11, 'hello', '2019-11-05 07:41:06', 0),
(180, 13, 11, 'hello', '2019-11-05 07:41:13', 0),
(181, 9, 11, 'hi', '2019-11-05 07:58:07', 0),
(182, 13, 11, 'mereko ye sb technilogy likh ke hi ded de', '2019-11-05 07:59:58', 0),
(183, 11, 13, 'okey', '2019-11-05 08:00:14', 0),
(184, 13, 11, 'mai naam to sunn lu kam se  kam', '2019-11-05 08:00:21', 0),
(185, 13, 11, 'okey okey nahi', '2019-11-05 08:00:40', 0),
(186, 13, 11, 'hello', '2019-11-05 08:01:14', 0),
(187, 9, 12, 'hi', '2019-11-05 08:14:46', 0),
(188, 9, 13, 'hello', '2019-11-05 08:14:57', 0),
(189, 9, 11, 'hello', '2019-11-05 08:15:19', 0),
(190, 11, 9, 'sdfv', '2019-12-04 10:36:11', 1),
(191, 11, 9, 'dfuj', '2019-12-04 10:37:15', 1),
(192, 11, 9, 'svfbsidb', '2019-12-04 10:38:40', 1),
(193, 12, 9, 'snglksfn', '2019-12-04 12:05:36', 1),
(194, 14, 9, ':)', '2019-12-04 15:23:49', 0),
(195, 14, 9, ';)', '2019-12-04 15:24:02', 0),
(196, 11, 9, 'hi', '2019-12-04 17:03:33', 1),
(197, 9, 15, 'mera babu kaisa hai?', '2019-12-05 13:56:40', 0),
(198, 15, 9, 'ae mriddddul........', '2019-12-05 13:57:00', 0),
(199, 15, 9, 'heloolkfdl', '2019-12-05 13:57:44', 0),
(200, 15, 9, 'bfghgfhf', '2019-12-05 13:57:55', 0),
(201, 15, 9, 'rtyetdy', '2019-12-05 13:58:07', 0),
(202, 15, 9, 'drbfuftjnfujtb', '2019-12-05 13:58:15', 0),
(203, 9, 17, 'hi', '2019-12-05 13:58:59', 0),
(204, 9, 17, 'this is logan i am new here', '2019-12-05 13:59:26', 0),
(205, 16, 9, 'hello', '2019-12-05 13:59:26', 0),
(206, 17, 15, 'mele babu ne thana khaya?', '2019-12-05 13:59:29', 0),
(207, 15, 17, 'nahi khaya', '2019-12-05 14:00:24', 0),
(208, 17, 9, 'hi sharma ji', '2019-12-05 14:00:40', 0),
(209, 17, 9, 'hi sharma ji', '2019-12-05 14:00:40', 0),
(210, 18, 15, 'aur madam kya haal chal', '2019-12-05 14:00:45', 0),
(211, 18, 15, 'sab bdiya?', '2019-12-05 14:00:50', 0),
(212, 18, 19, 'ooooo', '2019-12-05 14:00:50', 0),
(213, 16, 17, 'its to late we should go home', '2019-12-05 14:00:54', 0),
(214, 18, 19, 'motii', '2019-12-05 14:00:55', 0),
(215, 17, 15, 'thaa lo babu. mutth kaise maroge', '2019-12-05 14:01:20', 0),
(216, 15, 19, 'aae mridul', '2019-12-05 14:01:23', 0),
(217, 19, 15, 'oyeeee chotu', '2019-12-05 14:01:33', 0),
(218, 17, 19, 'abbee', '2019-12-05 14:01:40', 0),
(219, 19, 15, 'ek chai leke aao', '2019-12-05 14:01:41', 0),
(220, 18, 17, 'hi r u here', '2019-12-05 14:01:41', 0),
(221, 19, 17, 'chal be', '2019-12-05 14:01:52', 0),
(222, 19, 15, 'jldi', '2019-12-05 14:02:01', 0),
(223, 15, 19, 'aee chal chall', '2019-12-05 14:02:11', 0),
(224, 15, 19, 'ek garam chai ki pyali ho', '2019-12-05 14:02:23', 0),
(225, 15, 17, 'mujhe gher jana hai', '2019-12-05 14:02:33', 0),
(226, 17, 15, 'itti jldi kya hai mutth marne ki', '2019-12-05 14:02:51', 0),
(227, 15, 18, 'sb bdhiya', '2019-12-05 14:02:55', 0),
(228, 17, 19, 'chalo niklo', '2019-12-05 14:02:57', 0),
(229, 17, 9, 'hello', '2019-12-05 14:03:07', 0),
(230, 19, 15, 'pr tu na agal bgl', '2019-12-05 14:03:25', 0),
(231, 15, 17, 'tum maar khaoge', '2019-12-05 14:03:39', 0),
(232, 9, 17, 'how r u dheeraj', '2019-12-05 14:04:13', 0),
(233, 15, 19, 'hahah', '2019-12-05 14:04:15', 0),
(234, 19, 17, 'nikal l...', '2019-12-05 14:04:53', 0),
(235, 17, 15, 'Lekin tum thana thaa lo babu', '2019-12-05 14:05:01', 0),
(236, 17, 19, 'abbe saale', '2019-12-05 14:05:23', 0),
(237, 19, 15, 'Ek samosa bhi leke ana', '2019-12-05 14:05:27', 0),
(238, 16, 15, 'Aur hero', '2019-12-05 14:05:36', 0),
(239, 15, 19, 'ha leke aa', '2019-12-05 14:05:48', 0),
(240, 18, 15, 'Ek peti bhejo phir', '2019-12-05 14:05:52', 0),
(241, 15, 9, 'gghchj', '2019-12-05 14:06:00', 0),
(242, 16, 15, 'Ohhh dd', '2019-12-05 14:06:10', 0),
(243, 16, 9, 'jnd.gn.fngh', '2019-12-05 14:06:12', 0),
(244, 16, 15, 'Xnnd', '2019-12-05 14:06:13', 0),
(245, 16, 15, 'Bbzbnz', '2019-12-05 14:06:15', 0),
(246, 16, 9, 'fghdhg', '2019-12-05 14:06:16', 0),
(247, 16, 15, 'Hsbssj', '2019-12-05 14:06:17', 0),
(248, 16, 15, 'Sjsjjs', '2019-12-05 14:06:19', 0),
(249, 16, 9, 'dfhsdfh', '2019-12-05 14:06:21', 0),
(250, 16, 15, 'Bjsjjs', '2019-12-05 14:06:21', 0),
(251, 16, 15, 'Jsjsjsj', '2019-12-05 14:06:23', 0),
(252, 16, 15, 'Jsjsjsj', '2019-12-05 14:06:26', 0),
(253, 16, 9, 'dfhbfgh', '2019-12-05 14:06:26', 0),
(254, 16, 17, 'ho gaya na', '2019-12-05 14:06:27', 0),
(255, 16, 15, 'Hsjsjsj', '2019-12-05 14:06:28', 0),
(256, 16, 19, 'ii', '2019-12-05 14:06:30', 0),
(257, 16, 9, 'dfhggfnfgh', '2019-12-05 14:06:30', 0),
(258, 16, 15, 'Jsjjsm', '2019-12-05 14:06:31', 0),
(259, 16, 15, 'Jsjjske', '2019-12-05 14:06:33', 0),
(260, 16, 9, 'fghfhfgn', '2019-12-05 14:06:35', 0),
(261, 9, 15, '7eiekke', '2019-12-05 14:06:39', 0),
(262, 9, 19, 'ii', '2019-12-05 14:06:41', 0),
(263, 9, 19, 'am', '2019-12-05 14:06:45', 0),
(264, 9, 15, 'Jsjskms', '2019-12-05 14:06:45', 0),
(265, 9, 15, 'Hsjsjjs', '2019-12-05 14:06:48', 0),
(266, 9, 19, 'ss', '2019-12-05 14:06:51', 0),
(267, 9, 15, 'Ysujwj', '2019-12-05 14:06:51', 0),
(268, 9, 19, 'ss', '2019-12-05 14:06:54', 0),
(269, 9, 15, 'Jsjjsms', '2019-12-05 14:06:55', 0),
(270, 9, 19, 'ss', '2019-12-05 14:06:58', 0),
(271, 9, 15, 'Nxnnsnms', '2019-12-05 14:06:58', 0),
(272, 19, 18, 'khattri', '2019-12-05 14:07:01', 0),
(273, 9, 19, 'akjsj,s', '2019-12-05 14:07:02', 0),
(274, 19, 9, 'gdtg', '2019-12-05 14:07:13', 0),
(275, 19, 15, 'Chatni pi le phle tu', '2019-12-05 14:07:19', 0),
(276, 18, 19, 'kumari', '2019-12-05 14:07:40', 0),
(277, 15, 17, 'thana kha lo', '2019-12-05 14:07:46', 0),
(278, 15, 19, 'oooooo', '2019-12-05 14:07:54', 0),
(279, 19, 18, 'singh bol de', '2019-12-05 14:07:55', 0),
(280, 18, 19, 'decide kr pehle tu', '2019-12-05 14:08:22', 0),
(281, 19, 15, '🤦🤦🤦', '2019-12-05 14:08:25', 0),
(282, 9, 15, '☺️☺️☺️☺️', '2019-12-05 14:08:39', 0),
(283, 17, 15, '💦💦', '2019-12-05 14:08:56', 0),
(284, 9, 16, '😁', '2019-12-05 14:09:11', 0),
(285, 19, 18, 'singh', '2019-12-05 14:09:22', 0),
(286, 15, 19, '😂😂😂😂', '2019-12-05 14:09:23', 0),
(287, 15, 16, '😎', '2019-12-05 14:09:32', 0),
(288, 16, 15, '😘😘😘', '2019-12-05 14:10:02', 0),
(289, 16, 15, '😘😘😘dfhfd', '2019-12-05 14:10:02', 0),
(290, 17, 18, 'yess i m ', '2019-12-05 14:10:09', 0),
(291, 18, 19, '😁😆', '2019-12-05 14:10:13', 0),
(292, 17, 16, '😀😀😀', '2019-12-05 14:10:16', 0),
(293, 17, 9, 'hgrtlkhg;ersh;oigjers;oighoj', '2019-12-05 14:10:20', 0),
(294, 9, 17, 'xcvbnm,cgvjhbnkml,;xfcgvhbjknlmnh', '2019-12-05 14:10:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `describe` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `image` text COLLATE utf8mb4_bin NOT NULL,
  `confirm` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `topic`, `describe`, `image`, `confirm`, `time`) VALUES
(34, '', 'we', 'cm-main-img.png', 1, '2019-12-11 11:09:12'),
(40, '', 'hello', 'user_big.png', 1, '2019-12-11 11:51:27'),
(41, '', 'afsgdhtfjg', '', 1, '2019-12-11 15:53:21'),
(42, '', 'ey', '', 1, '2019-12-11 15:53:32'),
(43, '', '', '', 1, '2019-12-11 15:53:45'),
(44, '', 's', 'wd-logo.png', 1, '2019-12-11 15:55:12'),
(45, '', '', 'cm-main-img.png', 1, '2019-12-11 15:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `member` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `img` blob,
  `curr_comp` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `curr_loc` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `curr_role` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `skill` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fb` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `linked` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `github` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `name`, `username`, `password`, `email`, `dob`, `gender`, `mobile`, `member`, `img`, `curr_comp`, `curr_loc`, `curr_role`, `skill`, `twitter`, `fb`, `linked`, `github`) VALUES
(9, 'dheraj', 'dheeraj', '$2y$10$JvOv/Yl.3eCdHdMcGtKOIekw1mJ81/dWjeBvfcGsXxHDeTCliUCfm', 'satyaswarup98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '', 'KhooniKhanjar', '$2y$10$QC5FCnqa147ewxlSZhjStOZrmM7yVLbAVPmN2Pe3Xm3O.WwEbI2GW', 'df', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'satya', 'satya098', '$2y$10$4Yrkwk8t6tC6K1fdvOTr3ORCvOXjQXQbvtxJ2Q33500e3IL9sGnU6', 'dfgswarup982@gmail.com', '0000-00-00', 'male', 2147483647, 'alumini', NULL, 'Apple', 'Bangalore', 'Devloper', 'c++, PHP, CSS', 'lkhfuibsbi.husfg', 'satyaswarup98@gmail.com', 'satyaswarup98@gmail.com', 'satyaswarup98@gmail.com'),
(17, '', 'Logan', '$2y$10$ofgsR6fKpFVhV473JulnYuBPF/iPcjDgAi7FD8YYyym5yqEhnfw1a', 'ssumit8195@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '', 'kritisingh', '$2y$10$tN369KCpc.WeA6uIXZ118egOclPXP8Q0a3zd6cP0ua0ESn7LVeDyi', 'erye', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '', 'skhattri', '$2y$10$PXOVGgNArGxx0icXbZ2BqOfHYT6WrReBOzLMKRqyT2Vp4oaHq5M3S', 'wetweg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2019-10-25 05:17:14', 'no'),
(2, 1, '2019-10-25 05:26:48', 'no'),
(3, 1, '2019-10-25 14:43:41', 'no'),
(4, 2, '2019-10-25 05:49:40', 'no'),
(5, 2, '2019-10-25 13:26:39', 'no'),
(6, 2, '2019-10-25 14:55:12', 'no'),
(7, 1, '2019-10-25 14:57:42', 'no'),
(8, 2, '2019-10-25 14:58:04', 'no'),
(9, 2, '2019-10-25 14:58:19', 'no'),
(10, 1, '2019-10-26 05:35:59', 'no'),
(11, 2, '2019-10-25 14:58:25', 'no'),
(12, 2, '2019-10-26 05:39:14', 'no'),
(13, 1, '2019-10-26 06:00:41', 'no'),
(14, 1, '2019-10-26 06:41:43', 'no'),
(15, 1, '2019-10-26 06:57:52', 'no'),
(16, 1, '2019-10-26 07:45:30', 'no'),
(17, 1, '2019-10-26 07:50:04', 'no'),
(18, 1, '2019-10-26 07:56:11', 'no'),
(19, 1, '2019-10-26 07:56:29', 'no'),
(20, 1, '2019-10-26 07:58:24', 'no'),
(21, 2, '2019-10-26 07:59:35', 'no'),
(22, 1, '2019-10-26 07:59:59', 'no'),
(23, 1, '2019-10-26 08:18:02', 'no'),
(24, 1, '2019-10-26 08:38:17', 'no'),
(25, 1, '2019-10-26 08:39:00', 'no'),
(26, 1, '2019-10-26 08:41:42', 'no'),
(27, 1, '2019-10-26 09:43:57', 'no'),
(28, 1, '2019-10-26 10:02:22', 'no'),
(29, 1, '2019-10-26 10:26:44', 'no'),
(30, 1, '2019-10-26 13:07:39', 'yes'),
(31, 2, '2019-10-26 11:24:08', 'no'),
(32, 2, '2019-10-26 14:09:24', 'no'),
(33, 1, '2019-10-26 14:09:18', 'no'),
(34, 2, '2019-10-28 04:39:02', 'no'),
(35, 1, '2019-10-30 05:29:38', 'no'),
(36, 2, '2019-12-03 07:19:00', 'no'),
(37, 9, '2019-10-30 05:50:50', 'no'),
(38, 10, '2019-10-30 05:42:21', 'no'),
(39, 11, '2019-11-05 07:02:09', 'no'),
(40, 9, '2019-11-05 07:19:03', 'no'),
(41, 12, '2019-11-05 06:50:05', 'no'),
(42, 13, '2019-11-05 10:26:37', 'no'),
(43, 12, '2019-11-05 08:21:20', 'no'),
(44, 11, '2019-11-05 07:22:27', 'no'),
(45, 9, '2019-11-05 08:22:32', 'no'),
(46, 11, '2019-11-05 08:16:11', 'no'),
(47, 11, '2019-11-05 08:22:31', 'no'),
(48, 9, '2019-12-04 19:34:50', 'yes'),
(49, 9, '2019-12-04 14:19:12', 'no'),
(50, 9, '2019-12-04 20:23:14', 'no'),
(51, 14, '2019-12-04 20:16:29', 'no'),
(52, 9, '2019-12-04 19:35:19', 'no'),
(53, 9, '2019-12-04 20:26:35', 'no'),
(54, 9, '2019-12-05 06:10:56', 'no'),
(55, 9, '2019-12-05 07:52:50', 'no'),
(56, 9, '2019-12-05 08:51:50', 'no'),
(57, 9, '2019-12-05 10:06:24', 'no'),
(58, 9, '2019-12-05 12:19:09', 'no'),
(59, 9, '2019-12-05 12:23:49', 'no'),
(60, 9, '2019-12-05 14:08:09', 'no'),
(61, 15, '2019-12-05 14:12:21', 'no'),
(62, 9, '2019-12-05 14:12:21', 'no'),
(63, 16, '2019-12-06 10:41:33', 'no'),
(64, 17, '2019-12-05 14:12:21', 'yes'),
(65, 18, '2019-12-05 14:12:04', 'no'),
(66, 19, '2019-12-05 14:10:36', 'no'),
(67, 15, '2019-12-05 14:10:38', 'yes'),
(68, 16, '2019-12-06 14:33:55', 'no'),
(69, 16, '2019-12-06 18:49:08', 'no'),
(70, 16, '2019-12-06 21:27:41', 'no'),
(71, 16, '2019-12-10 12:50:39', 'no'),
(72, 16, '2019-12-11 06:29:10', 'no'),
(73, 16, '2019-12-11 11:20:30', 'no'),
(74, 16, '2019-12-11 15:41:22', 'no'),
(75, 16, '2019-12-20 06:13:34', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(10) NOT NULL,
  `q_title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `q_tag` text COLLATE utf8mb4_bin NOT NULL,
  `q_description` text COLLATE utf8mb4_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_title`, `q_tag`, `q_description`, `time`) VALUES
(66, 'cs', 'html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', '2019-12-05 10:16:21'),
(67, 'mridul', 'cs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', '2019-12-05 10:16:21'),
(68, 'satya', '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at libero elit. Mauris ultrices sed lorem nec efficitur. Donec sit amet facilisis lorem, quis facilisis tellus. Nullam mollis dignissim nisi sit amet tempor. Nullam sollicitudin neque a felis commodo gravida at sed nunc. In justo nunc, sagittis sed venenatis at, dictum vel erat. Curabitur at quam ipsum. Quisque eget nibh aliquet, imperdiet diam pharetra, dapibus lacus. Sed tincidunt sapien in dui imperdiet eleifend. Ut ut sagittis purus, non tristique elit. Quisque tincidunt metus eget ligula sodales luctus. Donec convallis ex at dui convallis malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut pretium euismod mollis. Pellentesque convallis gravida ante eu pretium. Integer rutrum mi nec purus tincidunt, nec rhoncus mauris porttitor. Donec id tellus at leo gravida egestas. Suspendisse consequat mi vel euismod efficitur. Donec sed elementum libero.', '2019-12-05 10:16:21'),
(73, 'how to add data', 'General', 'Hello everybody, how to insert data in the form.', '2019-12-06 10:48:35'),
(89, 'dsfsdg', 'sdfhdf', '1234567', '2019-12-06 11:33:35'),
(90, 'helloo', 'fghdgfhjg', 'sdhjmnbvah', '2019-12-06 13:08:48'),
(91, 'sgs', 'sgs', 'sagasg', '2019-12-06 13:44:12'),
(92, 'final', 'css', 'fin', '2019-12-06 13:59:36'),
(93, 'aetg', 'dfjf', 'thdrt', '2019-12-11 06:28:31'),
(94, 'wd', 'php', 'fgddgh', '2019-12-11 11:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
