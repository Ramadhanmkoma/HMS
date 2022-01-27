-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 10:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `booking_ID` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_id` int(50) NOT NULL,
  `Checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `B_date` date DEFAULT NULL,
  `Admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `house_keeping`
--

CREATE TABLE `house_keeping` (
  `H_id` int(5) NOT NULL,
  `Name` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Phone_no` int(12) DEFAULT NULL,
  `Admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pid` int(50) NOT NULL,
  `Stid` varchar(50) NOT NULL,
  `R_no` varchar(10) NOT NULL,
  `Student_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_no` int(5) NOT NULL,
  `R_price` int(20) NOT NULL,
  `R_status` varchar(10) NOT NULL,
  `R_desc` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stid` varchar(50) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Phone_no` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `R_no` int(5) DEFAULT NULL,
  `Hk_ID` int(5) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Booking` (`booking_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `house_keeping`
--
ALTER TABLE `house_keeping`
  ADD PRIMARY KEY (`H_id`),
  ADD KEY `FK_admin` (`Admin_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `FK_Student` (`Student_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stid`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `FK_Room` (`R_no`),
  ADD KEY `FK_House_Keeping` (`Hk_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `R_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_Booking` FOREIGN KEY (`booking_ID`) REFERENCES `booking` (`B_id`);

--
-- Constraints for table `house_keeping`
--
ALTER TABLE `house_keeping`
  ADD CONSTRAINT `FK_admin` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_Student` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Stid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_House_Keeping` FOREIGN KEY (`Hk_ID`) REFERENCES `house_keeping` (`H_id`),
  ADD CONSTRAINT `FK_Room` FOREIGN KEY (`R_no`) REFERENCES `room` (`R_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
