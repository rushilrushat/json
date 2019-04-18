-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2019 at 04:00 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8589858_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule_tbl`
--

CREATE TABLE `schedule_tbl` (
  `s_id` int(100) NOT NULL,
  `s_date` date NOT NULL,
  `s_stime` time NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedule_tbl`
--

INSERT INTO `schedule_tbl` (`s_id`, `s_date`, `s_stime`, `e_time`) VALUES
(68, '2019-04-05', '01:57:00', '03:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `status_tbl`
--

CREATE TABLE `status_tbl` (
  `motor_status` varchar(20) NOT NULL,
  `s_time` varchar(20) NOT NULL,
  `valve_status` varchar(20) NOT NULL,
  `pressure_status` varchar(100) NOT NULL,
  `flow_status` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_tbl`
--

INSERT INTO `status_tbl` (`motor_status`, `s_time`, `valve_status`, `pressure_status`, `flow_status`) VALUES
('OFF', '12:39 AM', 'OFF', '0.0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
