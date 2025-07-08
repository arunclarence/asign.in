-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2014 at 07:10 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trendmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `trendmaker_admin`
--

CREATE TABLE IF NOT EXISTS `trendmaker_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trendmaker_admin`
--

INSERT INTO `trendmaker_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `trendmaker_portfolio`
--

CREATE TABLE IF NOT EXISTS `trendmaker_portfolio` (
  `portfolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_link` varchar(255) NOT NULL,
  `portfolio_project` varchar(255) NOT NULL,
  `portfolio_datetime` datetime NOT NULL,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trendmaker_portfolio`
--

