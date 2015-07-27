-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 02:30 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `regid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contactno` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `regid`, `name`, `contactno`, `address`, `pincode`, `created`) VALUES
(1, 'admin', 'admin', '987', 'address', '123', '2015-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL,
  `regid` varchar(20) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `Contactno` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `docid` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `reciptimage` varchar(200) NOT NULL,
  `fee` varchar(150) NOT NULL,
  `charge` varchar(150) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `regid`, `Name`, `address`, `Contactno`, `pincode`, `image`, `docid`, `type`, `description`, `reciptimage`, `fee`, `charge`, `created`) VALUES
(1, 'test', 'test', 'test', '9717736752', '123', 'm.jpeg', 1, 'fiver', 'marne wala hai ', 'ma.jpg', '250', '300', '2015-07-03'),
(2, 'second', 'second', 'second', '99999999999', '123', '1.png', 1, 'fff', 'dsjkl', 'ksdjf', '500', '500', '2015-07-01'),
(3, 'kkk', 'k', 'k', 'k', 'k', 'k', 1, 'k', 'k', 'k', 'k', 'k', '2015-07-07'),
(4, 'test', 'kk', 'kk', 'kk', '123', 'alliya bhatsweet .jpg', 5, 'jj', 'kk', 'img', '500', '500', '2015-07-07'),
(5, 'test', 'kk', 'kk', 'd', '55', 'alliya bhat sexy 1.jpg', 5, 'll', 'jj', 'img', '500', '500', '2015-07-07'),
(6, 'test', 'a', 'a', 'a', 'a', '02.jpg', 5, '45', '545', 'img', '500', '500', '2015-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `acctype` int(11) NOT NULL,
  `regid` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `acctype`, `regid`, `name`, `address`, `pincode`) VALUES
(1, 1, 'admin', 'kunwar kishor', 'vasundhara', 123),
(2, 0, 'test', 'test', 'test', 123),
(3, 0, 'nhu', 'trtr', 'kk', 4545),
(4, 0, 'test', 'a', 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
