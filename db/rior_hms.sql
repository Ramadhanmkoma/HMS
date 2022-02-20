-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 07:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rior_hms`
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
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `number` bigint(15) NOT NULL,
  `gender` char(1) NOT NULL,
  `roleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`id`, `firstName`, `lastName`, `username`, `email`, `dob`, `pwd`, `number`, `gender`, `roleId`) VALUES
(48, 'Amriya', 'Ally Said', 'Amriya', 'Amriyaally2@gmail.com', '1999-09-12', '$2y$10$oeHbqvVrKZqvUijC3rIliO/qOsyUz9DK2/NKBEwNixSGVeJrBXETC', 255774095415, 'F', 4),
(57, 'Ramadhan', 'Mohammed Mkoma', 'Anonymous', 'AnonymousBlackhat137@gmail.com', '1999-07-07', '$2y$10$rNBC.albfNgNn9UcttFXvu8Yci.0hbq..6qwdGWZ5ae8.pRxIaxGm', 255766570255, 'M', 1),
(58, 'Mwanaisha', 'Haji Ramadhan', 'Ishaa', 'Aishahaji@hms.com', '1999-12-22', '$2y$10$T8Ba7MV0U3IXUIw38em2/OmiaSYDqy9PKmWF4.1T9x4yS3m3gX6Jq', 255777161522, 'F', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rior_hostel`
--

CREATE TABLE `rior_hostel` (
  `h_Id` int(11) NOT NULL,
  `hostelNAme` varchar(100) NOT NULL,
  `roomId` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_payment`
--

CREATE TABLE `rior_payment` (
  `PaymentId` int(11) NOT NULL,
  `PaymentTypeId` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_paymenttype`
--

CREATE TABLE `rior_paymenttype` (
  `PaymentTypeId` varchar(100) NOT NULL,
  `PaymentTypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_rating`
--

CREATE TABLE `rior_rating` (
  `ratingId` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingTypeId` int(11) NOT NULL,
  `ratingFeedBack` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_room`
--

CREATE TABLE `rior_room` (
  `roomId` int(11) NOT NULL,
  `length` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `roomStatus` varchar(100) NOT NULL,
  `roomTypeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_roomtypeid`
--

CREATE TABLE `rior_roomtypeid` (
  `roomTypeId` int(11) NOT NULL,
  `roomTypeNmae` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rior_usersrole`
--

CREATE TABLE `rior_usersrole` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rior_usersrole`
--

INSERT INTO `rior_usersrole` (`roleId`, `roleName`) VALUES
(1, 'DB Administrator'),
(2, 'Manager'),
(3, 'Cashier'),
(4, 'Tenant'),
(5, 'House Keeper');

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
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `rior_hostel`
--
ALTER TABLE `rior_hostel`
  ADD PRIMARY KEY (`h_Id`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `rior_payment`
--
ALTER TABLE `rior_payment`
  ADD PRIMARY KEY (`PaymentId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `PaymentTypeId` (`PaymentTypeId`);

--
-- Indexes for table `rior_paymenttype`
--
ALTER TABLE `rior_paymenttype`
  ADD PRIMARY KEY (`PaymentTypeId`);

--
-- Indexes for table `rior_rating`
--
ALTER TABLE `rior_rating`
  ADD PRIMARY KEY (`ratingId`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `rior_room`
--
ALTER TABLE `rior_room`
  ADD PRIMARY KEY (`roomId`),
  ADD KEY `roomTypeId` (`roomTypeId`);

--
-- Indexes for table `rior_roomtypeid`
--
ALTER TABLE `rior_roomtypeid`
  ADD PRIMARY KEY (`roomTypeId`);

--
-- Indexes for table `rior_usersrole`
--
ALTER TABLE `rior_usersrole`
  ADD PRIMARY KEY (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `rior_hostel`
--
ALTER TABLE `rior_hostel`
  MODIFY `h_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rior_payment`
--
ALTER TABLE `rior_payment`
  MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rior_rating`
--
ALTER TABLE `rior_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rior_room`
--
ALTER TABLE `rior_room`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rior_roomtypeid`
--
ALTER TABLE `rior_roomtypeid`
  MODIFY `roomTypeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rior_usersrole`
--
ALTER TABLE `rior_usersrole`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_Booking` FOREIGN KEY (`booking_ID`) REFERENCES `booking` (`B_id`);

--
-- Constraints for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD CONSTRAINT `reg_users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `rior_usersrole` (`roleId`);

--
-- Constraints for table `rior_hostel`
--
ALTER TABLE `rior_hostel`
  ADD CONSTRAINT `rior_hostel_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `rior_room` (`roomId`);

--
-- Constraints for table `rior_payment`
--
ALTER TABLE `rior_payment`
  ADD CONSTRAINT `rior_payment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `reg_users` (`id`),
  ADD CONSTRAINT `rior_payment_ibfk_2` FOREIGN KEY (`PaymentTypeId`) REFERENCES `rior_paymenttype` (`PaymentTypeId`);

--
-- Constraints for table `rior_rating`
--
ALTER TABLE `rior_rating`
  ADD CONSTRAINT `rior_rating_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `rior_room` (`roomId`);

--
-- Constraints for table `rior_room`
--
ALTER TABLE `rior_room`
  ADD CONSTRAINT `rior_room_ibfk_1` FOREIGN KEY (`roomTypeId`) REFERENCES `rior_roomtypeid` (`roomTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
