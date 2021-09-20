-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 01:45 AM
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
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `request_id` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`request_id`, `sender`, `reciever`, `status`) VALUES
(46, 'DotAlpha', 'ramu', 'Active'),
(47, 'DotAlpha', 'Rrajan', 'Active'),
(54, 'ashraf143', 'AHkhan', 'Active'),
(50, 'AHkhan', 'ramu', 'Active'),
(52, 'Sahil', 'Aftab13', 'Inactive'),
(53, 'Sahil', 'DotAlpha', 'Active'),
(55, 'AHkhan', 'Rampal_123', 'Active'),
(56, 'Rampal_123', 'Aftab13', 'Inactive'),
(57, 'Rampal_123', 'ashraf143', 'Inactive'),
(58, 'AHkhan', 's', 'Inactive'),
(59, 'DotAlpha', 'AHkhan', 'Active'),
(60, 'AHkhan', 'Sahil', 'Inactive'),
(61, 'adarsh177', 'AHkhan', 'Active'),
(62, 'Rehan', 'AHkhan', 'Active'),
(63, 'AHkhan', 'Slick', 'Active'),
(64, 'Abhishek', 'AHkhan', 'Active'),
(65, 'Krishna Boss', 'AHkhan', 'Active'),
(66, 'Alpha', 'AHkhan', 'Active'),
(67, 'khanShahid', 'AHkhan', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
