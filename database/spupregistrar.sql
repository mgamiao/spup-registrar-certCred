-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spupregistrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password1` text NOT NULL,
  `password2` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `acct_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password1`, `password2`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `acct_type`) VALUES
(13, 'admin', '7b52009b64fd0a2a49e6d8a939753077792b0554', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Admin', 'gam', '', '09678923412', 'mgamiao@gmail.com', 1),
(14, 'employee', '17ba0791499db908433b80f37c5fbc89b870084b', '17ba0791499db908433b80f37c5fbc89b870084b', 'Employee', 'josue', '', '09766543211', 'jlara@gmail.com', 2),
(17, 'sitedean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Site Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 3),
(20, 'bao', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Bao', 'b', 'Office', '09354567899', 'gbalabis@gmail.com', 10),
(21, 'sbahmdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Sbahm Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 4),
(22, 'snahsdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Snahs Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 5),
(23, 'sastedean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Saste Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 6),
(24, 'beudean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Beu Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 7),
(25, 'somdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'SoM Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 8),
(26, 'graddean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Graduate Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `refno` varchar(65) NOT NULL,
  `studentnumber` text NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `school` text NOT NULL,
  `form_type` varchar(65) NOT NULL,
  `numofcopies` int(11) NOT NULL,
  `numofrequest` int(11) NOT NULL,
  `reason` varchar(65) NOT NULL,
  `modeofclaiming` varchar(65) NOT NULL,
  `representname` varchar(65) NOT NULL,
  `address` text NOT NULL,
  `coursecompleted` varchar(65) NOT NULL,
  `dategraduated` text NOT NULL,
  `undergraduate` text NOT NULL,
  `mobilenum` text NOT NULL,
  `email` text NOT NULL,
  `fees` int(65) NOT NULL,
  `transcriptfee` text NOT NULL,
  `diplomafee` text NOT NULL,
  `formfee` text NOT NULL,
  `certfee` text NOT NULL,
  `authfee` text NOT NULL,
  `servicefee` text NOT NULL,
  `docstamp` text NOT NULL,
  `mailingfee` text NOT NULL,
  `letterenvelope` text NOT NULL,
  `torenvelope` text NOT NULL,
  `stickerfee` text NOT NULL,
  `paymentphoto` varchar(65) NOT NULL,
  `claimant` text NOT NULL,
  `date` date NOT NULL,
  `formYear` int(11) NOT NULL,
  `formMonth` int(11) NOT NULL,
  `formDay` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regStatus` text NOT NULL,
  `regRemarks` text NOT NULL,
  `regDateApprove` text NOT NULL,
  `deanStatus` text NOT NULL,
  `deanRemarks` text NOT NULL,
  `deanDateApprove` text NOT NULL,
  `baoStatus` text NOT NULL,
  `baoRemarks` text NOT NULL,
  `baoDateApprove` text NOT NULL,
  `dateReceived` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `refno`, `studentnumber`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `representname`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `transcriptfee`, `diplomafee`, `formfee`, `certfee`, `authfee`, `servicefee`, `docstamp`, `mailingfee`, `letterenvelope`, `torenvelope`, `stickerfee`, `paymentphoto`, `claimant`, `date`, `formYear`, `formMonth`, `formDay`, `status`, `regStatus`, `regRemarks`, `regDateApprove`, `deanStatus`, `deanRemarks`, `deanDateApprove`, `baoStatus`, `baoRemarks`, `baoDateApprove`, `dateReceived`) VALUES
