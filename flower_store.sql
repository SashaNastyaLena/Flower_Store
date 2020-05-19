-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2020 at 05:53 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_store`
--
CREATE DATABASE IF NOT EXISTS `flower_store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `flower_store`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Tulips'),
(2, 'Roses'),
(3, 'Wedding bouquets'),
(4, 'Flowers'),
(5, 'Flowers box');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_first_name` varchar(250) NOT NULL,
  `client_second_name` varchar(250) DEFAULT NULL,
  `client_surname` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `client_id` int(11) NOT NULL,
  `comment_text` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_method` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_method`) VALUES
(1, 'Courier Delivery'),
(2, 'Pickup');

-- --------------------------------------------------------

--
-- Table structure for table `flower_catalog`
--

CREATE TABLE `flower_catalog` (
  `flower_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `flower_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(19,2) NOT NULL,
  `img_src` varchar(250) NOT NULL,
  `is_available` bit(1) NOT NULL,
  `provider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flower_catalog`
--

INSERT INTO `flower_catalog` (`flower_id`, `category_id`, `flower_name`, `price`, `img_src`, `is_available`, `provider_id`) VALUES
(234007, 1, 'Heartfelt', '69.99', 'flower_catalog/Heartfelt.jpg', b'1', 3),
(234008, 1, 'All the Rage', '45.00', 'flower_catalog/All_the_Rage.jpg', b'1', 3),
(234009, 1, 'Tiger', '54.50', 'flower_catalog/Tiger.jpg', b'0', 3),
(234010, 1, 'Ballerina', '55.00', 'flower_catalog/Ballerina.jpg', b'1', 3),
(234011, 1, 'Knockout', '40.60', 'flower_catalog/Knockout.jpg', b'1', 3),
(234012, 1, 'Pirouette', '58.00', 'flower_catalog/Pirouette.jpg', b'1', 3),
(234013, 2, 'Buttercream', '65.00', 'flower_catalog/Buttercream.jpg', b'1', 2),
(234014, 2, 'Santorini', '52.00', 'flower_catalog/Santorini.jpg', b'0', 2),
(234015, 2, 'Nonna', '70.85', 'flower_catalog/Nonna.jpg', b'1', 2),
(234016, 2, 'Amelia', '100.00', 'flower_catalog/Amelia.jpg', b'1', 2),
(234017, 2, 'Finesse', '90.99', 'flower_catalog/Finesse.jpg', b'1', 2),
(234018, 2, 'Rosy Glow', '74.99', 'flower_catalog/Rosy_Glow.jpg', b'1', 2),
(234019, 2, 'Fifteen Peach', '79.55', 'flower_catalog/Fifteen_Peach.jpg', b'1', 2),
(234020, 2, 'Magic Moment', '81.00', 'flower_catalog/Magic_Moment.jpg', b'1', 2),
(234021, 3, 'Double the Buttercream', '79.00', 'flower_catalog/Double_the_Buttercream.jpg', b'1', 5),
(234022, 3, 'Double the Unicorn', '85.99', 'flower_catalog/Double_the_Unicorn.jpg', b'0', 5),
(234023, 3, 'Muse', '150.00', 'flower_catalog/Muse.jpg', b'1', 5),
(234024, 3, 'Sonnet', '80.50', 'flower_catalog/Sonnet.jpg', b'1', 5),
(234025, 3, 'Daydream', '90.00', 'flower_catalog/Daydream.jpg', b'1', 5),
(234026, 3, 'Blossom', '115.00', 'flower_catalog/Blossom.jpg', b'1', 5),
(234027, 3, 'Godetia', '70.00', 'flower_catalog/Godetia.jpg', b'1', 5),
(234028, 3, 'Purple Iris', '65.99', 'flower_catalog/Purple_Iris.jpg', b'1', 5),
(234029, 3, 'Isle of White', '74.99', 'flower_catalog/Isle_of_White.jpg', b'1', 5),
(234030, 4, 'Luna', '65.70', 'flower_catalog/Luna.jpg', b'1', 1),
(234031, 4, 'Juliet', '64.99', 'flower_catalog/Juliet.jpg', b'1', 1),
(234032, 4, 'Regatta', '130.00', 'flower_catalog/Regatta.jpg', b'1', 1),
(234033, 4, 'New Edwardian', '150.00', 'flower_catalog/New_Edwardian.jpg', b'1', 1),
(234034, 4, 'Double_the_Mardi', '80.00', 'flower_catalog/Double_the_Mardi.jpg', b'0', 1),
(234035, 4, 'Carmen', '75.90', 'flower_catalog/Carmen.jpg', b'0', 1),
(234036, 4, 'Flora', '75.90', 'flower_catalog/Flora.jpg', b'1', 1),
(234037, 5, 'Red and Blush', '40.00', 'flower_catalog/Red_and_Blush.jpg', b'1', 3),
(234038, 5, 'Blooming Song', '64.99', 'flower_catalog/Blooming_Song.jpg', b'1', 3),
(234039, 5, 'Pinky', '78.95', 'flower_catalog/Pinky.jpg', b'0', 3),
(234040, 5, 'Poppins', '55.00', 'flower_catalog/Poppins.jpg', b'1', 3),
(234041, 5, 'Signature', '102.95', 'flower_catalog/Signature.jpg', b'1', 3),
(234042, 5, 'Loving', '42.99', 'flower_catalog/Loving.jpg', b'0', 3),
(234043, 5, 'Winter_Spice', '61.00', 'flower_catalog/Winter_Spice.jpg', b'1', 3),
(234044, 5, 'Cymbidium Orchids', '70.00', 'flower_catalog/Cymbidium_Orchids.jpg', b'1', 3),
(234045, 5, 'Charm', '75.95', 'flower_catalog/Charm.jpg', b'1', 3),
(234046, 5, 'Pink Splendid', '85.00', 'flower_catalog/Pink_Splendid.jpg', b'1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `flower_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `payment_method`) VALUES
(1, 'Pay online now'),
(2, 'Cash to the courier'),
(3, 'Cash in store'),
(4, 'Card in store');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider_id` int(11) NOT NULL,
  `provider_name` varchar(250) NOT NULL,
  `country` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider_id`, `provider_name`, `country`, `phone`) VALUES
(1, 'Alta sierra', 'Ecuador', '+31874268450'),
(2, 'Attar roses', 'Ecuador', '+31654268152'),
(3, 'Aluna flowers', 'Colombia', '+31984268853'),
(4, 'Timana', 'Colombia', '+31657868341'),
(5, 'Charm flowers', 'Kenya', '+31784734152');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_delivery_id` (`delivery_id`) USING BTREE,
  ADD KEY `client_payment_method_id` (`payment_method_id`) USING BTREE;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `comments_client_id` (`client_id`) USING BTREE;

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `flower_catalog`
--
ALTER TABLE `flower_catalog`
  ADD PRIMARY KEY (`flower_id`),
  ADD KEY `flower_catalog_category_id` (`category_id`) USING BTREE,
  ADD KEY `flower_catalog_provider_id` (`provider_id`) USING BTREE;

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD KEY `ordered_flower_id` (`flower_id`) USING BTREE,
  ADD KEY `ordered_order_id` (`order_id`) USING BTREE;

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_info_client_id` (`client_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `delivery_id` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_method_id` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flower_catalog`
--
ALTER TABLE `flower_catalog`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provider_id` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordered`
--
ALTER TABLE `ordered`
  ADD CONSTRAINT `flower_id` FOREIGN KEY (`flower_id`) REFERENCES `flower_catalog` (`flower_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
