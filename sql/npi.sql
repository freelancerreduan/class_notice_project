-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 09:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_pass` varchar(5050) NOT NULL,
  `admin_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_email`, `admin_pass`, `admin_name`) VALUES
(1, 'npi@gmail.com', 'bb947d3e186953ddfca75f965dd2735e', 'Reduan ');

-- --------------------------------------------------------

--
-- Table structure for table `anounsment`
--

CREATE TABLE `anounsment` (
  `an_id` int(11) NOT NULL,
  `an_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anounsment`
--

INSERT INTO `anounsment` (`an_id`, `an_text`) VALUES
(1, 'I am a Professional web developer. I want to build my career as a freelancer/  I am studying Diploma in Engineering Computer Science/ So you can do something good by me/ You can work by looking at my profile skills.  I love programming more. My day starts with programming. Programming experience last 2 years. I think I am good at programming. I can develop good website now.');

-- --------------------------------------------------------

--
-- Table structure for table `latest_notice`
--

CREATE TABLE `latest_notice` (
  `latest_notice_id` int(11) NOT NULL,
  `lt_title` text NOT NULL,
  `lt_link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_notice`
--

INSERT INTO `latest_notice` (`latest_notice_id`, `lt_title`, `lt_link`) VALUES
(1, 'Reduan Facebook Profile', 'https://www.facebook.com/reduan97'),
(4, 'Demo PDF Link Hear . Click Me for View Notice', 'https://www.w3schools.com/css/css_rwd_mediaqueries.asp');

-- --------------------------------------------------------

--
-- Table structure for table `notice_area`
--

CREATE TABLE `notice_area` (
  `notice_id` int(11) NOT NULL,
  `notice_title` text NOT NULL,
  `notice_link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_area`
--

INSERT INTO `notice_area` (`notice_id`, `notice_title`, `notice_link`) VALUES
(9, 'তাড়া খেয়ে বাংলাদেশে আসা মিয়ানমারের সীমান্তরক্ষীর সংখ্যা বাড়ছে · ', ''),
(10, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, est! lorem10', ''),
(11, 'নিউজবাংলা ২৪ । অনলাইন বাংলা নিউজ পেপার', 'https://www.facebook.com/reduan97');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` varchar(5000) NOT NULL,
  `slider_link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_link`) VALUES
(2, 'course_1663052056.jpg', 'https://www.w3schools.com/css/css_rwd_mediaqueries.asp'),
(3, 'coppon dear server.com.png', 'https://www.dpp.gov.bd/bgpress/index.php/document/notice/143');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sub_id`, `sub_email`) VALUES
(4, 'mdreduan0005@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `anounsment`
--
ALTER TABLE `anounsment`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `latest_notice`
--
ALTER TABLE `latest_notice`
  ADD PRIMARY KEY (`latest_notice_id`);

--
-- Indexes for table `notice_area`
--
ALTER TABLE `notice_area`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anounsment`
--
ALTER TABLE `anounsment`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_notice`
--
ALTER TABLE `latest_notice`
  MODIFY `latest_notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice_area`
--
ALTER TABLE `notice_area`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
