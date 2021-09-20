-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 01:46 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27887732_testingcodeofficial`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `liked_by` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `liked_by`, `author`, `status`, `date`, `time`) VALUES
(193, 54, 'Sahil', 'DotAlpha\n', 'Active', '26 Feb 2021', '03:40am'),
(192, 55, 'Sahil', 'AHkhan\n', 'Active', '26 Feb 2021', '03:40am'),
(191, 60, 'Aftab13', 'Sahil\n', 'Active', '26 Feb 2021', '02:25am'),
(190, 57, 'DotAlpha', 'AHkhan\n', 'Active', '26 Feb 2021', '01:49am'),
(187, 53, 'AHkhan', 'DotAlpha\n', 'Active', '26 Feb 2021', '01:47am'),
(188, 60, 'DotAlpha', 'Sahil\n', 'Active', '26 Feb 2021', '01:48am'),
(189, 54, 'DotAlpha', 'DotAlpha\n', 'Active', '26 Feb 2021', '01:48am'),
(186, 54, 'AHkhan', 'DotAlpha\n', 'Active', '26 Feb 2021', '01:43am'),
(194, 57, 'Sahil', 'AHkhan\n', 'Active', '26 Feb 2021', '03:41am'),
(195, 59, 'Sahil', 'Rrajan\n', 'Inactive', '26 Feb 2021', '03:41am'),
(196, 62, 'AHkhan', 'AHkhan\n', 'Active', '27 Feb 2021', '04:50am'),
(197, 63, 'AHkhan', 'AHkhan\n', 'Active', '27 Feb 2021', '04:51am'),
(198, 64, 'AHkhan', 'AHkhan\n', 'Active', '27 Feb 2021', '04:54am'),
(199, 66, 'Sahil', 'Sahil\n', 'Active', '27 Feb 2021', '04:58am'),
(200, 65, 'Sahil', 'Sahil\n', 'Active', '27 Feb 2021', '05:00am'),
(201, 62, 'Sahil', 'AHkhan\n', 'Active', '27 Feb 2021', '05:09am'),
(202, 63, 'Sahil', 'AHkhan\n', 'Active', '27 Feb 2021', '05:14am'),
(203, 65, 'AHkhan', 'Sahil\n', 'Active', '27 Feb 2021', '06:10am'),
(204, 60, 'AHkhan', 'Sahil\n', 'Active', '27 Feb 2021', '06:10am'),
(205, 53, 'ashraf143', 'DotAlpha\n', 'Inactive', '27 Feb 2021', '09:51pm'),
(206, 63, 'ashraf143', 'AHkhan\n', 'Active', '27 Feb 2021', '09:52pm'),
(207, 55, 'Rampal_123', 'AHkhan\n', 'Active', '28 Feb 2021', '01:39am'),
(208, 69, 'AHkhan', 'Rampal_123\n', 'Active', '28 Feb 2021', '01:43am'),
(209, 67, 'AHkhan', 's\n', 'Active', '28 Feb 2021', '01:44am'),
(210, 59, 'Rampal_123', 'Rrajan\n', 'Inactive', '28 Feb 2021', '02:01am'),
(211, 68, 'DotAlpha', 's\n', 'Active', '2 Mar 2021', '04:28am'),
(212, 66, 'AHkhan', 'Sahil\n', 'Active', '2 Mar 2021', '05:38am'),
(213, 59, 'AHkhan', 'Rrajan\n', 'Active', '2 Mar 2021', '09:39am'),
(214, 55, 'AHkhan', 'AHkhan\n', 'Active', '2 Mar 2021', '09:39am'),
(215, 68, 'AHkhan', 's\n', 'Active', '2 Mar 2021', '09:40am'),
(216, 66, 'DotAlpha', 'Sahil\n', 'Active', '2 Mar 2021', '10:57am'),
(217, 57, 'AHkhan', 'AHkhan\n', 'Active', '2 Mar 2021', '09:30pm'),
(218, 63, 'adarsh177', 'AHkhan\n', 'Active', '6 Mar 2021', '02:36am'),
(219, 71, 'AHkhan', 'adarsh177\n', 'Active', '6 Mar 2021', '03:00am'),
(220, 70, 'AHkhan', 'Rehan\n', 'Active', '6 Mar 2021', '03:01am'),
(221, 72, 'AHkhan', 'Abhishek\n', 'Active', '9 Mar 2021', '05:40am'),
(222, 72, 'Abhishek', 'Abhishek\n', 'Active', '9 Mar 2021', '05:41am'),
(223, 68, 'Abhishek', 's\n', 'Active', '9 Mar 2021', '05:42am'),
(224, 72, 'Krishna Boss', 'Abhishek\n', 'Active', '14 Mar 2021', '06:59am'),
(225, 73, 'Alpha', 'Alpha\n', 'Inactive', '14 Mar 2021', '08:05am'),
(226, 73, 'AHkhan', 'Alpha\n', 'Active', '14 Mar 2021', '08:05am'),
(227, 70, 'DotAlpha', 'Rehan\n', 'Active', '21 Mar 2021', '04:14am'),
(228, 69, 'DotAlpha', 'Rampal_123\n', 'Active', '21 Mar 2021', '04:16am'),
(229, 71, 'DotAlpha', 'adarsh177\n', 'Active', '21 Mar 2021', '04:17am'),
(230, 72, 'DotAlpha', 'Abhishek\n', 'Active', '21 Mar 2021', '04:18am'),
(231, 72, 'pratik', 'Abhishek\n', 'Active', '30 Mar 2021', '12:39pm'),
(232, 69, 'khanShahid', 'Rampal_123\n', 'Active', '16 Apr 2021', '08:02am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
