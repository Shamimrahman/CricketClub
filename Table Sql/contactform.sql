-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 07:59 PM
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
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `Club_Id` int(10) NOT NULL,
  `Club_Name` varchar(14) NOT NULL,
  `First_Name` varchar(14) NOT NULL,
  `Middle_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Player_Id` int(10) NOT NULL,
  `Afirst_Name` varchar(15) NOT NULL,
  `Amiddle_Name` varchar(15) NOT NULL,
  `Alast_Name` varchar(15) NOT NULL,
  `Adesignation` varchar(15) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Contract_Ammount` int(10) NOT NULL,
  `Serial_Number` int(10) NOT NULL,
  `Due_Date` date NOT NULL,
  `Payment_Date` date NOT NULL,
  `Ammount` int(15) NOT NULL,
  `Contact_Witness_one` varchar(15) NOT NULL,
  `Contact_Witness_two` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`Club_Id`, `Club_Name`, `First_Name`, `Middle_Name`, `Last_Name`, `Player_Id`, `Afirst_Name`, `Amiddle_Name`, `Alast_Name`, `Adesignation`, `Start_Date`, `End_Date`, `Contract_Ammount`, `Serial_Number`, `Due_Date`, `Payment_Date`, `Ammount`, `Contact_Witness_one`, `Contact_Witness_two`) VALUES
(0, '', '', '', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '0000-00-00', '0000-00-00', 0, '', ''),
(123456, 'Dhaka', 'Barsha', 'Das', 'Tuli', 25000, 'MD', 'Shamim ', 'Rahman', 'Manager', '0000-00-00', '0000-00-00', 0, 2500, '0000-00-00', '0000-00-00', 12000, 'Shamim', 'Talbia'),
(12345688, 'Dhaka', 'MD', 'Shamim', 'Rahman', 9888, 'MD', 'Shamim ', 'Rahman', 'Manager', '2018-08-26', '2018-08-26', 12500, 2630, '0000-00-00', '0000-00-00', 12000, 'Shamim', 'Talbia'),
(123456888, 'Dhaka', 'Barsha', 'Das', 'Tuli', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '0000-00-00', '0000-00-00', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`Club_Id`,`Player_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
