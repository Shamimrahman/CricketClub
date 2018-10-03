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
-- Table structure for table `teaminfo`
--

CREATE TABLE `teaminfo` (
  `Club_Id` int(10) NOT NULL,
  `Cplayer_Id` int(10) NOT NULL,
  `Team_Formation_Date` date NOT NULL,
  `Event_Name` varchar(20) NOT NULL,
  `Team_Leader_Id` int(10) NOT NULL,
  `Player_Name` varchar(20) NOT NULL,
  `Coatch_Id` int(10) NOT NULL,
  `Coatch_Name` varchar(20) NOT NULL,
  `Player_Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaminfo`
--

INSERT INTO `teaminfo` (`Club_Id`, `Cplayer_Id`, `Team_Formation_Date`, `Event_Name`, `Team_Leader_Id`, `Player_Name`, `Coatch_Id`, `Coatch_Name`, `Player_Id`, `Name`) VALUES
(0, 0, '0000-00-00', '', 0, 'MD.Shamim', 0, '', 0, ''),
(1234565, 55555, '2018-08-16', 'BPL', 3692, '', 0, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teaminfo`
--
ALTER TABLE `teaminfo`
  ADD PRIMARY KEY (`Club_Id`,`Player_Id`,`Event_Name`,`Team_Leader_Id`,`Coatch_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
