-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 09:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyway`
--

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `code` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mob_no` decimal(10,0) DEFAULT NULL,
  `pin` decimal(6,0) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `Date_add` date DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Ready',
  `email` varchar(320) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`code`, `name`, `mob_no`, `pin`, `address`, `Date_add`, `status`, `email`) VALUES
(4, 'akkaj', '1223455', '13244', 'dffgd', NULL, 'Completed', 'ghsh'),
(5, 'akkaj', '1223455', '13244', 'dffgd', NULL, 'Completed', 'ghsh'),
(6, 'aman', '1223455', '13244', 'dffgd', NULL, 'Completed', 'ghsh'),
(7, 'akkaj', '1223455', '13244', 'dffgd', NULL, 'Shipped', 'ghsh'),
(8, 'akkaj', '1223455', '13244', 'dffgd', '2021-11-09', 'Completed', 'ghsh'),
(9, 'ankit', '1223455', '13244', 'dffgd', '2021-11-09', 'Ready', 'ghsh'),
(10, 'scssf', NULL, '222162', 'ssa', '2021-11-09', 'Completed', 'akashaman22singh@gmail.com'),
(11, 'Akash  Aman singh', NULL, '222162', 'notyour mattersdddUttar Pradesh', '2021-11-10', 'Completed', 'akashaman22singh@gmail.com'),
(12, 'jatin ', '9192771552', '222162', 'JAUNPURidont knowUttar Pradesh', '2021-11-15', 'Completed', 'jatin@gmail.com'),
(13, 'gaurav', '8768556589', '565432', 'guygssss223UP', '2021-11-20', 'Ready', 'jatin@gmail.com'),
(14, 'Rachit', '5456423315', '273009', 'GondaCanttUP', '2021-11-25', 'Ready', 'rachitfire@gmail.com'),
(15, 'akka', '6898763378', '222162', 'sadfdsFWWJKHWALFJUttar Pradesh', '2021-11-26', 'Shipped', 'akashaman22singh@gmail.com'),
(16, 'mukesh', '9999999999', '454567', 'azamgarhBhannaourup', '2022-02-07', 'Ready', 'mukeshkumar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
