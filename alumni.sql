-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 12:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(60) DEFAULT NULL,
  `LastName` varchar(60) DEFAULT NULL,
  `Program` varchar(255) DEFAULT NULL,
  `FocusArea` varchar(255) DEFAULT NULL,
  `gradyear` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `interest` longtext DEFAULT NULL,
  `availableday` varchar(255) DEFAULT NULL,
  `timeofday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `FirstName`, `LastName`, `Program`, `FocusArea`, `gradyear`, `Email`, `phone`, `orgname`, `title`, `interest`, `availableday`, `timeofday`) VALUES
(23, 'Harshitha', 'Ramachandra', 'MIM', 'Data Analytics', '2020', 'harshi07@umd.edu', '+1 5715678890', 'Walmart', 'data analyst', 'Mentoring', 'Tuesday', 'Afternoon'),
(36, 'Sharvil', 'Shastri', 'MIM', 'Data Analytics', '1995', 'sstri@umd.edu', '789-647-7856', 'Google', 'Front end Developer', 'Mock Interviews', 'Friday', 'Evening'),
(37, 'Shashank ', 'R', 'MIM', 'Cybersecurity', '2000', 'shram@umd.edu', '+1 5715678789', 'Apple', 'Data Scientist', 'Mentoring', 'Tuesday', 'Afternoon'),
(38, 'Sandra', 'S', 'MIM', 'Strategic Management', '1998', 'sstaub@umd.edu', '4367535659', 'UMCP', 'Manager', 'Mock Interviews', 'Thursday', 'Morning'),
(39, 'Sakshi', 'R', 'MIM', 'Information Risk Management', '2002', 'sr@umd.edu', '674-783-5271', 'Paramount', 'Data Engineer', 'Resume Review', 'Thursday', 'Afternoon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
