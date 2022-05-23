-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 12:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renaissance_assembly`
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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `access_level`, `status`, `token`, `date_created`) VALUES
(3, 'godswillx14', 'godswillchinonso5@gmail.com', '0e3f8fae1e11342322f5bce0f8b8dcfa7f5d7cb7', 'super admin', 'admin', '0.61144100 1652907250345godswillx14', '2022-05-13 22:37:08');

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
(1, 'power', 'the power of obedience', 'obedience is better than sacrifice', 'the power of obedience is the best message to give out to whosoever wants to become a believer of the world of god and we are going forward to gods word', 'renaissance assembly', '2022-05-18', '2022-05-19', 'audio', 'believers core', 'prayer', '../media/audio/Big_Sean_Blessings.mp3', '../art/audio/images.jpg');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` varchar(20) NOT NULL,
  `date_joined` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_subscribed` date DEFAULT NULL,
  `duration_subcription` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `reset_password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `access`, `date_joined`, `date_subscribed`, `duration_subcription`, `token`, `reset_password`, `date_created`) VALUES
(2, 'rose', 'info@theintegratorsdev.com', '0e3f8fae1e11342322f5bce0f8b8dcfa7f5d7cb7', 'user', '2022-05-13 22:41:26', NULL, 0, '0.19378500 16529075081083rose', '', '2022-05-13 22:41:26');

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pdf_media`
--
ALTER TABLE `pdf_media`
  ADD PRIMARY KEY (`media_id`);

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
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pdf_media`
--
ALTER TABLE `pdf_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_media`
--
ALTER TABLE `video_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
