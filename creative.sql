-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2022 at 07:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1, 'Paint Brush Set (12 pcs.)', '5', 'paintbrush.jpg', '2'),
(2, '6x6 Canvas Board', '3', '6x6canvasboard.jpg', '1'),
(3, 'Acrylic Paint (14 colors)', '7', 'fluidacrylicpaint.jpg', '1'),
(4, 'Paint Palette', '1', 'paintpalette.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `method` varchar(500) NOT NULL,
  `flat` varchar(500) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `pin_code` varchar(500) NOT NULL,
  `total_products` varchar(500) NOT NULL,
  `total_price` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Hosna Godoy', '09638335872', 'hosnagodoy@gmail.com', 'cash on delivery', 'Purok Paghiusa', 'Brgy. Bobon', 'City of Mati', 'Davao Oriental', 'Philippines', '8200', 'Paint Brush Set (12 pcs.) (2) , 6x6 Canvas Board (1) , Acrylic Paint (14 colors) (1) , Paint Palette (1) ', '21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Paint Brush Set (12 pcs.)', '5', 'paintbrush.jpg'),
(2, '6x6 Canvas Board', '3', '6x6canvasboard.jpg'),
(3, 'Acrylic Paint (14 colors)', '7', 'fluidacrylicpaint.jpg'),
(4, 'Paint Palette', '1', 'paintpalette.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Ms. Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(2, 'Ms. Seller', 'seller@gmail.com', '1e4970ada8c054474cda889490de3421', 'seller'),
(3, 'Hosna Godoy', 'hosnagodoy@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
