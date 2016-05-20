-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 08:22 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `recordlabel`
--

CREATE TABLE IF NOT EXISTS `recordlabel` (
  `recordLabelID` int(20) NOT NULL,
  `recordLabelName` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recordlabel`
--

INSERT INTO `recordlabel` (`recordLabelID`, `recordLabelName`) VALUES
(1, 'Grammy '),
(2, 'RS'),
(3, 'Smallroom'),
(4, 'Genierock'),
(5, 'Spicydisc'),
(6, 'Kamikaze');

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE IF NOT EXISTS `singer` (
  `singerID` int(20) NOT NULL,
  `singerName` text NOT NULL,
  `recordLabelID` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singerID`, `singerName`, `recordLabelID`) VALUES
(1, 'Rihana', 1),
(2, 'Labanoon', 2),
(3, 'Ploychompoo', 4),
(4, 'Stamp', 3),
(5, 'The bottom blues', 6),
(6, 'Jessie J', 6),
(7, 'Jason Mraz', 6),
(8, 'Tata young', 1),
(9, 'Bruno Mars', 3),
(10, 'Singular', 1),
(11, 'Season Five', 5),
(12, 'Atom', 6),
(13, 'Paradox', 3),
(14, 'Silly Fools', 3),
(15, 'Mild', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`songID`, `songName`, `typeID`, `link`, `vote`, `singerID`) VALUES
(1, 'Flashlight', 8, 'DzwkcbTQ7ZE', 176, 6),
(2, 'Price Tag ft. B.o.B', 7, 'qMxX-QOV9tI', 54, 6),
(3, 'Restart', 5, 'kTHcaTCM4rs', 5, 3),
(4, 'Dhoom', 6, 'dYf0IRgblpA', 12, 8),
(5, 'I''m yours', 5, 'EkHTsc9PU2A', 65, 7),
(6, 'I want give up', 6, 'O1-4u9W-bns', 34, 7),
(7, 'Sexy Naughty Bitchy me', 6, 'YIQnWeFpkJE', 100, 8),
(8, 'The Lazy song', 1, 'fLexgOxsZu0', 65, 9),
(9, 'Just the way you are', 2, 'LjhCEhWiKXk', 43, 9),
(10, 'Bao Bao', 1, '7ebg2iLYakQ', 700, 10),
(11, 'Long', 5, 'JFPbNzeEN_I', 56, 10),
(12, 'Lhaek', 8, '61jjcnd884A', 43, 11),
(13, 'Event', 8, 'w3POF1Coq5U', 600, 11),
(14, 'Dust', 8, 'EEocnHtllJ8', 43, 12),
(15, 'Please', 5, 'GYpzzbVRrsk', 90, 12),
(16, 'Rue doo rhon', 8, '8k6C_3Q4S1o', 21, 13),
(17, 'Mee tae ter', 5, 'PvB8ICbiZA4', 76, 13),
(18, 'Jija', 8, '1hOzfYC-YCI', 12, 14),
(19, 'Wat jai', 8, 'VNIE3VX1KeA', 89, 14),
(20, 'Siyonara', 4, 'mMKwM_FYBOo', 1000, 15),
(21, 'Unloveable', 6, 'Xj-UR1E8JlU', 78, 15);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `typeID` int(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeID`, `type`) VALUES
(1, 'Thai'),
(2, 'Modern'),
(3, 'K-pop'),
(4, 'J-pop'),
(5, 'Country'),
(6, 'HipHop'),
(7, 'Reggae'),
(8, 'Rock');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `facebook`, `email`, `twitter`) VALUES
(1, 'snoopear', 'pearpear', NULL, 'snoopy.pear@hotmail.com', NULL);

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
  MODIFY `playlistID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recordlabel`
--
ALTER TABLE `recordlabel`
  MODIFY `recordLabelID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `singerID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
