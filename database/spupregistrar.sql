-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
  `dateReceived` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `refno`, `studentnumber`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `representname`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `transcriptfee`, `diplomafee`, `formfee`, `certfee`, `authfee`, `servicefee`, `docstamp`, `mailingfee`, `letterenvelope`, `torenvelope`, `stickerfee`, `paymentphoto`, `date`, `formYear`, `formMonth`, `formDay`, `status`, `regStatus`, `regRemarks`, `regDateApprove`, `deanStatus`, `deanRemarks`, `deanDateApprove`, `baoStatus`, `baoRemarks`, `baoDateApprove`, `dateReceived`) VALUES
(104, '20210523-BD74F4EE67', '', 'Sibal', 'Jhen', 'Maramag', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Form137A', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 3, '', '', '', '', '', '', '', '', '', '', '', 'a.jpg', '2021-05-01', 2021, 5, 1, 3, '', '', '', '', '', '', '', '', '', '0000-00-00'),
(106, '20210524-CABA9D08B2', '', 'Gamiao', 'Miguel', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Form137A', 2, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', 'BSBA 2nd Semester A.Y. 2020-2021', '0978456321', 'awdawda@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', 'download.jpg', '2021-05-03', 2021, 5, 3, 3, '', '', '', 'Disapproved', 'sbahm decline form test 1\r\n', '2021-06-22', '', '', '', '0000-00-00'),
(107, '20210524-C858B1D2CC', '', 'Balabis', 'Gerald', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Certificate of Enrolment', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', 'BSN 2nd Semester A.Y. 2020-2021', '09785643432', 'gbalabis@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', 'WjGTnKGQ_400x400.png', '2021-05-25', 2021, 5, 25, 4, '', '', '', '', '', '', '', '', '', '2021-06-24'),
(108, '20210524-17E55620D5', '', 'Cortes', 'Armand Paul', '', 'BASIC EDUCATION UNIT', 'Diploma', 3, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '09786543123', 'acortes@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-05-13', 2021, 5, 13, 4, '', '', '', '', '', '', '', '', '', '2021-06-24'),
(109, '20210524-67F97A1EBB', '', 'Dela Cruz', 'Juan', '', 'SCHOOL OF MEDICINE', 'Diploma', 0, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '09567894456', 'gbalabis@gmail.com', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '2021-05-05', 2021, 5, 5, 1, 'Approved', '', '2021-06-22', 'Disapproved', 'som test 1', '2021-06-22', 'Disapproved', 'You have an existing balance. Please contact the business affairs office.', '2021-06-22', '0000-00-00'),
(110, '20210524-F01171630B', '', 'Batumbakal', 'Maria', '', 'GRADUATE SCHOOL', 'Certificate of Graduation', 2, 1, 'Board Examination', 'Personal Pick-up', '', '', '', '', '', '09786543678', 'gbalabis@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-05-26', 2021, 5, 26, 0, '', '', '', '', '', '', '', '', '', '0000-00-00'),
(129, '20210529-DD56EE5E2A', '', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Form137A', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', '', '', '09569939621', 'captainsteven01@gmail.com', 15, '', '', '', '', '', '', '', '', '', '', '', '', '2021-05-29', 2021, 5, 29, 4, '', '', '', '', '', '', '', '', '', '2021-06-24'),
(171, '20210620-EAD6FE9C4C', '', 'asdasd', 'sdfsd', '', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Transcript of records', 2, 0, 'Scholarship', 'Through Representative', 'fg', '', '', '', '', '123', 'captainsteven01@gmail.com', 120, '100', '0', '0', '0', '0', '20', '0', '0', '0', '0', '0', '', '2021-06-07', 2021, 6, 7, 2, '', '', '', '', '', '', '', '', '', '0000-00-00'),
(173, '20210622-8582AFA072', '2012-0123', 'chaeyoung', 'park', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'transfer to another school', 'Through Representative', 'awdad', '', '', '', '', '123', 'migeaw2@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-01', 2021, 6, 1, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(174, '20210623-8E00278C60', '', 'manoban', 'lalisa', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 0, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '1', 'lmanoban@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-23', 2021, 6, 23, 4, '', '', '', '', '', '', '', '', '', '2021-06-24'),
(175, '20210623-09519D79C1', '', 'kim', 'yuna', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Form137A', 1, 0, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '1', 'ykim@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '2021-06-22', 2021, 6, 22, 0, '', '', '', '', '', '', '', '', '', '0000-00-00');

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
(173, 'sastedean', 'Saste Dean', '', '6', '2021-05-31', '12:16:13am', 'Approved requested form(104)'),
(174, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:22:14pm', 'Approved pending form(104)'),
(175, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:27:09pm', 'Approved pending form(104)'),
(176, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:45:14pm', 'Approved pending form(104)'),
(177, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:49:31pm', 'Approved pending form(104)'),
(178, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:52:49pm', 'Approved pending form(104)'),
(179, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:56:08pm', 'Approved pending form(104)'),
(180, 'bao', 'Bao', 'Office', '10', '2021-06-18', '08:57:28pm', 'Approved pending form(104)'),
(181, 'bao', 'Bao', 'Office', '10', '2021-06-18', '09:01:37pm', 'Approved pending form(104)'),
(182, 'bao', 'Bao', 'Office', '10', '2021-06-18', '10:10:58pm', 'Approved pending form(104)'),
(183, 'bao', 'Bao', 'Office', '10', '2021-06-18', '10:12:30pm', 'Approved pending form(129)'),
(184, 'bao', 'Bao', 'Office', '10', '2021-06-18', '10:14:10pm', 'Approved pending form(129)'),
(185, 'bao', 'Bao', 'Office', '10', '2021-06-18', '10:15:33pm', 'Approved pending form(104)'),
(186, 'bao', 'Bao', 'Office', '10', '2021-06-18', '10:16:47pm', 'Approved pending form(104)'),
(187, 'admin', 'Admin', '', '1', '2021-06-20', '08:09:12pm', 'Declined pending form(142)'),
(188, 'bao', 'Bao', 'Office', '10', '2021-06-20', '08:15:17pm', 'Approved pending form(104)'),
(189, 'bao', 'Bao', 'Office', '10', '2021-06-20', '08:20:20pm', 'Approved pending form(104)'),
(190, 'bao', 'Bao', 'Office', '10', '2021-06-20', '08:30:21pm', 'Approved pending form(140)'),
(191, 'admin', 'Admin', '', '1', '2021-06-21', '11:22:24pm', 'Approved pending form(171)'),
(192, 'snahsdean', 'Snahs Dean', '', '5', '2021-06-21', '11:23:01pm', 'Approved requested form(171)'),
(193, 'bao', 'Bao', 'Office', '10', '2021-06-21', '11:23:35pm', 'Approved pending form(171)'),
(194, 'admin', 'Admin', '', '1', '2021-06-21', '11:32:01pm', 'Finalized requested form(171)'),
(195, 'admin', 'Admin', '', '1', '2021-06-22', '06:51:26pm', 'Approved pending form(172)'),
(196, 'admin', 'Admin', '', '1', '2021-06-22', '06:54:29pm', 'Approved pending form(172)'),
(197, 'admin', 'Admin', '', '1', '2021-06-22', '07:10:34pm', 'Approved pending form(172)'),
(198, 'admin', 'Admin', '', '1', '2021-06-22', '07:17:57pm', 'Declined pending form(172)'),
(199, 'admin', 'Admin', '', '1', '2021-06-22', '07:19:00pm', 'Declined pending form(109)'),
(200, 'admin', 'Admin', '', '1', '2021-06-22', '07:22:56pm', 'Declined pending form(109)'),
(201, 'admin', 'Admin', '', '1', '2021-06-22', '07:24:29pm', 'Declined pending form(109)'),
(202, 'admin', 'Admin', '', '1', '2021-06-22', '07:26:09pm', 'Declined pending form(109)'),
(203, 'admin', 'Admin', '', '1', '2021-06-22', '07:27:40pm', 'Declined pending form(109)'),
(204, 'admin', 'Admin', '', '1', '2021-06-22', '07:28:26pm', 'Declined pending form(109)'),
(205, 'admin', 'Admin', '', '1', '2021-06-22', '07:29:37pm', 'Declined pending form(109)'),
(206, 'admin', 'Admin', '', '1', '2021-06-22', '07:31:54pm', 'Approved pending form(109)'),
(207, 'admin', 'Admin', '', '1', '2021-06-22', '07:33:15pm', 'Approved pending form(109)'),
(208, 'bao', 'Bao', 'Office', '10', '2021-06-22', '08:11:26pm', 'Approved pending form(109)'),
(209, 'bao', 'Bao', 'Office', '10', '2021-06-22', '08:12:25pm', 'Approved pending form(109)'),
(210, 'bao', 'Bao', 'Office', '10', '2021-06-22', '08:13:17pm', 'Approved pending form(109)'),
(211, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:21:34pm', 'Approved requested form(109)'),
(212, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:22:26pm', 'Approved requested form(109)'),
(213, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:23:53pm', 'Approved requested form(109)'),
(214, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:24:03pm', 'Approved requested form(109)'),
(215, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:24:22pm', 'Approved requested form(109)'),
(216, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:24:55pm', 'Approved requested form(109)'),
(217, 'admin', 'Admin', '', '1', '2021-06-22', '08:34:20pm', 'Declined pending form(109)'),
(218, 'admin', 'Admin', '', '1', '2021-06-22', '08:35:23pm', 'Approved pending form(109)'),
(219, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:42:08pm', 'Declined pending form(109)'),
(220, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:46:58pm', 'Declined pending form(109)'),
(221, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:48:37pm', 'Declined pending form(109)'),
(222, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '08:50:59pm', 'Approved requested form(109)'),
(223, 'beudean', 'Beu Dean', '', '7', '2021-06-22', '09:00:45pm', 'Declined pending form(109)'),
(224, 'bao', 'Bao', 'Office', '10', '2021-06-22', '09:03:48pm', 'Declined pending form(109)'),
(225, 'bao', 'Bao', 'Office', '10', '2021-06-22', '09:04:14pm', 'Approved pending form(109)'),
(226, 'bao', 'Bao', 'Office', '10', '2021-06-22', '09:05:52pm', 'Declined pending form(109)'),
(227, 'graddean', 'Graduate Dean', '', '9', '2021-06-22', '09:30:15pm', 'Declined pending form(109)'),
(228, 'sastedean', 'Saste Dean', '', '6', '2021-06-22', '09:48:16pm', 'Declined pending form(109)'),
(229, 'sbahmdean', 'Sbahm Dean', '', '4', '2021-06-22', '09:58:23pm', 'Declined pending form(106)'),
(230, 'sitedean', 'Site Dean', '', '3', '2021-06-22', '10:02:37pm', 'Declined pending form(109)'),
(231, 'snahsdean', 'Snahs Dean', '', '5', '2021-06-22', '10:25:36pm', 'Declined pending form(109)'),
(232, 'somdean', 'SoM Dean', '', '8', '2021-06-22', '10:30:05pm', 'Declined pending form(109)'),
(233, 'admin', 'Admin', '', '1', '2021-06-24', '01:06:24am', 'Finalized requested form(108)'),
(234, 'admin', 'Admin', '', '1', '2021-06-24', '01:11:09am', 'Finalized requested form(107)'),
(235, 'admin', 'Admin', '', '1', '2021-06-24', '01:12:16am', 'Finalized requested form(129)'),
(236, 'admin', 'Admin', '', '1', '2021-06-24', '01:21:44am', 'Finalized requested form(108)'),
(237, 'admin', 'Admin', '', '1', '2021-06-24', '01:22:01am', 'Finalized requested form(107)'),
(238, 'admin', 'Admin', '', '1', '2021-06-24', '01:22:13am', 'Finalized requested form(129)'),
(239, 'admin', 'Admin', '', '1', '2021-06-24', '01:23:18am', 'Finalized requested form(174)');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
