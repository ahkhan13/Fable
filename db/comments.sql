-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 01:44 AM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `toUsername` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `toUsername`, `comment`, `post_id`, `date`, `time`) VALUES
(17, 'DotAlpha', 'DotAlpha', 'hello', 53, '22 Feb 2021', '12:23pm'),
(18, 'DotAlpha', 'DotAlpha', 'hello', 53, '22 Feb 2021', '12:30pm'),
(19, 'DotAlpha', 'DotAlpha', 'Hii bro', 56, '22 Feb 2021', '12:47pm'),
(20, 'DotAlpha', 'AHkhan', 'Nice Pic', 55, '22 Feb 2021', '12:48pm'),
(21, 'DotAlpha', 'AHkhan', 'Nice Movie', 55, '22 Feb 2021', '12:50pm'),
(22, 'AHkhan', 'DotAlpha', 'Nice bro and how are u', 56, '22 Feb 2021', '12:58pm'),
(23, 'AHkhan', 'DotAlpha', 'hello', 56, '22 Feb 2021', '01:28pm'),
(25, 'AHkhan', 'AHkhan', 'no', 53, '22 Feb 2021', '02:22pm'),
(26, 'AHkhan', 'DotAlpha', 'ok', 53, '22 Feb 2021', '02:23pm'),
(27, 'AHkhan', 'DotAlpha', ' nice pic bro', 53, '22 Feb 2021', '02:24pm'),
(28, 'AHkhan', 'AHkhan', 'Nice work bro', 56, '22 Feb 2021', '02:28pm'),
(29, 'AHkhan', 'AHkhan', 'hello bro ', 56, '22 Feb 2021', '02:31pm'),
(32, 'AHkhan', 'AHkhan', 'r', 56, '22 Feb 2021', '02:41pm'),
(34, 'AHkhan', 'AHkhan', 'why ', 53, '22 Feb 2021', '03:41pm'),
(35, 'AHkhan', 'AHkhan', 'How are u', 53, '22 Feb 2021', '03:48pm'),
(36, 'AHkhan', 'AHkhan', 'Nice work', 53, '22 Feb 2021', '03:52pm'),
(45, 'AHkhan', 'DotAlpha', 'hello bro how are u feeling today and noting tod do', 53, '22 Feb 2021', '04:51pm'),
(46, 'AHkhan', 'DotAlpha', 'nice', 56, '22 Feb 2021', '05:29pm'),
(47, 'AHkhan', 'DotAlpha', 'yes right', 55, '23 Feb 2021', '06:46am'),
(48, 'AHkhan', 'DotAlpha', 'Ok', 55, '25 Feb 2021', '02:58am'),
(49, 'Sahil', 'AHkhan', 'Nice', 57, '25 Feb 2021', '11:02pm'),
(50, 'AHkhan', 'AHkhan', 'Ok bro', 57, '26 Feb 2021', '09:55am'),
(51, 'AHkhan', 'Sahil', 'Thanks', 57, '26 Feb 2021', '09:55am'),
(52, 'Aftab13', 'Sahil', 'Ha ha ha', 60, '26 Feb 2021', '12:55pm'),
(53, 'Sahil', 'DotAlpha', 'Nice pic', 54, '26 Feb 2021', '02:12pm'),
(54, 'AHkhan', 'AHkhan', 'Nice ', 63, '27 Feb 2021', '03:22pm'),
(55, 'Sahil', 'Sahil', 'Sachin tere liye', 66, '27 Feb 2021', '03:28pm'),
(56, 'Sahil', 'AHkhan', 'Nice pic', 62, '27 Feb 2021', '03:39pm'),
(57, 'Sahil', 'Sahil', 'First view', 65, '27 Feb 2021', '03:41pm'),
(58, 'Sahil', 'AHkhan', 'Ohh', 63, '27 Feb 2021', '03:44pm'),
(59, 'ashraf143', 'AHkhan', 'Nice', 63, '28 Feb 2021', '08:23am'),
(60, 'ashraf143', 'AHkhan', 'Good', 63, '28 Feb 2021', '08:23am'),
(61, 'AHkhan', 'ashraf143', 'Nice', 63, '28 Feb 2021', '09:31am'),
(62, 'Rampal_123', 'AHkhan', 'Nice bro', 55, '28 Feb 2021', '12:10pm'),
(63, 'AHkhan', 'Rampal_123', 'Nice', 69, '28 Feb 2021', '12:13pm'),
(64, 'Rampal_123', 'AHkhan', 'Tq', 69, '28 Feb 2021', '12:13pm'),
(65, 'AHkhan', 'Sahil', 'Ok', 66, '2 Mar 2021', '04:08pm'),
(66, 'DotAlpha', 'Sahil', 'Ohh', 66, '2 Mar 2021', '09:28pm'),
(67, 'adarsh177', 'adarsh177', 'MY comment', 71, '6 Mar 2021', '01:02pm'),
(68, 'AHkhan', 'Rehan', 'Nice bsdk', 70, '6 Mar 2021', '01:46pm'),
(69, 'AHkhan', 'adarsh177', 'Thanks bro', 71, '6 Mar 2021', '01:48pm'),
(70, 'AHkhan', 'AHkhan', 'Gg', 70, '8 Mar 2021', '06:46pm'),
(71, 'AHkhan', 'Abhishek', 'Nice', 72, '9 Mar 2021', '04:11pm'),
(72, 'Abhishek', 'AHkhan', 'Bah', 72, '9 Mar 2021', '04:12pm'),
(73, 'Abhishek', 'AHkhan', 'Bah', 72, '9 Mar 2021', '04:12pm'),
(74, 'AHkhan', 's', 'Nice', 67, '10 Mar 2021', '08:58pm'),
(75, 'Krishna Boss', 'Abhishek', 'Nice', 72, '14 Mar 2021', '04:30pm'),
(76, 'Krishna Boss', 'Abhishek', 'Nice', 72, '14 Mar 2021', '04:30pm'),
(77, 'AHkhan', 'Abhishek', 'Nice', 72, '14 Mar 2021', '04:30pm'),
(78, 'AHkhan', 'Alpha', 'Nice', 73, '14 Mar 2021', '05:35pm'),
(79, 'Alpha', 'AHkhan', 'Thanks', 73, '14 Mar 2021', '05:36pm'),
(80, 'DotAlpha', 'Alpha', 'Nice ðŸ¤£', 73, '21 Mar 2021', '01:49pm'),
(81, 'DotAlpha', 'Alpha', 'ðŸ‘ðŸ‘ðŸ‘', 73, '21 Mar 2021', '01:49pm'),
(82, 'pratik', 'Abhishek', 'hekko', 72, '30 Mar 2021', '10:09pm'),
(83, 'khanShahid', 'Rampal_123', 'niceðŸ‘ŒðŸ‘Œ', 69, '16 Apr 2021', '05:33pm'),
(84, 'AHkhan', 'DotAlpha', 'Nice', 54, '30 May 2021', '08:21pm'),
(85, 'AHkhan', 'Sahil', 'Hii', 54, '30 May 2021', '08:21pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
