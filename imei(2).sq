-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 07:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imei`
--
CREATE DATABASE IF NOT EXISTS `imei` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `imei`;

-- --------------------------------------------------------

--
-- Table structure for table `imei`
--

CREATE TABLE IF NOT EXISTS `imei` (
  `order_no` int(20) NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  `premium` enum('y','n') NOT NULL DEFAULT 'y',
  `transection_id` int(11) NOT NULL,
  `status` enum('n','p','c','d') NOT NULL,
  `imei` bigint(100) DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`order_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `imei`
--

INSERT INTO `imei` (`order_no`, `date_time`, `premium`, `transection_id`, `status`, `imei`, `comment`) VALUES
(2, '0000-00-00 00:00:00', 'n', 2147483647, 'c', 2147483647434343433, ''),
(3, '0000-00-00 00:00:00', 'n', 3323, 'n', 9223372036854775807, ''),
(13, '2016-05-20 07:01:46', 'n', 0, 'n', 352046063713447, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$759593551573b1392896bu60hhOm7UmyQC2KS7.9Nxf87R2kWjRIu', '2016-05-17 12:50:26'),
(2, 'admin123', 'admin123@admin.com', '0192023a7bbd73250516f069df18b500', '2016-05-17 13:08:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
