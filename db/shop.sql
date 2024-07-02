-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 01:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `area_d`
--

CREATE TABLE `area_d` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_d`
--

INSERT INTO `area_d` (`id`, `area`, `active`) VALUES
(1, 'Mandsaur', 1),
(2, 'Garoth', 1),
(3, 'Shamgarh', 1),
(4, 'Suwasra', 1),
(5, 'Indore', 1),
(6, 'Chaumahla', 1),
(7, 'Neemuch', 1),
(8, 'Bhawani Mandi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `mobile_no` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile_no`, `company_name`, `address`, `area`, `time_stamp`, `role`) VALUES
(1, 'Piyush Sethiya', 'p@gmail.com', 1234, 0, '', '', '', '2024-07-02 08:58:48', 3),
(2, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, '', 'Sadar Bazar', '', '2024-06-28 12:39:06', 1),
(3, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, '', 'Sadar Bazar', '', '2024-06-28 12:39:39', 1),
(4, 'Piyush Sethiya', 'piyushseth226@gmail.com', 123456, 2147483647, '', 'Sadar Bazar', '', '2024-06-28 12:42:29', 1),
(5, 'Piyush Sethiya', 'data@gmail.com', 0, 2147483647, '', 'Sadar Bazar, done', '', '2024-06-28 17:52:37', 1),
(35, '', '', 0, 0, '', '', '', '2024-06-28 17:53:23', 1),
(36, '', '', 0, 0, '', 'nathukhedi', '', '2024-06-28 17:56:13', 1),
(37, 'Piyush Sethiya', 'vijay23@gmail.com', 0, 2147483647, '', '', '', '2024-06-28 17:55:23', 1),
(38, '', '', 0, 0, '', '', '', '2024-07-02 07:42:47', 1),
(39, 'p hari', 'hari@gmail.com', 0, 952845966, 'hari industry', 'scjbs jsfb sdvb ', 'Mandsaur', '2024-07-02 09:32:48', 2),
(40, 'p hari', 'db@gmail.com', 54545212, 457213153, 'knjkcgkldjk', 'fmjwonm', 'garoth', '2024-07-02 09:35:08', 2),
(41, 'shi', '', 0, 0, '', '', 'garoth', '2024-07-02 10:46:59', 2),
(42, 'done', '', 0, 0, '', '', 'Garoth', '2024-07-02 10:47:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `active`) VALUES
(1, 'Customer', 1),
(2, 'Dealer', 1),
(3, 'Owner', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_d`
--
ALTER TABLE `area_d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_d`
--
ALTER TABLE `area_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;