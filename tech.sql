-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 08:16 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `devID` int(10) NOT NULL AUTO_INCREMENT,
  `devName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companyTel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`devID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`devID`, `devName`, `companyAddress`, `companyTel`, `email`) VALUES
(1, 'Adobe', '345 Park Avenue San Jose, CA 95110-2704, Californi', '+1408-536-2800', 'adobe@adobe.com'),
(2, 'Apple Inc.', '1 Apple Park Way, Cupertino, California, United St', '+1800-048-0408', 'tcook@apple.com'),
(9, 'Microsoft', '282 Tudor Road, Leicester, England', '+4407341615142', 'microsoft@outlook.co.uk'),
(10, 'Ayodeji Felix Oladoyin', 'No 3 Oladoyin Oyebola Street', '+2348032745058', 'oladoyinayodeji@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `jobType` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `techniques` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`employeeID`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `name`, `jobType`, `techniques`, `job_id`) VALUES
(1, 'Ayodeji Felix Oladoyin', '1', 'Graphics Designer', 2),
(22, 'James Yedak', '2', 'Programming', 1),
(23, 'Ayomide Cube', '2', 'Editing', 2),
(24, 'Oti Dozie', '2', 'Project management', 2);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `name`) VALUES
(1, 'Managerial'),
(2, 'Administrative');

-- --------------------------------------------------------

--
-- Table structure for table `productivity_technology`
--

CREATE TABLE IF NOT EXISTS `productivity_technology` (
  `techID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `setup` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `RRP` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `devID` int(10) NOT NULL,
  PRIMARY KEY (`techID`),
  KEY `devID` (`devID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=131 ;

--
-- Dumping data for table `productivity_technology`
--

INSERT INTO `productivity_technology` (`techID`, `name`, `description`, `setup`, `RRP`, `devID`) VALUES
(2, 'IPad', 'The iPad is a touchscreen tablet PC made by Apple. The original iPad debuted in 2010. Apple has three iPad product lines: iPad, iPad mini and iPad Pro.', 'Tablet', '$899', 2),
(129, 'Power Point', 'For editing of docs', 'Software', '$50', 9),
(130, 'iWatch', 'Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness tracking, health-oriented capabilities, and wireless telecommunication, and integrates with iOS and other Apple products and services.', 'Wearable', '$450', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `rateID` int(11) NOT NULL AUTO_INCREMENT,
  `rate` int(1) NOT NULL,
  PRIMARY KEY (`rateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateID`, `rate`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `techID` int(10) NOT NULL,
  `employeeID` int(10) NOT NULL,
  `usage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `scoreRating` int(1) NOT NULL,
  `comments` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rateID` int(11) NOT NULL,
  `useID` int(11) NOT NULL,
  PRIMARY KEY (`techID`,`employeeID`),
  KEY `employeeID` (`employeeID`),
  KEY `useID` (`useID`),
  KEY `rateID` (`rateID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`techID`, `employeeID`, `usage`, `scoreRating`, `comments`, `rateID`, `useID`) VALUES
(2, 24, '1', 5, 'I like iPad because it is ok.', 3, 3),
(129, 24, '3', 1, 'I have no time to use it.', 4, 2),
(130, 1, '2', 4, 'This is a Nice tech , i would like to use it more.', 3, 2),
(130, 22, '2', 5, 'I Like this Tech ', 2, 2),
(130, 23, '1', 4, 'Nahhhhhhhhhhh', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `use`
--

CREATE TABLE IF NOT EXISTS `use` (
  `useID` int(11) NOT NULL AUTO_INCREMENT,
  `use` varchar(50) NOT NULL,
  PRIMARY KEY (`useID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `use`
--

INSERT INTO `use` (`useID`, `use`) VALUES
(1, 'I have used this technology'),
(2, 'I would like to use this technology'),
(3, 'I am not interested in this technology');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(22, 'Ayodeji Felix Oladoyin', 'oladoyinayodeji@gmail.com', '0ca224fd25de671c761b74ee80ec5f3241c68e19', '1'),
(23, 'Felix Oladoyin', 'felixfrz@yahoo.com', '0ca224fd25de671c761b74ee80ec5f3241c68e19', '1'),
(24, 'fdfdfd', 'abc@deji.com', '0ca224fd25de671c761b74ee80ec5f3241c68e19', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `productivity_technology`
--
ALTER TABLE `productivity_technology`
  ADD CONSTRAINT `productivity_technology_ibfk_1` FOREIGN KEY (`devID`) REFERENCES `developer` (`devID`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`techID`) REFERENCES `productivity_technology` (`techID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`rateID`) REFERENCES `rate` (`rateID`),
  ADD CONSTRAINT `rating_ibfk_4` FOREIGN KEY (`useID`) REFERENCES `use` (`useID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
