-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 27, 2016 at 01:49 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TruckPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Issue`
--

CREATE TABLE `tbl_Issue` (
  `IssueId` int(11) NOT NULL,
  `IssueName` varchar(50) NOT NULL,
  `IssueDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Job`
--

CREATE TABLE `tbl_Job` (
  `JobId` int(11) NOT NULL,
  `JobName` varchar(150) NOT NULL,
  `JobDescription` varchar(500) NOT NULL,
  `JobStatus` varchar(50) NOT NULL,
  `JobAssignedTo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_Job`
--

INSERT INTO `tbl_Job` (`JobId`, `JobName`, `JobDescription`, `JobStatus`, `JobAssignedTo`) VALUES
(1, 'Fix the car', 'The car is broken', 'In Progress', 1),
(2, 'Fix the truck', 'The truck is broken', 'Completed', 0),
(3, 'Fix the train', 'The train is broken', '', 0),
(4, 'Fix the Boat', 'The boat is broken', '', 0),
(5, 'adscewa', 'asdfwe', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_JobIssue`
--

CREATE TABLE `tbl_JobIssue` (
  `JobIssueId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `IssueId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_User`
--

CREATE TABLE `tbl_User` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`UserId`, `FirstName`, `Surname`, `Username`, `Password`, `Email`) VALUES
(1, 'Conor', 'Smalley', 'user1', 'password1', 'conorsmalley93@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_Issue`
--
ALTER TABLE `tbl_Issue`
  ADD PRIMARY KEY (`IssueId`);

--
-- Indexes for table `tbl_Job`
--
ALTER TABLE `tbl_Job`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `tbl_User`
--
ALTER TABLE `tbl_User`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_Issue`
--
ALTER TABLE `tbl_Issue`
  MODIFY `IssueId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_Job`
--
ALTER TABLE `tbl_Job`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_User`
--
ALTER TABLE `tbl_User`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
