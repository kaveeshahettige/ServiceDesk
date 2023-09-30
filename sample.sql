-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 05:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(6) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED DEFAULT NULL,
  `service_id` int(6) UNSIGNED DEFAULT NULL,
  `order_date` date NOT NULL,
  `order_place` varchar(50) NOT NULL,
  `order_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `service_id`, `order_date`, `order_place`, `order_time`) VALUES
(201, 101, 1, '2023-05-03', 'Galle', ''),
(202, 102, 4, '2023-05-24', 'colombo 7', '22:16'),
(203, 118, 1, '2023-05-27', 'Poddala', '13:00'),
(204, NULL, 2, '2023-05-12', 'Reid avenue', '13:42'),
(205, 101, 4, '2023-05-17', 'colombo 7', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(6) UNSIGNED NOT NULL,
  `order_id` int(6) UNSIGNED DEFAULT NULL,
  `payment_date` date NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_date`, `payment_amount`) VALUES
(56, 202, '2023-05-12', '8000.00'),
(57, 203, '2023-05-12', '8000.00'),
(58, 204, '2023-05-12', '3000.00'),
(59, 205, '2023-05-12', '4000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ppictures`
--

CREATE TABLE `ppictures` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(6) UNSIGNED NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_description` varchar(255) NOT NULL,
  `service_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_price`) VALUES
(1, 'Cleaning ', 'House and all types of cleaning', '10000.00'),
(2, 'Food Delivery', 'Home delivery Foods and Beverages', '3000.00'),
(3, 'Garden Decoration', 'Home Gardens Decoration', '5000.00'),
(4, 'House Maintaining', 'Maintain house kitchens,bathroom and all facilities', '8000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `phone_number`, `role`) VALUES
(101, 'kaveesha', 'kaveesha@gmail.com', '12345', '0766245650', NULL),
(102, 'Gawesh', 'gawesh@gmail.com', 'gian', '1111111123', NULL),
(103, 'madhasha', 'madhsha@gmail.com', 'liyanage', '11111', NULL),
(104, 'Thamashi', 'Thamshi@gmail.com', 'thamshi123', '1122334455', NULL),
(105, 'kaveeshah', 'k@gmail.com', 'kayya123', '1111122222', 1),
(106, 'ucsc1', 'ucsc@gmail.com', 'ucsc', '0000000000', 1),
(107, 'ucsc', 'ucsc@gmail.com', 'ucsc', '1122334455', NULL),
(108, 'test', 'test@gmail.com', 'test', '1122889900', NULL),
(118, 'rishika2', 'rishi@gmail.com', 'rishika123', '122233445566', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user1` (`user_id`),
  ADD KEY `order_service2` (`service_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_order1` (`order_id`);

--
-- Indexes for table `ppictures`
--
ALTER TABLE `ppictures`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `ppictures`
--
ALTER TABLE `ppictures`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_service2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payment_order1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ppictures`
--
ALTER TABLE `ppictures`
  ADD CONSTRAINT `ppictures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
