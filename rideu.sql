-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 01:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rideu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` int(11) NOT NULL,
  `bike_name` varchar(255) NOT NULL,
  `bike_cc` varchar(255) NOT NULL,
  `bike_millage` varchar(255) NOT NULL,
  `bike_weight` varchar(255) NOT NULL,
  `bike_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `bike_name`, `bike_cc`, `bike_millage`, `bike_weight`, `bike_pic`) VALUES
(8, 'TVS Apache RTR 160 4V', '159.7', '30', '138', 'TVS apache RTR 160 4V.jpg'),
(9, 'Yamaha MT-15', '155.0', '48', '138', 'Yamah MT-15.jpg'),
(10, 'Honda Hornet 2.0', '184.4', '40', '142', 'honda hornet 2.0.jpg'),
(11, 'Bajaj Pulsar NS160', '160.3', '45', '151', 'bajaj-pulsar-ns160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bike_bookings`
--

CREATE TABLE `bike_bookings` (
  `bookingId` int(11) NOT NULL,
  `bike_name` varchar(255) NOT NULL,
  `pickupLoc` varchar(255) NOT NULL,
  `returnLoc` varchar(255) NOT NULL,
  `pickupDate` varchar(255) NOT NULL,
  `returnDate` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_bookings`
--

INSERT INTO `bike_bookings` (`bookingId`, `bike_name`, `pickupLoc`, `returnLoc`, `pickupDate`, `returnDate`, `fullname`, `email`, `contactNo`, `user`) VALUES
(2, 'TVS Apache RTR 160 4V', 'nagpur', 'nagpur', '2021-06-21T12:19', '2021-06-21T12:19', 'vrushabh kae', 'kale_vrushabh.ghrceet@raisoni.net', '08805561461', 'N/A'),
(16, 'Honda Hornet 2.0', '', '', '', '', 'broooo', 'kale_vrushabh.ghrceet@raisoni.net', '08805561461', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverId` int(11) NOT NULL,
  `drivername` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverId`, `drivername`, `address`, `phone`, `age`, `pic`) VALUES
(4, 'ABC', 'Nagpur', '+91 XXXXXXXXXX', '30', 'Driver.jpg'),
(5, 'XYZ', 'Nagpur', '9876543210', '28', 'Driver.jpg'),
(6, 'assf', 'dfdg', 'fdgdfg', 'gdsgd', 'contact-1-600x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `driver_bookings`
--

CREATE TABLE `driver_bookings` (
  `drivername` varchar(255) NOT NULL,
  `driverId` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `pickupLoc` varchar(255) NOT NULL,
  `returnLoc` varchar(255) NOT NULL,
  `pickupDate` varchar(255) NOT NULL,
  `returndate` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_bookings`
--

INSERT INTO `driver_bookings` (`drivername`, `driverId`, `id`, `fullname`, `email`, `contactNo`, `pickupLoc`, `returnLoc`, `pickupDate`, `returndate`, `charges`) VALUES
('', 1, 1, 'vrushabh kae', 'kale_vrushabh.ghrceet@raisoni.net', '08805561461', 'asd', 'zxcvbn', '2021-06-22T09:46', '2021-06-22T09:46', 'N/A'),
('', 1, 7, '', '', '', '', '', '', '', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `useId` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`useId`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'vrushabh', 'kale', 'vk@gmail.com', 'vrushabh'),
(2, 'vrushabh', 'kale', 'vrushabh_kale@rediffmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike_bookings`
--
ALTER TABLE `bike_bookings`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverId`);

--
-- Indexes for table `driver_bookings`
--
ALTER TABLE `driver_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bike_bookings`
--
ALTER TABLE `bike_bookings`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driver_bookings`
--
ALTER TABLE `driver_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `useId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
