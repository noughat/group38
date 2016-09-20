-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 03:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int(64) NOT NULL,
  `userID` int(64) NOT NULL,
  `date` date NOT NULL,
  `courseStart` date NOT NULL,
  `courseEnd` date NOT NULL,
  `courseType` varchar(10) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingID`, `userID`, `date`, `courseStart`, `courseEnd`, `courseType`, `gender`) VALUES
(123, 33, '2016-09-09', '2016-09-26', '0000-00-00', '3', ''),
(124, 33, '2016-09-09', '2016-09-26', '0000-00-00', '3', ''),
(141, 32, '2016-09-12', '2016-09-12', '0000-00-00', '3', 'male'),
(144, 32, '2016-09-14', '2016-11-28', '0000-00-00', '3', 'male'),
(145, 0, '2016-09-17', '2016-09-26', '0000-00-00', '3', 'male'),
(146, 0, '2016-09-17', '2016-09-19', '0000-00-00', '10', 'male'),
(149, 54, '2016-09-19', '2016-09-19', '0000-00-00', '3', 'female'),
(151, 54, '2016-09-19', '2016-09-26', '0000-00-00', '3', 'female'),
(152, 54, '2016-09-19', '2016-10-03', '0000-00-00', '3', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `screenshots`
--

CREATE TABLE `screenshots` (
  `imageID` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `game` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screenshots`
--

INSERT INTO `screenshots` (`imageID`, `image`, `game`, `description`) VALUES
(15, 'gta5-ss1.jpg', 'Grand Theft Auto V', 'My stunt skills are real'),
(16, 'destiny-screenshot-1.jpg', 'Destiny', 'Plans for today....Play Destiny!'),
(17, 'destinycover.jpg', 'Destiny', 'Just bought Destiny, keen to play it :)'),
(19, 'spore.jpg', 'Other', 'My beaut sport creation!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `admin_privileges` tinyint(1) NOT NULL,
  `gender` text NOT NULL,
  `dateOfBirth` date NOT NULL,
  `homeAddress` varchar(200) NOT NULL,
  `canBeServer` tinyint(1) NOT NULL,
  `mobile` int(20) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `password`, `admin_privileges`, `gender`, `dateOfBirth`, `homeAddress`, `canBeServer`, `mobile`, `avatar`) VALUES
(32, 'Dimitri', 'Karanasios', 'q', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 1, 'male', '1996-10-01', '11 address st', 0, 314245987, 'destiny.jpg'),
(54, 'first1', 'last1', 'q1', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 0, 'female', '2015-12-08', 'address1', 0, 111111111, ''),
(55, 'first2', 'last2', 'q2', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 0, 'male', '2016-09-14', 'address2', 0, 111111111, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `screenshots`
--
ALTER TABLE `screenshots`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
