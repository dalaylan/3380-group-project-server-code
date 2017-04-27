-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 12:41 AM
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
(1, 'The Globode', '1234 LSU Blvd', 1),
(2, 'The Paaarty', '567 Shade Lake', 3);

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
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'hey don\'t forget we have an apartment meeting on thurdsay', 1, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `ApartmentID` int(11) DEFAULT '-1',
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
(1, 'testusername', 1, 'testemail', 'testpassword', NULL, NULL, NULL),
(2, 'Dalayla', -1, 'dala@gmail.com', 'pass123', 'john smith', '1-123-332-1123', NULL),
(3, 'suser', 2, 'semail', 'spass', NULL, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
