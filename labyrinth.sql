-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:80
-- Generation Time: Oct 27, 2016 at 02:31 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
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
-- Table structure for table `aa`
--

CREATE TABLE `aa` (
  `id` int( 10 ) NOT NULL,
  `level1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`id`, `level1`, `level2`) VALUES
(1, '2016-10-01 18:30:00.000000', '2016-10-02 18:30:00.000000'),
(1, '2016-10-01 18:30:00.000000', '2016-10-02 18:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `username`, `password`, `email`) VALUES
(1, 'sahi', 'kumar', 'raj@gmail'),
(2, 'sahi', 'raj', 'raj@gmail');

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
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `level` int(10) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q`
--

INSERT INTO `q` (`level`, `answer`) VALUES
(1, '1'),
(2, '1'),
(1, '1'),
(2, '1');

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
('esha', 1477484440, 21, 1477557159, 1477494702, 1477554923, 1477555228, 1477555345, 1477555444, 1477555547, 1477555628, 1477555711, 1477555795, 1477555883, 1477556009, 1477556320, 1477556327, 1477556334, 1477556343, 1477556759, 1477556762, 1477556767, 1477556773, 1477557159),
('harsh', 1477558701, 3, 1477558713, 1477558708, 1477558713, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('qwertyu12345', 1477485758, 1, 1477485758, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('raj_sahil', 1477485915, 2, 1477557727, 1477557727, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('rohit', 1477558614, 1, 1477558614, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sagar', 1477484530, 2, 1477484577, 1477484577, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sahil', 1477484302, 3, 1477484973, 1477484965, 1477484973, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sahilraj', 1477485613, 5, 1477557994, 1477486559, 1477557982, 1477557991, 1477557994, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shubhum', 1477484402, 1, 1477484402, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(34, 'esha', 'esha', 'esha@gmail.com', 9874561239, 21, 1),
(42, 'harsh', 'qwerty', 'ujjwalmadanraj@gmail.com', 9638527411, 3, 1),
(39, 'qwertyu12345', 'qwerty', 'rajsahil281@gmail.com', 9932508185, 1, 1),
(40, 'raj_sahil', 'qwerty', 'rajsahil281@gmail.com', 9638527411, 2, 1),
(41, 'rohit', 'qwerty', 'rajsahil281@gmail.com', 9963251445, 1, 1),
(35, 'sagar', 'sagar', 'sagar@gmail.com', 3216457896, 2, 1),
(32, 'sahil', 'sahil', 'rajsahil281@gmail.com', 9932508185, 3, 1),
(38, 'sahilraj', 'qwerty', 'rajsahil281@gmail.com', 999987456, 5, 1),
(33, 'shubhum', 'shubhum', 'shubhum@gmail.com', 9932508185, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
