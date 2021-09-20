-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.epizy.com
-- Generation Time: Aug 18, 2021 at 02:12 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
