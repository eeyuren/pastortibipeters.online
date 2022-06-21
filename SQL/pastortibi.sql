-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2022 at 09:10 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastnllk_ptdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access_level` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `access_level`, `status`, `token`, `date_created`) VALUES
(3, 'godswillx14', 'godswillchinonso5@gmail.com', '0e3f8fae1e11342322f5bce0f8b8dcfa7f5d7cb7', 'super admin', 'admin', '0.72369100 1653661283973godswillx14', '2022-05-13 22:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `audio_media`
--

CREATE TABLE `audio_media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(355) NOT NULL,
  `filename` varchar(355) NOT NULL,
  `metadata` text NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `publication_date` date NOT NULL,
  `upload_date` date NOT NULL,
  `file_type` varchar(355) NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `file` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_media`
--

INSERT INTO `audio_media` (`media_id`, `title`, `filename`, `metadata`, `description`, `tags`, `publication_date`, `upload_date`, `file_type`, `category`, `sub_category`, `file`, `image`) VALUES
(1, 'power', 'the power of obedience', 'obedience is better than sacrifice', 'the power of obedience is the best message to give out to whosoever wants to become a believer of the world of god and we are going forward to gods word', 'renaissance assembly', '2022-05-18', '2022-05-19', 'audio', 'believers core', 'prayer', '../media/audio/Big_Sean_Blessings.mp3', '../art/audio/images.jpg'),
(2, 'the believers authority part 1', 'the believers authority part 1', 'renaissance', 'you have authority over satan, sin, sickness and poverty. receive understanding on how to exercise your authority in christ.', 'authority, jesus, satan', '2021-01-03', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Sunday, 3rd January, 2021 (1st Service) - The Believers Authority.mp3', '../art/audio/thebelieversauthoritypart1.jpg'),
(3, 'forceful advancement', 'forceful advancement', 'forward, forceful advancement', 'break into new experiences!\r\nreceive wisdom on how to break into new experiences in your personal life, family, ministry and career', 'advancement, pastor, life, move', '2021-04-11', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Sunday, 11th April, 2021 (2nd Service) - Forceful Advancement (FOCUS).mp3', '../art/audio/forcefuladvancement.jpg'),
(4, 'long life part 1', 'long life part 1', 'death, long life', 'pastor tibi peters explains from scripture how to live long through the word of god', 'life, living long', '2021-03-07', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Sunday, 7th March, 2021 (1st Service) - Long Life (Longevity).mp3', '../art/audio/longlifepart1.jpg'),
(5, 'long life part 2', 'long life part 2', 'death, long life', 'pastor tibi peters explains from scripture how to live long through the word of god', 'life, living long', '2021-03-14', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Sunday, 14th March, 2021 (1st Service) - Long Life Part 2.mp3', '../art/audio/longlifepart2.jpg'),
(6, 'long life part 3', 'long life part 3', 'death, long life', 'pastor tibi peters explains from scripture how to live long through the word of god', 'life, living long', '2021-03-28', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Sunday, 28th March, 2021 (1st Service) - Long Life Part 3.mp3', '../art/audio/longlifepart3.jpg'),
(7, 'how to reign over darkness', 'how to reign over darkness', 'renaissance assembly, pastor tibi peters', 'this teaching by pastor tibi peters, shows you how to reign effortlessly over darkness.', 'prayer, reigning,', '2021-02-21', '2022-05-27', 'audio', 'believers core', 'prayer', '../media/audio/Sunday, 21st February, 2021 (2nd Service)- How to reign over darkness.mp3', '../art/audio/1.png'),
(8, 'the rituals of forceful advancement', 'the rituals of forceful advancement', 'faith', 'the rituals of forceful advancement by pastor tibi peters', 'rituals, advance', '2021-04-08', '2022-05-27', 'audio', 'faith food', 'living', '../media/audio/Thurday, 8th April, 2021 - The Rituals of Faith for Forceful Advancement.mp3', '../art/audio/2.png'),
(9, 'sacrificial living', 'sacrificial living', 'sacrifice', 'sacrificial living by pastor tibi peters.', 'sacrifice, living', '2021-01-14', '2022-05-27', 'audio', 'believers core', 'worship', '../media/audio/Thursday, 14th January, 2021 - Sacrificial Living.mp3', '../art/audio/3.png');

-- --------------------------------------------------------

--
-- Table structure for table `audio_subscription`
--

CREATE TABLE `audio_subscription` (
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `subscription_duration` text NOT NULL,
  `subscription_access` varchar(100) NOT NULL,
  `subscription_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio_subscription`
--

INSERT INTO `audio_subscription` (`sub_id`, `user_id`, `media_id`, `subscription_duration`, `subscription_access`, `subscription_date`) VALUES
(1, 1, 1, '180', 'Paid', '27/May/2022'),
(2, 1, 1, '365', 'Paid', '27/May/2022');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `classic_sub_cat` varchar(100) NOT NULL,
  `believers_core_sub_cat` varchar(100) NOT NULL,
  `faith_food_sub_cat` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `classic_sub_cat`, `believers_core_sub_cat`, `faith_food_sub_cat`, `admin_name`, `date_created`) VALUES
(1, 'believers core', 'None', 'prayer', 'None', 'godswill chinonso', '2022-05-16'),
(2, 'believers core', 'None', 'worship', 'None', 'godswill chinonso', '2022-05-16'),
(3, 'believers core', 'None', 'discipleship', 'None', 'godswill chinonso', '2022-05-16'),
(4, 'believers core', 'None', 'service', 'None', 'godswill chinonso', '2022-05-16'),
(5, 'believers core', 'None', 'giving', 'None', 'godswill chinonso', '2022-05-16'),
(6, 'believers core', 'None', 'evangelism', 'None', 'godswill chinonso', '2022-05-16'),
(7, 'believers core', 'None', 'fellowship', 'None', 'godswill chinonso', '2022-05-16'),
(8, 'faith food', 'None', 'None', 'salvation', 'godswill chinonso', '2022-05-16'),
(9, 'faith food', 'None', 'None', 'holy spirit', 'godswill chinonso', '2022-05-16'),
(10, 'faith food', 'None', 'None', 'healing', 'godswill chinonso', '2022-05-16'),
(11, 'faith food', 'None', 'None', 'finances', 'godswill chinonso', '2022-05-16'),
(12, 'faith food', 'None', 'None', 'living', 'godswill chinonso', '2022-05-16'),
(13, 'classics', 'after the light', 'None', 'None', 'godswill chinonso', '2022-05-16'),
(14, 'classics', 'faith for finances', 'None', 'None', 'godswill chinonso', '2022-05-16'),
(15, 'classics', 'the power of order', 'None', 'None', 'godswill chinonso', '2022-05-16'),
(16, 'classics', 'personal alignment', 'None', 'None', 'godswill chinonso', '2022-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdf_media`
--

