-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 12:59 PM
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
  `gender` text NOT NULL,
  `presentaddress` text NOT NULL,
  `degree` text NOT NULL,
  `specialization` text NOT NULL,
  `form_type` varchar(65) NOT NULL,
  `localAbroad` text NOT NULL,
  `country` text NOT NULL,
  `semester_Acad` varchar(255) NOT NULL,
  `section_yrgrad` varchar(255) NOT NULL,
  `boardexamname` text NOT NULL,
  `scholarshipname` text NOT NULL,
  `others` text NOT NULL,
  `numofcopies` int(11) NOT NULL,
  `numofrequest` int(11) NOT NULL,
  `number_pages` int(255) NOT NULL,
  `number_sets` int(255) NOT NULL,
  `number_envelope` int(255) NOT NULL,
  `reason` varchar(65) NOT NULL,
  `modeofclaiming` varchar(65) NOT NULL,
  `representname` varchar(65) NOT NULL,
  `representrelationship` text NOT NULL,
  `representcontact` text NOT NULL,
  `mailingaddress` text NOT NULL,
  `mailingcontact` text NOT NULL,
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
  `previousbal` text NOT NULL,
  `ornumber` int(255) NOT NULL,
  `date_approved` date NOT NULL,
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
  `dateReceived` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `refno`, `studentnumber`, `lastname`, `firstname`, `middlename`, `school`, `gender`, `presentaddress`, `degree`, `specialization`, `form_type`, `localAbroad`, `country`, `semester_Acad`, `section_yrgrad`, `boardexamname`, `scholarshipname`, `others`, `numofcopies`, `numofrequest`, `number_pages`, `number_sets`, `number_envelope`, `reason`, `modeofclaiming`, `representname`, `representrelationship`, `representcontact`, `mailingaddress`, `mailingcontact`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `fees`, `transcriptfee`, `diplomafee`, `formfee`, `certfee`, `authfee`, `servicefee`, `docstamp`, `mailingfee`, `letterenvelope`, `torenvelope`, `stickerfee`, `previousbal`, `ornumber`, `date_approved`, `paymentphoto`, `date_uploaded`, `claimant`, `date`, `formYear`, `formMonth`, `formDay`, `status`, `regStatus`, `regRemarks`, `regDateApprove`, `deanStatus`, `deanRemarks`, `deanDateApprove`, `baoStatus`, `baoRemarks`, `baoDateApprove`, `dateReceived`) VALUES
