-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2014 at 02:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `group1_bcit`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE IF NOT EXISTS `confirmed` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `confirmid` int(7) NOT NULL,
  `driverid` int(7) NOT NULL,
  `passengerid` int(7) NOT NULL,
  `direction` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `info` longblob NOT NULL,
  `day` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`id`, `confirmid`, `driverid`, `passengerid`, `direction`, `time`, `info`, `day`, `location`, `address`) VALUES
(1, 1, 5, 4, 'arrival', '08:30:00', '', 'monday', '49.284760, -123.056730', 'Grandview-Woodland,Vancouver'),
(2, 1, 5, 3, 'arrival', '08:30:00', '', 'monday', '49.214869, -123.0781140', '1367 61ST AV E vancouver BC'),
(3, 1, 5, 2, 'arrival', '08:30:00', '', 'monday', '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC'),
(4, 1, 5, 1, 'arrival', '08:30:00', '', 'monday', '049.152451, -122.3202850', '8270 Kudo DR mission BC'),
(5, 1, 5, 1, 'arrival', '08:30:00', '', 'monday', '049.152451, -122.3202850', '8270 Kudo DR mission BC');

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE IF NOT EXISTS `monday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `memberid` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `info` blob NOT NULL,
  `reviews` blob NOT NULL,
  `noOfRatings` int(5) NOT NULL,
  `totalRatings` int(5) NOT NULL,
  `mondayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tuesdayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wednesdayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thursdayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fridayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `saturdayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sundayConfirmationid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`memberid`, `username`, `password`, `first`, `last`, `phone`, `email`, `info`, `reviews`, `noOfRatings`, `totalRatings`, `mondayConfirmationid`, `tuesdayConfirmationid`, `wednesdayConfirmationid`, `thursdayConfirmationid`, `fridayConfirmationid`, `saturdayConfirmationid`, `sundayConfirmationid`) VALUES
(1, 'user', 'Pass', 'Leon', 'Ho', '778 318 6951', 'ho.leon@yahoo.com', '', '', 0, 0, '', '', '', '', '', '', ''),
(2, 'user', 'pass', 'Brendan', 'Floris', '604 502 2312', 'bFloris@live.ca', '', '', 0, 0, '', '', '', '', '', '', ''),
(3, 'User', 'Password', 'Lukasz', 'Pacyk', '604 902 2314', 'pacyk@gmail.com', '', '', 0, 0, '', '', '', '', '', '', ''),
(4, 'user', 'pass', 'logan', 'hollins', '604 321 5242', 'hollins@gmail.com', '', '', 0, 0, '', '', '', '', '', '', ''),
(5, 'user', 'password', 'Trent ', 'Sonic', '778 321 2312', 'trent@gmail.com', '', '', 0, 0, '1', '', '', '', '', '', ''),
(23, 'user', 'pass', 'John', 'Janzen', '604 123 1324', 'jJanzen@gmail.com', '', '', 0, 0, '', '', '', '', '', '', ''),
(24, 'sClause', 'password', 'Santa', 'Clause', '604 327 912', 'sClause@gmail.com', '', '', 0, 0, '', '', '', '', '', '', ''),
(25, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', ''),
(26, 'askho', '1f48a39daf1339bfd948b2fd5cfe6a47', 'Leon ', 'Ho', '', 'lho51@my.bcit.ca', '', '', 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `requestid` int(7) NOT NULL AUTO_INCREMENT,
  `requesteerole` tinyint(1) NOT NULL COMMENT 'pass=true, driver=false',
  `requesterid` int(7) NOT NULL,
  `requesteeid` int(7) NOT NULL,
  `info` longblob NOT NULL,
  `day` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direction` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`requestid`),
  UNIQUE KEY `requestid` (`requestid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestid`, `requesteerole`, `requesterid`, `requesteeid`, `info`, `day`, `direction`, `location`, `address`) VALUES
(2, 0, 5, 5, '', 'monday', 'arrival', '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC'),
(4, 0, 1, 5, '', 'tuesday', 'arrival', '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8'),
(5, 0, 2, 5, '', 'wednesday', 'arrival', '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC'),
(6, 0, 26, 26, '', 'monday', 'arrival', '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3'),
(7, 0, 26, 5, '', 'monday', 'arrival', '49.284760, -123.056730', 'Grandview-Woodland,Vancouver');

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE IF NOT EXISTS `saturday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `saturday`
--

INSERT INTO `saturday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sunday`
--

CREATE TABLE IF NOT EXISTS `sunday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sunday`
--

INSERT INTO `sunday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE IF NOT EXISTS `thursday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE IF NOT EXISTS `tuesday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE IF NOT EXISTS `wednesday` (
  `memberid` int(6) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT 'Passenger = true Driver = false',
  `arrivaltime` time NOT NULL,
  `departtime` time NOT NULL,
  `info` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`memberid`, `location`, `address`, `role`, `arrivaltime`, `departtime`, `info`) VALUES
(5, '49.284760, -123.056730', 'Grandview-Woodland,Vancouver', 0, '08:30:00', '17:20:00', ''),
(4, '49.225593, -123.044176', '6454 KILLARNEY ST Vancouver BC', 1, '08:30:00', '17:20:00', ''),
(3, '49.214869, -123.0781140', '1367 61ST AV E vancouver BC', 1, '08:30:00', '17:20:00', ''),
(2, '049.215760, -122.5758430', '23345 117B AVE MAPLE RIDGE BC', 1, '08:30:00', '17:20:00', ''),
(1, '049.152451, -122.3202850', '8270 Kudo DR mission BC', 1, '08:30:00', '17:20:00', ''),
(0, '049.251825, -123.0039780', '3700 WILLINGDON AVE Burnaby BC', 1, '08:30:00', '17:20:00', ''),
(24, '49.184532, -123.089400', '12062-12142 Cambie Rd, Richmond, BC V6V 2H8', 0, '08:30:00', '17:20:00', ''),
(26, '49.313386, -123.072406', '428-456 St Georges Ave North Vancouver, BC V7L 1L3', 1, '08:30:00', '17:20:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
