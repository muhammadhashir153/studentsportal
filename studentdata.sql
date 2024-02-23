-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 02:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissiondata`
--

CREATE TABLE `admissiondata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admissionDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admissiondata`
--

INSERT INTO `admissiondata` (`id`, `name`, `email`, `admissionDate`) VALUES
(14, 'Sophia Miller', 'sophia.miller@email.com', '2023-01-06'),
(15, 'James Davis', 'james.davis@email.com', '2023-01-07'),
(16, 'Olivia Wilson', 'olivia.wilson@email.com', '2023-01-08'),
(17, 'Lucas Anderson', 'lucas.anderson@email.com', '2023-01-09'),
(18, 'Ava Thompson', 'ava.thompson@email.com', '2023-01-10'),
(19, 'Ethan Martinez', 'ethan.martinez@email.com', '2023-01-11'),
(20, 'Isabella Garcia', 'isabella.garcia@email.com', '2023-01-12'),
(21, 'Liam Thompson', 'liam.thompson@email.com', '2023-01-13'),
(22, 'Mia Johnson', 'mia.johnson@email.com', '2023-01-14'),
(23, 'Noah Wilson', 'noah.wilson@email.com', '2023-01-15'),
(24, 'Emma Brown', 'emma.brown@email.com', '2023-01-16'),
(25, 'Aiden Smith', 'aiden.smith@email.com', '2023-01-17'),
(26, 'Charlotte Miller', 'charlotte.miller@email.com', '2023-01-18'),
(27, 'Benjamin Davis', 'benjamin.davis@email.com', '2023-01-19'),
(28, 'Amelia Wilson', 'amelia.wilson@email.com', '2023-01-20'),
(29, 'Elijah Anderson', 'elijah.anderson@email.com', '2023-01-21'),
(30, 'Harper Thompson', 'harper.thompson@email.com', '2023-01-22'),
(31, 'Lucas Johnson', 'lucas.johnson@email.com', '2023-01-23'),
(32, 'Madison Brown', 'madison.brown@email.com', '2023-01-24'),
(33, 'Mason Smith', 'mason.smith@email.com', '2023-01-25'),
(34, 'Abigail Miller', 'abigail.miller@email.com', '2023-01-26'),
(35, 'Alexander Davis', 'alexander.davis@email.com', '2023-01-27'),
(36, 'Aria Wilson', 'aria.wilson@email.com', '2023-01-28'),
(37, 'Logan Anderson', 'logan.anderson@email.com', '2023-01-29'),
(38, 'Grace Thompson', 'grace.thompson@email.com', '2023-01-30'),
(39, 'Henry Johnson', 'henry.johnson@email.com', '2023-01-31'),
(40, 'Lily Brown', 'lily.brown@email.com', '2023-02-01'),
(41, 'Muhammad Hashir', 'hashir@example.com', '2023-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissiondata`
--
ALTER TABLE `admissiondata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissiondata`
--
ALTER TABLE `admissiondata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
