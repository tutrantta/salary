-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 03:40 AM
-- Server version: 5.6.20
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salary`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employeetype`
--

CREATE TABLE IF NOT EXISTS `tbl_employeetype` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_employeetype`
--

INSERT INTO `tbl_employeetype` (`id`, `name`) VALUES
(1, 'Normal Employee'),
(2, 'Hourly Employee'),
(3, 'Sale Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `employeetype_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `isaccountant` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `employeetype_id`, `username`, `password`, `lastname`, `firstname`, `isaccountant`) VALUES
(1, 1, 'hieu', 'afc8e16842061ea3dbb023bf5f08d1bc3a728429313fab0cba', 'Hieu', 'Nguyen', 1),
(2, 1, 'long', 'fc66f021c67d064c1490a12b5a4d4d2f5167ca692a16ca12f1', 'Long', 'Tran', 0),
(3, 2, 'hung', 'c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b', 'Hung', 'Nguyen', 0),
(4, 3, 'lan', '094a367b026246fb64649c4f868a45d8187821d16a97314143', 'Lan', 'Pham', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weeklysalary`
--

CREATE TABLE IF NOT EXISTS `tbl_weeklysalary` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `basic_salary` double NOT NULL,
  `worked_hour` int(11) DEFAULT NULL,
  `gross_sale` double DEFAULT NULL,
  `commission_rate` float DEFAULT NULL,
  `gross_salary` double NOT NULL,
  `net_salary` double NOT NULL,
  `created_date` datetime NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employeetype`
--
ALTER TABLE `tbl_employeetype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_weeklysalary`
--
ALTER TABLE `tbl_weeklysalary`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employeetype`
--
ALTER TABLE `tbl_employeetype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_weeklysalary`
--
ALTER TABLE `tbl_weeklysalary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
