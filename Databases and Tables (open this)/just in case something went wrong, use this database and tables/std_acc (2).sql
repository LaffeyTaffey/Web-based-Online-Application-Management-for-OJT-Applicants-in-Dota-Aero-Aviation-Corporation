-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 05:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_acc`
--

CREATE TABLE `std_acc` (
  `std_id` int(11) NOT NULL,
  `reference_number` varchar(200) DEFAULT NULL,
  `user_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_acc`
--

INSERT INTO `std_acc` (`std_id`, `reference_number`, `user_type`, `name`, `password`) VALUES
(3, 'OJT24_3', '', '', 'default'),
(4, 'OJT24_4', 'admin', '', 'default'),
(5, 'OJT24_5', '', '', 'default'),
(6, 'OJT24_6', '', '', 'default'),
(7, 'OJT24_7', '', '', 'default'),
(8, 'OJT24_8', '', '', NULL),
(9, 'OJT24_9', '', '', NULL),
(10, 'OJT24_10', '', '', 'default'),
(11, 'OJT24_11', '', '', 'default'),
(12, 'OJT24_12', '', '', NULL),
(13, 'OJT24_13', '', '', 'default'),
(14, 'OJT24_14', '', '', 'default'),
(15, 'OJT24_15', '', '', NULL),
(16, 'OJT24_16', '', '', 'default'),
(17, 'OJT24_17', '', '', NULL),
(18, 'OJT24_18', '', '', NULL),
(19, 'OJT24_19', '', '', NULL),
(20, 'OJT24_20', '', '', NULL),
(21, 'OJT24_21', '', '', NULL),
(22, 'OJT24_22', '', '', 'default'),
(23, 'ERROL ADMIN', 'admin', '', 'admin'),
(24, 'OJT24_24', '', '', NULL),
(25, 'OJT24_25', '', '', NULL),
(26, 'OJT24_26', '', '', NULL),
(27, 'OJT24_27', '', '', NULL),
(28, 'OJT24_28', '', '', NULL),
(29, 'OJT24_29', '', '', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_acc`
--
ALTER TABLE `std_acc`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_acc`
--
ALTER TABLE `std_acc`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
