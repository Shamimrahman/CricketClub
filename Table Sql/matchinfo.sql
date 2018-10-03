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
-- Table structure for table `matchinfo`
--

CREATE TABLE `matchinfo` (
  `Event_Id` int(10) NOT NULL,
  `Venue_Id` int(11) NOT NULL,
  `Date_Of_The_Match` date NOT NULL,
  `Match_Id` int(10) NOT NULL,
  `Man_Of_The_Match` varchar(20) NOT NULL,
  `Umpire` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchinfo`
--

INSERT INTO `matchinfo` (`Event_Id`, `Venue_Id`, `Date_Of_The_Match`, `Match_Id`, `Man_Of_The_Match`, `Umpire`) VALUES
(0, 0, '0000-00-00', 0, '', ''),
(8500, 0, '0000-00-00', 456, 'Shamim Rah', 'Barsha Das'),
(8500, 9600, '2018-08-14', 456, 'Shamim Rah', 'Barsha Das');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchinfo`
--
ALTER TABLE `matchinfo`
  ADD PRIMARY KEY (`Event_Id`,`Venue_Id`,`Match_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
