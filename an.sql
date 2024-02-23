-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 12:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `an`
--

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `power` (
  `Region` varchar(50) NOT NULL,
  `SiteId` varchar(50) NOT NULL,
  `Powersolutiontype` varchar(250) NOT NULL,
  `Maintenancecenter` varchar(250) NOT NULL,
  `PESystem` varchar(250) NOT NULL,
   `Typeandcapacity` varchar(50) NOT NULL,
`Tasktype` varchar(250) NOT NULL,
`DetailTaskDiscription` varchar(250) NOT NULL,
`SparepartusedItemcodeanddiscreption` varchar(250) NOT NULL,
`TaskprogressOpenClosed` varchar(250) NOT NULL,
`TaskDuration` varchar(250) NOT NULL,
`date` date NOT NULL,
`TeamMembersID` varchar(250) NOT NULL,
`Challenges` varchar(250) NOT NULL,
`Remark` varchar(250) NOT NULL

  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
