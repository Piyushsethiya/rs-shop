-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 10:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `name`, `email`, `password`, `mobile_no`, `company_name`, `address`, `time_stamp`, `customer`) VALUES
(2, 'Piyush Sethiya', 'vijay23@gmail.com', 0, 2147483647, 'njdcnk', 'Sadar Bazar', '2024-06-28 20:21:35', 1),
(4, 'Piyush Sethiya', '', 0, 0, '', 'Sadar Bazar', '2024-06-28 20:21:43', 1),
(5, '', '', 0, 0, '', '', '2024-06-28 20:21:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile_no`, `address`, `time_stamp`, `customer`) VALUES
(1, 'Piyush Sethiya', 'p@gmail.com', 1234, 0, '', '2024-06-28 19:12:33', 0),
(2, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, 'Sadar Bazar', '2024-06-28 12:39:06', 1),
(3, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, 'Sadar Bazar', '2024-06-28 12:39:39', 1),
(4, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, 'Sadar Bazar', '2024-06-28 12:42:29', 1),
(5, 'Piyush Sethiya', 'data@gmail.com', 0, 2147483647, 'Sadar Bazar, done', '2024-06-28 17:52:37', 1),
(35, '', '', 0, 0, '', '2024-06-28 17:53:23', 1),
(36, '', '', 0, 0, 'nathukhedi', '2024-06-28 17:56:13', 1),
(37, 'Piyush Sethiya', 'vijay23@gmail.com', 0, 2147483647, '', '2024-06-28 17:55:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
