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
-- Table structure for table `clubregistrationform`
--

CREATE TABLE `clubregistrationform` (
  `Name_Of_The_Club` varchar(15) NOT NULL,
  `Date_Of_Establishment` date NOT NULL,
  `House_No` int(10) NOT NULL,
  `Location` varchar(10) NOT NULL,
  `Street` varchar(10) NOT NULL,
  `Thana` varchar(15) NOT NULL,
  `District` varchar(10) NOT NULL,
  `Postcode` int(10) NOT NULL,
  `President_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubregistrationform`
--

INSERT INTO `clubregistrationform` (`Name_Of_The_Club`, `Date_Of_Establishment`, `House_No`, `Location`, `Street`, `Thana`, `District`, `Postcode`, `President_Name`) VALUES
('Gladiators', '0000-00-00', 12, 'Dhaka', 'Kakrail', 'Ramna', 'Dhaka', 1217, 'Shamim'),
('', '2017-04-25', 0, '', '', '', '', 0, ''),
('', '0000-00-00', 0, '', '', '', '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
