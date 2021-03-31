-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2013 at 05:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aitajmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ainfo`
--

CREATE TABLE IF NOT EXISTS `ainfo` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `uname` (`uname`,`upass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ainfo`
--

INSERT INTO `ainfo` (`aid`, `uname`, `upass`) VALUES
(1, 'sumit', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `atimetable`
--

CREATE TABLE IF NOT EXISTS `atimetable` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `uname` (`uname`,`day`,`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `atimetable`
--

INSERT INTO `atimetable` (`aid`, `uname`, `day`, `time`, `semester`, `subject`) VALUES
(1, 'deepak', 'FRIDAY', '9 to 11', '1st sem', 'C language'),
(2, 'sumit ubaa', 'FRIDAY', '10 to 12', '2nd', 'c++ lang'),
(3, '', '', '', '', ''),
(5, 'kesgh', 'WEDNESDAY', '2 to 4', '4th', 'DAA LAB'),
(7, 'meenakshi', 'TUESDAY', '9 to 12', '6th', 'DAA LAB'),
(9, 'xyz', 'THURSDAY', '9 to 11', '6th', 'ECA');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `usernme` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `tempadd` text NOT NULL,
  `padd` text NOT NULL,
  `post` text NOT NULL,
  `jdate` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `mno` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`usernme`,`password`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fname`, `usernme`, `password`, `email`, `sex`, `tempadd`, `padd`, `post`, `jdate`, `image`, `mno`) VALUES
(1, 'sumit', 'mr. suniil kumar ubana', 'sumit', 'sumit', 'sumit.ubana77@gmail.com', 'M', 'gulab bari ajmer', 'ashasdsdasndja asjbdjabsdasd asdkjaio', 'asjdausdbasd', '2013-08-31', 'upload/Untitled-2 copy.jpg', 2147483647),
(2, 'manish', 'mlasas', 'Manish', 'manish', 'asjdnas@gmail.com', 'M', 'askjdnas', 'jsnfjabsh', 'basbdb', '2013-08-31', 'upload/1233416_413944548709531_2002459701_a.jpg', 0),
(3, 'mayank', 'may', 'mayank', 'mayank', 'asdjn@ymail.com', 'M', 'jsdfh', 'kjds', 'sdfheudy', '2013-08-31', 'upload/images.jpg', 866346346),
(4, '', '', '', '', '', 'M', '', '', '', '2013-09-01', 'upload/', 0),
(5, 'meenakshi', 'h.mahawar', 'meenu', 'meenu', 'meenua@gmail.com', 'F', 'gasdj', 'kasjdf', 'gaa', '2013-09-01', 'upload/beforeiwasamom9.jpg', 765678877);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uname`, `comment`) VALUES
(1, ' dasd ', 'sdas'),
(2, ' sasas ', 'sdasdasd'),
(3, ' dasdas ', 'asdas'),
(4, '  ', '');

-- --------------------------------------------------------

--
-- Table structure for table `finfo`
--

CREATE TABLE IF NOT EXISTS `finfo` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobno` int(13) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `emailid` (`emailid`,`mobno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `finfo`
--

INSERT INTO `finfo` (`fid`, `uname`, `upass`, `gender`, `dob`, `city`, `address`, `emailid`, `mobno`) VALUES
(1, ' sumit ', 'sumit', 'm', '28may 2011', 'Delhi', 'smdsj', 'kjd@ymaillcom', 2147483647),
(2, 'sa', 'sa', 'm', '', '', '', '', 0),
(3, ' hi ', 'hi', 'm', '23232', 'Jaipur', 'dfd', 'jdf@ymail.vom', 2147483647),
(4, 'meenuu', 'meenu', 'f', '28 amay ', 'Delhi', 'sjdh', 'dfkjh', 2147483647),
(8, ' monday ', 'monday', 'm', '28 may 1990', 'Delhi', 'jsandjas', 'jncfcud@ymail.com', 989383393),
(10, 'sumit', 'sumit', 'm', '28 may 1992', 'Delhi', 'gulab bari ajmer', 'sumit.ubana77@gmail.com', 2147483647),
(11, 'pawan', 'pawan', 'm', '25-05-1992', 'Delhi', 'akdsjh', 'pawan@gmail.com', 2147483647),
(12, 'xyyz', 'xyyz', 'm', '5676', 'Jaipur', 'mgh', 'jyjgh', 76898);

-- --------------------------------------------------------

--
-- Table structure for table `flabitems`
--

CREATE TABLE IF NOT EXISTS `flabitems` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `roomno` int(200) NOT NULL,
  `desktop` int(200) NOT NULL,
  `keyboard` int(200) NOT NULL,
  `mouse` int(200) NOT NULL,
  `headphone` int(200) NOT NULL,
  `lancable` enum('y','n') NOT NULL,
  `os` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `fid` (`fid`),
  UNIQUE KEY `roomno` (`roomno`),
  UNIQUE KEY `roomno_2` (`roomno`,`desktop`,`keyboard`,`mouse`,`headphone`,`lancable`,`os`,`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `flabitems`
--

INSERT INTO `flabitems` (`fid`, `fname`, `roomno`, `desktop`, `keyboard`, `mouse`, `headphone`, `lancable`, `os`, `date`) VALUES
(1, ' Manish ', 200, 23, 24, 25, 26, 'y', 'Window 8', '2013-03-09'),
(2, '  ', 0, 0, 0, 0, 0, '', '--Select O.S.--', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `uptest`
--

CREATE TABLE IF NOT EXISTS `uptest` (
  `upid` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `newsname` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `opentype` enum('_parent','_blank') NOT NULL,
  `status` enum('A','I') NOT NULL,
  PRIMARY KEY (`upid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `uptest`
--

INSERT INTO `uptest` (`upid`, `filename`, `path`, `newsname`, `location`, `opentype`, `status`) VALUES
(1, 'My_CV.pdf', 'data/', 'CV', '1', '_parent', 'A'),
(2, 'dota2wallpaper_Lina_by_2befine.jpg', 'data/', 'Today Is SUNDAY', '1', '_parent', 'A'),
(3, 'LUMIERES_no3-1600.jpg', 'data/', 'Result', '1', '_parent', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
