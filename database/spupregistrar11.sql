-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:33 PM
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
(13, 'admin', 'asd', 'asd', 'Admin', '', 'Test', '1231231', 'captainsteven01@gmail.com', 1),
(14, 'employee', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Employee', '', 'employee', '09766543211', 'jlara@gmail.com', 2),
(17, 'sitedean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Site Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 3),
(20, 'bao', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Bao', 'b', 'Office', '09354567899', 'gbalabis@gmail.com', 10),
(21, 'sbahmdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Sbahm Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 4),
(22, 'snahsdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Snahs Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 5),
(23, 'sastedean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Saste Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 6),
(24, 'beudean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Beu Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 7),
(25, 'somdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'SoM Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 8),
(26, 'graddean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Graduate Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 9),
(41, 'jlara', 'cc9f816a42431cf852cdc7a3fad42a6f65ffce24', 'cc9f816a42431cf852cdc7a3fad42a6f65ffce24', 'jerick', 'j', 'lara', '11234', 'captainsteven01@gmail.com', 1);

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
  `date_uploaded` date NOT NULL,
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

INSERT INTO `forms` (`id`, `refno`, `studentnumber`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `representname`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `transcriptfee`, `diplomafee`, `formfee`, `certfee`, `authfee`, `servicefee`, `docstamp`, `mailingfee`, `letterenvelope`, `torenvelope`, `stickerfee`, `paymentphoto`, `date_uploaded`, `claimant`, `date`, `formYear`, `formMonth`, `formDay`, `status`, `regStatus`, `regRemarks`, `regDateApprove`, `deanStatus`, `deanRemarks`, `deanDateApprove`, `baoStatus`, `baoRemarks`, `baoDateApprove`, `dateReceived`) VALUES
(1, '20220512-BC96879399', '123123', 'LARA', 'JESSELLE', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Form137A', 1, 1, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-12', 2022, 5, 12, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', NULL),
(2, '20220518-6F44BD6774', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-18', 2022, 5, 18, 1, 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-18', 'Pending', '', '', NULL),
(3, '20220518-6F44BD6775', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.jpg', '2022-05-22', '', '2022-01-18', 2022, 1, 18, 3, 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-21', NULL),
(5, '20220521-3F6B70C140', '123456', 'Gamiao', 'Miguel', '', 'GRADUATE SCHOOL', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 100, '0', '100', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.png', '2022-05-22', 'Miguel Gamiao', '2022-05-21', 2022, 5, 21, 3, 'Finalized', '', '2022-05-21', 'Approved', '', '2022-05-21', 'Approved', '', '2022-05-21', '2022-05-22'),
(6, '20220522-AA042AABFB', '123234', 'test', 'test', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '123123', 'test@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', NULL),
(7, '20220522-5A3C47BCB6', '12312313', 'adasd', 'asdasd', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Diploma', 3, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '1231231', 'test@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', NULL);

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
(1, 'admin', 'Admin', '', '1', '2021-07-03', '05:05:00pm', 'Approved pending form(Jerick Lara)'),
(2, 'sitedean', 'Site Dean', '', '3', '2021-07-03', '05:06:44pm', 'Approved requested form(Jerick Lara)'),
(3, 'bao', 'Bao', 'Office', '10', '2021-07-03', '05:08:07pm', 'Approved pending form(Jerick Lara)'),
(4, 'admin', 'Admin', '', '1', '2021-07-03', '05:10:06pm', 'Approved requested form(Jerick Lara)'),
(5, 'admin', 'Admin', '', '1', '2021-07-03', '05:10:54pm', 'Finalized form(Jerick Lara)'),
(6, 'admin', 'Admin', '', '1', '2021-07-03', '05:14:06pm', 'Declined pending form(Gerald Balabis)'),
(7, 'sbahmdean', 'Sbahm Dean', '', '4', '2021-07-03', '05:26:25pm', 'Approved requested form(Jeanlloyd Taguba)'),
(8, 'admin', 'Admin', '', '1', '2022-02-25', '08:21:33pm', 'Approved pending form(Alec Jiro Saludes)'),
(9, 'admin', 'Admin', '', '1', '2022-02-25', '08:23:33pm', 'Approved pending form(Jonas Rivera)'),
(10, 'admin', 'Admin', '', '1', '2022-02-25', '08:30:10pm', 'Approved pending form(Grandeur Labang)'),
(11, 'admin', 'Admin', '', '1', '2022-02-26', '01:49:51pm', 'Approved pending form(Armand Paul Cortes)'),
(12, 'sitedean', 'Site Dean', '', '3', '2022-02-26', '01:52:08pm', 'Approved requested form(Armand Paul Cortes)'),
(13, 'bao', 'Bao', 'Office', '10', '2022-02-26', '01:53:21pm', 'Approved pending form(Armand Paul Cortes)'),
(14, 'admin', 'Admin', '', '1', '2022-02-26', '01:55:26pm', 'Approved requested form(Armand Paul Cortes)'),
(15, 'admin', 'Admin', '', '1', '2022-02-26', '01:56:11pm', 'Finalized form(Armand Paul Cortes)'),
(16, 'admin', 'Admin', '', '1', '2022-02-28', '03:21:09pm', 'Approved pending form(Zeus Marigocio)'),
(17, 'admin', 'Admin', '', '1', '2022-02-28', '03:21:18pm', 'Approved pending form(Jezarene Valiente)'),
(18, 'admin', 'Admin', '', '1', '2022-02-28', '03:21:39pm', 'Declined pending form(Wardita Agustin)'),
(19, 'admin', 'Admin', '', '1', '2022-05-18', '01:25:58pm', 'Approved pending form(Jerick Lara)'),
(20, 'sitedean', 'Site Dean', '', '3', '2022-05-18', '01:26:45pm', 'Approved requested form(Jerick Lara)'),
(21, 'admin', 'Admin', 'test', '1', '2022-05-20', '04:48:04pm', 'Edited in accounts(13)'),
(22, 'admin', 'Admin', 'test', '1', '2022-05-20', '04:49:05pm', 'Edited in accounts(13)'),
(23, 'admin', 'Admin', 'test', '1', '2022-05-20', '04:49:52pm', 'Edited in accounts(13)'),
(24, 'admin', 'Admin', 'test', '1', '2022-05-20', '04:50:36pm', 'Edited in accounts(13)'),
(25, 'admin', 'Admin', 'test', '1', '2022-05-20', '04:51:39pm', 'Edited in accounts(13)'),
(26, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:01:58pm', 'Edited in accounts(13)'),
(27, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:04:52pm', 'Edited in accounts(13)'),
(28, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:05:01pm', 'Edited in accounts(13)'),
(29, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:05:27pm', 'Edited in accounts(13)'),
(30, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:05:40pm', 'Edited in accounts(13)'),
(31, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:07:15pm', 'Edited in accounts(13)'),
(32, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:07:23pm', 'Edited in accounts(13)'),
(33, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:09:24pm', 'Edited in accounts(13)'),
(34, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:10:07pm', 'Edited in accounts(14)'),
(35, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:10:25pm', 'Edited in accounts(14)'),
(36, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:10:37pm', 'Edited in accounts(14)'),
(37, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:11:09pm', 'Edited in accounts(14)'),
(38, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:12:43pm', 'Edited in accounts(14)'),
(39, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:21:40pm', 'Edited in accounts(14)'),
(40, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:22:09pm', 'Edited in accounts(14)'),
(41, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:22:39pm', 'Edited in accounts(14)'),
(42, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:24:19pm', 'Edited in accounts(14)'),
(43, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:25:38pm', 'Edited in accounts(14)'),
(44, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:26:37pm', 'Edited in accounts(14)'),
(45, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:28:42pm', 'Edited in accounts(14)'),
(46, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:29:06pm', 'Edited in accounts(14)'),
(47, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:29:15pm', 'Edited in accounts(14)'),
(48, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:30:55pm', 'Edited in accounts(14)'),
(49, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:32:06pm', 'Edited in accounts(14)'),
(50, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:32:18pm', 'Edited in accounts(14)'),
(51, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:32:49pm', 'Edited in accounts(14)'),
(52, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:33:04pm', 'Edited in accounts(14)'),
(53, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:35:44pm', 'Edited in accounts(14)'),
(54, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:37:03pm', 'Edited in accounts(14)'),
(55, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:37:48pm', 'Edited in accounts(14)'),
(56, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:39:50pm', 'Edited in accounts(14)'),
(57, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:41:13pm', 'Edited in accounts(14)'),
(58, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:41:36pm', 'Edited in accounts(14)'),
(59, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:42:26pm', 'Edited in accounts(14)'),
(60, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:44:09pm', 'Edited in accounts(14)'),
(61, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:46:07pm', 'Edited in accounts(14)'),
(62, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:46:15pm', 'Edited in accounts(14)'),
(63, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:46:26pm', 'Edited in accounts(14)'),
(64, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:46:40pm', 'Edited in accounts(14)'),
(65, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:49:23pm', 'Edited in accounts(14)'),
(66, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:51:38pm', 'Edited in accounts(14)'),
(67, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:53:05pm', 'Edited in accounts(14)'),
(68, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:53:13pm', 'Edited in accounts(14)'),
(69, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:54:01pm', 'Edited in accounts(14)'),
(70, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:54:08pm', 'Edited in accounts(14)'),
(71, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:54:29pm', 'Edited in accounts(14)'),
(72, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:54:49pm', 'Edited in accounts(14)'),
(73, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:55:36pm', 'Edited in accounts(14)'),
(74, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:56:22pm', 'Edited in accounts(14)'),
(75, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '05:57:18pm', 'Edited in accounts(14)'),
(76, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '06:01:44pm', 'Edited in accounts(14)'),
(77, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '06:02:00pm', 'Edited in accounts(14)'),
(78, 'jlara', 'jerick', 'lara', '1', '2022-05-20', '10:53:15pm', 'Approved requested form(testing status)'),
(79, 'jlara', 'jerick', 'lara', '1', '2022-05-21', '10:02:00pm', 'Edited in accounts(13)'),
(80, 'jlara', 'jerick', 'lara', '1', '2022-05-21', '10:08:48pm', 'Approved pending form(Miguel Gamiao)'),
(81, 'graddean', 'Graduate Dean', '', '9', '2022-05-21', '10:11:15pm', 'Approved requested form(Miguel Gamiao)'),
(82, 'bao', 'Bao', 'Office', '10', '2022-05-21', '10:15:59pm', 'Approved pending form(Miguel Gamiao)'),
(83, 'bao', 'Bao', 'Office', '10', '2022-05-21', '10:17:16pm', 'Approved pending form(Jerick Lara)'),
(84, 'jlara', 'jerick', 'lara', '1', '2022-05-21', '11:06:52pm', 'Approved requested form(Miguel Gamiao)'),
(85, 'jlara', 'jerick', 'lara', '1', '2022-05-21', '11:08:29pm', 'Finalized form(Miguel Gamiao)'),
(86, 'jlara', 'jerick', 'lara', '1', '2022-05-22', '07:33:45pm', 'Approved requested form(Miguel Gamiao)'),
(87, 'jlara', 'jerick', 'lara', '1', '2022-05-22', '07:36:09pm', 'Approved requested form(Miguel Gamiao)');

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
