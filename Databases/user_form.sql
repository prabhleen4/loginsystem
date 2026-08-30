-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 03:03 PM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'shaikh123', 'shaikh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, 'anasbhai', 'anasbhai@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'user'),
(3, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(6, 'divya', 'divya@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'supplier'),
(7, 'diksha', 'diksha@gmail', '81dc9bdb52d04dc20036dbd8313ed055', 'supplier'),
(8, 'amit', 'amit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'supplier'),
(9, 'shruti', 'shruti@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(10, 'def', 'def@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(11, 'efg', 'efg@gmail.com', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'supplier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
