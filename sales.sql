-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 03:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `stall_number` int(11) NOT NULL,
  `product_Name` varchar(20) NOT NULL,
  `vendor_Name` varchar(20) NOT NULL,
  `capital` int(11) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`stall_number`, `product_Name`, `vendor_Name`, `capital`, `revenue`) VALUES
(151, 'clothes', 'Armani Paquio', 5000, 2500),
(255, 'souvenirs', 'Mark Lantang ', 3000, 1500),
(50, 'gadgets', 'Abdul Jabar', 15000, 2500),
(151, 'bags', 'Melinda Marques', 6000, 2000),
(111, 'shoes', 'Rey Bok', 10000, 8000),
(300, 'stuff toys', 'Yosef Aliba', 3000, 1500),
(12, 'grilled foods(BBQ)', 'Merry Santos', 3000, 2500),
(19, 'rice toppings', 'Jan Adonis', 2000, 1500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
