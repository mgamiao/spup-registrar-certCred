-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:18 PM
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
(14, 'employee', 'f2f3174390af58a3be8ff0d9fde67bcb7456aaa5', 'f2f3174390af58a3be8ff0d9fde67bcb7456aaa5', 'Registrar', '', 'Employee', '09766543211', 'registrar@gmail.com', 2),
(20, 'bao', '5720b65263d85121d8986d02fa289996ff2e0559', '5720b65263d85121d8986d02fa289996ff2e0559', 'Business Affair', '', 'Office', '09354567899', 'bao@gmail.com', 10),
(21, 'sbahmdean', 'c23d9585ed4813f11cd02167be0e198d11602c6f', 'c23d9585ed4813f11cd02167be0e198d11602c6f', 'Sbahm ', '', 'Dean', '09354567899', 'sbahmdean@gmail.com', 4),
(22, 'snahsdean', '88687b631262d2c8476949b4d2dea744a957df18', '88687b631262d2c8476949b4d2dea744a957df18', 'Snahs ', '', 'Dean', '09354567899', 'snahsdean@gmail.com', 5),
(23, 'sastedean', '80650de560e160bad9fd8affb2d2941830efe4f9', '80650de560e160bad9fd8affb2d2941830efe4f9', 'Saste ', '', 'Dean', '09354567899', 'sastedean@gmail.com', 6),
(24, 'beudean', 'a13ed73ad1b4839b8bbfce47c01ccd2a2a359eb7', 'a13ed73ad1b4839b8bbfce47c01ccd2a2a359eb7', 'Beu ', '', 'Dean', '09354567899', 'beudean@gmail.com', 7),
(25, 'somdean', 'faff639fcbe3b07342c7c406deaabdc04db4335f', 'faff639fcbe3b07342c7c406deaabdc04db4335f', 'SOM ', '', 'Dean', '09354567899', 'somdean@gmail.com', 8),
(49, 'sitedean', '49653520b23565946b84c17b6f95cd03eae61cd0', '49653520b23565946b84c17b6f95cd03eae61cd0', 'Site', '', 'Dean', '09569939611', 'sitedean@gmail.com', 3),
(50, 'registrar', 'b0e93a3534af685415458144ff6a8a310f9b539b', 'b0e93a3534af685415458144ff6a8a310f9b539b', 'Zenaida', '', 'Estil', '09569939622', 'zenestil@gmail.com', 1),
(51, 'gradschool', '8ad17fee60a2c43913fc8b4ad9f8545ac1065182', '8ad17fee60a2c43913fc8b4ad9f8545ac1065182', 'Graduate School', '', 'Dean', '09569939521', 'gradschool@gmail.com', 9);

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
(1, '20220512-BC96879399', '123123', 'LARA', 'JESSELLE', '', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', 'Form137A', 1, 1, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-12', 2022, 5, 12, 6, 'Approved', '', '2022-05-23', 'Disapproved', 'testing', '2022-05-23', 'Disapproved', 'test', '2022-05-23', NULL),
(2, '20220518-6F44BD6774', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-18', 2022, 5, 18, 1, 'Approved', '', '2022-05-18', 'Disapproved', 'testing', '2022-05-23', 'Pending', '', '', NULL),
(3, '20220518-6F44BD6775', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.jpg', '2022-05-22', '', '2022-01-18', 2022, 1, 18, 2, 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-21', NULL),
(5, '20220521-3F6B70C140', '123456', 'Gamiao', 'Miguel', '', 'GRADUATE SCHOOL', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '123123123', 'captainsteven01@gmail.com', 100, '0', '100', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.png', '2022-05-22', 'Miguel Gamiao', '2022-05-21', 2022, 5, 21, 3, 'Finalized', '', '2022-05-21', 'Approved', '', '2022-05-21', 'Approved', '', '2022-05-21', '2022-05-22'),
(6, '20220522-AA042AABFB', '123234', 'test', 'test', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'Diploma', 1, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '123123', 'test@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 4, 'Approved', '', '2022-05-23', 'Disapproved', 'testing', '2022-05-23', 'Pending', '', '', NULL),
(7, '20220522-5A3C47BCB6', '12312313', 'adasd', 'asdasd', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', 'Diploma', 3, 1, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '1231231', 'test@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 6, 'Disapproved', 'TESTING', '2022-05-23', 'Pending', '', '', 'Pending', '', '', NULL);

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
(87, 'jlara', 'jerick', 'lara', '1', '2022-05-22', '07:36:09pm', 'Approved requested form(Miguel Gamiao)'),
(88, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:28:15am', 'Edited in accounts(13)'),
(89, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:30:31am', 'Edited in accounts(17)'),
(90, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:31:11am', 'Edited in accounts(17)'),
(91, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:38:54am', 'Edited in accounts(17)'),
(92, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:41:02am', 'Edited in accounts(17)'),
(93, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:41:15am', 'Edited in accounts(17)'),
(94, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:42:30am', 'Edited in accounts(17)'),
(95, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '10:43:25am', 'Edited in accounts(17)'),
(96, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '07:21:49pm', 'Declined pending form(JESSELLE LARA)'),
(97, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '07:22:25pm', 'Approved pending form(test test)'),
(98, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '07:24:44pm', 'Declined pending form(asdasd adasd)'),
(99, 'sitedean', 'Site Dean', '', '3', '2022-05-23', '07:54:59pm', 'Declined pending form(Jerick Lara)'),
(100, 'sbahmdean', 'Sbahm Dean', '', '4', '2022-05-23', '07:56:23pm', 'Declined pending form(test test)'),
(101, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '08:43:51pm', 'Approved pending form(JESSELLE LARA)'),
(102, 'snahsdean', 'Snahs Dean', '', '5', '2022-05-23', '08:44:19pm', 'Declined pending form(JESSELLE LARA)'),
(103, 'sastedean', 'Saste Dean', '', '6', '2022-05-23', '08:47:02pm', 'Declined pending form(JESSELLE LARA)'),
(104, 'bao', 'Bao', 'Office', '10', '2022-05-23', '08:47:50pm', 'Declined form(JESSELLE LARA)'),
(105, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '08:56:49pm', 'Edited in accounts(24)'),
(106, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '08:57:10pm', 'Edited in accounts(24)'),
(107, '', '', '', '', '2022-05-23', '08:58:29pm', 'Edited in accounts(26)'),
(108, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '09:03:23pm', 'Edited in accounts(48)'),
(109, 'jlara', 'jerick', 'lara', '1', '2022-05-23', '09:03:37pm', 'Edited in accounts(48)'),
(110, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:05:23pm', 'Edited in accounts(14)'),
(111, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:05:42pm', 'Edited in accounts(14)'),
(112, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:06:33pm', 'Edited in accounts(20)'),
(113, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:06:52pm', 'Edited in accounts(20)'),
(114, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:07:27pm', 'Edited in accounts(23)'),
(115, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:07:49pm', 'Edited in accounts(23)'),
(116, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:08:05pm', 'Edited in accounts(21)'),
(117, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:08:22pm', 'Edited in accounts(21)'),
(118, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:08:51pm', 'Edited in accounts(49)'),
(119, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:09:13pm', 'Edited in accounts(22)'),
(120, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:09:33pm', 'Edited in accounts(22)'),
(121, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:10:03pm', 'Edited in accounts(25)'),
(122, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:10:20pm', 'Edited in accounts(25)'),
(123, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-23', '09:15:31pm', 'Edited in accounts(26)');

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
