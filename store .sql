-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 06:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `chassis_number` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`chassis_number`, `model`, `color`) VALUES
(-2, 75, 'red'),
(1, 71, 'black'),
(2, 81, 'black'),
(7, 75, 'black'),
(41, 72, 'black'),
(1000, 71, 'blue'),
(1003, 72, 'blue'),
(1004, 72, 'green'),
(1110, 75, 'blue'),
(1123, 92, 'black'),
(1124, 92, 'white'),
(1132, 1001, 'silver'),
(1133, 1002, 'orange'),
(1134, 1002, 'orange'),
(1135, 1003, 'orange'),
(1136, 1003, 'silver'),
(1139, 87, 'orange'),
(1140, 87, 'silver'),
(1141, 1101, 'silver'),
(1142, 1101, 'silver'),
(1143, 1102, 'silver'),
(1144, 1102, 'silver'),
(1145, 1103, 'silver'),
(1146, 1103, 'silver'),
(1147, 96, 'silver'),
(1148, 96, 'silver'),
(1151, 1201, 'white'),
(1152, 1201, 'white'),
(1154, 1202, 'white'),
(1156, 86, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `email`, `pass`, `phone`, `address`) VALUES
(3, ' Ananthesh', 'anantheshshenoy72@gmail.com', '1234', '1234567891', 'Mangalore'),
(8, 'Bhargav', 'bhargav19@gmail.com', '2468', '1234567891', 'mangaluru');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `m_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`m_id`, `name`) VALUES
(7001, 'Lamborghini'),
(8001, 'Audi'),
(9001, 'BMW'),
(10001, 'Rolls Royce'),
(11001, 'Ferrari'),
(12001, 'Mercedes Benz');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `basic_spec` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model`, `m_id`, `name`, `year`, `basic_spec`) VALUES
(71, 7001, 'Lamboghini Aventadoo', 2015, ''),
(72, 7001, 'Lamboghini Huracan', 2017, ''),
(73, 7001, 'Lamboghini Urus', 2020, ''),
(75, 7001, 'Lamboghini Aventadoo', 2015, ''),
(81, 8001, 'Audi R8', 2016, ''),
(82, 8001, 'Audi Q7', 2015, ''),
(83, 8001, 'Audi RS7', 2016, ''),
(85, 8001, 'Audi TT', 2015, ''),
(86, 8001, 'Audi Q6', 2015, ''),
(87, 8001, 'Audi A6 ', 2020, ''),
(91, 9001, 'BMW M4', 2020, ''),
(92, 9001, 'BMW X6', 2019, ''),
(93, 9001, 'BMW i8', 0000, ''),
(94, 9001, 'BMW M3', 2021, ''),
(95, 9001, 'BMW X3', 2020, ''),
(96, 9001, 'BMW X6', 2017, ''),
(1001, 10001, 'Rolls Royce Black Ba', 2017, ''),
(1002, 10001, 'Rolls Royce Boat', 2020, ''),
(1003, 10001, 'Rolls Royce Spectre', 2019, ''),
(1101, 11001, 'Ferrari Purosangue', 2022, ''),
(1102, 11001, 'Ferrari SF90', 2021, ''),
(1103, 11001, 'Ferrari Roma', 2022, ''),
(1200, 12001, '  Mercedes-Benz G', 2016, ''),
(1201, 12001, 'Mercedes-Benz AMG S1', 2020, ''),
(1202, 12001, '  Mercedes-Benz C', 2021, ''),
(1204, 12001, 'Outlander', 2016, ''),
(1205, 12001, 'Pajero', 2014, '');

-- --------------------------------------------------------

--
-- Table structure for table `sale2`
--

CREATE TABLE `sale2` (
  `sale_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `carmodel` varchar(100) NOT NULL,
  `ordertime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale2`
--

INSERT INTO `sale2` (`sale_id`, `customer_id`, `carmodel`, `ordertime`) VALUES
(1, 1, '72', '2017-11-20 21:40:31'),
(2, 2, '81', '2017-11-20 21:44:35'),
(3, 1, '81', '2017-11-20 21:45:33'),
(4, 1, '81', '2017-11-20 21:46:54'),
(5, 2, '95', '2022-12-28 20:04:43'),
(6, 2, '94', '2022-12-28 20:16:30'),
(7, 4, '91', '2022-12-31 19:51:06'),
(22, 3, '73', '2023-01-08 12:16:16'),
(23, 8, '75', '2023-01-08 20:37:30');

--
-- Triggers `sale2`
--
DELIMITER $$
CREATE TRIGGER `Transaction` BEFORE INSERT ON `sale2` FOR EACH ROW BEGIN
	SET NEW.ordertime = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `td_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `carmodel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`td_id`, `customer_id`, `carmodel`) VALUES
(1, 3, '73'),
(2, 3, '1204'),
(3, 3, '93');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`chassis_number`),
  ADD KEY `serial` (`model`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `sale2`
--
ALTER TABLE `sale2`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`td_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `chassis_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1164;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale2`
--
ALTER TABLE `sale2`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`model`) REFERENCES `model` (`model`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manufacturer` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
