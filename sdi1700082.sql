-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 07:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1700082`
--
CREATE DATABASE IF NOT EXISTS `sdi1700082` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sdi1700082`;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Date` date DEFAULT NULL,
  `Users_ID` int(11) DEFAULT NULL,
  `Comment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Date`, `Users_ID`, `Comment`) VALUES
('2021-01-26', 5, 'Θα ήθελα μία XT 660, ευχαριστώ πολύ.'),
('2021-01-20', 2, 'Θα ήθελα ένα R6 παρακαλώ ευχαριστώ γειά σας');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `BusinessName` varchar(45) NOT NULL,
  `Employers_Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`BusinessName`, `Employers_Users_ID`) VALUES
('Lucky Strike', 2),
('Καλοψημένο', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Users_ID` int(11) NOT NULL,
  `Businesses_BusinessName` varchar(45) DEFAULT NULL,
  `Businesses_Employers_Users_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Users_ID`, `Businesses_BusinessName`, `Businesses_Employers_Users_ID`) VALUES
(4, 'Lucky Strike', 2),
(3, 'Καλοψημένο', 2),
(5, 'Καλοψημένο', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`Users_ID`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `jobhaltings`
--

CREATE TABLE `jobhaltings` (
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Employees_Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobhaltings`
--

INSERT INTO `jobhaltings` (`StartDate`, `EndDate`, `Employees_Users_ID`) VALUES
('2021-01-12', '2021-02-03', 4);

-- --------------------------------------------------------

--
-- Table structure for table `remoteperiods`
--

CREATE TABLE `remoteperiods` (
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Employees_Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialkidsleave`
--

CREATE TABLE `specialkidsleave` (
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Employees_Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialkidsleave`
--

INSERT INTO `specialkidsleave` (`StartDate`, `EndDate`, `Employees_Users_ID`) VALUES
('2020-12-27', '2021-02-03', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `UserName`, `Password`, `Email`, `PhoneNumber`) VALUES
(2, 'Κωνσταντίνος', 'Λάκης', 'KostasLakis', '123', 'kostas@gmail.com', '6955555555'),
(3, 'Νικόλας', 'Μαυραπίδης', 'NikosMavrapidis', '123', 'nikos@gmail.com', '6922222222'),
(4, 'Βαγγέλης', 'Μπλάνας', 'VagelisMplanas', '123', 'vagelis@gmail.com', '6933333333'),
(5, 'Χρήστος', 'Δαλάκας', 'XristosDalakas', '123', 'xristos@gmail.com', '6944444444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD KEY `fk_Appointments_Users1_idx` (`Users_ID`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`BusinessName`,`Employers_Users_ID`),
  ADD KEY `fk_Businesses_Employers1_idx` (`Employers_Users_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Users_ID`),
  ADD KEY `fk_Employees_Businesses1_idx` (`Businesses_BusinessName`,`Businesses_Employers_Users_ID`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`Users_ID`);

--
-- Indexes for table `jobhaltings`
--
ALTER TABLE `jobhaltings`
  ADD PRIMARY KEY (`Employees_Users_ID`);

--
-- Indexes for table `remoteperiods`
--
ALTER TABLE `remoteperiods`
  ADD PRIMARY KEY (`Employees_Users_ID`);

--
-- Indexes for table `specialkidsleave`
--
ALTER TABLE `specialkidsleave`
  ADD PRIMARY KEY (`Employees_Users_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName_UNIQUE` (`UserName`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `PhoneNumber_UNIQUE` (`PhoneNumber`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_Appointments_Users1` FOREIGN KEY (`Users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `fk_Businesses_Employers1` FOREIGN KEY (`Employers_Users_ID`) REFERENCES `employers` (`Users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_Employees_Businesses1` FOREIGN KEY (`Businesses_BusinessName`,`Businesses_Employers_Users_ID`) REFERENCES `businesses` (`BusinessName`, `Employers_Users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Employees_Users1` FOREIGN KEY (`Users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `fk_Employers_Users` FOREIGN KEY (`Users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobhaltings`
--
ALTER TABLE `jobhaltings`
  ADD CONSTRAINT `fk_JobHaltings_Employees1` FOREIGN KEY (`Employees_Users_ID`) REFERENCES `employees` (`Users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `remoteperiods`
--
ALTER TABLE `remoteperiods`
  ADD CONSTRAINT `fk_RemotePeriods_Employees1` FOREIGN KEY (`Employees_Users_ID`) REFERENCES `employees` (`Users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `specialkidsleave`
--
ALTER TABLE `specialkidsleave`
  ADD CONSTRAINT `fk_SpecialKidsLeave_Employees1` FOREIGN KEY (`Employees_Users_ID`) REFERENCES `employees` (`Users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