CREATE TABLE `pdf_media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `metadata` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(100) NOT NULL,
  `publication_date` varchar(50) NOT NULL,
  `upload_date` varchar(50) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_media`
--

INSERT INTO `pdf_media` (`media_id`, `title`, `filename`, `metadata`, `description`, `tags`, `publication_date`, `upload_date`, `file_type`, `category`, `sub_category`, `file`, `image`) VALUES
(1, 'namecheap', 'namecheap server', 'obedience is better than sacrifice', 'hello world', 'renaissance assembly', '2022-05-10', '2022-05-19', 'pdf', 'believers core', 'prayer', '../media/PDFs/namecheap-order-94923818.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_subscription`
--

CREATE TABLE `pdf_subscription` (
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `subscription_duration` text NOT NULL,
  `subscription_access` varchar(100) NOT NULL,
  `subscription_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prayer_request`
--

CREATE TABLE `prayer_request` (
  `prayer_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `testimony_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimony_sharing`
--

CREATE TABLE `testimony_sharing` (
  `testimony_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` varchar(20) NOT NULL,
  `date_joined` timestamp NULL DEFAULT current_timestamp(),
  `date_subscribed` varchar(355) DEFAULT NULL,
  `duration_subcription` int(11) NOT NULL,
  `expiration_date` varchar(355) NOT NULL,
  `token` varchar(200) NOT NULL,
  `reset_password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `access`, `date_joined`, `date_subscribed`, `duration_subcription`, `expiration_date`, `token`, `reset_password`, `date_created`) VALUES
(2, 'rose', 'info@theintegratorsdev.com', '0e3f8fae1e11342322f5bce0f8b8dcfa7f5d7cb7', 'user', '2022-05-13 22:41:26', '27-May-2022', 365, 'Active', '0.29837900 16537267991136rose', '', '2022-05-13 22:41:26'),
(3, 'amaorlukwu', 'promiseamarachi15@gmail.com', 'e0fa79f483e1e9c1cbe49089ebbd0141a813baf2', 'user', '2022-06-14 05:34:49', NULL, 0, '', '0.64717900 1655184889904amaorlukwu', '', '2022-06-14 05:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `video_media`
--

CREATE TABLE `video_media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `metadata` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(100) NOT NULL,
  `publication_date` varchar(50) NOT NULL,
  `upload_date` varchar(50) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` text NOT NULL,
  `file` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_subscription`
--

CREATE TABLE `video_subscription` (
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `subscription_duration` text NOT NULL,
  `subscription_access` varchar(100) NOT NULL,
  `subscription_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `audio_media`
--
ALTER TABLE `audio_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `audio_subscription`
--
ALTER TABLE `audio_subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `pdf_media`
--
ALTER TABLE `pdf_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `pdf_subscription`
--
ALTER TABLE `pdf_subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `prayer_request`
--
ALTER TABLE `prayer_request`
  ADD PRIMARY KEY (`prayer_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `testimony_sharing`
--
ALTER TABLE `testimony_sharing`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `video_media`
--
ALTER TABLE `video_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `video_subscription`
--
ALTER TABLE `video_subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `audio_media`
--
ALTER TABLE `audio_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `audio_subscription`
--
ALTER TABLE `audio_subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdf_media`
--
ALTER TABLE `pdf_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdf_subscription`
--
ALTER TABLE `pdf_subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prayer_request`
--
ALTER TABLE `prayer_request`
  MODIFY `prayer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimony_sharing`
--
ALTER TABLE `testimony_sharing`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_media`
--
ALTER TABLE `video_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_subscription`
--
ALTER TABLE `video_subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
