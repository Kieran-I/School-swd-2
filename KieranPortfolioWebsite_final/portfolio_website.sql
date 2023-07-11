-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 10:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `Name`, `Comment`, `Date`) VALUES
(1, 'Job wijngaarden', 'Ik vind dit een professionele portfolio!', '2022-11-15 13:09:48'),
(20, 'Kieran', 'groetjes', '2023-01-19 09:39:00'),
(56, 'Kieran', 'hello, welcome to my site', '2023-01-23 20:44:00'),
(57, 'Daniel', 'Hallo Kieren dit is mijn comment alsjeblieft niet delete plz. Met vriendelijke groet Daniel.', '2023-01-25 08:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `introtext`
--

CREATE TABLE `introtext` (
  `Id` int(11) NOT NULL,
  `TextBlock1` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introtext`
--

INSERT INTO `introtext` (`Id`, `TextBlock1`) VALUES
(1, 'Hello, My name is Kieran. Im 24 years old I currently live in Zoetermeer. This year I started studying software development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `introtext`
--
ALTER TABLE `introtext`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `introtext`
--
ALTER TABLE `introtext`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
