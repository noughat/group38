-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 09:31 AM
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
(176, 57, '2016-09-20', '2016-10-24', '0000-00-00', '30', 'female'),
(178, 54, '2016-09-20', '2016-12-19', '0000-00-00', '30', 'female'),
(179, 57, '2016-10-09', '2016-10-31', '0000-00-00', '10', 'female'),
(184, 59, '2016-10-09', '2016-10-24', '0000-00-00', '3', 'male'),
(187, 59, '2016-10-11', '2016-10-31', '0000-00-00', '10', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `userID` int(64) NOT NULL,
  `messageID` int(64) NOT NULL,
  `messageDate` datetime NOT NULL,
  `message` varchar(1000) NOT NULL,
  `responded` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`userID`, `messageID`, `messageDate`, `message`, `responded`) VALUES
(60, 1, '2016-10-12 11:59:28', 'fsdfasdfasdfasdfasdfasffaefsdfasdf\r\n', 1),
(59, 2, '2016-10-12 12:00:04', 'asfsdaffe', 0),
(59, 3, '2016-10-16 20:24:36', 'another message\r\n', 0),
(59, 4, '2016-10-16 20:24:42', 'a second message\r\n', 0),
(59, 5, '2016-10-16 20:24:46', 'a third messahe\r\n', 1),
(59, 6, '2016-10-16 20:25:06', 'This is a fourth message', 1),
(59, 7, '2016-10-16 20:33:38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor nisi et nibh imperdiet, hendrerit pretium augue viverra. Nullam elementum ut ligula at faucibus. Morbi nec consequat augue. Nullam sagittis sodales odio. Cras finibus tempor risus, non interdum mi hendrerit in. Integer sagittis nibh in sapien convallis, vel mattis neque tempus. Donec mattis, augue vitae pellentesque facilisis, diam nisi vehicula justo, eget consectetur augue magna vitae lorem. Maecenas viverra eleifend nisi. Aliquam egestas, nisl auctor porttitor consectetur, augue mauris pellentesque dolor, sed semper leo purus nec dui. In pellentesque suscipit magna. Aenean tempor risus et arcu vestibulum, vitae molestie turpis molestie. Ut nisi lorem, ultricies quis ex porta, porttitor imperdiet nulla. Nunc laoreet porttitor convallis.', 0);

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
-- Table structure for table `serverbookings`
--

CREATE TABLE `serverbookings` (
  `serverBookingID` int(64) NOT NULL,
  `userID` int(64) NOT NULL,
  `date` date NOT NULL,
  `serverStart` date NOT NULL,
  `courseEnd` date NOT NULL,
  `courseType` varchar(10) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serverbookings`
--

INSERT INTO `serverbookings` (`serverBookingID`, `userID`, `date`, `serverStart`, `courseEnd`, `courseType`, `gender`) VALUES
(176, 57, '2016-09-20', '2016-10-24', '0000-00-00', '30', 'female'),
(178, 54, '2016-09-20', '2016-12-19', '0000-00-00', '30', 'female'),
(179, 57, '2016-10-09', '2016-10-31', '0000-00-00', '10', 'female'),
(184, 59, '2016-10-09', '2016-10-24', '0000-00-00', '3', 'male');

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
(58, 'admin', 'last', 'admin', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 1, 'male', '1990-06-01', '11 admin Address', 0, 123456789, ''),
(59, 'Steph', 'Harrison', 'q1', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf', 0, 'male', '1996-10-01', '11 address street', 0, 414071024, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `screenshots`
--
ALTER TABLE `screenshots`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `serverbookings`
--
ALTER TABLE `serverbookings`
  ADD PRIMARY KEY (`serverBookingID`);

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
  MODIFY `bookingID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `serverbookings`
--
ALTER TABLE `serverbookings`
  MODIFY `serverBookingID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
