-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2020 at 04:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbstartup`
--
CREATE DATABASE IF NOT EXISTS `dbstartup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbstartup`;

-- --------------------------------------------------------

--
-- Table structure for table `tblbuyer`
--

CREATE TABLE IF NOT EXISTS `tblbuyer` (
  `bEmail` varchar(50) NOT NULL,
  `bName` varchar(50) NOT NULL,
  `bAddress` varchar(100) NOT NULL,
  `bContact` varchar(50) NOT NULL,
  PRIMARY KEY (`bEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbuyer`
--

INSERT INTO `tblbuyer` (`bEmail`, `bName`, `bAddress`, `bContact`) VALUES
('anju@gmail.com', 'Anju', 'ksdjhcd', '9562130478');

-- --------------------------------------------------------

--
-- Table structure for table `tblcoder`
--

CREATE TABLE IF NOT EXISTS `tblcoder` (
  `cEmail` varchar(50) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cAddress` varchar(100) NOT NULL,
  `cContact` varchar(50) NOT NULL,
  `cImg` varchar(100) NOT NULL,
  PRIMARY KEY (`cEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcoder`
--

INSERT INTO `tblcoder` (`cEmail`, `cName`, `cAddress`, `cContact`, `cImg`) VALUES
('nithin@gmail.com', 'Nithin', 'kjfvjhd', '9587412630', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`username`, `password`, `utype`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', '1'),
('nithin@gmail.com', 'nithin@123', 'coder', '1'),
('anju@gmail.com', 'anju@123', 'buyer', '1'),
('anju@gmail.com', '', 'buyer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblrating`
--

CREATE TABLE IF NOT EXISTS `tblrating` (
  `rId` int(11) NOT NULL AUTO_INCREMENT,
  `cEmail` varchar(50) NOT NULL,
  `bEmail` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblrating`
--

INSERT INTO `tblrating` (`rId`, `cEmail`, `bEmail`, `rating`) VALUES
(1, 'nithin@gmail.com', 'anju@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE IF NOT EXISTS `tblrequest` (
  `reqId` int(11) NOT NULL AUTO_INCREMENT,
  `buyerEmail` varchar(50) NOT NULL,
  `reqDescription` varchar(100) NOT NULL,
  `otherReq` varchar(100) NOT NULL,
  `dateComp` date NOT NULL,
  `reqStatus` varchar(50) NOT NULL,
  `cEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`reqId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`reqId`, `buyerEmail`, `reqDescription`, `otherReq`, `dateComp`, `reqStatus`, `cEmail`) VALUES
(1, 'anju@gmail.com', 'lksjvfn njvk djnsdced jnvsd', 'kjndkfvsd jvwejfwewe fwjenff;we fweknjwj', '2020-10-31', 'accepted', 'nithin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblworkstatus`
--

CREATE TABLE IF NOT EXISTS `tblworkstatus` (
  `wId` int(11) NOT NULL AUTO_INCREMENT,
  `reqId` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `workDesc` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`wId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblworkstatus`
--

INSERT INTO `tblworkstatus` (`wId`, `reqId`, `link`, `workDesc`, `status`) VALUES
(1, 1, 'http://kjsdnsd.vv', 'sekjvner eisrnvier inrif firnfiwe', 'jkfv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
