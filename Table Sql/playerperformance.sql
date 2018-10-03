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
-- Table structure for table `playerperformance`
--

CREATE TABLE `playerperformance` (
  `Match_Id` int(10) NOT NULL,
  `Venu_Id` int(10) NOT NULL,
  `Date_Of_The_Match` date NOT NULL,
  `Player_Id` int(10) NOT NULL,
  `Total_Wkts` int(10) NOT NULL,
  `Total_Runs` int(10) NOT NULL,
  `Outstanding_Performance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerperformance`
--

INSERT INTO `playerperformance` (`Match_Id`, `Venu_Id`, `Date_Of_The_Match`, `Player_Id`, `Total_Wkts`, `Total_Runs`, `Outstanding_Performance`) VALUES
(0, 0, '0000-00-00', 0, 0, 0, 0),
(0, 0, '0000-00-00', 25000, 15, 0, 0),
(456, 0, '0000-00-00', 0, 0, 0, 0),
(456, 1000, '2018-08-14', 25000, 52, 14, 100),
(10125, 26200, '2018-08-14', 6250, 52, 756, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playerperformance`
--
ALTER TABLE `playerperformance`
  ADD PRIMARY KEY (`Match_Id`,`Venu_Id`,`Player_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
