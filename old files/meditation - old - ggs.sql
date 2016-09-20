-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 03:08 AM
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
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_author` varchar(250) NOT NULL,
  `post_body` varchar(10000) NOT NULL,
  `post_type` enum('o','r') DEFAULT 'o',
  `thread_id` int(100) NOT NULL,
  `forum_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`post_id`, `post_title`, `post_author`, `post_body`, `post_type`, `thread_id`, `forum_id`) VALUES
(3, 'Red Dead Redemption Trophy', 'Dimitri K', 'I need help with a trophy in Red Dead Redemption, here is the details "insert generic link"', 'o', 1, 1),
(4, 'Test 1', 'Dimitri K', 'This is the test post number 3', 'o', 3, 1),
(5, 'Test post', 'Dimitri K', 'This is another test post for organizing threads. 4', 'o', 4, 1),
(6, 'Test 1', 'Dimitri K', 'reply to test 1', 'r', 3, 1),
(7, 'Test 1', 'Dimitri K', 'reply test to test 1', 'r', 3, 1),
(8, 'Test Post', 'Dimitri K', 'testing to see if sorting secondarily', 'r', 4, 1),
(9, 'Red Dead Redepmtion Trophy', 'Smiffy Boi', 'sure I can help you out no worries, just do this blah blah', 'r', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `forum_id` int(11) NOT NULL,
  `forum_name` varchar(255) NOT NULL,
  `forum_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`forum_id`, `forum_name`, `forum_description`) VALUES
(1, 'Achievements/Trophies', 'Need help or just want to show off trophies or achievements, go here.'),
(2, 'Game Help', 'Need general help for a game, go here.'),
(3, 'Upcoming Games', 'Discuss upcoming games and video game related releases.'),
(4, 'New Releases', 'Discuss new releases.');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`) VALUES
(1, 'Call Of Duty: Modern Warfare 2'),
(2, 'Fifa 15'),
(3, 'Driveclub'),
(4, 'Grand Theft Auto V'),
(5, 'Tomb Raider: Definitive Edition'),
(6, 'Rayman Legends'),
(7, 'Watch_Dogs'),
(8, 'inFamous Second Son'),
(9, 'Assassins Creed IV: Black Flag'),
(10, 'Assassins Creed: Unity'),
(11, 'Trials Fusion'),
(12, 'The Last Of Us'),
(13, 'Dragon Age: Origins'),
(14, 'The Order: 1886'),
(15, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `game_sessions`
--

CREATE TABLE `game_sessions` (
  `session_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `session_game` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `session_platform` varchar(15) NOT NULL,
  `session_owner` varchar(64) NOT NULL,
  `session_playerCount` int(11) NOT NULL,
  `session_notes` varchar(140) NOT NULL,
  `session_timeCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_sessions`
--

INSERT INTO `game_sessions` (`session_ID`, `userID`, `session_game`, `username`, `session_platform`, `session_owner`, `session_playerCount`, `session_notes`, `session_timeCreated`) VALUES
(13, 32, 'FIFA 15', 'DILEEP', 'PS4', '', 0, 'sdfasdfasdf', '0000-00-00 00:00:00'),
(14, 38, 'DRIVECLUB', 'This_PSN_User;', 'Xbox One', '', 0, 'sdfasdf', '0000-00-00 00:00:00');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `session_game` varchar(64) NOT NULL,
  `session_username` varchar(64) NOT NULL,
  `session_platform` varchar(15) NOT NULL,
  `session_mic` varchar(3) NOT NULL,
  `session_playerCount` int(11) NOT NULL,
  `session_notes` varchar(140) NOT NULL,
  `session_timeCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_ID`, `userID`, `session_game`, `session_username`, `session_platform`, `session_mic`, `session_playerCount`, `session_notes`, `session_timeCreated`) VALUES
(27, 33, 'VIDEO GAME NAME', 'Da1Cheetaah', 'Playstation 3', 'Yes', 0, 'Someone join me on Rust for a 11 quicksope match :D Or we can have a full party FFA?\n', '0000-00-00 00:00:00'),
(41, 34, 'FORZA 4', 'Dr1Ft3R', 'Xbox One', 'No', 0, 'Need someone who is a good challenge in a race! I dare you to challenge me :D', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usergames`
--

CREATE TABLE `usergames` (
  `userGamesID` int(11) NOT NULL,
  `userID` int(4) NOT NULL,
  `game_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergames`
--

INSERT INTO `usergames` (`userGamesID`, `userID`, `game_id`) VALUES
(3, 5, 32),
(1, 22, 15),
(4, 32, 14);

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
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD PRIMARY KEY (`session_ID`);

--
-- Indexes for table `screenshots`
--
ALTER TABLE `screenshots`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_ID`);

--
-- Indexes for table `usergames`
--
ALTER TABLE `usergames`
  ADD PRIMARY KEY (`userGamesID`),
  ADD KEY `userID` (`userID`,`game_id`);

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
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `game_sessions`
--
ALTER TABLE `game_sessions`
  MODIFY `session_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `usergames`
--
ALTER TABLE `usergames`
  MODIFY `userGamesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
