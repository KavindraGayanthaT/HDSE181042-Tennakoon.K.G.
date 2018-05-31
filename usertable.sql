-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 04:10 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `isdeleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `firstname`, `lastname`, `email`, `password`, `lastlogin`, `isdeleted`) VALUES
(1, 'Kavindra', 'Tennakoon', 'kavi@gmail.com', '12345', '0000-00-00 00:00:00', 0),
(2, 'Suranga', 'Tennakoon', 'sura@gmail.com', 'sura@123', '0000-00-00 00:00:00', 0),
(3, 'Kalana', 'Perera', 'kalana@gmail.com', 'kalana@123', '0000-00-00 00:00:00', 0),
(4, 'Ajith', 'Bandara', 'ajith@gmail.com', '123', '0000-00-00 00:00:00', 0),
(5, 'Saman', 'Kumara', 'saman@gmail.com', 'saman@123', '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
