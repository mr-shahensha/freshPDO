-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 07:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_cname`
--

CREATE TABLE `main_cname` (
  `sl` int(11) NOT NULL,
  `cn` varchar(50) NOT NULL,
  `cad` varchar(100) NOT NULL,
  `dise_code` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `main_cname`
--

INSERT INTO `main_cname` (`sl`, `cn`, `cad`, `dise_code`) VALUES
(1, 'DEMO', 'Krishnagar, Nadia, State : West Bengal', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_img`
--

CREATE TABLE `main_img` (
  `sl` int(11) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 0,
  `edt` varchar(255) NOT NULL,
  `edtm` varchar(255) NOT NULL,
  `eby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_img`
--

INSERT INTO `main_img` (`sl`, `testid`, `path`, `stat`, `edt`, `edtm`, `eby`) VALUES
(3, '1,13', 'images/test_img/3.jpg', 0, '2024-02-05', '2024-02-05 11:19:47 AM', 'admin'),
(4, '13', 'images/test_img/4.jpg', 0, '2024-02-05', '2024-02-05 11:21:35 AM', 'admin'),
(5, '1', 'images/test_img/5.jpg', 1, '2024-02-05', '2024-02-05 11:22:18 AM', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `main_log`
--

CREATE TABLE `main_log` (
  `sl` double NOT NULL,
  `username` varchar(300) NOT NULL,
  `ip` varchar(300) NOT NULL,
  `intime` varchar(300) NOT NULL,
  `laccessed` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_log`
--

INSERT INTO `main_log` (`sl`, `username`, `ip`, `intime`, `laccessed`) VALUES
(1, 'admin', '192.168.1.177', '2024-02-12 16:04:24 PM', '2024-02-12 16:04:24 PM'),
(2, 'admin', '192.168.1.177', '2024-02-12 16:05:43 PM', '2024-02-12 16:05:43 PM'),
(3, 'user', '192.168.1.177', '2024-02-12 16:07:35 PM', '2024-02-12 16:07:35 PM'),
(4, 'admin', '192.168.1.177', '2024-02-12 16:12:53 PM', '2024-02-12 16:12:53 PM'),
(5, 'admin', '192.168.1.177', '2024-02-13 17:48:53 PM', '2024-02-13 17:48:53 PM'),
(6, 'admin', '192.168.1.177', '2024-02-26 10:12:30 AM', '2024-02-26 10:12:30 AM'),
(7, 'admin', '127.0.0.1', '2024-03-26 10:55:27 AM', '2024-03-26 10:55:27 AM'),
(8, 'admin', '127.0.0.1', '2024-03-26 10:59:19 AM', '2024-03-26 10:59:19 AM'),
(9, 'user', '::1', '2024-03-30 12:30:55 PM', '2024-03-30 12:30:55 PM'),
(10, 'admin', '127.0.0.1', '2024-04-04 10:11:02 AM', '2024-04-04 10:11:02 AM'),
(11, 'admin', '127.0.0.1', '2024-04-05 12:25:43 PM', '2024-04-05 12:25:43 PM'),
(12, 'admin', '127.0.0.1', '2024-04-09 12:20:32 PM', '2024-04-09 12:20:32 PM'),
(13, 'admin', '127.0.0.1', '2024-04-10 12:55:02 PM', '2024-04-10 12:55:02 PM'),
(14, 'admin', '127.0.0.1', '2024-04-24 11:46:36 AM', '2024-04-24 11:46:36 AM'),
(15, 'admin', '127.0.0.1', '2024-04-25 15:50:11 PM', '2024-04-25 15:50:11 PM'),
(16, 'admin', '127.0.0.1', '2024-05-23 10:08:05 AM', '2024-05-23 10:08:05 AM'),
(17, 'admin', '127.0.0.1', '2024-05-23 17:55:49 PM', '2024-05-23 17:55:49 PM'),
(18, 'admin', '127.0.0.1', '2024-05-24 10:29:35 AM', '2024-05-24 10:29:35 AM'),
(19, 'admin', '192.168.1.179', '2024-06-04 10:26:16 AM', '2024-06-04 10:26:16 AM'),
(20, 'admin', '192.168.1.181', '2024-06-04 10:26:16 AM', '2024-06-04 10:26:16 AM'),
(21, 'admin', '127.0.0.1', '2024-06-07 11:10:31 AM', '2024-06-07 11:10:31 AM'),
(22, 'admin', '127.0.0.1', '2024-07-08 15:37:38 PM', '2024-07-08 15:37:38 PM'),
(23, 'admin', '127.0.0.1', '2024-07-09 17:33:54 PM', '2024-07-09 17:33:54 PM'),
(24, 'admin', '127.0.0.1', '2024-07-10 10:17:15 AM', '2024-07-10 10:17:15 AM'),
(25, 'admin', '127.0.0.1', '2024-07-13 12:11:07 PM', '2024-07-13 12:11:07 PM'),
(26, 'admin', '192.168.1.173', '2024-07-17 16:04:39 PM', '2024-07-17 16:04:39 PM'),
(27, 'admin', '127.0.0.1', '2024-07-23 11:37:47 AM', '2024-07-23 11:37:47 AM'),
(28, 'admin', '127.0.0.1', '2024-07-23 11:40:09 AM', '2024-07-23 11:40:09 AM');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `sl` int(11) NOT NULL,
  `mnm` varchar(300) NOT NULL COMMENT 'Menu Name',
  `page` varchar(300) NOT NULL COMMENT 'Page URL',
  `rmsl` int(11) NOT NULL COMMENT 'Root Menu SL',
  `ordr` int(11) NOT NULL COMMENT 'Order',
  `adlvl` varchar(300) NOT NULL COMMENT 'Additional Value',
  `icon` varchar(300) NOT NULL DEFAULT 'fa-edit',
  `user` text NOT NULL,
  `isall` int(11) NOT NULL,
  `stat` int(11) NOT NULL,
  `eby` varchar(300) NOT NULL,
  `edt` date NOT NULL,
  `edtm` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`sl`, `mnm`, `page`, `rmsl`, `ordr`, `adlvl`, `icon`, `user`, `isall`, `stat`, `eby`, `edt`, `edtm`) VALUES
(1, 'Dashboard', 'index.php', 0, 0, '', 'fa-home', '-1,10', 0, 0, 'admin', '2019-06-28', '2019-06-28 08:07:12 AM'),
(2, 'Setup', '#', 0, 1, '', 'fa-globe', '-1', 0, 0, 'admin', '2019-06-28', '2019-06-28 08:07:24 AM'),
(3, 'View', '', 0, 2, '', 'fa-eye', '-1,10', 0, 0, 'admin', '2019-06-28', '2019-06-28 08:08:03 AM'),
(4, 'Config', '#', 0, 10, '', 'fa-cog', '-1', 0, 0, 'admin', '2019-06-28', '2019-06-28 08:08:17 AM'),
(11, 'Test', 'test.php', 2, 1, '', 'fa-edit', '-1', 0, 0, 'admin', '2023-01-06', '2023-01-06 06:14:27 AM'),
(12, 'Menu Setup', 'menu_setup.php', 4, 1, '', 'fa-edit', '-1', 0, 0, 'admin', '2019-06-28', '2019-06-28 08:08:42 AM'),
(168, 'Image Upload', 'imgup.php', 2, 2, '', 'fa-edit', '-1', 0, 0, 'admin', '2024-02-05', '2024-02-05 06:25:42 AM'),
(169, 'Image List', 'imgup_list.php', 3, 1, '', 'fa-edit', '-1,10', 0, 0, 'admin', '2024-02-05', '2024-02-05 11:23:19 AM'),
(170, 'Excel Export', 'excelexpt.php', 3, 10, '', 'fa-edit', '-1', 0, 0, 'admin', '2024-02-06', '2024-02-06 05:29:50 AM'),
(171, 'Chosen Single', 'chosengl.php', 3, 3, '', 'fa-edit', '-1,10', 0, 0, 'admin', '2024-02-06', '2024-02-06 05:38:58 AM'),
(172, 'Modal', 'modal.php', 3, 4, '', 'fa-edit', '-1', 0, 0, 'admin', '2024-02-06', '2024-02-06 13:02:31 PM');

-- --------------------------------------------------------

--
-- Table structure for table `main_signup`
--

CREATE TABLE `main_signup` (
  `sl` double NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `pass` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `fnm` varchar(333) NOT NULL,
  `lnm` varchar(333) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `mailadres` varchar(100) DEFAULT NULL,
  `state` varchar(33) NOT NULL,
  `actnum` int(11) NOT NULL DEFAULT 0,
  `userlevel` tinyint(4) DEFAULT NULL,
  `signupdate` varchar(100) DEFAULT NULL,
  `lastlogin` varchar(100) DEFAULT NULL,
  `ip` varchar(100) NOT NULL,
  `lastloginfail` varchar(20) DEFAULT NULL,
  `numloginfail` varchar(4) DEFAULT '0',
  `stat` int(11) NOT NULL,
  `otp` varchar(333) NOT NULL,
  `sms` int(11) NOT NULL DEFAULT 0,
  `eby` varchar(300) NOT NULL,
  `edt` date NOT NULL,
  `edtm` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `main_signup`
--

INSERT INTO `main_signup` (`sl`, `username`, `password`, `pass`, `name`, `fnm`, `lnm`, `mob`, `mailadres`, `state`, `actnum`, `userlevel`, `signupdate`, `lastlogin`, `ip`, `lastloginfail`, `numloginfail`, `stat`, `otp`, `sms`, `eby`, `edt`, `edtm`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Administrator', '', '1234567890', 'test@ons.com', '', 0, -1, NULL, '2024-07-23 11:40:09 AM', '103.86.23.37', '2024-02-12 16:06:12 ', '0', 0, '', 1, 'admin', '2019-06-20', '2019-06-20 09:33:47 AM'),
(285, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Demo User', 'Demo', '', '1234567890', 'test@ons.com', '', 0, 10, NULL, '2024-03-30 12:30:55 PM', '103.86.23.37', '', '0', 0, '', 1, 'admin', '2019-06-20', '2019-06-20 09:33:47 AM');

-- --------------------------------------------------------

--
-- Table structure for table `main_test`
--

CREATE TABLE `main_test` (
  `sl` int(11) NOT NULL,
  `ttl` varchar(333) NOT NULL,
  `edt` date NOT NULL,
  `edtm` varchar(300) NOT NULL,
  `eby` varchar(300) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_test`
--

INSERT INTO `main_test` (`sl`, `ttl`, `edt`, `edtm`, `eby`, `stat`) VALUES
(1, 'TEST 1', '2024-02-06', '2024-02-06 12:49:35 PM', 'admin', 1),
(2, 'TEST 2', '2022-03-01', '2022-03-01 12:16:02 PM', 'admin', 0),
(3, 'TEST 3', '2023-01-06', '2023-01-06 13:40:59 PM', 'admin', 0),
(4, 'TEST 4', '2024-06-04', '2024-06-04 10:31:48 AM', 'admin', 0),
(5, 'dfgd', '0000-00-00', '', '', 0),
(7, 'xjdbcsdkfjd', '2024-06-04', '2024-06-04 10:52:20 AM', 'admin', 0),
(8, 'demos', '2024-06-04', '2024-06-04 13:15:51 PM', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_user_typ`
--

CREATE TABLE `main_user_typ` (
  `sl` int(11) NOT NULL,
  `typ` varchar(333) NOT NULL,
  `lvl` varchar(333) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_user_typ`
--

INSERT INTO `main_user_typ` (`sl`, `typ`, `lvl`, `stat`) VALUES
(-1, 'admin', '-1', 0),
(1, 'User', '10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_cname`
--
ALTER TABLE `main_cname`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_img`
--
ALTER TABLE `main_img`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_log`
--
ALTER TABLE `main_log`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_signup`
--
ALTER TABLE `main_signup`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_test`
--
ALTER TABLE `main_test`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `main_user_typ`
--
ALTER TABLE `main_user_typ`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_cname`
--
ALTER TABLE `main_cname`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_img`
--
ALTER TABLE `main_img`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_log`
--
ALTER TABLE `main_log`
  MODIFY `sl` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `main_signup`
--
ALTER TABLE `main_signup`
  MODIFY `sl` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `main_test`
--
ALTER TABLE `main_test`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_user_typ`
--
ALTER TABLE `main_user_typ`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