(1, '20220512-BC96879399', '123123', 'LARA', 'JESSELLE', '', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '', '', '', '', 'Form137A', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '123123123', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-12', 2022, 5, 12, 6, 'Approved', '', '2022-05-23', 'Disapproved', 'testing', '2022-05-23', 'Disapproved', 'test', '2022-05-23', '0000-00-00'),
(2, '20220518-6F44BD6774', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-18', 2022, 5, 18, 1, 'Approved', '', '2022-05-18', 'Disapproved', 'testing', '2022-05-23', 'Pending', '', '', '0000-00-00'),
(3, '20220518-6F44BD6775', '2018011040', 'Lara', 'Jerick', 'Josue', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '09659929421', 'jericklara@gmail.com', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 0, '0000-00-00', '1.jpg', '2022-05-22', '', '2022-01-18', 2022, 1, 18, 2, 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-18', 'Approved', '', '2022-05-21', '0000-00-00'),
(5, '20220521-3F6B70C140', '123456', 'Gamiao', 'Miguel', '', 'GRADUATE SCHOOL', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '123123123', 'captainsteven01@gmail.com', 100, '0', '100', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 123, '2022-05-27', '1.png', '2022-05-22', 'Miguel Gamiao', '2022-05-21', 2022, 5, 21, 4, 'Finalized', '', '2022-05-21', 'Approved', '', '2022-05-21', 'Approved', '', '2022-05-21', '2022-05-22'),
(6, '20220522-AA042AABFB', '123234', 'test', 'test', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '123123', 'test@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 4, 'Approved', '', '2022-05-23', 'Disapproved', 'testing', '2022-05-23', 'Pending', '', '', '0000-00-00'),
(7, '20220522-5A3C47BCB6', '12312313', 'adasd', 'asdasd', '', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 3, 1, 0, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '1231231', 'test@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-22', 2022, 5, 22, 6, 'Disapproved', 'TESTING', '2022-05-23', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(8, '20220524-BE6A70B96D', '', 'asdasd', 'asdasd', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '09123456789', 'asdad@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-24', 2022, 5, 24, 1, 'Approved', '', '2022-05-26', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(9, '20220524-826482BE6B', '', 'asd', 'asd', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '', '', '', '', 'Diploma', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '0', '', '0', '', '', '', '09123456789', 'asd@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-24', 2022, 5, 24, 1, 'Approved', '', '2022-05-26', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(11, '20220526-C5B842E5C6', '2018011040', 'lastname', 'firstname', 'middlename', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'female', 'present address', 'degree', 'specialization', 'Form137A', 'abroad', 'USA', 'semester and academic year', 'section and year graduatedd', '', 'scholarship name', '', 1, 2, 0, 0, 0, 'Scholarship', 'Through Representative', 'representative name', 'relationship', '2147483647', '', '0', 'course completed', '2022-05-26', 'undergraduate', '09123456789', 'email@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-26', 2022, 5, 26, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(12, '20220526-A13FEDDEBB', '2018011040', 'asd', 'asd', '', 'BASIC EDUCATION UNIT', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'asd', 'asd', 'Form137A', 'abroad', 'usa', '', 'bsit4', '', 'ched', '', 1, 1, 0, 0, 0, 'Scholarship', 'Through Representative', 'repname', 'cousin', '2147483647', '', '0', 'ad', '2022-05-26', 'asdasd', '09569939621', 'asd@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-26', 2022, 5, 26, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(13, '20220526-29DF37DA62', '', 'asd', 'asd', '', 'SCHOOL OF MEDICINE', 'female', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'bsn', '', 'Form137A', 'local', '', '', 'asdad', 'board', '', '', 1, 3, 0, 0, 0, 'Board Examination', 'Through Representative', 'repnmae', 'cousin', '2147483647', '', '0', '', '', '', '09569939621', 'as@asdasd', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-26', 2022, 5, 26, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(14, '20220526-91CAB885D6', '', 'asd', 'asd', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'bsit', '', 'Diploma', 'abroad', 'USA', '', '', '', 'ched', '', 1, 3, 0, 0, 0, 'Scholarship', 'Through Representative', 'repname', 'wala', '09123456789', '', '', '', '', '', '09569939621', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-26', 2022, 5, 26, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(15, '20220527-B75FE5E5B4', '', 'testing', 'test', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'male', 'asd', 'asd', '', 'Diploma', 'local', '', '', '', '', '', 'personal use', 1, 3, 1, 0, 0, 'Others', 'Personal Pick-up', '', '', '', '', '', '', '', '', '09123456789', 'test@gmail.com', 100, '0', '100', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0000-00-00', '', '0000-00-00', 'asdasd', '2022-05-27', 2022, 5, 27, 0, 'Finalized', '', '2022-05-27', 'Approved', '', '2022-05-27', 'Approved', '', '2022-05-27', '2022-05-27'),
(16, '20220527-7D81328226', '', 'testing', 'testing', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'male', 'assd', 'asdd', '', 'Diploma', 'local', '', '', '', '', '', '', 1, 2, 1, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '', '', '', '09123456789', 'test@gmail.com', 1, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 123456, '2022-05-27', 'School-Fee-Receipt-Sample3.jpg', '2022-05-27', 'asd', '2022-05-27', 2022, 5, 27, 6, 'Claimed', '', '2022-05-27', 'Approved', '', '2022-05-27', 'Approved', '', '2022-05-27', '0000-00-00'),
(17, '20220528-913D72FF07', '2018-10-1040', 'lara', 'jerick', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'BSIT', '', 'Diploma', 'local', '', '', '', '', '', '', 1, 2, 0, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '', '', '', '09569939621', 'captainsteven01@gmail.com', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 123, '2022-05-28', '', '0000-00-00', 'jerick lara', '2022-05-28', 2022, 5, 28, 6, 'Claimed', '', '2022-05-28', 'Approved', '', '2022-05-28', 'Validated the Receipt', '', '2022-05-28', '2022-05-28'),
(18, '20220530-AC31B97E7A', '', 'asd', 'asd', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'asd', '', 'Diploma', 'local', '', '', '', '', '', '', 11, 1, 0, 0, 0, 'transfer to another school', 'Personal Pick-up', '', '', '', '', '', '', '', '', '09123456789', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-05-30', 2022, 5, 30, 0, 'Pending', '', '', 'Pending', '', '', 'Pending', '', '', '0000-00-00'),
(19, '20220531-0CC0A9D286', '', 'Gamiao', 'Miguel', '', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'BSBA', '', 'Diploma', 'local', '', '', '', '2022 Board Exam', '', '', 1, 1, 0, 0, 0, 'Board Examination', 'Through Representative', 'Gerald Balabis', 'Brother', '09123456789', '', '', '', '', '', '09123456789', 'captainsteven01@gmail.com', 700, '0', '200', '0', '0', '0', '0', '0', '0', '0', '0', '0', '500', 1234, '2022-05-31', 'simple-receipt-template.png', '2022-05-31', 'Gerald Balabis', '2022-05-31', 2022, 5, 31, 6, 'Claimed', '', '2022-05-31', 'Approved', '', '2022-05-31', 'Validated the Receipt', '', '2022-05-31', '2022-05-31'),
(20, '20220602-4F04821FB9', '', 'Lara', 'Jerick', '', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', 'male', '64 DIVERSION ROAD SAN GABRIEL VILLAGE', 'BSIT', '', 'Diploma', 'local', '', '', '', '', '', '', 1, 1, 1, 0, 0, 'For Reference', 'Personal Pick-up', '', '', '', '', '', '', '', '', '09123456789', 'captainsteven01@gmail.com', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', '', '2022-06-02', 2022, 6, 2, 1, 'Approved', '', '2022-06-06', 'Pending', '', '', 'Pending', '', '', '0000-00-00');

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
(1, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-26', '10:44:11pm', 'Approved pending form(asdasd asdasd)'),
(2, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-26', '10:46:45pm', 'Approved pending form(asd asd)'),
(3, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-26', '10:57:04pm', 'Approved pending form(asd asd)'),
(4, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '01:28:06pm', 'Approved pending form(test testing)'),
(5, 'sitedean', 'Site', 'Dean', '3', '2022-05-27', '01:39:55pm', 'Approved requested form(test testing)'),
(6, 'bao', 'Business Affair', 'Office', '10', '2022-05-27', '01:41:08pm', 'Approved pending form(test testing)'),
(7, 'bao', 'Business Affair', 'Office', '10', '2022-05-27', '01:45:09pm', 'Approved requested form(test testing)'),
(8, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '01:50:25pm', 'Approved requested form(test testing)'),
(9, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '01:51:10pm', 'Finalized form(test testing)'),
(10, 'bao', 'Business Affair', 'Office', '10', '2022-05-27', '08:37:03pm', 'Approved requested form(Miguel Gamiao)'),
(11, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '09:19:09pm', 'Approved pending form(testing testing)'),
(12, 'sitedean', 'Site', 'Dean', '3', '2022-05-27', '09:19:47pm', 'Approved requested form(testing testing)'),
(13, 'bao', 'Business Affair', 'Office', '10', '2022-05-27', '09:20:41pm', 'Approved pending form(testing testing)'),
(14, 'bao', 'Business Affair', 'Office', '10', '2022-05-27', '09:26:07pm', 'Approved requested form(testing testing)'),
(15, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '09:32:46pm', 'Approved requested form(testing testing)'),
(16, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-27', '09:37:35pm', 'Finalized form(testing testing)'),
(17, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '09:32:49pm', 'Approved pending form(jerick lara)'),
(18, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '09:34:35pm', 'Approved pending form(jerick lara)'),
(19, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '09:42:35pm', 'Approved pending form(jerick lara)'),
(20, 'sitedean', 'Site', 'Dean', '3', '2022-05-28', '09:46:03pm', 'Approved requested form(jerick lara)'),
(21, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '09:56:49pm', 'Approved pending form(jerick lara)'),
(22, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:01:39pm', 'Approved pending form(jerick lara)'),
(23, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:09:24pm', 'Approved pending form(jerick lara)'),
(24, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:12:29pm', 'Approved pending form(jerick lara)'),
(25, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:13:37pm', 'Approved pending form(jerick lara)'),
(26, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:19:47pm', 'Approved pending form(jerick lara)'),
(27, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:21:41pm', 'Approved pending form(jerick lara)'),
(28, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:26:56pm', 'Approved pending form(jerick lara)'),
(29, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:28:49pm', 'Approved pending form(jerick lara)'),
(30, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:31:00pm', 'Approved pending form(jerick lara)'),
(31, 'bao', 'Business Affair', 'Office', '10', '2022-05-28', '10:40:49pm', 'Approved requested form(jerick lara)'),
(32, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '10:51:03pm', 'Approved requested form(jerick lara)'),
(33, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '10:52:46pm', 'Finalized form(jerick lara)'),
(34, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-28', '10:57:56pm', 'Finalized form(jerick lara)'),
(35, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-31', '10:07:52pm', 'Approved pending form(Miguel Gamiao)'),
(36, 'sbahmdean', 'Sbahm ', 'Dean', '4', '2022-05-31', '10:08:56pm', 'Approved requested form(Miguel Gamiao)'),
(37, 'bao', 'Business Affair', 'Office', '10', '2022-05-31', '10:10:34pm', 'Approved pending form(Miguel Gamiao)'),
(38, 'bao', 'Business Affair', 'Office', '10', '2022-05-31', '10:12:00pm', 'Approved requested form(Miguel Gamiao)'),
(39, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-31', '10:20:20pm', 'Approved requested form(Miguel Gamiao)'),
(40, 'registrar', 'Zenaida', 'Estil', '1', '2022-05-31', '10:26:09pm', 'Finalized form(Miguel Gamiao)'),
(41, 'employee', 'Registrar', 'Employee', '2', '2022-06-06', '10:41:06pm', 'Approved pending form(Jerick Lara)');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
