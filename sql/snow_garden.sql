-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snow_garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `comments`) VALUES
(23, 'Sahani', 'sahani@gmail.com', 705534560, 'testBC'),
(26, 'Shanika', 'shanika@gmail.com', 705523456, 'test1'),
(27, 'Milan Madusanka', 'milan@gmail.com', 774567003, 'test0'),
(28, 'Mayuri', 'ma@gmail.com', 776453001, 'test0A'),
(29, 'Meena', 'mena@gmail.com', 776453001, 'test#OA'),
(30, 'Shash', 'shash@gmail.com', 705534567, 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking_details`
--

CREATE TABLE `room_booking_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `occupancy` varchar(100) NOT NULL,
  `confirmation` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `room_booking_details`
--

INSERT INTO `room_booking_details` (`id`, `name`, `email`, `phone`, `address`, `room_type`, `check_in_date`, `check_out_date`, `occupancy`, `confirmation`) VALUES
(26, 'Shash', 'shash@gmail.com', 776435001, 'no:7,Malabe', 'Couple Economy Non-AC Room', '2023-10-11', '2023-10-12', '', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_id` int(11) NOT NULL,
  `room_category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_id`, `room_category`, `price`, `available_rooms`, `image`, `created_at`, `updated_at`) VALUES
(24, 'Twin Couple AC Room', 5900.00, 5, 'room4.JPG', '2023-10-12 04:56:11', '2023-10-12 04:56:11'),
(25, 'Twin Couple Deluxe Non-AC Room', 9000.00, 5, 'slider2.JPG', '2023-10-12 12:03:53', '2023-10-16 07:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `room_payment_details`
--

CREATE TABLE `room_payment_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` bigint(10) NOT NULL,
  `card_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `card_no` int(11) NOT NULL,
  `cvc` int(3) NOT NULL,
  `expiration_date` date NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `confirmation` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_payment_details`
--

INSERT INTO `room_payment_details` (`id`, `name`, `email`, `phone`, `card_type`, `card_no`, `cvc`, `expiration_date`, `check_in_date`, `check_out_date`, `confirmation`) VALUES
(15, 'Malik', 'malik@gmail.com', 776435001, 'Visa', 2147483647, 245, '2023-10-20', '2023-09-28', '2023-09-29', 'No'),
(17, 'Shash', 'shash@gmail.com', 776435001, 'Visa', 23456789, 234, '2023-10-11', '2023-10-03', '2023-10-04', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `registration_date`) VALUES
(25, 'admin', 'admin', 'admin@gmail.com', '2023-10-12 12:01:52'),
(27, 'accounter', 'accounter', 'accounter1@gmail.com', '2023-10-16 07:16:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_payment_details`
--
ALTER TABLE `room_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `room_payment_details`
--
ALTER TABLE `room_payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
