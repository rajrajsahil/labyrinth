-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 11:39 AM
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
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_answer`
--

INSERT INTO `level_answer` (`levelname`, `level`, `answer`) VALUES
('level1', 1, '1'),
('level2', 2, '2'),
('level3', 3, '3'),
('level4', 4, '4'),
('level5', 5, '5'),
('level6', 6, '6'),
('level7', 7, '7'),
('level8', 8, '8'),
('level9', 9, '9'),
('level10', 10, '10'),
('level11', 11, '11'),
('level12', 12, '12'),
('level13', 13, '13'),
('level14', 14, '14'),
('level15', 15, '15'),
('level16', 16, '16'),
('level17', 17, '17'),
('level18', 18, '18'),
('level19', 19, '19'),
('level20', 20, '20');

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
('', 1477739804, 1, 1477739804, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('anurag', 1478006024, 3, 1478008621, 1478007717, 1478008621, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('arit', 1478007162, 5, 1478255648, 1478255264, 1478255443, 1478255641, 1478255648, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('arpan', 1478248742, 1, 1478248742, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ashwini', 1478248798, 1, 1478248798, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('bajab', 1477728767, 1, 1477728767, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('bansal', 1477988152, 3, 1477988192, 1477988164, 1477988192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('bukya', 1478252487, 4, 1478253513, 1478253513, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('esestwe1', 1477750886, 1, 1477750886, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('esha', 1477484440, 21, 1477557159, 1477494702, 1477554923, 1477555228, 1477555345, 1477555444, 1477555547, 1477555628, 1477555711, 1477555795, 1477555883, 1477556009, 1477556320, 1477556327, 1477556334, 1477556343, 1477556759, 1477556762, 1477556767, 1477556773, 1477557159),
('fast', 1477729534, 1, 1477729534, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('gulu', 1478251793, 1, 1478251793, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('guna', 1478251839, 1, 1478251839, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('guru', 1478251232, 1, 1478251232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('gvhgvhh', 1477742762, 1, 1477742762, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('harsh', 1477558701, 10, 1477741781, 1477558708, 1477558713, 1477649386, 1477649406, 1477649417, 1477651009, 1477651016, 1477740329, 1477741781, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('kumar', 1477741848, 1, 1477741848, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('patil', 1477944352, 21, 1477985984, 1477944435, 1477944445, 1477944485, 1477944501, 1477944907, 1477985850, 1477985857, 1477985863, 1477985869, 1477985912, 1477985919, 1477985926, 1477985932, 1477985949, 1477985955, 1477985960, 1477985967, 1477985973, 1477985979, 1477985984),
('patra', 1478251449, 1, 1478251449, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('patro', 1478251320, 1, 1478251320, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('qwertyu12345', 1477485758, 1, 1477485758, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('rajat', 1477740458, 1, 1477740458, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('raj_sahil', 1477485915, 2, 1477557727, 1477557727, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('rani', 1478253236, 21, 1478254956, 1478253319, NULL, 1478253427, 1478253657, 1478253670, 1478254004, NULL, NULL, 1478254435, 1478254504, 1478254898, 1478254903, 1478254909, 1478254916, 1478254929, 1478254936, 1478254941, 1478254946, 1478254951, 1478254956),
('rohit', 1477558614, 1, 1477558614, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sagar', 1477484530, 2, 1477484577, 1477484577, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sahil', 1477484302, 3, 1477484973, 1477484965, 1477484973, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sahilraj', 1477485613, 8, 1477560987, 1477486559, 1477557982, 1477557991, 1477557994, 1477560296, 1477560843, 1477560987, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shashwat', 1477740260, 1, 1477740260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shubhum', 1477484402, 1, 1477484402, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sohail', 1478005606, 2, 1478005614, 1478005614, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('vigit', 1477741176, 1, 1477741176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(55, 'anurag', 'd77d2953c546cb33e2d0bff4989f6aa2', 'anurag@gmail.com', 1311313112, 3, 1),
(56, 'arit', '80e8d068b2afeb087e6e38230b726772', 'arit@gmail.com', 3512312367, 5, 1),
(57, 'arpan', 'f37427482b0311a8f3ea336ba0b60df1', 'arpan@gmail.com', 9876543213, 1, 1),
(58, 'ashwini', 'ff0eef605a66301097c87d2724025384', 'ashwini@gmail.com', 9009909009, 1, 1),
(53, 'bansal', 'f10963df6492717b1b697940d770e88c', 'bansal@gmail.com', 9572699717, 3, 1),
(64, 'bukya', '72a4123cbeae1e4972f94a2644e18fd5', 'bukya@gmail.com', 1212343412, 4, 1),
(62, 'gulu', 'c8ed227e4203fb8d3b553a8432bb219c', 'gulu@gmail.com', 1234567866, 1, 1),
(63, 'guna', '6e6b00b1d17718deb07a0d6c231e2271', 'guna@gmail.com', 1212343456, 1, 1),
(59, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'GURU@gmail.com', 1234554321, 1, 1),
(61, 'patra', '8789742383143593942ca732a0933974', 'patra@gmail.com', 9090121290, 1, 1),
(60, 'patro', '64248456926f71110ac0db8cd6a03031', 'patro@gmail.com', 1234567654, 1, 1),
(65, 'rani', 'b9f81618db3b0d7a8be8fd904cca8b6a', 'rani@gmail.com', 1234566576, 21, 1),
(54, 'sohail', 'a2de32da8c7b9de7332c15c194ce20df', 'sohail@gmail.com', 1234567889, 2, 1);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;