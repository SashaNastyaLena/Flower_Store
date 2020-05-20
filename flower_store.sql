-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2020 at 07:21 PM
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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city`) VALUES
(1, 'Kiev'),
(2, 'Kharkov'),
(3, 'Odessa'),
(4, 'Dnepropetrovsk'),
(5, 'Zaporozhye'),
(6, 'Krivoy Rog'),
(7, 'Nikolaev'),
(8, 'Vinnitsa'),
(9, 'Poltava'),
(10, 'Kherson'),
(11, 'Chernihiv'),
(12, 'Cherkasy');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_first_name` varchar(250) NOT NULL,
  `client_second_name` varchar(250) DEFAULT NULL,
  `client_surname` varchar(250) NOT NULL,
  `city_id` int(11) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `flower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `commenter_name` varchar(250) NOT NULL,
  `comment_text` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `commenter_name`, `comment_text`) VALUES
(1, 'Viktoriya', 'Last year I bought a mix of onion flowers. All flowers have bloomed this year. Very happy with the purchase!'),
(2, 'Alex', 'All tulips from my garden were bought at the Florium store. Not one variety has not repeated. The beauty is extraordinary. Thanks to the employees of Florium.'),
(3, 'Katya', 'Good store and good product. I ordered bulbs of lilies, gladioli, freesia and amaryllis at a promotional price. Everything has arrived, the bulbs are in excellent condition and everyone has already entered! On all three amaryllis there are pedicels, on one even two, that is, everyone will bloom! Plus I received three bulbs of giant lilies as a gift! Thank you very much! Prosperity to your store and profitable customers!'),
(4, 'Oksana', 'Good store and good product. I ordered bulbs of lilies, gladioli, freesia and amaryllis at a promotional price. Everything came of good quality, well packaged. All planted and already sprouted. Waiting for all the flowers to bloom. Thank you very much for your work and special thanks for the gift in the form of three giant lilies! Good luck and prosperity to your store!');

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
(1, 1, 'Heartfelt', '69.99', 'flower_catalog/Heartfelt.jpg', b'1', 3),
(2, 1, 'All the Rage', '45.00', 'flower_catalog/All_the_Rage.jpg', b'1', 3),
(3, 1, 'Tiger', '54.50', 'flower_catalog/Tiger.jpg', b'0', 3),
(4, 1, 'Ballerina', '55.00', 'flower_catalog/Ballerina.jpg', b'1', 3),
(5, 1, 'Knockout', '40.60', 'flower_catalog/Knockout.jpg', b'1', 3),
(6, 1, 'Pirouette', '58.00', 'flower_catalog/Pirouette.jpg', b'1', 3),
(7, 2, 'Buttercream', '65.00', 'flower_catalog/Buttercream.jpg', b'1', 2),
(8, 2, 'Santorini', '52.00', 'flower_catalog/Santorini.jpg', b'0', 2),
(9, 2, 'Nonna', '70.85', 'flower_catalog/Nonna.jpg', b'1', 2),
(10, 2, 'Amelia', '100.00', 'flower_catalog/Amelia.jpg', b'1', 2),
(11, 2, 'Finesse', '90.99', 'flower_catalog/Finesse.jpg', b'1', 2),
(12, 2, 'Rosy Glow', '74.99', 'flower_catalog/Rosy_Glow.jpg', b'1', 2),
(13, 2, 'Fifteen Peach', '79.55', 'flower_catalog/Fifteen_Peach.jpg', b'1', 2),
(14, 2, 'Magic Moment', '81.00', 'flower_catalog/Magic_Moment.jpg', b'1', 2),
(15, 3, 'Double the Buttercream', '79.00', 'flower_catalog/Double_the_Buttercream.jpg', b'1', 5),
(16, 3, 'Double the Unicorn', '85.99', 'flower_catalog/Double_the_Unicorn.jpg', b'0', 5),
(17, 3, 'Muse', '150.00', 'flower_catalog/Muse.jpg', b'1', 5),
(18, 3, 'Sonnet', '80.50', 'flower_catalog/Sonnet.jpg', b'1', 5),
(19, 3, 'Daydream', '90.00', 'flower_catalog/Daydream.jpg', b'1', 5),
(20, 3, 'Blossom', '115.00', 'flower_catalog/Blossom.jpg', b'1', 5),
(21, 3, 'Godetia', '70.00', 'flower_catalog/Godetia.jpg', b'1', 5),
(22, 3, 'Purple Iris', '65.99', 'flower_catalog/Purple_Iris.jpg', b'1', 5),
(23, 3, 'Isle of White', '74.99', 'flower_catalog/Isle_of_White.jpg', b'1', 5),
(24, 4, 'Luna', '65.70', 'flower_catalog/Luna.jpg', b'1', 1),
(25, 4, 'Juliet', '64.99', 'flower_catalog/Juliet.jpg', b'1', 1),
(26, 4, 'Regatta', '130.00', 'flower_catalog/Regatta.jpg', b'1', 1),
(27, 4, 'New Edwardian', '150.00', 'flower_catalog/New_Edwardian.jpg', b'1', 1),
(28, 4, 'Double_the_Mardi', '80.00', 'flower_catalog/Double_the_Mardi.jpg', b'0', 1),
(29, 4, 'Carmen', '75.90', 'flower_catalog/Carmen.jpg', b'0', 1),
(30, 4, 'Flora', '75.90', 'flower_catalog/Flora.jpg', b'1', 1),
(31, 5, 'Red and Blush', '40.00', 'flower_catalog/Red_and_Blush.jpg', b'1', 3),
(32, 5, 'Blooming Song', '64.99', 'flower_catalog/Blooming_Song.jpg', b'1', 3),
(33, 5, 'Pinky', '78.95', 'flower_catalog/Pinky.jpg', b'0', 3),
(34, 5, 'Poppins', '55.00', 'flower_catalog/Poppins.jpg', b'1', 3),
(35, 5, 'Signature', '102.95', 'flower_catalog/Signature.jpg', b'1', 3),
(36, 5, 'Loving', '42.99', 'flower_catalog/Loving.jpg', b'0', 3),
(37, 5, 'Winter_Spice', '61.00', 'flower_catalog/Winter_Spice.jpg', b'1', 3),
(38, 5, 'Cymbidium Orchids', '70.00', 'flower_catalog/Cymbidium_Orchids.jpg', b'1', 3),
(39, 5, 'Charm', '75.95', 'flower_catalog/Charm.jpg', b'1', 3),
(40, 5, 'Pink Splendid', '85.00', 'flower_catalog/Pink_Splendid.jpg', b'1', 3);

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
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_delivery_id` (`delivery_id`) USING BTREE,
  ADD KEY `client_payment_method_id` (`payment_method_id`) USING BTREE,
  ADD KEY `client_id` (`city_id`),
  ADD KEY `flower_id` (`flower_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flower_catalog`
--
ALTER TABLE `flower_catalog`
  MODIFY `flower_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_id` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flower_id` FOREIGN KEY (`flower_id`) REFERENCES `flower_catalog` (`flower_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_method_id` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flower_catalog`
--
ALTER TABLE `flower_catalog`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provider_id` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
