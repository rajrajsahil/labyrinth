-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 01:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labyrinth`
--

-- --------------------------------------------------------

--
-- Table structure for table `level_answer`
--

CREATE TABLE `level_answer` (
  `levelname` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_answer`
--

INSERT INTO `level_answer` (`levelname`, `level`, `answer`) VALUES
('meetAgain', 1, '3idiots'),
('SoniaLily', 2, 'duplicate'),
('map', 3, 'naksha'),
('4G', 4, 'mukeshambani'),
('amirkhan', 5, 'rangdebasanti'),
('power', 6, 'successful'),
('song', 7, 'suroor'),
('release', 8, '1966'),
('sponsor', 9, 'kaspersky'),
('days', 10, '10din'),
('oldisgold', 11, '2037'),
('movie', 12, 'baarbaardekho'),
('bb', 13, 'amitabhbachchan'),
('av', 14, 'amanverma'),
('incomplete', 15, 'successful'),
('robbery', 16, 'mumbai'),
('khan', 17, 'zindagi'),
('card', 18, 'sattepesatta'),
('orphan', 19, 'shekharkapur'),
('akshaykr', 20, 'khiladi420');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `username` varchar(20) NOT NULL,
  `regtime` int(15) NOT NULL,
  `level` int(5) NOT NULL DEFAULT '1',
  `current` int(15) NOT NULL,
  `level1` int(15) DEFAULT NULL,
  `level2` int(15) DEFAULT NULL,
  `level3` int(15) DEFAULT NULL,
  `level4` int(15) DEFAULT NULL,
  `level5` int(15) DEFAULT NULL,
  `level6` int(15) DEFAULT NULL,
  `level7` int(15) DEFAULT NULL,
  `level8` int(15) DEFAULT NULL,
  `level9` int(15) DEFAULT NULL,
  `level10` int(15) DEFAULT NULL,
  `level11` int(15) DEFAULT NULL,
  `level12` int(15) DEFAULT NULL,
  `level13` int(15) DEFAULT NULL,
  `level14` int(15) DEFAULT NULL,
  `level15` int(15) DEFAULT NULL,
  `level16` int(15) DEFAULT NULL,
  `level17` int(15) DEFAULT NULL,
  `level18` int(15) DEFAULT NULL,
  `level19` int(15) DEFAULT NULL,
  `level20` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`username`, `regtime`, `level`, `current`, `level1`, `level2`, `level3`, `level4`, `level5`, `level6`, `level7`, `level8`, `level9`, `level10`, `level11`, `level12`, `level13`, `level14`, `level15`, `level16`, `level17`, `level18`, `level19`, `level20`) VALUES
('shubham', 1484311479, 1, 1484311479, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `level` int(10) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level_answer`
--
ALTER TABLE `level_answer`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
