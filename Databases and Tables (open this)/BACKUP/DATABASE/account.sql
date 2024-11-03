-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 05:56 AM
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

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `generate_default_password` () RETURNS VARCHAR(100) CHARSET utf8mb4 COLLATE utf8mb4_general_ci  BEGIN
    RETURN 'default'; 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `editor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hours_worked`
--

CREATE TABLE `hours_worked` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hours` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `PhoneNo` bigint(255) NOT NULL,
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
  `Status` varchar(100) NOT NULL,
  `deficiency` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `ojtapplicants`
--
DELIMITER $$
CREATE TRIGGER `after_ojtapplicants_insert` AFTER INSERT ON `ojtapplicants` FOR EACH ROW BEGIN
    DECLARE new_reference VARCHAR(20);
    DECLARE default_password VARCHAR(50);

    -- Generate reference number based on the newly inserted id
    SET new_reference = CONCAT('OJT24_', NEW.id);

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
DELIMITER $$
CREATE TRIGGER `set_default_password_on_approved` AFTER UPDATE ON `ojtapplicants` FOR EACH ROW BEGIN
    IF NEW.Status = 'approved' AND OLD.Status <> 'approved' THEN
        -- Update the password in std_acc for the corresponding std_id
        UPDATE std_acc
        SET password = generate_default_password()
        WHERE std_id = NEW.ID;
    END IF;
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
  `name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours_worked`
--
ALTER TABLE `hours_worked`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `training_hours`
--
ALTER TABLE `training_hours`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hours_worked`
--
ALTER TABLE `hours_worked`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ojtapplicants`
--
ALTER TABLE `ojtapplicants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `std_acc`
--
ALTER TABLE `std_acc`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `training_hours`
--
ALTER TABLE `training_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hours_worked`
--
ALTER TABLE `hours_worked`
  ADD CONSTRAINT `hours_worked_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ojtapplicants` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `training_hours`
--
ALTER TABLE `training_hours`
  ADD CONSTRAINT `training_hours_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `ojtapplicants` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
