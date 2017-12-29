-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 04:37 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechrepo`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `status`) VALUES
(1, 'Burger', 'active'),
(2, 'Pizza', 'active'),
(3, 'Thai', 'active'),
(4, 'Fries', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `orderTime` datetime NOT NULL,
  `receiveTime` date NOT NULL,
  `paymentMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customerId`, `status`, `orderTime`, `receiveTime`, `paymentMethod`) VALUES
(3, 3, 'ordered', '2017-12-27 02:44:58', '0000-00-00', 'bKash'),
(4, 4, 'ordered', '2017-12-27 05:46:48', '0000-00-00', 'cashOnDelivery'),
(5, 3, 'ordered', '2017-12-27 09:27:15', '0000-00-00', 'cashOnDelivery'),
(6, 3, 'ordered', '2017-12-28 08:00:55', '0000-00-00', 'cashOnDelivery'),
(7, 3, 'ordered', '2017-12-28 09:55:27', '0000-00-00', 'bKash'),
(8, 3, 'ordered', '2017-12-28 10:48:10', '0000-00-00', 'bKash'),
(9, 3, 'ordered', '2017-12-29 09:05:52', '0000-00-00', 'bKash'),
(10, 3, 'ordered', '2017-12-29 09:17:19', '0000-00-00', 'cashOnDelivery');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_food`
--

CREATE TABLE `customer_order_food` (
  `customerOrderId` int(11) NOT NULL,
  `foodId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order_food`
--

INSERT INTO `customer_order_food` (`customerOrderId`, `foodId`, `quantity`) VALUES
(3, 1, 4),
(3, 2, 4),
(4, 1, 15),
(5, 1, 2),
(5, 2, 0),
(6, 1, 10),
(6, 4, 0),
(6, 6, 0),
(7, 1, 3),
(8, 1, 2),
(9, 1, 1),
(9, 3, 5),
(9, 4, 1),
(9, 6, 4),
(9, 7, 1),
(10, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `catagoryId` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `catagoryId`, `price`, `status`, `pic`) VALUES
(1, 'Big Burger', 1, 450, 'active', ''),
(2, 'Pizza Burger', 1, 320, 'active', ''),
(3, 'Beef Burger', 1, 200, 'active', ''),
(4, 'Beef Pizza', 2, 500, 'active', ''),
(5, 'Double Decker', 1, 300, 'active', ''),
(6, 'Awesome Pizza', 2, 700, 'active', ''),
(7, 'Mac n Cheese', 1, 350, 'active', ''),
(8, 'Choco Burger', 1, 250, 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_ingredients`
--

CREATE TABLE `food_ingredients` (
  `foodId` int(11) NOT NULL,
  `ingredientsId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_ingredients`
--

INSERT INTO `food_ingredients` (`foodId`, `ingredientsId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 4),
(3, 2),
(3, 11),
(4, 1),
(4, 2),
(5, 11),
(5, 12),
(6, 1),
(6, 12),
(7, 8),
(7, 12),
(8, 6),
(8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vendorId` int(11) NOT NULL,
  `quantityRem` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `vendorId`, `quantityRem`, `status`) VALUES
(1, 'Bread', 1, 10000, 'active'),
(2, 'Beef', 1, 10000, 'active'),
(3, 'Jellapino', 1, 10000, 'active'),
(4, 'Cheese', 1, 10000, 'active'),
(5, 'Mashroom', 5, 10000, 'active'),
(6, 'Chocolate', 1, 10000, 'active'),
(7, 'Potato', 1, 10000, 'active'),
(8, 'Onion', 1, 10000, 'active'),
(9, 'Bacon', 1, 10000, 'active'),
(10, 'Cream', 1, 10000, 'active'),
(11, 'Vegetables', 1, 10000, 'active'),
(12, 'Chicken ', 1, 10000, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `foodId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`foodId`, `customerId`, `rating`) VALUES
(1, 3, 3),
(1, 4, 2),
(2, 3, 5),
(3, 3, 3),
(4, 3, 5),
(5, 4, 5),
(8, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(100) NOT NULL,
  `customer_order_id` int(100) NOT NULL,
  `deliveryman_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `customer_order_id`, `deliveryman_id`) VALUES
(1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` datetime NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `picLink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `userName`, `email`, `address`, `location`, `role`, `password`, `status`, `regDate`, `phoneNo`, `picLink`) VALUES
(1, 'Jamil Siam Taluker', 'aaaa', 'siam_cr7@yahoo.com', 'B 1/11 Humayan Road, Dhaka', 'banani', 'customer', '123456789$', 'active', '2017-12-27 01:06:07', '01675679598', ''),
(3, 'Jamil Siam', 'a', 'a@b.c', '123456789$', 'dhanmondi', 'customer', '123456789$', 'active', '2017-08-01 00:00:00', '12345678912', ''),
(4, 'b', 'b', 'b', 'bangladesh', 'gulshan', 'customer', 'b', 'active', '2017-03-03 00:00:00', '12345678912', ''),
(5, 'admin', 'admin', 'admin@admin.com', 'a', 'gulshan', 'admin', 'admin', 'active', '2017-12-01 00:00:00', '12345678912', ''),
(6, 'Jamil Siam YOLOOLO', 'siamcr7', 'siam_cr7@yahhh.com', 'onek duur', 'dhanmondi', 'customer', '123456789$', 'active', '2017-12-28 11:01:11', '01675679598', ''),
(7, 'b', 'bbbb', 'b@a.com', '', '', 'customer', 'bbbb', 'active', '0000-00-00 00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order_food`
--
ALTER TABLE `customer_order_food`
  ADD PRIMARY KEY (`customerOrderId`,`foodId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_ingredients`
--
ALTER TABLE `food_ingredients`
  ADD PRIMARY KEY (`foodId`,`ingredientsId`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`foodId`,`customerId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
