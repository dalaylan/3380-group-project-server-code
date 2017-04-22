-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 08:38 PM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3380`
--

-- --------------------------------------------------------

--
-- Table structure for table `Apartment`
--

CREATE TABLE `Apartment` (
  `id` int(10) UNSIGNED NOT NULL,
  `AptName` varchar(50) NOT NULL DEFAULT 'My Apartment',
  `address` varchar(30) NOT NULL,
  `owner` int(11) NOT NULL COMMENT 'user id of owner'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Apartment`
--

INSERT INTO `Apartment` (`id`, `AptName`, `address`, `owner`) VALUES
(1, 'My Apartment', 'whatever', 1),
(2, '', '', 4),
(3, '', '', 4),
(4, '', '', 21),
(5, 'RyanLand', 'geauxbears', 21),
(22, 'RyanLand', 'Beard Nation', 21),
(23, 'RyanLand', 'Beard Nation', 21),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, 'RyanLand', 'Beard Nation', 21),
(28, 'RyanLand', 'Beardooooooooooo Nation', 21),
(29, '', '', 0),
(30, '', '142 SmileyFace Lane', 1),
(31, '', '142 SmileyFace Lane', 1),
(32, '', '142 SmileyFace Lane', 1),
(33, '', '142 SmileyFace Lane', 1),
(34, '', '142 SmileyFace Lane', 0),
(35, '', '142 SmileyFace Lane', 0),
(36, '', '142 SmileyFace Lane', 0),
(37, 'AHHHHHHHHHHHHGHFHAWREHYGHUYAGHUYEWRHJG', '142 SmileyFace Lane', 0),
(38, 'AHHHHHHHHHHHHGHFHAWREHYGHUYAGHUYEWRHJG', '142 SmileyFace Lane', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `apartmentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `apartmentID`, `userID`, `startDate`, `endDate`, `name`, `creator`) VALUES
(1, 1, 3, '2017-04-06 00:00:00', '2017-04-14 00:00:00', 'name of event', 'name of guy'),
(2, 2, 1, '2000-01-02 12:13:14', '2000-01-02 12:13:15', 'An album Party', 'test'),
(3, 2, 1, '2000-01-02 12:13:14', '2000-01-02 12:13:15', 'An album Party', 'test'),
(4, 1, 1, '0001-01-01 00:00:00', '0001-01-01 00:00:00', 'PARTTYYYYY', 'MyTestName'),
(5, 1, 1, '0001-01-01 00:00:00', '0001-01-01 00:00:00', 'PARTTYYYYY', 'MyTestName'),
(6, 1, 1, '0001-01-01 00:00:00', '0001-01-01 00:00:00', '', 'MyTestName'),
(7, 1, 1, '0001-01-01 00:00:00', '0001-01-01 00:00:00', '', 'MyTestName'),
(8, 1, 1, '0001-01-01 00:00:00', '0001-01-01 00:00:00', 'PARTTYYYYY', 'MyTestName');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `MSGText` varchar(300) NOT NULL,
  `apartmentID` int(11) NOT NULL,
  `senderID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `MSGText`, `apartmentID`, `senderID`) VALUES
(1, 'Ryan is a wonderful human being', 1, 64),
(2, '', 1, 1),
(3, '', 1, 1),
(4, '', 1, 1),
(5, '', 1, 1),
(6, 'THIS IS THE TEXT OF OUR MESSAGE', 1, 1),
(7, 'THIS IS THE TEXT OF OUR MESSAGE', 1, 1),
(8, 'THIS IS THE TEXT OF OUR MESSAGE', 1, 1),
(9, 'THIS IS THE TEXT OF OUR MESSAGE', 1, 1),
(10, 'THIS IS THE TEXT OF OUR MESSAGE', 1, 1),
(11, 'THIS IS THE TEXT OF OUR MESSAGE', 3, 2),
(12, 'THIS IS THE TEXT OF OUR MESSAGE', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `apartmentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `noteName` varchar(50) NOT NULL,
  `data` varchar(400) DEFAULT NULL,
  `listType` int(5) UNSIGNED NOT NULL COMMENT 'type of list '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `username`, `apartmentID`, `userID`, `noteName`, `data`, `listType`) VALUES
(1, 'test guy the III', 1, 5, '', 'this is a test note, look at how awkward this looks. i am writting a bunch of gibberish to test how such a long message will appear when it is displayed in json. i guess we will find out shortly. haha you must think this is dumb. i feel the same. ', 0),
(2, 'test', 1, 2, 'name of note', 'insert body of note here', 1),
(3, '1', 2, 3, '4', '5', 0),
(4, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 0),
(5, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(6, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 0),
(7, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(8, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(9, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(10, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(11, 'nameTest', 1, 0, 'myname', 'According to all known laws of aviation, there is no way a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway because bees donâ€™t care what humans think is impossible', 1),
(12, 'MyTestName', 1, 1, '', '', 1),
(13, 'MyTestName', 1, 1, '', '', 1),
(14, 'MyTestName', 1, 1, '', '', 1),
(15, 'MyTestName', 1, 1, '', '', 1),
(17, 'MyTestName', 1, 1, '', '', 1),
(18, 'MyTestName', 1, 1, '', '', 1),
(19, 'MyTestName', 1, 1, 'List Name', 'THIS IS THE TEXT OF OUR LIST, NOT NOTE', 1),
(20, 'MyTestName', 1, 1, 'List Name', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `ApartmentID` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL COMMENT 'totally secure',
  `emergency name` varchar(50) DEFAULT NULL,
  `emergency contact` varchar(20) DEFAULT NULL,
  `profile pic` tinyblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `username`, `ApartmentID`, `email`, `password`, `emergency name`, `emergency contact`, `profile pic`) VALUES
(1, 'testName', 1, 'test@test.com', 'pass', 'john', 'halp me', NULL),
(5, 'name', 1, 'email', 'pass123', 'emergname', 'emergcont', NULL),
(14, '', 1, '', '', NULL, NULL, NULL),
(18, 'newuser', 1, 'fake@yahoo.fake', 'pass123', NULL, NULL, NULL),
(21, 'newuser', NULL, 'fake@yaho.fake', 'pass123', NULL, NULL, NULL),
(57, '', NULL, 'test@test.net', '', NULL, NULL, NULL),
(58, '', NULL, 'test@test.net;name=whatever', '', NULL, NULL, NULL),
(66, 'List Name', NULL, 'Somethin2g@fake.net', 'password123*', NULL, NULL, NULL),
(68, '', NULL, 'mymail2@hotmail.gov', 'password...hehehe', NULL, NULL, NULL),
(70, '', NULL, 'mymail3@hotmail.gov', 'password...hehehe', NULL, NULL, NULL),
(72, '', NULL, 'mymail@hotmail.gov', 'password...hehehe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Apartment`
--
ALTER TABLE `Apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Apartment`
--
ALTER TABLE `Apartment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