(1, '20210628-DDC2EECB22', '2018011040', 'Lara', 'Jerick Steven', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Certificate of Grades', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '09569939621', 'captainsteven01@gmail.com', 100, '0', '0', '0', '100', '0', '0', '0', '0', '0', '0', '0', 'd79d742fab5f887770333e681cfe8fad.jpg', 'Jerick Lara', '2021-06-28', 2021, 6, 28, 5, 'Finalized', '', '2021-06-29', 'Approved', '', '2021-06-29', 'Approved', '', '2021-06-29', '2021-06-29'),
(2, '20210628-524DDCF88D', '201901041', 'Lara1', 'Jerick', 'Josue1', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'Board Examination', 'Personal Pick-up', '', '', '', '', '', '12313123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-28', 2021, 6, 28, 2, '', '', '', '', '', '', '', '', '', NULL),
(3, '20210628-63F91E922C', '2020101041', 'sbahm', 'sbahm', 'sbahm', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Certificate of Grades', 1, 1, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '0956993621', 'captainsteven@gmail.com', 150, '0', '0', '0', '150', '0', '0', '0', '0', '0', '0', '0', 'School-Fee-Receipt-Sample.jpg', 'Sbahm', '2021-06-28', 2021, 6, 28, 5, 'Finalized', '', '2021-06-30', 'Approved', '', '2021-06-30', 'Approved', '', '2021-06-30', '2021-06-30'),
(4, '20210629-3B87BE9DE6', '2019101030', 'Balabis', 'Gerald', 'Villar', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Diploma', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '0956993961', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(5, '20210629-A0A18C39DE', '2020181040', 'Gamiao', 'Miguel', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Transcript of records', 2, 1, 'transfer to another school', 'Through Representative', 'Miguel', '', '', '', '', '12312312312', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(6, '20210629-EA5EF262D0', '12312312', 'Pugeda', 'Rucelj', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Diploma', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '1231231', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(7, '20210629-82F560C734', '123123123', 'Babaran', 'Carlos', '', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Diploma', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '12312321', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(8, '20210629-59125FAFA1', '', 'Gumabay', 'VC', '', 'BASIC EDUCATION UNIT', 'Certificate of Grades', 2, 1, 'Board Examination', 'Personal Pick-up', '', '', '', '', '', '12312321', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 1, 'Approved', '', '2021-06-29', '', '', '', '', '', '', NULL),
(9, '20210629-D19B7A8B2D', '23123123213', 'Kummer', 'Marifel', '', 'SCHOOL OF MEDICINE', 'Form137A', 2, 1, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(10, '20210629-8EF42F7C5F', '123123131', 'Gumarang', 'Sheena', '', 'GRADUATE SCHOOL', 'Diploma', 2, 2, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '12312312313', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, '', '', '', '', '', '', '', '', '', NULL),
(11, '20210629-BB6F037E58', '123131231', 'asdasdasd', 'xcvxcvxcv', '', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Diploma', 2, 1, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '234234', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-29', 2021, 6, 29, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', NULL),
(12, '20210701-DDA1599FBB', '', 'asdasdad', 'asdasd', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 2, 1, 'Board Examination', 'Personal Pick-up', '', '', '', '', '', '123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-01', 2021, 7, 1, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `acct_type` text NOT NULL,
  `xdate` text NOT NULL,
  `xtime` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `username`, `firstname`, `lastname`, `acct_type`, `xdate`, `xtime`, `action`) VALUES
(1, 'admin', 'Admin', '', '1', '2021-06-29', '09:10:47pm', 'Approved pending form(1)'),
(2, 'sitedean', 'Site Dean', '', '3', '2021-06-29', '09:18:40pm', 'Approved requested form(1)'),
(3, 'bao', 'Bao', 'Office', '10', '2021-06-29', '09:23:21pm', 'Approved pending form(1)'),
(4, 'admin', 'Admin', '', '1', '2021-06-29', '09:28:40pm', 'Finalized requested form(1)'),
(5, 'admin', 'Admin', '', '1', '2021-06-29', '09:31:48pm', 'Approved pending form(1)'),
(6, 'admin', 'Admin', '', '1', '2021-06-29', '11:18:41pm', 'Approved pending form(VC Gumabay)'),
(7, 'admin', 'Admin', '', '1', '2021-06-30', '02:13:42pm', 'Approved pending form(sbahm sbahm)'),
(8, 'sbahmdean', 'Sbahm Dean', '', '4', '2021-06-30', '02:15:07pm', 'Approved requested form( sbahm)'),
(9, 'bao', 'Bao', 'Office', '10', '2021-06-30', '02:17:00pm', 'Approved pending form( sbahm)'),
(10, 'admin', 'Admin', '', '1', '2021-06-30', '02:20:01pm', 'Approved requested form( sbahm)'),
(11, 'admin', 'Admin', '', '1', '2021-06-30', '02:20:51pm', 'Approved pending form(3)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
