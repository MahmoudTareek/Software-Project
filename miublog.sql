-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 02:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miublog`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `Date1` date NOT NULL,
  `Day1` varchar(20) NOT NULL,
  `Showed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`Date1`, `Day1`, `Showed`) VALUES
('2022-05-01', 'Sunday', 0),
('2022-05-02', 'Monday', 0),
('2022-05-03', 'Tuesday', 0),
('2022-05-04', 'Wednesday', 0);

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE `concern` (
  `email` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone` int(11) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`email`, `name`, `phone`, `Message`) VALUES
('iodsa', 'MAhmoud', 15489, 'juejk');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `MAC` varchar(17) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Maxexits` int(20) NOT NULL,
  `FromDate` date NOT NULL,
  `FromTime` time(6) NOT NULL,
  `ToDate` date NOT NULL,
  `ToTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`MAC`, `Email`, `Type`, `Reason`, `Maxexits`, `FromDate`, `FromTime`, `ToDate`, `ToTime`) VALUES
('2C-DB-07-32-29-71', 'nesma_tamer@hotmail.com', 'Excuse', 'batny wag3any', 0, '2022-06-06', '23:04:00.000000', '2022-06-07', '23:04:00.000000'),
('0A-00-27-00-00-19', 'yasmine@gmail.com', 'Day off', 'Sick', 0, '2022-06-08', '16:00:00.000000', '2022-06-10', '19:02:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `id` int(11) NOT NULL,
  `attendanceid` int(11) NOT NULL,
  `MAC` varchar(50) NOT NULL,
  `Date1` date NOT NULL,
  `Day1` varchar(20) NOT NULL,
  `Checkin` varchar(20) NOT NULL,
  `Checkout` varchar(20) NOT NULL,
  `Hours1` varchar(20) NOT NULL,
  `Showed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`id`, `attendanceid`, `MAC`, `Date1`, `Day1`, `Checkin`, `Checkout`, `Hours1`, `Showed`) VALUES
(5, 1, '0A-00-27-00-00-19', '2022-06-03', '', '02:12:00 am', '02:12:27 am', '', 0),
(6, 2, '0A-00-27-00-00-19', '2022-06-05', '', '02:21:01 pm', '02:24:55 pm', '', 0),
(6, 3, '0A-00-27-00-00-19', '2022-06-05', '', '02:21:11 pm', '02:24:55 pm', '', 0),
(6, 4, '0A-00-27-00-00-19', '2022-06-05', '', '02:24:52 pm', '02:24:55 pm', '', 0),
(13, 7, '0A-00-27-00-00-19', '2022-06-07', '', '03:29:55 pm', '03:30:10 pm', '', 0),
(40, 8, '0A-00-27-00-00-19', '2022-06-07', '', '03:39:43 pm', '03:39:55 pm', '', 0),
(42, 9, '0A-00-27-00-00-19', '2022-06-07', '', '06:42:14 pm', '07:04:06 pm', '', 0),
(42, 10, '0A-00-27-00-00-19', '2022-06-07', '', '06:48:37 pm', '07:04:06 pm', '', 0),
(42, 11, '0A-00-27-00-00-19', '2022-06-07', '', '06:49:31 pm', '07:04:06 pm', '', 0),
(42, 12, '0A-00-27-00-00-19', '2022-06-07', '', '07:00:21 pm', '07:04:06 pm', '', 0),
(42, 13, '0A-00-27-00-00-19', '2022-06-07', '', '07:01:47 pm', '07:04:06 pm', '', 0),
(42, 14, '0A-00-27-00-00-19', '2022-06-07', '', '07:05:32 pm', '07:06:14 pm', '', 0),
(42, 15, '0A-00-27-00-00-19', '2022-06-07', '', '07:07:07 pm', '07:07:58 pm', '', 0),
(42, 21, '0A-00-27-00-00-19', '2022-06-07', '', '07:14:26 pm', '07:14:30 pm', '', 0),
(42, 22, '0A-00-27-00-00-19', '2022-06-07', '', '07:14:54 pm', '07:15:01 pm', '', 0),
(42, 23, '0A-00-27-00-00-19', '2022-06-07', '', '07:23:26 pm', '07:23:41 pm', '', 0),
(42, 24, '0A-00-27-00-00-19', '2022-06-07', '', '07:24:19 pm', '07:24:30 pm', '', 0),
(42, 25, '0A-00-27-00-00-19', '2022-06-07', '', '07:25:20 pm', '07:25:32 pm', '', 0),
(42, 26, '0A-00-27-00-00-19', '2022-06-07', '', '07:41:25 pm', '07:41:36 pm', '', 0),
(42, 40, '0A-00-27-00-00-19', '2022-06-07', '', '08:42:02 pm', '08:42:10 pm', '1312', 0),
(42, 41, '0A-00-27-00-00-19', '2022-06-07', '', '08:42:30 pm', '08:42:35 pm', '5', 0),
(42, 42, '0A-00-27-00-00-19', '2022-06-07', '', '08:42:41 pm', '08:42:52 pm', '11', 0),
(42, 43, '0A-00-27-00-00-19', '2022-06-07', '', '08:43:58 pm', '08:44:04 pm', '6', 0),
(42, 44, '0A-00-27-00-00-19', '2022-06-07', '', '08:47:04 pm', '08:47:09 pm', '5', 0),
(42, 45, '0A-00-27-00-00-19', '2022-06-07', '', '08:48:59 pm', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `MAC` varchar(17) NOT NULL,
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`MAC`, `id`, `name`, `Title`, `phone`, `email`, `password`, `role`) VALUES
('0A-00-27-00-00-19', 56, 'mahmoud', 'yhdbwq', '1849', 'mahmoud@gmail.com', '12345', 0),
('2C-AB-07-86-29-54', 10, 'Yasmine', 'Front-End developer', '01076654345', 'Yamine@yahoo.com', '3456', 2),
('6B-DB-07-82-29-81', 11, 'Mahmoud', 'HR', '0765543343', 'Mahmoud@admin.com', '6789', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`Date1`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`attendanceid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`MAC`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `attendanceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
