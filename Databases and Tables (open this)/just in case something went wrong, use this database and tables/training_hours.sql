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
-- Table structure for table `training_hours`
--

CREATE TABLE `training_hours` (
  `ID` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `training_date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `hours_worked` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_hours`
--

INSERT INTO `training_hours` (`ID`, `applicant_id`, `training_date`, `time_in`, `time_out`, `hours_worked`) VALUES
(1, 5, '2024-07-14', '08:00:00', '17:00:00', 9.00),
(2, 5, '2024-07-14', '10:56:00', '22:57:00', 12.02),
(3, 5, '2024-07-14', '06:57:00', '22:57:00', 16.00),
(4, 16, '2024-07-14', '01:00:00', '12:59:00', 11.98),
(5, 16, '2024-07-14', '10:59:00', '22:59:00', 12.00),
(6, 16, '2024-07-14', '11:00:00', '13:00:00', 2.00),
(7, 16, '2024-07-14', '11:03:00', '23:03:00', 12.00),
(8, 16, '2024-07-14', '11:03:00', '23:03:00', 12.00),
(9, 29, '2024-07-15', '09:01:00', '21:56:00', 12.92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training_hours`
--
ALTER TABLE `training_hours`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training_hours`
--
ALTER TABLE `training_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `training_hours`
--
ALTER TABLE `training_hours`
  ADD CONSTRAINT `training_hours_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `ojtapplicants` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
