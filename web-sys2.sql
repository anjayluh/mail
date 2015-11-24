-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2015 at 06:58 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web-sys2`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(128) NOT NULL,
  `key` varchar(128) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(250) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` binary(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `address`, `subject`, `message`, `status`, `date`) VALUES
(1, 'address', 'message', 'body', '0', '0000-00-00'),
(2, 'a@gmail.com', 'a', 'a', '0', '0000-00-00'),
(3, 'a@gmail.com', 'a', 'eh eh!', '0', '0000-00-00'),
(4, 'a@gmail.com', 'a', 'a', 's', '0000-00-00'),
(5, 'a@gmail.com', 'a', 'a', 's', '0000-00-00'),
(6, 'a@gmail.com', 'a', 'a', '\0', '0000-00-00'),
(7, 'a@gmail.com', 'a', 'a', '\0', '0000-00-00'),
(8, 'a@gmail.com', 'a', 'a', '1', '0000-00-00'),
(9, 'aa', 'aa', 'aa', '1', '0000-00-00'),
(10, 'AA', 'AA', 'AA', '1', '0000-00-00'),
(11, 'blalalalalala', 'blalalala', 'blalalalala', '1', '2015-11-16'),
(12, 'shammaxensia@gmail.com', 'hihi', 'hello hello', '0', '2015-11-18'),
(13, 'n@gmail.com', 'blow', 'you will get a blow', '0', '2015-11-18'),
(14, 'nambi@gmail.com', 'Hello', 'Hey,\r\nhope you are doing great', '0', '2015-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `active` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `active`) VALUES
(27, 'name', 'lueshhilda@gmail.com', 'luesh', 'e31ebf7caf5404e8204dfe2bdee3f8ef', '0'),
(28, '', 'b@gmail.com', '', '92eb5ffee6ae2fec3ad71c777531578f', '0'),
(30, '', 'c@gmail.com', 'c', '4a8a08f09d37b73795649038408b5f33', '0'),
(31, '', 'ella@gmail.com', 'ella', 'ec5e1e94c042dda33822701a45eb5e30', '0'),
(32, '', 'shamaxensia@gmail.com', 'sham', 'd643d0b248c77dae22e474d9c037ad49', '0'),
(33, '', 'nabaweesigonza@gmail.com', 'gonza', '827ccb0eea8a706c4c34a16891f84e7b', '0'),
(34, '', 'luutu@gmail.com', 'luutu', 'd47347400711fa21510fef55e39131fe', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
