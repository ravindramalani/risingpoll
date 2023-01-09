-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eniacworld_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice_tbl`
--

CREATE TABLE `choice_tbl` (
  `id` int(11) NOT NULL,
  `poll_title_id` int(11) NOT NULL,
  `choice` varchar(20) COLLATE utf8_bin NOT NULL,
  `img` varchar(150) COLLATE utf8_bin NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `choice_tbl`
--

INSERT INTO `choice_tbl` (`id`, `poll_title_id`, `choice`, `img`, `score`) VALUES
(1, 0, 'good bye', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_text_tbl`
--

CREATE TABLE `dynamic_text_tbl` (
  `id` int(11) NOT NULL,
  `text` varchar(150) NOT NULL,
  `voting_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_text_tbl`
--

INSERT INTO `dynamic_text_tbl` (`id`, `text`, `voting_id`) VALUES
(1, 'voting for. qwerty acffds', 0),
(0, 'qwe', 175),
(0, 'shagun', 177);

-- --------------------------------------------------------

--
-- Table structure for table `ip_address_tbl`
--

CREATE TABLE `ip_address_tbl` (
  `id` int(11) NOT NULL,
  `ip_address` text COLLATE utf8_bin NOT NULL,
  `poll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ip_address_tbl`
--

INSERT INTO `ip_address_tbl` (`id`, `ip_address`, `poll_id`) VALUES
(6, '::1', 68),
(7, '::1', 69),
(8, '::1', 67),
(9, '::1', 70),
(12, '::1', 71),
(13, '::1', 72),
(14, '::1', 73),
(15, '::1', 74),
(16, '::1', 76),
(17, '::1', 80),
(18, '::1', 81),
(19, '::1', 85),
(20, '::1', 86),
(21, '::1', 89),
(23, '::1', 92),
(24, '::1', 93),
(25, '::1', 94),
(26, '::1', 95),
(31, '::1', 91),
(34, '::1', 96),
(35, '::1', 99),
(38, '::1', 100),
(39, '::1', 112),
(40, '::1', 97),
(41, '::1', 120),
(42, '::1', 121),
(43, '192.168.0.9', 122),
(44, '192.168.0.9', 96),
(45, '192.168.0.8', 96),
(46, '192.168.0.8', 100),
(47, '192.168.0.8', 123),
(48, '192.168.0.9', 123),
(49, '192.168.0.9', 124),
(50, '::1', 125),
(51, '::1', 127),
(52, '', 128),
(53, '', 128),
(54, '', 128),
(55, '', 128),
(56, '', 128),
(57, '', 128),
(58, '', 128),
(59, '0', 128),
(60, '0', 128),
(61, '0', 129),
(62, '0', 129),
(63, '0', 129),
(64, '0', 129),
(65, '0', 129),
(66, '0', 129),
(67, '0', 129),
(68, '::1', 130),
(69, '0', 129),
(70, '0', 129),
(71, '0', 129),
(72, '0', 129),
(73, '0', 129),
(74, '0', 129),
(75, '0', 129),
(76, '0', 129),
(77, '0', 129),
(78, '0', 135),
(79, '0', 136),
(80, '0', 136),
(81, '0', 136),
(82, '::1', 137),
(83, '0', 141),
(84, '0', 141),
(85, '0', 136),
(86, '0', 142),
(87, '0', 142),
(88, '0', 142),
(89, '0', 142),
(90, '0', 142),
(91, '0', 142),
(92, '0', 142),
(93, '0', 142),
(94, '0', 142),
(95, '0', 142),
(96, '0', 142),
(97, '0', 142),
(98, '0', 143),
(99, '0', 143),
(100, '0', 143),
(101, '0', 143),
(102, '0', 145),
(103, '0', 145),
(104, '0', 145),
(105, '0', 145),
(106, '0', 145),
(107, '0', 145),
(108, '0', 145),
(109, '0', 145),
(110, '0', 145),
(111, '0', 145),
(112, '0', 145),
(113, '0', 145),
(114, '0', 145),
(115, '0', 145),
(116, '0', 145),
(117, '0', 145),
(118, '0', 145),
(119, '0', 145),
(120, '0', 144),
(121, '0', 144),
(122, '0', 145),
(123, '0', 145),
(124, '0', 145),
(125, '0', 145),
(126, '0', 145),
(127, '0', 146),
(128, '0', 147),
(129, '0', 150),
(130, '::1', 152),
(131, '0', 167),
(132, '0', 167),
(133, '0', 167),
(134, '0', 167),
(135, '0', 145),
(136, '0', 169),
(137, '0', 145),
(138, '0', 168),
(139, '0', 170),
(140, '0', 143);

-- --------------------------------------------------------

--
-- Table structure for table `poll_tbl`
--

CREATE TABLE `poll_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(50) COLLATE utf8_bin NOT NULL,
  `choice_1` varchar(20) COLLATE utf8_bin NOT NULL,
  `choice_2` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `poll_tbl`
--

INSERT INTO `poll_tbl` (`id`, `title`, `description`, `choice_1`, `choice_2`) VALUES
(1, 'hello', 'byr bye', 'qw', '0'),
(2, 'hello', 'byr bye', 'qw', '0'),
(3, 'hello', 'byr bye', 'qw', '0'),
(4, 'hello', 'byr bye', 'qqw', '0'),
(5, 'hello', 'byr bye', 'qqw', '0'),
(6, 'hello', 'byr bye', 'shagun', 'mittal');

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `email` varchar(25) COLLATE utf16_bin NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(15) COLLATE utf16_bin NOT NULL,
  `login_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`id`, `full_name`, `email`, `mobile`, `password`, `login_status`) VALUES
(1, 'shagun mittal', 'shagun@gmail.com', 2147483647, 'qwerty', 0),
(2, 'suresh', 'suresh@gmail.com', 1471234560, 'qwerty', 1),
(3, 'vikram', 'vikram@gmail.com', 2147483647, 'qwerty', 1),
(4, 'yash', 'yash@gmail.com', 2147483647, 'qw', 1),
(5, 'shagun mittal', 'shagun12@gmail.com', 2147483647, 'qwerty', 0);

-- --------------------------------------------------------

--
-- Table structure for table `removing_words_tbl`
--

CREATE TABLE `removing_words_tbl` (
  `id` int(11) NOT NULL,
  `words` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `removing_words_tbl`
--

INSERT INTO `removing_words_tbl` (`id`, `words`) VALUES
(6, 'नमस्ते'),
(7, 'oyo'),
(9, 'ullu'),
(10, 'dog'),
(11, 'cat'),
(12, 'salman'),
(16, 'hg');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting_tbl`
--

CREATE TABLE `site_setting_tbl` (
  `id` int(11) NOT NULL,
  `logo` varchar(150) COLLATE utf16_bin NOT NULL,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `title` varchar(100) COLLATE utf16_bin NOT NULL,
  `address` varchar(150) COLLATE utf16_bin NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `email` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `site_setting_tbl`
--

INSERT INTO `site_setting_tbl` (`id`, `logo`, `name`, `title`, `address`, `mobile_number`, `email`) VALUES
(16, '94b72424e13f02d89316d6b23bf3b7c7.jpg', 'suraj raj pal', 'qw', 'flat A-403 unnati residence sector-1 near shree agarwal caters vidhyadhar nagar jaipur', 2147483647, 'mshagun77@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `social_link_tbl`
--

CREATE TABLE `social_link_tbl` (
  `id` int(11) NOT NULL,
  `social_logo` varchar(150) COLLATE utf16_bin NOT NULL,
  `social_name` varchar(100) COLLATE utf16_bin NOT NULL,
  `social_link` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `social_link_tbl`
--

INSERT INTO `social_link_tbl` (`id`, `social_logo`, `social_name`, `social_link`) VALUES
(9, 'c6b083cedfec3b52425cc891fadb9785.jpg', 'telegram', 'www.telegram.com'),
(11, 'c8b368c2f359964273475bb3b1cb53c2.jpg', 'telegram', 'www.telegram.com');

-- --------------------------------------------------------

--
-- Table structure for table `sorting_date_tbl`
--

CREATE TABLE `sorting_date_tbl` (
  `id` int(11) NOT NULL,
  `sorting_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sorting_date_tbl`
--

INSERT INTO `sorting_date_tbl` (`id`, `sorting_date`) VALUES
(1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `test_tbl`
--

CREATE TABLE `test_tbl` (
  `id` int(11) NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL,
  `voter_count` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `voting_restriction` int(11) NOT NULL,
  `required_name` int(11) NOT NULL,
  `private_vote` int(11) NOT NULL,
  `voter_name` text COLLATE utf8_bin DEFAULT NULL,
  `img_count` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `test_tbl`
--

INSERT INTO `test_tbl` (`id`, `data`, `voter_count`, `date`, `voting_restriction`, `required_name`, `private_vote`, `voter_name`, `img_count`, `user_id`, `end_date`) VALUES
(132, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"good\",\"score\":0}}', 0, '2022-12-03', 0, 0, 0, '', 0, 0, NULL),
(133, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-03', 0, 0, 0, '', 0, 0, NULL),
(134, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-03', 0, 1, 0, '', 0, 0, NULL),
(135, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":0}}', 1, '2022-12-03', 0, 1, 0, '', 0, 0, NULL),
(136, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":3},\"op2\":{\"title\":\"good\",\"score\":1}}', 4, '2022-12-03', 0, 1, 0, '\"{\"qwe\":\"2\"}{\"shagun\":\"1\"}{\"shagun\":\"1\"}\"', 0, 0, NULL),
(137, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":0}}', 1, '2022-12-03', 1, 1, 0, '{\"shagun\":\"1\"}', 0, 0, NULL),
(138, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"shagun\",\"score\":0}}', 0, '2022-12-03', 0, 0, 0, '', 0, 0, NULL),
(139, '{\"title\":\"asd\",\"op1\":{\"title\":\"sad\",\"score\":0}}', 0, '2022-12-03', 0, 0, 0, '', 0, 0, NULL),
(140, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":0}}', 0, '2022-12-03', 0, 0, 0, '', 0, 0, NULL),
(141, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":1}}', 2, '2022-12-03', 0, 0, 0, '{\"anymous\":\"1\"}{\"anymous\":\"2\"}', 0, 0, NULL),
(142, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":8},\"op2\":{\"title\":\"good\",\"score\":4}}', 12, '2022-12-03', 0, 0, 0, '\"\"Array{\"anymous\":\"1\"}\"{\"anymous\":\"2\"}\"', 0, 0, NULL),
(143, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":3},\"op2\":{\"title\":\"good\",\"score\":2}}', 5, '2022-12-03', 0, 0, 0, '[null,{\"anymous\":\"1\"}]', 0, 0, NULL),
(144, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":1}}', 2, '2022-12-03', 0, 0, 0, '[\"shagun\":\"1\",{\"anymous\":\"2\"}]', 0, 0, NULL),
(145, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":16},\"op2\":{\"title\":\"good\",\"score\":9}}', 25, '2022-12-05', 0, 1, 0, '[[[{\"qwerty\":\"2\"},{\"shagun\":\"1\"}],{\"pio\":\"1\"}],{\"qwe\":\"2\"}]', 0, 0, NULL),
(146, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":0}}', 1, '2022-12-09', 0, 0, 0, '{\"anymous\":\"1\"}', 0, 0, NULL),
(147, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"a\",\"score\":1},\"op2\":{\"title\":\"b\",\"score\":0}}', 1, '2022-12-09', 0, 0, 0, '{\"anymous\":\"1\"}', 0, 0, NULL),
(148, '{\"title\":\"how are you\",\"op1\":{\"title\":\"aS\",\"score\":0},\"op2\":{\"title\":\"DSAAD\",\"score\":0}}', 0, '2022-12-26', 0, 0, 0, NULL, 0, 0, NULL),
(149, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-26', 1, 1, 0, NULL, 0, 0, NULL),
(150, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"good\",\"score\":1}}', 1, '2022-12-26', 0, 0, 0, '{\"anymous\":\"2\"}', 0, 0, NULL),
(151, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-26', 0, 0, 0, NULL, 0, 0, NULL),
(152, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":1},\"op2\":{\"title\":\"good\",\"score\":0}}', 1, '2022-12-27', 1, 0, 0, '{\"anymous\":\"1\"}', 0, 0, NULL),
(153, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-27', 0, 1, 0, NULL, 0, 0, NULL),
(154, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(155, '{\"title\":\"how are you\",\"title_img\":\"70c3e45adaed10c05157a7e78720be83.jpg\"}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(156, '{\"title\":\"how are you\",\"title_img\":\"7b0b41bd7109822c6f6c0e7f65d91298.jpg\"}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(157, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"title_img\":\"c5e53128caff95cd92723c284d14ec87.jpg\",\"img1\":{\"img\":\"0b81edffd479af60d673393cc8475762.jpg\"},\"img2\":{\"img\":\"e287a3052f14a11c1e6e4a73f6d791cd.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(158, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"op3\":{\"title\":null,\"score\":0},\"title_img\":\"2daf6b259b17d66c75a0a0484307d112.jpg\",\"img1\":{\"img\":\"621b85e44bfe4c61d5dd3bd3d06717b8.jpg\"},\"img2\":{\"img\":\"762af52e72013f2a04fa91beeb8df71a.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(159, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"op3\":{\"title\":null,\"score\":0},\"title_img\":\"9496bc5b9fd4642220b0db18a08ede26.jpg\",\"img1\":{\"img\":\"2424dca604bb07b798d95e1c1d476bfc.jpg\"},\"img2\":{\"img\":\"2978afc7d5c5c27dac825c81e083b1df.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(160, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"good\",\"score\":0},\"op3\":{\"title\":null,\"score\":0},\"title_img\":\"52122d82bffdf6e2f17e4e05c9ec0947.jpg\",\"img1\":{\"img\":\"8ffc4753c883dd1258f47bc1b8a3df0a.jpg\"},\"img2\":{\"img\":\"8d74bd85a403e9cf91f3dd3e647de790.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(161, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"op3\":{\"title\":null,\"score\":0},\"title_img\":\"bb404c73fc44e59348b2ec42451d62df.jpg\",\"img1\":{\"img\":\"3bb657c170ad781996c684ee3bec93a9.jpg\"},\"img2\":{\"img\":\"17ba0a0d194a6c6d9910eb3d64a26622.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(162, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"title_img\":\"3da6d5ed03f732493c1dc2798559c984.jpg\",\"img1\":{\"img\":\"6845637f6440cfc956443e38e3eb5dc2.jpg\"},\"img2\":{\"img\":\"b1231dd85849ad3df2138e201ca6df51.jpg\"}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(163, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(164, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"title_img\":\"71d7950df72e956134502a034ddabb59.jpg\"}', 0, '2022-12-27', 0, 0, 0, NULL, 1, 0, NULL),
(165, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-27', 0, 0, 0, NULL, 0, 0, NULL),
(166, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"title_img\":\"144fcaf363e22fef13bb491a82bf0bae.jpg\",\"img2\":{\"img\":\"fe56224cadff884b94be3457db28fb05.jpg\"}}', 0, '2022-12-28', 0, 0, 0, NULL, 2, 0, NULL),
(167, '{\"title\":\"how are you\",\"op1\":{\"title\":\"nice\",\"score\":2},\"op2\":{\"title\":\"bad\",\"score\":1},\"op3\":{\"title\":\"not good\",\"score\":1},\"title_img\":\"ab6ff8f51a20c135fd47b5de1c30708f.jpg\",\"img1\":{\"img\":\"5c3979037b4851fdec055289cb651d2e.jpg\"},\"img2\":{\"img\":\"fbc7052044927024fdf66bab48fa8a6c.jpg\"},\"img3\":{\"img\":\"072eeab5525aa4215785d9e436e4ce77.jpg\"}}', 4, '2022-12-28', 0, 0, 0, '[[[{\"anymous\":\"1\"},{\"anymous\":\"3\"}],{\"anymous\":\"1\"}],{\"anymous\":\"2\"}]', 4, 0, NULL),
(168, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"op3\":{\"title\":\"c\",\"score\":1}}', 1, '2022-12-29', 0, 0, 0, '{\"anymous\":\"3\"}', 0, 2, NULL),
(169, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0},\"op3\":{\"title\":\"c\",\"score\":0},\"op4\":{\"title\":\"d\",\"score\":1},\"title_img\":\"f0c38585bc6732a784124c63707e3036.jpg\",\"img1\":{\"img\":\"9867979ac85bc43cea501dacc88681ea.jpg\"},\"img2\":{\"img\":\"ef90cda2bfb25852327824ac35da1ff2.jpg\"},\"img3\":{\"img\":\"bbbec38b43e6f6df1ddf06d5aed3944c.jpg\"},\"img4\":{\"img\":\"47e0fd774ff0f36158d3109bdcb7c0fa.png\"}}', 1, '2022-12-30', 0, 0, 0, '{\"anymous\":\"4\"}', 5, 0, NULL),
(170, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":1}}', 1, '2022-12-30', 0, 1, 1, '{\"qwe\":\"2\"}', 0, 0, NULL),
(171, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, NULL),
(172, '{\"title\":\"who is favroite character in cartoon\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"this feild is mendaroty\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, NULL),
(173, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(174, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(175, '{\"title\":\"how are you\"}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '2022-12-31'),
(176, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(177, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(178, '{\"title\":\"how are you\",\"op1\":{\"title\":\"a\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(179, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(180, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(181, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00'),
(182, '{\"title\":\"how are you\",\"op1\":{\"title\":\"sad\",\"score\":0},\"op2\":{\"title\":\"b\",\"score\":0}}', 0, '2022-12-30', 0, 0, 0, NULL, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `title_tbl`
--

CREATE TABLE `title_tbl` (
  `id` int(11) NOT NULL,
  `poll_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `title_img` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `title_tbl`
--

INSERT INTO `title_tbl` (`id`, `poll_title`, `title_img`) VALUES
(1, 'hrllo', ''),
(2, 'hrllo', '');

-- --------------------------------------------------------

--
-- Table structure for table `voting_restrictions_tbl`
--

CREATE TABLE `voting_restrictions_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_restrictions_tbl`
--

INSERT INTO `voting_restrictions_tbl` (`id`, `name`) VALUES
(0, 'Unlimited votes per user'),
(1, 'One vote per IP address'),
(2, 'One vote per user account'),
(3, 'One vote per voting token'),
(4, 'One vote per browser session');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice_tbl`
--
ALTER TABLE `choice_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_address_tbl`
--
ALTER TABLE `ip_address_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_tbl`
--
ALTER TABLE `poll_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `removing_words_tbl`
--
ALTER TABLE `removing_words_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting_tbl`
--
ALTER TABLE `site_setting_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link_tbl`
--
ALTER TABLE `social_link_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_tbl`
--
ALTER TABLE `test_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_tbl`
--
ALTER TABLE `title_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting_restrictions_tbl`
--
ALTER TABLE `voting_restrictions_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice_tbl`
--
ALTER TABLE `choice_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_address_tbl`
--
ALTER TABLE `ip_address_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `poll_tbl`
--
ALTER TABLE `poll_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `removing_words_tbl`
--
ALTER TABLE `removing_words_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `site_setting_tbl`
--
ALTER TABLE `site_setting_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `social_link_tbl`
--
ALTER TABLE `social_link_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test_tbl`
--
ALTER TABLE `test_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `title_tbl`
--
ALTER TABLE `title_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voting_restrictions_tbl`
--
ALTER TABLE `voting_restrictions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
