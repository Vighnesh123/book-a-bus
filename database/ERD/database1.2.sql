-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 09:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

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
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `seat_code` varchar(4) NOT NULL,
  `seat_bus_id` int(11) NOT NULL,
  `booking_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_id`, `schedule_id`, `seat_code`, `seat_bus_id`, `booking_status`) VALUES
(1, 1, 1, 'AA01', 1, ''),
(2, 2, 2, 'AA02', 2, ''),
(3, 3, 3, 'AA03', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL,
  `plate_no` varchar(7) NOT NULL,
  `seating_cap` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `condition` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `plate_no`, `seating_cap`, `type`, `condition`) VALUES
(1, 'AAA1234', 45, 'normal', 'normal'),
(2, 'ABC1234', 45, 'normal', 'normal'),
(3, 'LTO1234', 45, 'normal', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `credit_info`
--

CREATE TABLE IF NOT EXISTS `credit_info` (
  `customer_id` int(11) NOT NULL,
  `card_number` varchar(45) NOT NULL,
  `credit_provider` varchar(45) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credit_info`
--

INSERT INTO `credit_info` (`customer_id`, `card_number`, `credit_provider`, `expiration_date`) VALUES
(1, '5679-5234-4732-9999', 'BDO', '2015-12-18'),
(2, '4321-5678-9012-1234', 'BPI', '2015-12-25'),
(3, '4000-1234-5678-9010', 'ChinaBank', '2015-12-25');

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `MI`, `email`, `phone`, `birthday`, `valid`, `register_date`, `password`) VALUES
(1, 'Bryan', 'Aclan', 'B', 'bmaclan@apc.edu.ph', '09271234567', '2015-08-03', '', '2015-03-02', ''),
(2, 'Virgil', 'Cruz', 'I', 'vicruz@apc.edu.ph', '09151234567', '2015-06-05', '', '2015-03-02', ''),
(3, 'Marc', 'Alo', 'R', 'mgalo@apc.edu.ph', '09171234567', '2015-04-08', '', '2015-03-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `permission` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `username`, `password`, `permission`) VALUES
(1, 'Jacky', 'Chan', 'jlchan', 'jackychan', ''),
(2, 'Aldrin', 'Esteban', 'aresteban', 'chronocross', ''),
(3, 'Paolo', 'Mayo', 'pqmayo', 'riotgear', '');

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `customer_id`, `point`, `action`, `description`, `date`) VALUES
(1, 1, 100, '', '', '2015-03-02'),
(2, 2, 200, '', '', '2015-03-02'),
(3, 3, 300, '', '', '2015-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `destination` varchar(45) NOT NULL,
  `station` varchar(45) NOT NULL,
  `departure` time NOT NULL,
  `ETA` time NOT NULL,
  `date` date NOT NULL,
  `fare` decimal(7,2) NOT NULL,
  `trip_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `bus_id`, `destination`, `station`, `departure`, `ETA`, `date`, `fare`, `trip_status`) VALUES
(1, 1, 'Baguio', 'Buendia', '07:30:00', '14:00:00', '2015-03-04', '800.95', 'OTW'),
(2, 2, 'Batangas', 'Buendia', '04:00:00', '12:00:00', '2015-03-07', '750.00', 'OTW'),
(3, 3, 'Tarlac', 'Pasay', '08:00:00', '15:00:00', '2015-03-09', '900.00', 'OTW'),
(4, 1, 'Puso ni Faye', 'Malibay', '10:00:00', '12:00:00', '2015-03-05', '8.00', 'OTW');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `code` varchar(4) NOT NULL,
  `bus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`code`, `bus_id`) VALUES
('AA01', 1),
('AA02', 1),
('AA03', 1),
('AA01', 2),
('AA02', 2),
('AA01', 3),
('AA02', 3),
('AA03', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_booking_customer1_idx` (`customer_id`), ADD KEY `fk_booking_schedule1_idx` (`schedule_id`), ADD KEY `fk_booking_seat1_idx` (`seat_code`,`seat_bus_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_info`
--
ALTER TABLE `credit_info`
 ADD PRIMARY KEY (`customer_id`,`card_number`), ADD KEY `fk_credit_info_customer1_idx` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`), ADD FULLTEXT KEY `fname` (`fname`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_reward_customer1_idx` (`customer_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_schedule_bus1_idx` (`bus_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
 ADD PRIMARY KEY (`code`,`bus_id`), ADD KEY `fk_seat_bus1_idx` (`bus_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
ADD CONSTRAINT `fk_booking_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_booking_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_booking_seat1` FOREIGN KEY (`seat_code`, `seat_bus_id`) REFERENCES `seat` (`code`, `bus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `credit_info`
--
ALTER TABLE `credit_info`
ADD CONSTRAINT `fk_credit_info_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reward`
--
ALTER TABLE `reward`
ADD CONSTRAINT `fk_reward_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
ADD CONSTRAINT `fk_schedule_bus1` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
ADD CONSTRAINT `fk_seat_bus1` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
