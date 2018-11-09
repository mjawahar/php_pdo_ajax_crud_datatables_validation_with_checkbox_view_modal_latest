-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 03:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Subjects` varchar(100) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `Marks` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `Name`, `DOB`, `Age`, `Address`, `Email`, `Gender`, `Subjects`, `vehicle`, `Marks`) VALUES
(1, 'aaaaaaaa', '2018-11-08', 0, 'dddddddd', 'ccccccccc@dddd.eee', 'male', 'english', '', 100),
(3, 'cccccc', '2018-11-17', 0, 'dddddddd', 'ccccccccc@dddd.eee', 'male', 'maths', '', 101),
(4, 'a', '2018-11-08', 0, '', '', 'male', 'english', '', 0),
(5, 'b', '2018-11-14', 0, '', '', 'male', 'english', '', 0),
(6, 'v', '2018-11-09', 0, '', '', 'male', 'maths', '', 0),
(7, 'aaaaaa', '2018-11-09', 0, '', '', 'male', 'tamil,maths', '', 0),
(8, 'aaaaaaaa', '2018-11-10', 0, '', '', 'male', 'english,maths', '', 0),
(9, 'cccccc', '2018-11-17', 0, '', '', 'male', '', '', 0),
(10, 'cccccc', '2018-06-10', 0, '', '', 'female', '', '', 0),
(11, 'cccccc', '2018-11-16', 0, '', '', 'female', '', '', 0),
(12, 'bbbbbb', '2018-11-16', 0, '', '', 'male', '', '', 0),
(13, 'aaaaaaaa', '2018-11-17', 0, '', '', 'male', '', '', 0),
(14, 'aaaaaaaa', '2018-11-16', 0, '', '', 'male', '', '', 0),
(15, 'aaaaaaaa', '2018-11-10', 0, '', '', 'male', '', '', 0),
(16, 'eeeeeeeeeee', '2018-11-08', 0, '', '', 'female', '', '', 0),
(17, 'aaaaaaaa', '2018-11-24', 0, '', '', 'male', '', '', 0),
(18, 'aaaaaaaa', '2018-11-17', 0, '', '', 'male', '', '', 0),
(19, 'aaaaaaaa', '2018-11-24', 0, '', '', 'male', '', '', 0),
(20, 'oooooooooo', '2018-11-24', 0, '', '', 'male', '', '', 0),
(21, 'ppppppppp', '2018-11-17', 0, '', '', 'male', '', '', 0),
(22, 'aaaaaaaa', '2018-11-30', 0, '', '', '', 'english,maths,science', '', 0),
(23, 'aaaaaaaa', '2018-11-23', 0, '', '', 'male', '', '', 0),
(25, 'aaaaaaaa', '2018-11-23', 0, '', '', 'male', '', '', 0),
(26, 'aaaaaaaa', '2018-11-23', 0, '', '', 'male', '', '', 0),
(27, 'aaaaaaaa', '2018-11-17', 0, '', '', 'male', 'english,science', '', 0),
(28, 'aaaaaaaa', '2018-11-23', 0, '', '', 'female', 'tamil,english,maths', '', 0),
(29, 'aaaaaaaa', '2018-11-17', 0, '', '', 'male', 'english,science', '', 0),
(30, 'aaaaaaaaaaaa', '2018-11-10', 0, 'asssssss', 'ccccccccc@dddd.eee', 'male', 'english,maths', 'bike', 100),
(31, 'dsafsa', '2018-11-24', 0, 'aaaaaa', 'ccccccccc@dddd.eee', 'male', 'english,science', 'bike,car', 100),
(32, 'aaaaaaaa', '2018-11-17', 0, 'aaaaaaaaaa', 'ccccccccc@dddd.eee', 'female', 'english,science', 'bike,car', 100),
(33, 'eeeeee', '2018-11-30', 0, 'rrrrrrrrrrrr', 'ccccccccc@dddd.eee', 'female', 'english,science', 'car', 100),
(34, 'aaaaaaaa', '2018-11-24', 0, '', '', '', '', '', 0),
(35, 'aaaaaaaa', '2018-11-29', 0, '', '', '', 'english,maths', '', 0),
(36, 'ttttttttttttt', '2018-11-28', 0, '', '', '', '', '', 0),
(37, 'sssssssssssssss', '2018-12-01', 0, '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
