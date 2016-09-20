-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 02:40 PM
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
(171, 0, '2016-09-20', '2016-09-26', '0000-00-00', '3', 'male'),
(173, 0, '2016-09-20', '2016-10-24', '0000-00-00', '3', 'male'),
(175, 54, '2016-09-20', '2016-09-26', '0000-00-00', '3', 'female'),
(176, 57, '2016-09-20', '2016-09-26', '0000-00-00', '30', 'female'),
(178, 54, '2016-09-20', '2016-12-19', '0000-00-00', '30', 'female');

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
(32, 'Dimitri', 'Karanasios', 'q', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 1, 'male', '1996-10-01', '11 address st', 0, 33946283, ''),
(54, 'James', 'Keat', 'email@email.com', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 0, 'male', '2015-12-08', '1 address st', 0, 38229911, ''),
(57, 'Steph', 'Harrison', 'q1', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 0, 'female', '1996-10-01', '11 address street', 0, 414071024, ''),
(58, 'admin', 'last', 'admin', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 1, 'male', '1990-06-01', '11 admin Address', 0, 123456789, '');

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
  MODIFY `bookingID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
