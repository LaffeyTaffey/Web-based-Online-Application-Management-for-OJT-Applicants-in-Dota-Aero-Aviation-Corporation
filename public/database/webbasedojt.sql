-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 02:03 AM
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
-- Database: `webbasedojt`
--

-- --------------------------------------------------------

--
-- Table structure for table `ojtapplicants`
--

CREATE TABLE `ojtapplicants` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Address_App` varchar(500) NOT NULL,
  `Gender` varchar(90) NOT NULL,
  `BirthDate` date NOT NULL,
  `BirthPlace` varchar(100) NOT NULL,
  `Religion` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Hobby_Interest` varchar(500) NOT NULL,
  `University` varchar(500) NOT NULL,
  `SchoolAddress` varchar(500) NOT NULL,
  `DegreeProgram` varchar(500) NOT NULL,
  `YearLevel` varchar(500) NOT NULL,
  `Adviser` varchar(500) NOT NULL,
  `TotalNo.` int(11) NOT NULL,
  `Area_intern` varchar(500) NOT NULL,
  `StartDate` date NOT NULL,
  `Finish_date` date NOT NULL,
  `Picture` varchar(500) NOT NULL,
  `NBI` varchar(500) NOT NULL,
  `MOA` varchar(500) NOT NULL,
  `Endorsement` varchar(500) NOT NULL,
  `DateReg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ojtapplicants`
--

INSERT INTO `ojtapplicants` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Address_App`, `Gender`, `BirthDate`, `BirthPlace`, `Religion`, `Email`, `PhoneNo`, `Hobby_Interest`, `University`, `SchoolAddress`, `DegreeProgram`, `YearLevel`, `Adviser`, `TotalNo.`, `Area_intern`, `StartDate`, `Finish_date`, `Picture`, `NBI`, `MOA`, `Endorsement`, `DateReg`) VALUES
(16, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St/', 'Female', '2002-09-07', 'Bulacan', 'Catholic', 're@gmail.com', 2147483647, 'none', 'UDM', 'Manila', 'BS Math', 'First Year', 'none', 123, 'department1', '2024-05-01', '2024-06-06', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', '2024-05-20 23:54:41'),
(17, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St/', 'Female', '2002-09-07', 'Bulacan', 'Catholic', 're@gmail.com', 2147483647, 'none', 'UDM', 'Manila', 'BS Math', 'First Year', 'none', 123, 'department1', '2024-05-01', '2024-06-06', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', '2024-05-20 23:56:20'),
(18, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:27:56'),
(19, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', 'team-2.jpg', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:35:31'),
(20, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', 'team-2.jpg', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ojtapplicants`
--
ALTER TABLE `ojtapplicants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ojtapplicants`
--
ALTER TABLE `ojtapplicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
