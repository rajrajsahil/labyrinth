-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:80
-- Generation Time: Nov 01, 2016 at 03:38 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

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
  `level` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_answer`
--

INSERT INTO `level_answer` (`level`, `answer`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20');

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
('harsh', 1477994505, 1, 1477994505, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('harshit', 1477929334, 21, 1477941765, 1477929431, 1477940295, 1477941641, 1477941648, 1477941654, 1477941662, 1477941669, 1477941676, 1477941684, 1477941689, 1477941695, 1477941708, 1477941713, 1477941718, 1477941725, 1477941747, 1477941751, 1477941755, 1477941759, 1477941765),
('hbajaj', 1477929606, 10, 1477989043, 1477938210, 1477938219, 1477941876, 1477941885, 1477941893, 1477941916, 1477943376, 1477943850, 1477989043, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('rkumar', 1477929490, 3, 1477944215, 1477944183, 1477944215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sahi', 1477989146, 1, 1477989146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `password`, `email`, `contact`, `level`, `status`) VALUES
(56, 'harsh', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'harsh@gmail.com', 9932147852, 1, 1),
(48, 'harshit', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'harshit@gmail.com', 9932508186, 21, 1),
(50, 'hbajaj', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'rajsahil281@gmail.comadas', 9932574185, 10, 1),
(49, 'rkumar', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'rohit@gmail.com', 9878741321, 3, 1),
(51, 'sahi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sahil@gmail.com', 9932508185, 1, 1);

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
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
