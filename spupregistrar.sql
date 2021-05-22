-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
  `school` text NOT NULL,
  `acct_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password1`, `password2`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `school`, `acct_type`) VALUES
(13, 'admin', '7b52009b64fd0a2a49e6d8a939753077792b0554', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Admin', 'gam', '', '09678923412', 'mgamiao@gmail.com', '', 1),
(14, 'employee', '17ba0791499db908433b80f37c5fbc89b870084b', '17ba0791499db908433b80f37c5fbc89b870084b', 'Employee', 'josue', '', '09766543211', 'jlara@gmail.com', '', 2),
(17, 'sitedean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 'site', 3),
(20, 'bao', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Bao', 'b', 'Office', '09354567899', 'gbalabis@gmail.com', '', 4),
(21, 'sbahmdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Sbahm Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 'sbahm', 3),
(22, 'snahsdean', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Snahs Dean', 'bal', '', '09354567899', 'gbalabis@gmail.com', 'snahs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `refno` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `school` text NOT NULL,
  `form_type` varchar(65) NOT NULL,
  `numofcopies` int(11) NOT NULL,
  `numofrequest` int(11) NOT NULL,
  `reason` varchar(65) NOT NULL,
  `modeofclaiming` varchar(65) NOT NULL,
  `address` text NOT NULL,
  `coursecompleted` varchar(65) NOT NULL,
  `dategraduated` text NOT NULL,
  `undergraduate` text NOT NULL,
  `mobilenum` text NOT NULL,
  `email` text NOT NULL,
  `fees` int(65) NOT NULL,
  `date` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `refno`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `date`, `status`) VALUES
(96, '', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Form137A', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSIT, 2nd Semester, A.Y. 2020-2021', '09569939522', 'captainsteven01@gmail.com', 0, '2021-05-18', 1),
(97, '', 'Gamiao', 'Miguel', 'gami', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Diploma', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSBA, 2nd Semester, A.Y. 2020-2021', '09569987564', 'mgamiao@gmail.com', 500, '2021-05-18', 2),
(98, '', 'Balabis', 'Gerald', 'bla', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Certificate of Enrolment', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSN, 2nd Semester, A.Y. 2020-2021', '09579984123', 'gbalabis@gmail.com', 100, '2021-05-18', 3),
(101, '', 'Catriona', 'Lara', 'Gray', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '0945234234', 'captainsteven01@gmail.com', 100, '2021-05-20', 3);

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
(85, 'admin', 'Admin', '', '1', '2021-05-18', '10:37:48pm', 'Approved pending form(96)'),
(86, 'admin', 'Admin', '', '1', '2021-05-18', '10:38:18pm', 'Finalized requested form(96)'),
(87, 'admin', 'Admin', '', '1', '2021-05-18', '10:38:53pm', 'Approved pending form(96)'),
(88, 'admin', 'Admin', '', '1', '2021-05-18', '10:39:57pm', 'Approved pending form(96)'),
(89, 'admin', 'Admin', '', '1', '2021-05-19', '07:32:05pm', 'Approved pending form(98)'),
(90, 'dean', 'Dean', '', '3', '2021-05-19', '07:33:01pm', 'Approved pending form(98)'),
(91, 'bao', 'Bao', 'Office', '4', '2021-05-19', '07:33:48pm', 'Approved pending form(98)'),
(92, 'admin', 'Admin', '', '1', '2021-05-19', '07:34:39pm', 'Approved pending form(97)'),
(93, 'admin', 'Admin', '', '1', '2021-05-19', '08:46:37pm', 'Approved pending form(98)'),
(94, 'dean', 'Dean', '', '3', '2021-05-19', '08:47:39pm', 'Approved pending form(98)'),
(95, 'bao', 'Bao', 'Office', '4', '2021-05-19', '08:48:23pm', 'Approved pending form(98)'),
(96, 'employee', 'Employee', '', '2', '2021-05-19', '09:41:40pm', 'Approved pending form(98)'),
(97, 'dean', 'Dean', '', '3', '2021-05-19', '09:45:00pm', 'Approved pending form(98)'),
(98, 'admin', 'Admin', '', '1', '2021-05-19', '09:50:37pm', 'Approved pending form(97)'),
(99, 'admin', 'Admin', '', '1', '2021-05-19', '10:04:34pm', 'Approved pending form(96)'),
(100, 'dean', 'Dean', '', '3', '2021-05-19', '10:05:26pm', 'Approved pending form(96)'),
(101, 'bao', 'Bao', 'Office', '4', '2021-05-19', '10:06:04pm', 'Approved pending form(96)'),
(102, 'admin', 'Admin', '', '1', '2021-05-19', '10:06:46pm', 'Finalized requested form(96)'),
(103, 'admin', 'Admin', '', '1', '2021-05-19', '10:10:16pm', 'Approved pending form(96)'),
(104, 'dean', 'Dean', '', '3', '2021-05-19', '10:10:54pm', 'Approved pending form(96)'),
(105, 'bao', 'Bao', 'Office', '4', '2021-05-19', '10:11:17pm', 'Approved pending form(96)'),
(106, 'admin', 'Admin', '', '1', '2021-05-19', '10:11:47pm', 'Finalized requested form(96)'),
(107, 'admin', 'Admin', '', '1', '2021-05-19', '10:33:53pm', 'Approved pending form(96)'),
(108, 'dean', 'Dean', '', '3', '2021-05-19', '10:34:11pm', 'Approved pending form(96)'),
(109, 'bao', 'Bao', 'Office', '4', '2021-05-19', '10:34:31pm', 'Approved pending form(96)'),
(110, 'admin', 'Admin', '', '1', '2021-05-19', '10:34:51pm', 'Finalized requested form(96)'),
(111, 'admin', 'Admin', '', '1', '2021-05-19', '10:47:25pm', 'Approved pending form(96)'),
(112, 'dean', 'Dean', '', '3', '2021-05-19', '10:47:38pm', 'Approved pending form(96)'),
(113, 'bao', 'Bao', 'Office', '4', '2021-05-19', '10:47:53pm', 'Approved pending form(96)'),
(114, 'admin', 'Admin', '', '1', '2021-05-19', '10:48:57pm', 'Finalized requested form(96)'),
(115, 'admin', 'Admin', '', '1', '2021-05-19', '11:39:22pm', 'Approved pending form(96)'),
(116, 'admin', 'Admin', '', '1', '2021-05-19', '11:43:11pm', 'Approved pending form(96)'),
(117, 'admin', 'Admin', '', '1', '2021-05-20', '09:54:06pm', 'Approved pending form(101)'),
(118, 'dean', 'Dean', '', '3', '2021-05-20', '09:54:26pm', 'Approved pending form(101)'),
(119, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:07:45pm', 'Approved pending form(101)'),
(120, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:10:23pm', 'Approved pending form(101)'),
(121, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:12:39pm', 'Approved pending form(101)'),
(122, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:14:07pm', 'Approved pending form(101)'),
(123, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:17:45pm', 'Approved pending form(101)'),
(124, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:19:14pm', 'Approved pending form(101)'),
(125, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:33:35pm', 'Approved pending form(101)'),
(126, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:34:56pm', 'Approved pending form(101)'),
(127, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:39:44pm', 'Approved pending form(101)'),
(128, 'bao', 'Bao', 'Office', '4', '2021-05-20', '10:40:54pm', 'Approved pending form(101)'),
(129, 'admin', 'Admin', '', '1', '2021-05-20', '10:58:33pm', 'Approved pending form(98)'),
(130, 'admin', 'Admin', '', '1', '2021-05-20', '11:00:05pm', 'Approved pending form(96)'),
(131, 'dean', 'Dean', '', '3', '2021-05-20', '11:00:31pm', 'Approved pending form(96)'),
(132, 'sitedean', 'Dean', '', '3', '2021-05-21', '01:57:10pm', 'Approved pending form(98)'),
(133, 'bao', 'Bao', 'Office', '4', '2021-05-21', '02:17:37pm', 'Approved pending form(98)'),
(134, 'bao', 'Bao', 'Office', '4', '2021-05-21', '02:59:56pm', 'Approved pending form(97)'),
(135, 'bao', 'Bao', 'Office', '4', '2021-05-22', '12:44:41am', 'Approved pending form(98)'),
(136, 'admin', 'Admin', '', '1', '2021-05-22', '12:45:11am', 'Approved pending form(96)'),
(137, 'sitedean', 'Dean', '', '3', '2021-05-22', '12:46:01am', 'Approved pending form(101)'),
(138, 'bao', 'Bao', 'Office', '4', '2021-05-22', '12:46:28am', 'Approved pending form(101)'),
(139, 'bao', 'Bao', 'Office', '4', '2021-05-22', '12:48:00am', 'Approved pending form(101)');

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
