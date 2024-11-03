-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 03:27 AM
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
  `DateReg` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ojtapplicants`
--

INSERT INTO `ojtapplicants` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Address_App`, `Gender`, `BirthDate`, `BirthPlace`, `Religion`, `Email`, `PhoneNo`, `Hobby_Interest`, `University`, `SchoolAddress`, `DegreeProgram`, `YearLevel`, `Adviser`, `TotalNo.`, `Area_intern`, `StartDate`, `Finish_date`, `Picture`, `NBI`, `MOA`, `Endorsement`, `DateReg`, `Status`) VALUES
(16, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St/', 'Female', '2002-09-07', 'Bulacan', 'Catholic', 're@gmail.com', 2147483647, 'none', 'UDM', 'Manila', 'BS Math', 'First Year', 'none', 123, 'department1', '2024-05-01', '2024-06-06', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', '2024-05-20 23:54:41', 'approved'),
(17, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St/', 'Female', '2002-09-07', 'Bulacan', 'Catholic', 're@gmail.com', 2147483647, 'none', 'UDM', 'Manila', 'BS Math', 'First Year', 'none', 123, 'department1', '2024-05-01', '2024-06-06', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', 'Dashboard.PNG', '2024-05-20 23:56:20', 'approved'),
(18, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:27:56', 'approved'),
(19, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', 'team-2.jpg', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:35:31', ''),
(20, 'Cecil', 'Ledesma', 'Pineda', 'Kalimbas St.', 'Female', '2024-05-08', 'Bulacan', 'Catholic', 'sas@gmail.com', 6, 'y', 'fdf', 'fd', 'fd', 'First Year', 'fdf', 3434, 'department1', '2024-05-07', '2024-05-16', 'team-2.jpg', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2x2-ID-Picture.png', '2024-05-21 00:39:26', ''),
(21, '21212', '2121', '121', '1212', 'Female', '2024-06-06', '1212', '1212', '1212', 1212, '1212', '1212', '1212', '121', 'First Year', '12', 21212, 'department2', '2024-05-29', '2024-05-28', 'webbasedojt.sql', 'webbasedojt.sql', 'webbasedojt.sql', 'webbasedojt.sql', '2024-05-21 10:14:31', ''),
(22, 'hello', 'yes', 'yessss', '1626', 'Male', '2024-06-25', '123123', '123', 'levirodelas420@gmail.com', 2147483647, '123', '123123', '1626', '123', 'Second Year', '123123', 123, 'department2', '2024-05-26', '2024-06-18', 'backup sched ccj 1st sem.xlsx', 'backup sched ccj 1st sem.xlsx', 'CCJ SCHEDULE OF CLASSES 1ST SEM 2024.xlsx', 'CCJ SCHEDULE OF CLASSES 1ST SEM 2024.xlsx', '2024-06-11 08:24:21', ''),
(23, 'ssafasafsdsad', 'zczJHGghjg', 'GHGJHG', 'HGHGHJGJ', 'Female', '3212-12-12', 'JSKHAJKFHASJKH', 'ASJKGFJKAHFJ', 'AKJFALKJ', 521546616, 'AJKSHFJKAHFJKAHSJF', 'JAHSFJHAJK', 'JSFHAJHFJAH', 'AKSJFHAJKHF', 'Second Year', 'JKSFHAJKFH', 45, 'deparment3', '0000-00-00', '0000-00-00', '572caa71390aaea816ca6017f431149a4805186dr1-623-623v2_00.jpg', '$A.jpg', '`0.0.1.0.0.0.png', '`0.0.1.0.0.0.png', '2024-06-11 14:37:57', ''),
(25, 'marc', 'macinas', 'sayago', '1122', 'male', '2024-06-01', '', '', '', 0, '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '2024-06-13 08:58:31', ''),
(26, 'marc ', 'macinas', 'sayago', '22 neptune st', 'Male', '2004-11-11', 'manila', 'catholic', 'levirodelas429@gmail.com', 2147483647, 'computer games', 'UDM', 'ERMITA', 'BS MATH', 'Second Year', 'Doc De Leon', 600, 'department1', '2024-01-20', '2024-02-20', '$A.jpg', '$A.jpg', '$A.jpg', '$A.jpg', '2024-06-13 10:45:33', ''),
(27, 'helloadasd', 'yes', 'yessss', '1626', 'Male', '3333-12-12', '123123', '123', 'levirodelas420@gmail.com', 2147483647, '123', '123123123123123', '162612', '123123123213', '', '123123', 123123123, 'department1', '0000-00-00', '1212-12-12', 'preview.gif', 'preview.gif', 'preview.gif', 'preview.gif', '2024-06-15 21:34:31', ''),
(31, 'asda', 'asdsa', '', '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '2024-07-09 20:41:16', ''),
(37, 'asdad', 'asda', 'adsa', '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '2024-07-09 21:26:18', ''),
(38, 'jashfj', 'aihfsoihajlk', 'ajkhfsj', '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '2024-07-10 07:57:58', 'approved'),
(39, 'shit', 'shit\r\n', 'shit', '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '', '', '', '', '2024-07-10 08:00:54', 'approved');

--
-- Triggers `ojtapplicants`
--
DELIMITER $$
CREATE TRIGGER `after_ojtapplicants_insert` AFTER INSERT ON `ojtapplicants` FOR EACH ROW BEGIN
    DECLARE new_reference VARCHAR(20);
    DECLARE default_password VARCHAR(50);

    -- Generate reference number based on the newly inserted id
    SET new_reference = CONCAT('OJT24_', LPAD(NEW.id, 2, '0'));

    -- Set the default password if status is 'approved'
    IF NEW.Status = 'approved' THEN
        SET default_password = 'default';
    ELSE
        SET default_password = NULL;
    END IF;

    -- Insert into std_acc table
    INSERT INTO std_acc (std_id, reference_number, password)
    VALUES (NEW.id, new_reference, default_password);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `std_acc`
--

CREATE TABLE `std_acc` (
  `std_id` int(11) NOT NULL,
  `reference_number` varchar(200) DEFAULT NULL,
  `user_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_acc`
--

INSERT INTO `std_acc` (`std_id`, `reference_number`, `user_type`, `email`, `name`, `username`, `password`, `image`, `task`) VALUES
(1, 'OJT24_27', '', 'potato@gmail.com', 'potato', 'potato', 'nani123', 'bracket.jpg', ''),
(2, 'OJT24_27', '', 'marcdavid@gmail.com', 'Marc David', 'Marc', 'potato12', 'sayago.jpg', ''),
(3, 'OJT24_27', '', 'levirodelas123@gmail.com', 'Levi Rodelas Jr', 'Unholy Matrimony', '123', 'a53.png', ''),
(5, 'OJT24_27', '', 'try@gmail.com', 'try', 'try', 'nani1', 'DSC_1291.jpg', ''),
(6, 'OJT24_27', '', 'meow@gmail.com', 'levi', 'levi', 'gay12', '', 'Test'),
(7, 'OJT24_03', 'admin', 'meow@gmail.com', '', 'levi1', 'nani1', '449728703_1215551659450642_6393424085821060217_n.jpg', 'Test'),
(8, 'OJT24_27', 'student', 'arf@gmail.com', 'arf', 'arf', 'nani1', '', 'Test'),
(9, 'OJT24_27', 'admin', 'kioshimasamune@gmail.com', 'marc', 'marc', 'nani1', '449728703_1215551659450642_6393424085821060217_n.jpg', 'Test'),
(37, 'OJT24_37', '', '', '', '', NULL, '', ''),
(38, 'OJT24_38', '', '', '', '', NULL, '', ''),
(39, 'OJT24_39', 'admin', '', '', '', 'default', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_acc`
--

CREATE TABLE `tr_acc` (
  `id` int(11) NOT NULL,
  `tr_id` varchar(200) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tr_acc`
--

INSERT INTO `tr_acc` (`id`, `tr_id`, `email`, `name`, `username`, `password`, `image`) VALUES
(1, NULL, 'meow@', 'meow', 'neko', 'nani12', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ojtapplicants`
--
ALTER TABLE `ojtapplicants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `std_acc`
--
ALTER TABLE `std_acc`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `tr_acc`
--
ALTER TABLE `tr_acc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ojtapplicants`
--
ALTER TABLE `ojtapplicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `std_acc`
--
ALTER TABLE `std_acc`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tr_acc`
--
ALTER TABLE `tr_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
