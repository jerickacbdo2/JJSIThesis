-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 08:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesisdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `AccountID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserStatus` varchar(15) NOT NULL,
  `DateRegistered` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`AccountID`, `Username`, `Password`, `UserStatus`, `DateRegistered`) VALUES
(1, 'admin', 'admin', 'Admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeetype`
--

CREATE TABLE `tblemployeetype` (
  `AccountID` int(11) NOT NULL,
  `Admit_Type` varchar(50) DEFAULT NULL,
  `Emp_Status` varchar(100) DEFAULT NULL,
  `Specialization` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblloghistory`
--

CREATE TABLE `tblloghistory` (
  `LogID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `PC_Name` varchar(50) DEFAULT NULL,
  `LoggedIN` datetime DEFAULT NULL,
  `LoggedOUT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluseradd`
--

CREATE TABLE `tbluseradd` (
  `AccountID` int(11) NOT NULL,
  `HouseNo` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `Barangay` varchar(100) DEFAULT NULL,
  `Subdivision` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `Zipcode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdetails`
--

CREATE TABLE `tbluserdetails` (
  `AccountID` int(11) NOT NULL,
  `TelephoneNo` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(50) DEFAULT NULL,
  `EmailAdd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserinfo`
--

CREATE TABLE `tbluserinfo` (
  `AccountID` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Mname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Suffix` varchar(15) DEFAULT NULL,
  `Gender` varchar(15) DEFAULT NULL,
  `Status` varchar(15) DEFAULT NULL,
  `Citizenship` varchar(50) DEFAULT NULL,
  `Religion` varchar(50) DEFAULT NULL,
  `BirthPlace` varchar(50) DEFAULT NULL,
  `BirthDate` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD UNIQUE KEY `AccountID` (`AccountID`);

--
-- Indexes for table `tblemployeetype`
--
ALTER TABLE `tblemployeetype`
  ADD UNIQUE KEY `AccountID` (`AccountID`);

--
-- Indexes for table `tblloghistory`
--
ALTER TABLE `tblloghistory`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `tbluseradd`
--
ALTER TABLE `tbluseradd`
  ADD UNIQUE KEY `AccountID` (`AccountID`);

--
-- Indexes for table `tbluserdetails`
--
ALTER TABLE `tbluserdetails`
  ADD UNIQUE KEY `AccountID` (`AccountID`);

--
-- Indexes for table `tbluserinfo`
--
ALTER TABLE `tbluserinfo`
  ADD UNIQUE KEY `AccountID` (`AccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblloghistory`
--
ALTER TABLE `tblloghistory`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
