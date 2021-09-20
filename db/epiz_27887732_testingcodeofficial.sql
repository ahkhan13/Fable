-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 01:30 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(40, 'Education', 8),
(39, 'Business', 1),
(38, 'Entertainment', 11),
(37, 'Politics', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `loaddata`
--

CREATE TABLE `loaddata` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `co` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaddata`
--

INSERT INTO `loaddata` (`id`, `name`, `co`) VALUES
(0, 12, 13),
(0, 34, 45),
(0, 12, 13),
(0, 34, 45),
(1, 12, 23),
(2, 323, 2334);

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

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` varchar(255) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(53, 'Hello How is it', 'First post by me please support by giving comments and likes.', 'Education', '20-Feb-2021', 'DotAlpha', 'khan_ah  (5).jpg'),
(54, 'Hello friends', 'Please support this post i have given a lot of time ', 'Entertainment', '20-Feb-2021', 'DotAlpha', 'IMG_20191225_142122.jpg'),
(55, 'Watching war movie at Kurnool First time ', 'War movies has a great story line and action also, you people should watch this', 'Entertainment', '20-Feb-2021', 'AHkhan', 'khan_ah  (7).jpg'),
(59, 'Just joke', 'React on this ', 'Entertainment', '25-Feb-2021', 'Rrajan', 'IMG-20210215-WA0017_1613380900219.jpg'),
(60, 'First post', 'How are you friends', 'Entertainment', '25-Feb-2021', 'Sahil', 'IMG-20190825-WA0018.jpg'),
(57, 'Nice Work', 'hello doston kaise ho', 'Politics', '23-Feb-2021', 'AHkhan', 'backround.jpeg'),
(62, '', '', 'Entertainment', '27-Feb-2021', 'AHkhan', 'IMG-20210204-WA0010.jpg'),
(63, '', '', 'Entertainment', '27-Feb-2021', 'AHkhan', 'IMG_20200203_201939_749.jpg'),
(64, 'Library me bakchodi', '', 'Entertainment', '27-Feb-2021', 'AHkhan', 'IMG_20200129_094212.jpg'),
(65, 'Love ', '', 'Education', '27-Feb-2021', 'Sahil', 'IMG_20201222_210830_984.jpg'),
(66, '', '', 'Education', '27-Feb-2021', 'Sahil', 'IMG-20210218-WA0000_1613634734783.jpg'),
(67, 'Happiness', 'Happiness', 'Education', '28-Feb-2021', 's', 'IMG_20210226_131909.jpg'),
(68, '', 'Happiness', 'Education', '28-Feb-2021', 's', 'IMG_20210226_131909.jpg'),
(69, 'Rampal', '', 'Education', '28-Feb-2021', 'Rampal_123', 'IMG_20210208_094106_944.jpg'),
(70, 'Ganga snaan', 'First time bathing in Ganga to pass away our sins.!! ', 'Entertainment', '6-Mar-2021', 'Rehan', 'IMG_20210221_172631.jpg'),
(71, 'INCREDIBLE WORK', 'This is really nice work by Aftab. Very much appreciated!!. Keep it up', 'Education', '6-Mar-2021', 'adarsh177', 'man.png'),
(72, 'Hello guys', '', 'Business', '9-Mar-2021', 'Abhishek', 'IMG20210301134103.jpg'),
(73, 'Just post', '', 'Entertainment', '14-Mar-2021', 'Alpha', 'IMG-20210314-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `username`, `phone`, `email`) VALUES
(1, 'Aftab Husain', 'Alpha', '7865679676', 'khanahs3351@gmail.com'),
(2, 'Aftab Husain', 'Alpha', '7865679676', 'khanahs3351@gmail.com'),
(3, 'fh', 'gujol', 'mbjhk', 'khanahs3351@gmail.com'),
(4, 'fh', 'gujol', 'mbjhk', 'khanahs3351@gmail.com'),
(5, 'Aman', 'Aman', '864884743', 'khanahs3351@gmail.com'),
(6, 'ram', 'rahul', '988665444', 'dotalpha13@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Token` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `name`, `username`, `email`, `password`, `Status`, `Token`) VALUES
(27, 'S', 's', 'sachinkarya333@gmail.com', '3691308f2a4c2f6983f2880d32e29c84', '', 0),
(26, 'Ram', 'Ram1', 'Pal123@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0),
(84, 'Aftab', 'ahkhan', 'khanahs3351@gmail.com', '5c8cad49fdc90a84ba32f2230edcd9db', 'Active', 581157486),
(82, 'hello', 'asshraf', 'ak3@gmail.com', 'a2843384d23faa5229973a5c5ecccb73', 'Inactive', 729165935),
(85, 'Aftab', 'kham', 'bansal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Inactive', 1163900976);

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentmark`
--
ALTER TABLE `studentmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `studentmark`
--
ALTER TABLE `studentmark`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
