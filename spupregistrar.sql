-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 05:23 AM
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
  `fullname` text NOT NULL,
  `acct_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `username`, `password1`, `password2`, `fullname`, `acct_type`) VALUES
(13, 'migs', '7b52009b64fd0a2a49e6d8a939753077792b0554', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Miguel Gamiao', 1),
(14, 'jerick', '17ba0791499db908433b80f37c5fbc89b870084b', '17ba0791499db908433b80f37c5fbc89b870084b', 'Jerick Lara', 2),
(17, 'gerald', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Gerald Balabis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
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
  `date` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `lastname`, `firstname`, `middlename`, `school`, `form_type`, `numofcopies`, `numofrequest`, `reason`, `modeofclaiming`, `address`, `coursecompleted`, `dategraduated`, `undergraduate`, `mobilenum`, `email`, `date`, `status`) VALUES
(64, 'Balabis', 'Gerald', 'Bal', 'snahs', 'Transcript of records', 3, 1, 'Scholarship', 'Through Representative', '', '', '', 'BSN 2nd Semester A.Y 2020-2021', '09678423111', 'gbalabis@gmail.com', '2021-05-14', 0),
(65, 'Gamiao', 'Miguel', 'Gam', 'site', 'Diploma', 2, 1, 'Board Examination', 'Personal Pick-up', '', '', '', 'BSIT, 2nd Semester A.Y. 2020-2021', '09875433222', 'mgamiao@gmail.com', '2021-05-14', 0),
(66, 'Lara', 'Jerick', 'Josue', 'sbahm', 'Diploma', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSBA, 2nd semester A.Y. 2020-2021', '09569939544', 'captainsteven01@gmail.com', '2021-05-14', 0),
(67, 'Dela Cruz', 'Juan', 'Jo', 'snahs', 'Diploma', 1, 1, 'Scholarship', 'Personal Pick-up', '', '', '', 'BSN, 2nd semester A.Y. 2020-2021', '09569939544', 'jcruz@gmail.com', '2021-05-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fullname` text NOT NULL,
  `acct_type` text NOT NULL,
  `xdate` text NOT NULL,
  `xtime` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
