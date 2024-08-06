-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 08:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flymaster_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `Ad_ID` int(5) NOT NULL,
  `click` int(5) NOT NULL,
  `content` varchar(50) NOT NULL,
  `S_date` date NOT NULL,
  `E_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `air_ticket`
--

CREATE TABLE `air_ticket` (
  `TicketID` int(5) NOT NULL,
  `T_type` varchar(15) NOT NULL,
  `Seat_no` int(3) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_ID` int(5) NOT NULL,
  `airline` varchar(20) NOT NULL,
  `seat_number` varchar(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  `meal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_ID`, `airline`, `seat_number`, `name`, `from`, `to`, `meal`) VALUES
(1017, 'Air India', 'A102', 'samantha', 'India', 'America', 'Vegetarian'),
(1018, 'Singapore Airlines', 'S104', 'Rolex', 'India', 'Singapore', 'Non Vegetarian'),
(1019, 'Sri Lankan  Airline', 'SR10', 'Mahinda', 'Sri Lanka', 'America', 'Non Vegetarian'),
(1020, 'Air India', 'A102', 'Amal', 'Singapore', 'India', 'Vegetarian'),
(1021, 'Air Canada', 'C103', 'Kumara', 'Canada', 'Singapore', 'Non Vegetarian'),
(1022, 'Singapore Airlines', 'S105', 'Gotabaya', 'Sri Lanka', 'America', 'Non Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `booking_api`
--

CREATE TABLE `booking_api` (
  `API_ID` int(5) NOT NULL,
  `Permission` varchar(10) NOT NULL,
  `API_name` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_api`
--

INSERT INTO `booking_api` (`API_ID`, `Permission`, `API_name`, `Type`) VALUES
(1, 'All', 'Booking_Bot', 'bot'),
(2, 'Read', 'Sara', 'Human'),
(3, 'display', 'Display_Bot', 'bot'),
(4, 'check', 'James', 'Human');

-- --------------------------------------------------------

--
-- Table structure for table `customer_support_agent`
--

CREATE TABLE `customer_support_agent` (
  `Agent_ID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_support_agent`
--

INSERT INTO `customer_support_agent` (`Agent_ID`, `Name`, `Contact`, `Type`) VALUES
(1, 'Sam Fernando', '0777171566', 'Junior'),
(2, 'Asha Perera', 'asha@flymaster.com', 'Junior'),
(3, 'Sakila Udana', 'sakila@flymaster.com', 'Senior'),
(4, 'Dasun Pramod', '0770899492', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `financial_manager`
--

CREATE TABLE `financial_manager` (
  `MID` int(5) NOT NULL,
  `Phone_no` char(10) NOT NULL,
  `Permission` varchar(10) NOT NULL,
  `F_name` varchar(10) NOT NULL,
  `L_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_manager`
--

INSERT INTO `financial_manager` (`MID`, `Phone_no`, `Permission`, `F_name`, `L_name`) VALUES
(1, '0718989898', 'All', 'Avishka', 'Piyumal'),
(2, '0782332233', 'All', 'Walter', 'Silva');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `pnr` int(6) NOT NULL,
  `airline` varchar(20) NOT NULL,
  `seat` int(200) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `return` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`pnr`, `airline`, `seat`, `from`, `to`, `depart`, `return`, `status`) VALUES
(4, 'economy', 8, 'gb', 'us', '2023-10-17', '2023-10-18', '1'),
(5, 'economy', 6, 'sg', 'lk', '2020-02-03', '2020-02-03', '1'),
(6, 'economy', 1, 'in', 'sg', '2020-07-09', '2020-07-08', '1'),
(7, 'economy', 78, 'lk', 'gb', '2025-04-12', '2025-03-04', '1'),
(9, 'economy', 1, 'in', 'lk', '2023-10-18', '2023-10-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `flight_controller`
--

CREATE TABLE `flight_controller` (
  `Controller_ID` int(5) NOT NULL,
  `Maintens_report` varchar(15) NOT NULL,
  `f_coordination` varchar(15) NOT NULL,
  `schedule` time NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_controller`
--

INSERT INTO `flight_controller` (`Controller_ID`, `Maintens_report`, `f_coordination`, `schedule`, `Name`) VALUES
(1, 'Departure', 'All', '24:00:00', 'Rivth De Silva'),
(2, 'Arrival', 'All', '09:00:00', 'David Johns');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `Itinerary_ID` int(5) NOT NULL,
  `D_time` time(6) NOT NULL,
  `A_time` time(6) NOT NULL,
  `D_date` date NOT NULL,
  `A_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_manager`
--

CREATE TABLE `marketing_manager` (
  `ManagerID` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Report` varchar(15) NOT NULL,
  `Hire_date` date NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marketing_manager`
--

INSERT INTO `marketing_manager` (`ManagerID`, `Name`, `Report`, `Hire_date`, `Email`) VALUES
(1, 'Kusum Perera', 'Accounts', '2021-10-20', 'kusum.p@flymaster.com'),
(2, 'Ashen Silva', 'Audit', '2019-10-01', 'ashen.s@flymaster.com');

-- --------------------------------------------------------

--
-- Table structure for table `system_admin`
--

CREATE TABLE `system_admin` (
  `Agent_ID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Permission` varchar(20) NOT NULL,
  `Contact` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_admin`
--

INSERT INTO `system_admin` (`Agent_ID`, `Name`, `Permission`, `Contact`) VALUES
(1, 'Rohith Perera', 'All', 'rohit@flymaster.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket_ID` int(5) NOT NULL,
  `Issue_type` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(6) NOT NULL,
  `fname` varchar(16) NOT NULL,
  `lname` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  `pic` blob NOT NULL,
  `tel` int(10) NOT NULL,
  `meal` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nation` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `uname`, `password`, `pic`, `tel`, `meal`, `name`, `age`, `gender`, `nation`, `country`) VALUES
(13, 'sam', 'sam', 'sam@mail.com', 'sam', '$2y$10$ytZN88en1jaSUJeuTCM8.eMQzq6TJY71JB0nXDutuO54w0KSlCcmy', '', 0, '', '', 0, '', '', ''),
(17, 'Test', 'Kumara', 'test@mail.com', 'test', '$2y$10$qdewQEn5YgLgXoHK5NAfKu84rS8fpYkRFOatf0nk6317hzNXXoItG', '', 515151, 'aet', 'test', 0, '', '', ''),
(20, 'Rivith', 'Ranjuna', 'admin@flymaster.com', 'admin', '$2y$10$LTlNzIQ97LQgpC9A2n0GZ.ipCWrAZ85Yd9ALjCk5LpSvz5iYL0WFG', '', 0, '', '', 0, '', '', ''),
(21, 'Dasun', 'Pramod', 'fcontroler@flymaster.com', 'fcontroller', '$2y$10$Fw5CtMBHcawkcAtk7U.pJO6JOVC6tCSs2CUiaiYT3sPiA/914QSU6', '', 0, '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `air_ticket`
--
ALTER TABLE `air_ticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_ID`);

--
-- Indexes for table `booking_api`
--
ALTER TABLE `booking_api`
  ADD PRIMARY KEY (`API_ID`);

--
-- Indexes for table `customer_support_agent`
--
ALTER TABLE `customer_support_agent`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `financial_manager`
--
ALTER TABLE `financial_manager`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`pnr`);

--
-- Indexes for table `flight_controller`
--
ALTER TABLE `flight_controller`
  ADD PRIMARY KEY (`Controller_ID`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`Itinerary_ID`);

--
-- Indexes for table `marketing_manager`
--
ALTER TABLE `marketing_manager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- Indexes for table `system_admin`
--
ALTER TABLE `system_admin`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `Ad_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `air_ticket`
--
ALTER TABLE `air_ticket`
  MODIFY `TicketID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT for table `booking_api`
--
ALTER TABLE `booking_api`
  MODIFY `API_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_support_agent`
--
ALTER TABLE `customer_support_agent`
  MODIFY `Agent_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `financial_manager`
--
ALTER TABLE `financial_manager`
  MODIFY `MID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `pnr` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `flight_controller`
--
ALTER TABLE `flight_controller`
  MODIFY `Controller_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `Itinerary_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_manager`
--
ALTER TABLE `marketing_manager`
  MODIFY `ManagerID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_admin`
--
ALTER TABLE `system_admin`
  MODIFY `Agent_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
