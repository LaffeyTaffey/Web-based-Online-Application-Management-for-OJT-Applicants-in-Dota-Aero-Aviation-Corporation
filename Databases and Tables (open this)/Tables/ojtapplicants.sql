-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 10:41 AM
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
