-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2015 at 02:53 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookabus`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_billing_customer1_idx` (`customer_id`),
  KEY `fk_billing_booking1_idx` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `scheadule_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_booking_scheadule1_idx` (`scheadule_id`),
  KEY `fk_booking_customer1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL,
  `plate_no` varchar(7) NOT NULL,
  `seating_cap` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `condition` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `credit_info`
--

CREATE TABLE IF NOT EXISTS `credit_info` (
  `customer_id` int(11) NOT NULL,
  `card_number` varchar(45) NOT NULL,
  `credit_provider` varchar(45) NOT NULL,
  `expiration_date` date NOT NULL,
  PRIMARY KEY (`customer_id`,`card_number`),
  KEY `fk_credit_info_customer1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `MI` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `valid` varchar(45) NOT NULL,
  `register_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `date_added` varchar(45) NOT NULL,
  `emp_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE IF NOT EXISTS `employee_login` (
  `employee_id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `fk_table1_employee2_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `billing_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  KEY `fk_table1_billing1_idx` (`billing_id`),
  KEY `fk_table1_employee1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loginfo`
--

CREATE TABLE IF NOT EXISTS `loginfo` (
  `customer_id` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  KEY `fk_loginfo_user1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE IF NOT EXISTS `reward` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `action` varchar(10) NOT NULL,
  `description` tinytext NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reward_customer1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scheadule`
--

CREATE TABLE IF NOT EXISTS `scheadule` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `destination` varchar(45) NOT NULL,
  `station` varchar(45) NOT NULL,
  `departure` time NOT NULL,
  `ETA` time NOT NULL,
  `date` date NOT NULL,
  `fare` decimal(4,2) NOT NULL,
  `trip_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_scheadule_bus1_idx` (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `seat_code` varchar(4) NOT NULL,
  `booking_id` int(11) NOT NULL,
  KEY `fk_seat_booking1_idx` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `fk_billing_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_billing_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_scheadule1` FOREIGN KEY (`scheadule_id`) REFERENCES `scheadule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `credit_info`
--
ALTER TABLE `credit_info`
  ADD CONSTRAINT `fk_credit_info_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD CONSTRAINT `fk_table1_employee2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_table1_billing1` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loginfo`
--
ALTER TABLE `loginfo`
  ADD CONSTRAINT `fk_loginfo_user1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reward`
--
ALTER TABLE `reward`
  ADD CONSTRAINT `fk_reward_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `scheadule`
--
ALTER TABLE `scheadule`
  ADD CONSTRAINT `fk_scheadule_bus1` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `fk_seat_booking1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
