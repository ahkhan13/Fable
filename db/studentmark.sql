-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 02:13 AM
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
-- Table structure for table `studentmark`
--

CREATE TABLE `studentmark` (
  `id` int(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `studentmark` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmark`
--

INSERT INTO `studentmark` (`id`, `studentname`, `studentmark`) VALUES
(6, 'Hero Ajaj', 'Pass : Your Total_Marks is 21'),
(31, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(32, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(33, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(34, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(35, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(36, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(37, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(38, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(39, 'Welcome : Shezii', ' Fail : Your Total_Marks is -9'),
(40, 'Welcome : Shezii', ' Fail : Your Total_Marks is -4'),
(41, 'Welcome : ', ' Fail : Your Total_Marks is -9'),
(42, 'Welcome : ', ' Fail : Your Total_Marks is -9'),
(43, 'Welcome : ', ' Fail : Your Total_Marks is -9'),
(44, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(45, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(46, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(47, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(48, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(49, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(50, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(51, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(52, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(53, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(54, 'Welcome : Ram1', ' Fail : Your Total_Marks is -4'),
(55, 'Welcome : s', ' Fail : Your Total_Marks is -9'),
(56, 'Welcome : Alpha', ' Fail : Your Total_Marks is 6'),
(57, 'Welcome : adarsh177', ' Fail : Your Total_Marks is 6'),
(58, 'Welcome : KrishnaBoss', ' Fail : Your Total_Marks is 11'),
(59, 'Welcome : adarsh177', ' Fail : Your Total_Marks is 1'),
(60, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9'),
(61, 'Welcome : Alpha', ' Fail : Your Total_Marks is -9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentmark`
--
ALTER TABLE `studentmark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentmark`
--
ALTER TABLE `studentmark`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
