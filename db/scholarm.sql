-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2016 at 10:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scholarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` char(40) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created`) VALUES
(1, 'superadmin', '252263db10af1c664f5f53acf694955f69ec62e8', '2016-04-18 15:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`event_id` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `body` text NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `thumbnail` varchar(36) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE IF NOT EXISTS `interviews` (
`interview_id` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(36) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
`video_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `video_type` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
 ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
MODIFY `interview_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
