-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 08:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerinfo`
--

CREATE TABLE `playerinfo` (
  `First_Name` varchar(15) NOT NULL,
  `Middle_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Fathers_Name` varchar(15) NOT NULL,
  `Mothers_Name` varchar(15) NOT NULL,
  `Pre_Houseno` int(10) NOT NULL,
  `Pre_Location` varchar(10) NOT NULL,
  `Pre_Village` varchar(10) NOT NULL,
  `Pre_Thana` varchar(10) NOT NULL,
  `Pre_District` varchar(10) NOT NULL,
  `Pre_Postcode` int(10) NOT NULL,
  `Per_Houseno` int(10) NOT NULL,
  `Per_Location` varchar(10) NOT NULL,
  `Per_Village` varchar(10) NOT NULL,
  `Per_Thana` varchar(10) NOT NULL,
  `Per_District` varchar(10) NOT NULL,
  `Per_Postcode` int(10) NOT NULL,
  `Date_Of_Birth` int(10) NOT NULL,
  `Pclub_Name` varchar(10) NOT NULL,
  `Clubtime_From` int(10) NOT NULL,
  `Clubtime_To` int(10) NOT NULL,
  `Total_Runs` int(10) NOT NULL,
  `Total_Wkts` int(10) NOT NULL,
  `Team_Leader` tinytext NOT NULL,
  `Bclub_Name` varchar(10) NOT NULL,
  `Opponent_Club_Name` varchar(10) NOT NULL,
  `Event_Id` int(10) NOT NULL,
  `Match_Id` int(10) NOT NULL,
  `Runs` int(10) NOT NULL,
  `Wickets` int(10) NOT NULL,
  `Name_Of_Degree` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `University` varchar(10) NOT NULL,
  `Year` int(10) NOT NULL,
  `Result` varchar(10) NOT NULL,
  `Club_Membership` varchar(10) NOT NULL,
  `Signature` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerinfo`
--

INSERT INTO `playerinfo` (`First_Name`, `Middle_Name`, `Last_Name`, `Fathers_Name`, `Mothers_Name`, `Pre_Houseno`, `Pre_Location`, `Pre_Village`, `Pre_Thana`, `Pre_District`, `Pre_Postcode`, `Per_Houseno`, `Per_Location`, `Per_Village`, `Per_Thana`, `Per_District`, `Per_Postcode`, `Date_Of_Birth`, `Pclub_Name`, `Clubtime_From`, `Clubtime_To`, `Total_Runs`, `Total_Wkts`, `Team_Leader`, `Bclub_Name`, `Opponent_Club_Name`, `Event_Id`, `Match_Id`, `Runs`, `Wickets`, `Name_Of_Degree`, `Department`, `University`, `Year`, `Result`, `Club_Membership`, `Signature`, `Date`) VALUES
('MD', 'Shamim', 'Rahman', 'MD.Meherab Ali', 'Rabeya Khatun', 10, 'Kakrail', 'No', 'Ramna', 'Dhaka', 1217, 25, 'Uttara', 'No', 'Uttara', 'Dhaka', 1227, 1995, 'Dhaka', 2014, 2016, 756, 52, '0', 'Ctg viking', 'Dhaka', 123, 456, 110, 4, 'CSE', 'ECE', 'NSU', 2018, 'First Divi', 'ICCB', 0, '0000-00-00'),
('Barsha', 'Das', 'Tuli', 'Ranjan Das', 'Milon Das', 10, 'Banasree', 'No', 'Rampura', 'Dhaka', 1217, 25, 'Uttara', 'No', 'Uttara', 'Dhaka', 1227, 1995, 'Dhaka', 2014, 2016, 756, 52, '0', 'Ctg viking', 'Dhaka', 123, 456, 110, 4, 'CSE', 'ECE', 'NSU', 2018, 'First Divi', 'ICCB', 0, '0000-00-00'),
('Ekram ', 'Karim ', 'Ratul', 'Rejaul karim', 'Jani na', 15, 'Moghbajar', 'No', 'Ramna', 'Dhaka', 1217, 25, 'Uttara', 'No', 'Uttara', 'Dhaka', 1227, 1995, 'Dhaka', 2014, 2016, 756, 52, '0', 'Ctg viking', 'Dhaka', 123, 456, 110, 4, 'CSE', 'ECE', 'NSU', 2018, 'First Divi', 'ICCB', 0, '0000-00-00'),
('Shakib ', 'Al ', 'Hasan', 'MD.Meherab Ali', 'Rabeya Khatun', 15, 'Kakrail', 'No', 'Ramna', 'Dhaka', 1217, 25, 'Uttara', 'No', 'Uttara', 'Dhaka', 1227, 0, 'Dhaka', 2014, 2016, 756, 52, '0', 'Ctg viking', 'Dhaka', 123, 456, 110, 0, 'CSE', 'ECE', 'NSU', 2018, 'First Divi', 'ICCB', 0, '0000-00-00'),
('Barsha', 'Das', 'Tuli', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('Barsha', 'Das', 'Kabir', 'Ranjan Das', 'Milon Das', 10, 'Kakrail', 'No', 'Ramna', 'Dhaka', 1217, 25, 'Uttara', 'No', 'Uttara', 'Dhaka', 1227, 1995, 'Dhaka', 2014, 2016, 756, 52, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, '0', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, 'on', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00'),
('', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, 0, 0, 0, 'on', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', 0, '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
