-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 02:14 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `role`, `profile`) VALUES
(24, 'Aftab', 'Husain', 'AHkhan', '', 'Aftab', 0, 'IMG_20200108_180838.jpg'),
(26, 'Ram', 'Kumar', 'ramu', '', '1234', 0, ''),
(29, 'Rahul', 'Rajan', 'Rrajan', 'rahul@gmail.com', '12345', 0, ''),
(30, 'Sahil', 'Khan', 'Sahil', 'khanahs3351@gmail.com', '12345', 0, ''),
(49, 'Ram', 'Pal', 'Pal', 'dotalpha13@gmail.com', '12345', 0, ''),
(34, 'Ashraf', 'Ali', 'ashraf143', 'Ash1234567k@gmail.com', 'Khan123@', 0, ''),
(35, 'S', 'S', 's', 'sachinkarya333@gmail.com', 's', 0, ''),
(36, 'Ram', 'Pal', 'Rampal_123', 'paljishekha1999@gmail.com', 'Ram123456789', 0, ''),
(38, 'Rehan', 'Ahmad', 'Rehan', 'rehanxyz30@gmail.com', 'Rehan@2001', 0, 'IMG_20210217_165512.jpg'),
(39, 'Adarsh', 'Shrivastava', 'adarsh177', 'adarsh1772000@gmail.com', 'Password', 0, ''),
(40, 'Ayush ', 'Patel', 'xxx0605', 'ayush998449@gmail.com', 'Ayush@0605', 0, ''),
(41, 'Pranab', 'Singh', 'Slick', 'pranabsingh421306@gmail.com', 'qwertyuiop', 0, ''),
(42, 'Abhishek', 'Kumar', 'Abhishek', 'bittu.deoghar13@gmail.com', '12345678', 0, ''),
(43, 'Krishna', 'Gupta', 'Krishna Boss', 'kg814688@gmail.com', '12345', 0, ''),
(44, 'Ghulam', 'Rasool', 'Alpha', 'gulamrasool7845@gmail.com', 'Abc123123', 0, ''),
(46, 'Pratik', 'Kumar', 'pratik', 'pratikmuz20@gmail.com', 'Aftab123', 0, ''),
(47, 'Mahtab ', 'Husain', 'Mahtab husain', 'Husainmahtab75@gmail.com', '0786', 0, ''),
(48, 'Shahid', 'khan', 'khanShahid', 'razashahid22.1997@gmail.com', '133456', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
