-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 01:44 PM
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
  `address` text NOT NULL,
  `coursecompleted` varchar(65) NOT NULL,
  `dategraduated` text NOT NULL,
  `undergraduate` text NOT NULL,
  `mobilenum` text NOT NULL,
  `email` text NOT NULL,
  `fees` int(65) NOT NULL,
  `paymentphoto` varchar(65) NOT NULL,
  `date` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `refno`, `studentnumber`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `paymentphoto`, `date`, `status`) VALUES
(104, '20210523-BD74F4EE67', '', 'Sibal', 'Jhen', 'Maramag', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Form137A', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 200, 'a.jpg', '2021-05-23', 3),
(106, '20210524-CABA9D08B2', '', 'Gamiao', 'Miguel', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Form137A', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSBA 2nd Semester A.Y. 2020-2021', '0978456321', 'mgamiao@gmail.com', 0, 'download.jpg', '2021-05-24', 3),
(107, '20210524-C858B1D2CC', '', 'Balabis', 'Gerald', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Certificate of Enrolment', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSN 2nd Semester A.Y. 2020-2021', '09785643432', 'gbalabis@gmail.com', 0, 'WjGTnKGQ_400x400.png', '2021-05-24', 3),
(108, '20210524-17E55620D5', '', 'Cortes', 'Armand Paul', '', 'BASIC EDUCATION UNIT', 'Diploma', 3, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '09786543123', 'acortes@gmail.com', 0, '', '2021-05-24', 3),
(109, '20210524-67F97A1EBB', '', 'Dela Cruz', 'Juan', '', 'SCHOOL OF MEDICINE', 'Diploma', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '09567894456', 'gbalabis@gmail.com', 0, '', '2021-05-24', 0),
(110, '20210524-F01171630B', '', 'Batumbakal', 'Maria', '', 'GRADUATE SCHOOL', 'Certificate of Graduation', 2, 1, 'Board Examination', 'Personal Pick-up', '', '', '', '', '09786543678', 'gbalabis@gmail.com', 0, '', '2021-05-24', 0),
(129, '20210529-DD56EE5E2A', '', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Form137A', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '09569939621', 'captainsteven01@gmail.com', 0, '', '2021-05-29', 0),
(130, '20210531-805832CEC4', '', 'lara', 'asdasd', 'ad', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '234234234', 'caadad@adasd.com', 0, '', '2021-05-31', 0);

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
(145, 'admin', 'Admin', '', '1', '2021-05-24', '10:23:45pm', 'Approved pending form(105)'),
(146, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:17pm', 'Approved pending form(106)'),
(147, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:24pm', 'Approved pending form(108)'),
(148, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:31pm', 'Approved pending form(107)'),
(149, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:36pm', 'Approved pending form(104)'),
(150, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:42pm', 'Approved pending form(109)'),
(151, 'admin', 'Admin', '', '1', '2021-05-24', '10:24:48pm', 'Approved pending form(110)'),
(152, 'sitedean', 'Site Dean', '', '3', '2021-05-24', '10:25:55pm', 'Approved requested form(105)'),
(153, 'sitedean', 'Site Dean', '', '3', '2021-05-24', '10:27:13pm', 'Approved requested form(105)'),
(154, 'sbahmdean', 'Sbahm Dean', '', '4', '2021-05-24', '10:28:27pm', 'Approved requested form(106)'),
(155, 'snahsdean', 'Snahs Dean', '', '5', '2021-05-24', '10:28:47pm', 'Approved requested form(107)'),
(156, 'sastedean', 'Saste Dean', '', '6', '2021-05-24', '10:30:02pm', 'Approved requested form(104)'),
(157, 'beudean', 'Beu Dean', '', '7', '2021-05-24', '10:30:21pm', 'Approved requested form(108)'),
(158, 'somdean', 'SoM Dean', '', '8', '2021-05-24', '10:31:05pm', 'Approved requested form(109)'),
(159, 'graddean', 'Graduate Dean', '', '9', '2021-05-24', '10:31:24pm', 'Approved requested form(110)'),
(160, 'bao', 'Bao', 'Office', '10', '2021-05-24', '10:32:40pm', 'Approved pending form(105)'),
(161, 'admin', 'Admin', '', '1', '2021-05-24', '10:33:55pm', 'Finalized requested form(105)'),
(162, 'admin', 'Admin', '', '1', '2021-05-24', '10:35:35pm', 'Finalized requested form(105)'),
(163, 'sastedean', 'Saste Dean', '', '6', '2021-05-25', '03:09:46am', 'Approved requested form(104)'),
(164, 'bao', 'Bao', 'Office', '10', '2021-05-25', '03:10:58am', 'Approved pending form(104)'),
(165, 'bao', 'Bao', 'Office', '10', '2021-05-25', '03:12:21am', 'Approved pending form(104)'),
(166, 'bao', 'Bao', 'Office', '10', '2021-05-25', '03:14:18am', 'Approved pending form(104)'),
(167, 'admin', 'Admin', '', '1', '2021-05-27', '11:06:40pm', 'Approved pending form(108)'),
(168, 'admin', 'Admin', '', '1', '2021-05-27', '11:30:05pm', 'Approved pending form(105)'),
(169, 'sitedean', 'Site Dean', '', '3', '2021-05-27', '11:31:37pm', 'Approved requested form(105)'),
(170, 'bao', 'Bao', 'Office', '10', '2021-05-27', '11:33:24pm', 'Approved pending form(105)'),
(171, 'admin', 'Admin', '', '1', '2021-05-27', '11:37:18pm', 'Finalized requested form(105)'),
(172, 'sastedean', 'Saste Dean', '', '6', '2021-05-31', '12:09:46am', 'Approved requested form(104)'),
(173, 'sastedean', 'Saste Dean', '', '6', '2021-05-31', '12:16:13am', 'Approved requested form(104)');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
