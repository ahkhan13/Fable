-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 02:11 AM
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `msg_sender` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `msg_reciever` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_sender`, `msg`, `msg_reciever`, `time`) VALUES
(103, 'AHkhan', 'Nice', 'DotAlpha', '12:07pm'),
(102, 'DotAlpha', 'hello', 'AHkhan', '12:07pm'),
(101, 'DotAlpha', 'hii', 'AHkhan', '12:03pm'),
(104, 'adarsh177', 'hi bhai', 'AHkhan', '01:27pm'),
(105, 'AHkhan', 'Hii', 'adarsh177', '01:27pm'),
(106, 'AHkhan', 'Or', 'adarsh177', '01:27pm'),
(107, 'adarsh177', 'gajb hai', 'AHkhan', '01:27pm'),
(108, 'AHkhan', 'Kaisa hai', 'adarsh177', '01:27pm'),
(109, 'adarsh177', 'sahi kaam kiya hai bohot', 'AHkhan', '01:27pm'),
(110, 'AHkhan', 'Thanks ', 'adarsh177', '01:27pm'),
(111, 'adarsh177', 'ab lag raha ke haa class na attend karke tune timewaste nai kiya. warna mujhe to lag raha tha tu kahi soota to nai rehta', 'AHkhan', '01:28pm'),
(112, 'adarsh177', 'aise hi karte reh', 'AHkhan', '01:28pm'),
(113, 'adarsh177', 'Internship ke liye bhi apply karna chalu kar aaj se', 'AHkhan', '01:28pm'),
(114, 'AHkhan', 'Are bhai', 'adarsh177', '01:28pm'),
(115, 'AHkhan', 'Accha', 'adarsh177', '01:28pm'),
(116, 'AHkhan', 'Hii', 'Rehan', '01:33pm'),
(117, 'Rehan', 'Kya re laude', 'AHkhan', '01:33pm'),
(118, 'AHkhan', 'Chup bsdk', 'Rehan', '01:33pm'),
(119, 'Rehan', 'Kahan h abhi', 'AHkhan', '01:33pm'),
(120, 'AHkhan', 'Ghar', 'Rehan', '01:33pm'),
(121, 'Rehan', 'Bsdk padhai likhayi chhod diye kya? ', 'AHkhan', '01:33pm'),
(122, 'AHkhan', 'Sale ye bine padhe banaya thodi hoo ', 'Rehan', '01:34pm'),
(123, 'Rehan', 'Abhi tk online chal rha h kya? ', 'AHkhan', '01:34pm'),
(124, 'Rehan', 'Ya chhutti m aaya h? ', 'AHkhan', '01:34pm'),
(125, 'AHkhan', 'Haa', 'Rehan', '01:35pm'),
(126, 'AHkhan', 'Online hi chal rha hai', 'Rehan', '01:35pm'),
(127, 'Rehan', 'Isme modify ho skta h? ', 'AHkhan', '01:35pm'),
(128, 'Rehan', 'Message seen wala bhi daal', 'AHkhan', '01:35pm'),
(129, 'Rehan', 'Message seen wala bhi daal', 'AHkhan', '01:36pm'),
(130, 'Rehan', 'Maximum kitna word ka bhej skta hoon? ', 'AHkhan', '01:36pm'),
(131, 'AHkhan', 'Jitna mann kre', 'Rehan', '01:37pm'),
(132, 'AHkhan', 'Chal bsdk', 'Rehan', '01:49pm'),
(133, 'AHkhan', 'Okk', 'Rehan', '01:55pm'),
(134, 'AHkhan', 'Or dada', 'Rehan', '10:43pm'),
(135, 'AHkhan', 'Hi', 'Slick', '03:55pm'),
(136, 'Slick', 'Hi', 'AHkhan', '03:55pm'),
(137, 'AHkhan', 'Aur', 'Slick', '03:55pm'),
(138, 'AHkhan', 'Kaisa', 'Slick', '03:56pm'),
(139, 'AHkhan', 'Hai', 'Slick', '03:56pm'),
(140, 'Slick', 'Badhiya', 'AHkhan', '03:56pm'),
(141, 'Abhishek', 'Betichod', 'AHkhan', '04:14pm'),
(142, 'AHkhan', 'Hii', 'Abhishek', '04:14pm'),
(143, 'AHkhan', 'Aur', 'Abhishek', '04:14pm'),
(144, 'Abhishek', 'Mast', 'AHkhan', '04:14pm'),
(145, 'AHkhan', 'Sale', 'Abhishek', '04:14pm'),
(146, 'AHkhan', 'testingcodeofficial.epizy.com', 'DotAlpha', '10:00am'),
(147, 'DotAlpha', 'Hii', 'Sahil', '03:53pm'),
(148, 'DotAlpha', 'How are you', 'Sahil', '03:53pm'),
(149, 'Krishna Boss', 'Hii', 'AHkhan', '04:29pm'),
(150, 'AHkhan', 'Hii', 'Krishna Boss', '04:29pm'),
(151, 'AHkhan', 'Kaise ho', 'Krishna Boss', '04:29pm'),
(152, 'Krishna Boss', 'Mast hai', 'AHkhan', '04:29pm'),
(153, 'Alpha', 'Hi', 'AHkhan', '05:36pm'),
(154, 'AHkhan', 'Hii', 'Alpha', '05:37pm'),
(155, 'DotAlpha', 'Nice', 'Sahil', '04:17pm'),
(156, 'DotAlpha', 'Hii', 'AHkhan', '01:43pm'),
(157, 'AHkhan', 'hello', 'Alpha', '09:35pm'),
(158, 'AHkhan', 'Add', 'Alpha', '01:33am'),
(159, 'AHkhan', 'Hii', 'khanShahid', '05:34pm'),
(160, 'khanShahid', 'hello', 'AHkhan', '05:35pm'),
(161, 'AHkhan', 'Nice', 'khanShahid', '05:35pm'),
(162, 'AHkhan', 'hii', 'Alpha', '03:58pm'),
(163, 'AHkhan', 'Hello', 'khanShahid', '04:00pm'),
(164, 'AHkhan', 'Hii', 'Alpha', '08:23pm'),
(165, 'AHkhan', 'Hii', 'Alpha', '08:23pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
