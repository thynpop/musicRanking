-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 09:42 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_ranking`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentID` int(20) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `userID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `playlistID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  `songID` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlistID`, `userID`, `songID`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recordlabel`
--

CREATE TABLE IF NOT EXISTS `recordlabel` (
  `recordLabelID` int(20) NOT NULL,
  `recordLabelName` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recordlabel`
--

INSERT INTO `recordlabel` (`recordLabelID`, `recordLabelName`) VALUES
(1, 'kamikaze'),
(2, 'grammy');

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE IF NOT EXISTS `singer` (
  `singerID` int(20) NOT NULL,
  `singerName` text NOT NULL,
  `recordLabelID` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singerID`, `singerName`, `recordLabelID`) VALUES
(1, 'Bie the star', 2),
(2, 'Waii', 1),
(3, 'Fay', 1),
(4, '25hours', 2);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `songID` int(20) NOT NULL,
  `songName` text NOT NULL,
  `typeID` int(20) NOT NULL,
  `link` text NOT NULL,
  `vote` int(20) NOT NULL,
  `singerID` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`songID`, `songName`, `typeID`, `link`, `vote`, `singerID`) VALUES
(1, 'took loom ruk', 2, 'abc', 12, 2),
(2, 'takum', 2, 'eeee', 33, 1),
(3, 'oh', 1, 'eee', 3, 3),
(4, 're', 2, 'rrrr', 76, 3),
(5, 'f', 2, 'rrrr', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `typeID` int(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeID`, `type`) VALUES
(1, 'pop'),
(2, 'rock');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `facebook` text,
  `email` text,
  `twitter` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `facebook`, `email`, `twitter`) VALUES
(1, 'thynpop', 'poppop', NULL, 'thayanee.pop@hotmail.com', NULL),
(2, 'wachi', 'wwwww', 'wachi Tiw', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlistID`);

--
-- Indexes for table `recordlabel`
--
ALTER TABLE `recordlabel`
  ADD PRIMARY KEY (`recordLabelID`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singerID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlistID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `recordlabel`
--
ALTER TABLE `recordlabel`
  MODIFY `recordLabelID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `singerID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
