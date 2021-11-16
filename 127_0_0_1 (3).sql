-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic_table`
--
CREATE DATABASE IF NOT EXISTS `dynamic_table` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dynamic_table`;

-- --------------------------------------------------------

--
-- Table structure for table `all_tables`
--

CREATE TABLE `all_tables` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `table_display_name` varchar(100) NOT NULL,
  `sort` int(2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_tables`
--

INSERT INTO `all_tables` (`id`, `department_id`, `table_name`, `table_display_name`, `sort`, `status`) VALUES
(9, 1, 'বিভাগ', 'বিভাগ', 0, 1),
(11, 1, 'দপ্তর', 'দপ্তর', 0, 1),
(12, 1, 'ডকুমেন্ট', 'ডকুমেন্ট', 0, 1),
(13, 1, 'জেলার_বাজেট', 'জেলার বাজেট', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `জেলার_বাজেট`
--

CREATE TABLE `জেলার_বাজেট` (
  `id` int(11) NOT NULL,
  `1ডকুমেন্ট1` text NOT NULL,
  `ডকুমেন্ট_2` text NOT NULL,
  `ডকুমেন্ট3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `জেলার_বাজেট`
--

INSERT INTO `জেলার_বাজেট` (`id`, `1ডকুমেন্ট1`, `ডকুমেন্ট_2`, `ডকুমেন্ট3`) VALUES
(1, 'aaa', 'bbb', 'nnn'),
(2, 'fff', 'ydsfa asdf asdf', 'sdfas asd dfasdf as');

-- --------------------------------------------------------

--
-- Table structure for table `ডকুমেন্ট`
--

CREATE TABLE `ডকুমেন্ট` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `বিভাগ2` int(11) NOT NULL,
  `বিভাগ3` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `দপ্তর`
--

CREATE TABLE `দপ্তর` (
  `id` int(11) NOT NULL,
  `নাম` text NOT NULL,
  `সিরিয়াল_নম্বর` text NOT NULL,
  `তারিখ` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `বিভাগ`
--

CREATE TABLE `বিভাগ` (
  `id` int(11) NOT NULL,
  `জেলা` text NOT NULL,
  `উপজেলা` text NOT NULL,
  `তারিখ` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `বিভাগ`
--

INSERT INTO `বিভাগ` (`id`, `জেলা`, `উপজেলা`, `তারিখ`) VALUES
(1, 'Dhaka', 'Vatara', '2021-11-09 15:51:38'),
(2, 'Dhaka', 'Badda', '2021-11-10 15:51:38'),
(3, 'Chittagong', 'Agrabad', '2021-11-09 15:52:10'),
(4, 'Chittagong', 'Halishohor', '2021-11-19 15:52:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_tables`
--
ALTER TABLE `all_tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `table_name` (`table_name`);

--
-- Indexes for table `জেলার_বাজেট`
--
ALTER TABLE `জেলার_বাজেট`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ডকুমেন্ট`
--
ALTER TABLE `ডকুমেন্ট`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `দপ্তর`
--
ALTER TABLE `দপ্তর`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `বিভাগ`
--
ALTER TABLE `বিভাগ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_tables`
--
ALTER TABLE `all_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `জেলার_বাজেট`
--
ALTER TABLE `জেলার_বাজেট`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ডকুমেন্ট`
--
ALTER TABLE `ডকুমেন্ট`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `দপ্তর`
--
ALTER TABLE `দপ্তর`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `বিভাগ`
--
ALTER TABLE `বিভাগ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
