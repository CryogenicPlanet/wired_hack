-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql201.byetcluster.com
-- Generation Time: Nov 11, 2016 at 07:42 AM
-- Server version: 5.6.32-78.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `0fe_19140794_zonne`
--

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `CID` int(255) NOT NULL,
  `Cname` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Donations`
--

CREATE TABLE IF NOT EXISTS `Donations` (
  `DID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Project`
--

CREATE TABLE IF NOT EXISTS `Project` (
  `PID` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `DesiredAmount` int(255) NOT NULL,
  `Descrption` varchar(2048) NOT NULL,
  `pic1` varchar(256) NOT NULL,
  `pic2` varchar(256) NOT NULL,
  `pic3` varchar(256) NOT NULL,
  `CID` int(255) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Updates`
--

CREATE TABLE IF NOT EXISTS `Updates` (
  `PID` int(255) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(2048) NOT NULL,
  `pic1` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(256) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Salt` varchar(32) NOT NULL,
  `Creditcard_no` int(16) NOT NULL,
  `Expire_date` date NOT NULL,
  `Cvv` int(3) NOT NULL,
  `Name_card` varchar(256) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
