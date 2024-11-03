-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 05:52 AM
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

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `date`, `time`, `editor`) VALUES
(1, 'Big News!', 'Join us for an exciting event happening next week!...', '2024-07-12', '11:40:00', 'Admin Levi Rodelas'),
(2, 'asd', 'asda', '2024-07-18', '19:09:00', 'Levui'),
(3, 'System Presentation', 'Web based OJT application system presentation later this evening. Stay tuned for this!', '2024-07-14', '18:00:00', 'Admin Cecil'),
(4, 'Shikairo Days (TV Size)', 'Shikairo Days (TV Size) have been released on osu, nominated by BN (Gorou, Astralis). Status: Ranked', '2024-07-16', '12:22:00', 'Admin kirara'),
(5, 'Anything', 'New product on the line', '2024-07-24', '21:51:00', 'ADMIN Sagayo');

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
-- Dumping data for table `ojtapplicants`
--

INSERT INTO `ojtapplicants` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Address_App`, `Gender`, `BirthDate`, `BirthPlace`, `Religion`, `Email`, `PhoneNo`, `Hobby_Interest`, `University`, `SchoolAddress`, `DegreeProgram`, `YearLevel`, `Adviser`, `TotalNo.`, `Area_intern`, `StartDate`, `Finish_date`, `Picture`, `NBI`, `MOA`, `Endorsement`, `DateReg`, `Status`, `deficiency`, `remarks`) VALUES
(1, 'sadaASDshit', 'asdawhat', 'asda', 'asda', 'Female', '2024-07-09', 'asda', 'asda', 'kioshimasamune@gmail.com', 213, '0', 'udm shitty ass', 'what is this', 'asda', 'Second Year', 'sda', 213, '0', '2024-07-10', '2024-07-14', '', '', '', '', '2024-07-12 22:49:18', 'disapproved', 'cant', 'shitty ass'),
(2, 'sada', 'asda', 'asda', 'asda', 'Female', '2024-07-09', 'asda', 'asda', 'kioshimasamune@gmail.com', 213, '0', 'asda213', 'asda', 'asda', 'Second Year', 'sda', 213, '0', '2024-07-10', '2024-07-14', '', '', '', '', '2024-07-12 22:50:42', '', '', ''),
(3, 'sadaew', 'asda', 'asda', 'asda', 'Female', '2024-07-09', 'asda', 'asda', 'kioshimasamune@gmail.com', 213, '0', 'asda213', 'asda', 'asda', 'Second Year', 'sda', 213, '0', '2024-07-10', '2024-07-14', '', '', '', '', '2024-07-12 22:54:21', 'approved', '', ''),
(4, 'sadaewJK', 'asda', 'asda', 'asda', 'Female', '2024-07-09', 'asda', 'asda', 'kioshimasamune@gmail.com', 213, '0', 'asda213', 'asda', 'asda', 'Second Year', 'sda', 213, '0', '2024-07-10', '2024-07-14', '', '', '', '', '2024-07-12 22:57:22', 'approved', '', ''),
(5, 'asdas', 'asda', 'asda', 'sad', 'Male', '2024-07-17', 'asda', 'asda', 'kioshimasamune@gmail.com', 9238648, '1123', 'asda', 'asda', 'asda', 'Second Year', 'asda', 213, 'department1', '2024-07-10', '2024-07-19', 'f746afcc48cedade55fd99a293e018ff.jpg', '15ed9e13b77903810aa50b31b1360702.pdf', '15ed9e13b77903810aa50b31b1360702.pdf', '15ed9e13b77903810aa50b31b1360702.pdf', '2024-06-01 16:43:53', 'approved', '', ''),
(6, 'asdas', 'asda', 'asda', 'sad', 'Male', '2024-07-17', 'asda', 'asda', 'kioshimasamune@gmail.com', 213, 'nut', 'asda', 'asda', 'asda', 'Second Year', 'asda', 213, 'department1', '2024-07-10', '2024-07-19', 'e7d1c6149454831a17231bb45df0c972.jpg', 'bb84fe611c3eb8f45899c9d78a61588b.pdf', 'bb84fe611c3eb8f45899c9d78a61588b.pdf', 'bb84fe611c3eb8f45899c9d78a61588b.pdf', '2024-07-13 18:36:02', 'approved', '', ''),
(7, 'Levis', 'De Castro', 'Rodelas', '1626 Neptuno Street Paco Manila', 'Male', '2024-07-25', 'Manila', 'Roman Catholic', 'levirodelas420@gmail.com', 2147483647, 'Computer Programming', 'UDM', 'ERMINTA', 'BS MATH', 'Third Year', 'Doc De Leons', 300, 'department1', '2024-05-08', '2024-07-15', '6b8c52ee8fb9dce3c243b8f44ce9455f.png', '108010ad6266b2fef6fe20fb5a6d8ff0.pdf', '5c93cfa4641cfd62375b675eb130bc30.pdf', 'cac66dcf73f29dddd837edbbc5f1e7e2.pdf', '2024-07-13 21:43:48', 'approved', '', ''),
(8, 'Yukina', 'party', 'Minato', '1626 Neptuno street paco manila', 'Female', '2024-07-31', 'Manila', 'Cat', 'scottgamer34@gmail.com', 2147483647, 'guitar playing', 'Hasegawa', 'Kimi no nawa Prefecture', 'OJT', 'Third Year', 'Mr. Kimita', 600, 'deparment3', '2024-07-24', '2024-10-23', 'df50c8a9ed639b937e937f235980ec1b.jpg', '91b6d62afe5a7290cee2e6f487c43ab3.pdf', 'f69c2bd49d08dc794bac32dc4622a656.pdf', 'deb2eb062760f1228d2deecc1b416e56.pdf', '2024-07-13 23:49:44', '', '', ''),
(9, 'hatsune', 'miku', 'kanade', '1626 Neptuno street paco manila', 'Female', '2024-07-31', 'Manila', 'nope', 'scottgamer34@gmail.com', 2147483647, 'love instruments', 'Hasegawa', 'Kimi no nawa Prefecture', 'OJT', 'Second Year', 'Mr. Kimita', 600, 'deparment3', '2024-07-30', '2024-09-19', 'f6542df7b99ed0cfa2f58d03edfbb49f.jpg', 'bbabbf2655f2294c168844d7c1fc6dcc.pdf', '5927bd7746ef2874b8c87e2deb17640f.pdf', 'cfce7e00c88f17fd9f677e43f63fa6a0.pdf', '2024-07-14 00:01:15', '', '', ''),
(10, 'Hoshizora', 'noe', 'Shiruko', 'Bahay ni kuya', 'Female', '2024-07-25', 'Metro Manila', 'Buddhist', 'levirodelas420@gmail.com', 2147483647, 'minecraft', 'zenzenzen', 'UN avenue', 'STEM', 'Third Year', 'Mr. Zachamata', 593, 'department1', '2024-04-10', '2024-07-23', '10b0271df6790ffc966bef3a5dcd6c6d.png', '4d3def1e84f8e38af9622f5cb4ae4ff4.pdf', '593ad3664be82d01a38153947b5e6ab9.pdf', '59c61cc5f89fc15339186dfe72feae9c.pdf', '2024-07-14 00:07:44', 'approved', '', ''),
(11, 'Benz', 'Karl', 'Dpapap', 'masbate laguna de bay', 'Male', '2024-07-11', 'Metro Manila', 'Buddhist', 'levirodelas420@gmail.com', 916381, 'minecraft', '12udm', 'Prefecture', 'BSCOD', 'Fourth Year', 'Mr. Kimita', 142, 'department2', '2024-07-24', '2024-07-16', '32f78d3d34798d80a13683558e53db1b.jpg', 'ac0593fd0a39d879f7de53090a5d8557.pdf', '37114728c7a6b760919e6f2fdd0328c3.pdf', 'd39561fe2e8725bf49ddb99d5bb11e3a.pdf', '2024-07-14 00:48:08', 'approved', '', ''),
(13, 'Sugat', 'Baby', 'halaka', 'roselia address 1626', 'Female', '2024-07-24', 'japan', 'amen', 'levirodelas420@gmail.com', 2147483647, 'bruh', 'UDM', '1626 erminasf', 'BS CAS', 'Third Year', 'Doctor me', 634, 'department2', '2024-07-09', '2024-08-21', 'd335c91e142ad93c46e650b6f81a7c15.jpg', '15a0f6d9dd6ac6a006d58a52f27d8f6f.pdf', '8e0d880bd3a7e79a16219c77a3592935.pdf', 'c3d2445372b95b674d88485c8f63084e.pdf', '2024-07-14 12:46:39', 'approved', '', ''),
(14, 'Abrahams', 'Edmark', 'Veloso', 'Tondo Manila', 'Female', '2024-07-17', 'Jesus Land', 'Amanamin', 'levirodelas420@gmail.com', 2147483647, 'Doom Eternal', 'Simbahan ni Kristoz', 'Heaven and Earth', 'BS Choir', 'Fourth Year', 'Mr. Christ', 319, 'department2', '2024-02-15', '2024-07-16', '5f883d118bd07ed757f7cacaa14212ad.jpg', '481915642e00b24d5e2cc539e83692b7.pdf', 'f611e02018bd171340a041a96ba93b7c.pdf', 'f4baaf82e51e1c72739544c2198d10c5.pdf', '2024-07-14 14:07:30', 'disapproved', 'MOA.pdf', 'no edited information on MOA.pdf'),
(15, 'Krisshella', 'Dela', 'Cruz', 'House to house 1623', 'Male', '2024-08-01', 'Manila', 'Roman Catholic', 'levirodelas420@gmail.com', 9239190803, 'Computer Programming', 'Piux', 'Neptune', 'BS COE', 'Third Year', 'Doc Liver', 923, 'deparment3', '2024-04-10', '2025-02-13', '87244376f80b56a128f7ea9b37ad31f5.jpg', 'b7f1e3c50a66ea0cdba5263fd3d07f37.pdf', 'd0e2e7e3ee601b42e7afe01a7b2fdf26.pdf', '7df1dce2795a592bad44e184f7d25070.pdf', '2024-07-14 14:44:48', '', '', ''),
(16, 'Brian', 'Michael', 'Handys', 'Netherlands Dublin UK 7143', 'Male', '2010-11-17', 'Ireland', 'Protestant', 'levirodelas420@gmail.com', 9238164811, 'Streaming Content', 'London Underground High school', '123 Playground Stret', 'BS Computer Engineering', 'Third Year', 'Mr. Anderson', 512, 'department2', '2024-07-11', '2025-10-01', 'dc3ed49b7db9804f04fe2c115e7156a5.jpg', '76294d0a5f84eed0c1ccf9bc7ad0f46d.pdf', '5e4cf3d978c8e8a63ef985c124b31fc3.pdf', 'cf1d553904bf508ee8afd3ffd5dc5b61.pdf', '2024-07-14 15:20:25', 'approved', '', ''),
(17, 'Hatsune', 'Miku', 'yeye', 'Tokyo Japayuki', 'Prefer not to say', '2024-07-24', 'Computer', 'Amen', 'levirodelas420@gmail.com', 9317461234, 'Singing', 'TOKYO TOKYO', 'Tokyo Prefecture', 'BS Singing', 'Second Year', 'Mr. Rin', 562, 'department2', '2024-07-19', '2024-07-18', '11837d3dd0151b3ad61c4b983f283bd1.png', 'caaaedabdc7f5c5c4fa6f4276cf6f8df.pdf', '4182851054134a98fb9242bf41ca615d.pdf', '95424273dbcb80652abb3642792795c0.pdf', '2024-07-14 16:25:09', '', '', ''),
(18, 'Nyre', 'Sadam', 'Noire', '1626', 'Male', '2024-08-01', 'manila', 'Roman Catholic', 'levirodelas420@gmail.com', 9317461234, 'Computer Programming', 'UDM', 'ERMINTA', 'CAS', 'Second Year', 'Doc De Leon', 20, 'department2', '2024-07-11', '2024-07-31', 'ea1495937751df36c7f0c7402785839b.png', '0e7b8ab7c9e06a1a43de3d6203c2b895.pdf', '5408ef6d386d3d7780f6001dd8dccd4e.pdf', 'ad952882f3450d3ba5ce92ec5dddc41a.pdf', '2024-07-14 16:37:47', '', '', ''),
(19, 'Nyre123', 'Sadamasd', 'Noireasd', '1626wwww', 'Male', '2024-08-01', 'manila', 'Roman Catholic', 'levirodelas420@gmail.com', 37341, 'Computer Programming', 'UDMasd', 'ERMINTAasd', 'CASasd', 'Third Year', 'Doc De Leon', 201, 'department2', '2024-07-30', '2024-07-15', '09b637e08c2ff192bbaeddb066f72c40.png', '15a0eb78f7b712dc2d2ea3b975eda4c0.pdf', '3d125f35451c3d6e222f0bb43fffcb71.pdf', '2ed12a5092c09d919841cdf31ec3427f.pdf', '2024-07-14 16:43:09', '', '', ''),
(20, 'yeyeye', 'ayayaya', 'ohmygoddo', '1626wwwwfsfsf', 'Prefer not to say', '2024-08-22', 'manila', 'Roman Catholic', 'levirodelas420@gmail.com', 37341341, 'Computer Programming', 'UDMasd', 'ERMINTAasd', 'CASasd', 'Third Year', 'Doc De Leon', 300, 'deparment3', '2024-07-31', '2024-07-31', 'b539ce45c8d4d5960a75aa998f91f7c4.jpg', '59495e30b403f089e9d44721b7e18941.pdf', '72bc5152e0ad559a6e5d97d6028de425.pdf', '72bc5152e0ad559a6e5d97d6028de425.pdf', '2024-07-14 16:46:10', '', '', ''),
(21, 'lEVI', 'D.', 'Rodelas', '1626 Neptuno Street Paco Manila', 'Male', '2024-07-17', 'Manila', 'Roman Catholic', 'levirodelas420@gmail.com', 182357845, 'Adidas Lover 69', 'UDM', 'ERMINTA', 'CAS', 'Second Year', 'Doc De Leon', 124, 'department2', '2024-07-03', '2024-07-31', '13ea8366d0a75e474a99dd961d293f7c.jpeg', '3f0ebbc0779581b2cc98af06a0929a37.pdf', '6710dbd92051c3f34aa945c12f416a21.pdf', '9d9a787aa2b0903594d70fc8553e224f.pdf', '2024-07-14 16:52:09', '', '', ''),
(22, 'Marc', 'Timbol', 'David', '1626 Neptuno Street Paco Manila', 'Male', '2017-07-05', 'Manila', 'Roman Catholic', 'levirodelas420@gmail.com', 9239990803, 'Adidas Lover 69', 'UDM', 'ERMINTA', 'BS MATH', 'Fisth Year', 'Doc De Leon', 15, 'deparment3', '2024-07-14', '2024-07-15', 'bf9d81c3ca60d1746b744bdea7f46df6.png', '48ff20f7f875e1f0ae7c2f0153c68b44.pdf', '2b566300e904c43e5ababca8a8539cc4.pdf', '56bbee04f3e54956f659e1f97de4a1d1.pdf', '2024-07-14 18:32:47', 'disapproved', 'Clarryze', 'nandito sa database kaya bawal at walang requirements'),
(24, '1233', 'Rodelas', '1212as', '1233', 'Female', '2024-07-23', 'Manila', 'Roman Catholic', 'scottgamer34@gmail.com', 9238164811, 'Computer Programming', 'UDM', 'ERMINTA', 'BS MATH', 'Second Year', 'Doc De Leon', 123, 'department2', '2024-07-25', '2024-07-30', 'aba69e8aba2348c8542dfa2388d71679.jpg', '46114ad8d24d025a64c796ad7413456b.pdf', '372322407d761068577fc68647badadd.pdf', '57ee817c41ee2928716db38725eeb8de.pdf', '2024-07-14 19:23:16', '', '', ''),
(25, 'Aayaya', 'ayayass', 'ayaya', '1626 Neptuno Street Paco Manila', 'Female', '2024-07-26', 'manila', 'Roman Catholic', 'scottgamer34@gmail.com', 923858123, 'Computer Programming', 'UDM', 'ERMINTA', 'BS MATH', 'Second Year', 'Doc De Leon', 123, 'deparment3', '2024-07-17', '2024-07-22', '8bb20517991f0b0ec0ec60a7ef66810a.jpg', '8e5adc2c2a028aaae60606ec922bc681.pdf', 'd6f620448bc48c23993ab5857984b907.pdf', 'fa9b6c57b95526768832c0c0f79ce231.pdf', '2024-07-14 19:49:11', '', '', ''),
(26, 'Levi', 'Rodelas', 'Jr', '1626 Neptuno Street Paco Manila', 'Female', '2024-07-26', 'Manila', 'Roman Catholic', 'levirodelas420@gmail.com', 9317461234, 'Adidas Lover 69', 'UDM', 'ERMINTA', 'BS MATH', 'Fourth Year', 'Doc De Leon', 300, 'department2', '2024-07-09', '2024-08-01', '1ec35da3b704288df54c7d847f14957e.png', '32fa7228f1bb58716b81b9de63c9b856.pdf', '77b260278af134b2de8f4ce4de56628e.pdf', 'a85d9710b29caca31097d3377bb7f716.pdf', '2024-07-14 19:57:14', '', '', ''),
(27, 'liveasd', 'D.ddd', 'RODELAS JR', '1626 Neptuno street paco manilaasd', 'Male', '2024-07-10', 'Metro Manila', 'Cat', 'levirodelas420@gmail.com', 5235674, 'minecraft', '12udm', '123', 'BSCOD', 'Second Year', 'Mr. Kimita', 300, 'department1', '2024-08-14', '2024-07-03', '23e43b4f2d5f9ff44665f9efc6043b68.jpeg', '225bffd8fa58fb58befddffdd95477bf.pdf', 'f2a302d59305724f07748f41c5db5127.pdf', '212d4ac0817ceec40886546bd218e7bb.pdf', '2024-07-14 20:32:32', '', '', ''),
(28, 'ayaayaya', 'D.ddd', 'RODELAS JR', '1626 Neptuno street paco manilaasd', 'Male', '2024-07-26', 'Metro Manila', 'Cat', 'levirodelas420@gmail.com', 5235674, 'minecraft', 'Unibersidad', 'Prefecture', 'BS MATHE', 'First Year', 'Mr. Kimitaaasss', 100, 'department2', '2024-07-04', '2024-07-30', '48fb5c65ca6587162ea92693846375a7.jpg', '23d3d56ea64e76241278d79bbc9643d0.pdf', '6a1d389d083d6ddedcd5e7adc0130e78.pdf', '1c7949a224c289f58dd9d0e50c8990e0.pdf', '2024-07-14 20:35:32', '', '', ''),
(29, 'Clarryze', 'none', 'Santos', '1626 Neptuno Street Paco Manila', 'Female', '2000-05-20', 'Manila', 'Roman Catholic', 'santos06clarryze@gmail.com', 92375183124, 'Adidas Lover 69', 'Universidad De Manila', '1000 Ermita', 'BS MATH', 'Fisth Year', 'Doc De Leon', 300, 'department1', '2024-07-15', '2024-09-30', 'ce6886135d5a605b66ef8e10e582392d.jpg', '26f654902ea2f7e352ee13008d57c131.pdf', '478c2a0175f9bcaf6c59b4c4f4b7ae0f.pdf', '56319d8144108d8c3ad9706c0250b8dc.pdf', '2024-07-15 09:52:50', 'approved', '', '');

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
