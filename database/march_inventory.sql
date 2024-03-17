-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 02:17 PM
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
-- Database: `march_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `first_name`, `last_name`, `username`, `password`, `profile_pic`) VALUES
(1, 'Hardware', 'Admin', 'admin', '123', 'image/default_profile.png');
-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `date_added`) VALUES
(1, 'Test', '2024-03-10'),
(2, 'Nail', '2024-03-10'),
(3, 'Wood', '2024-03-10'),
(4, 'Can Goods', '2024-03-10'),
(5, 'Ice', '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `full_name`, `contact_number`, `address`, `status`) VALUES
(1, 'Leonard Balabat11', '09862447613', 'wer1', 'PENDING'),
(2, 'Windel Pelayo', '09862447619', 'Nailon Bogo City Cebu', 'PENDING'),
(3, 'Jonel Gelig', '2147483647', 'Nailon Bogo City Cebu', 'PENDING'),
(4, 'Ezekiel Pelayo', '2147483647', 'Guadalupe Bogo City Cebu', 'PENDING'),
(5, 'Edison Pagatpat', '2147483647', 'Cayang Bogo City Cebu', 'PENDING'),
(6, 'Levi Jay Pelayo', '2147483647', 'Guadalupe Bogo City Cebu', 'PENDING'),
(7, 'Windel Pelayo', '9673520009', 'Matapang Bogo City Cebu', 'PENDING'),
(8, 'Leonard Balabat', '9784656361', 'Nailon Bogo City Cebu', 'PENDING'),
(9, 'Leonard Balabat', '9784656361', 'Nailon Bogo City Cebu', 'PENDING'),
(10, 'Jonel Gelig', '9784656361', 'Gairan Bogo City Cebu', 'PENDING'),
(11, 'Edison Pagatpat', '09784656361', 'Gairan Bogo City Cebu', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_table`
--

CREATE TABLE `inventory_table` (
  `inventory_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `stock_in` int(11) DEFAULT NULL,
  `out_of_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_table`
--

INSERT INTO `inventory_table` (`inventory_id`, `product_id`, `stock_in`, `out_of_stock`) VALUES
(28, 75, 322, 0),
(29, 76, 2, 0),
(30, 77, 21, 0),
(31, 78, 100, 0),
(32, 79, 3, 0),
(33, 80, -1204, 0),
(34, 81, 100, 0),
(35, 82, 200, 0),
(36, 83, 100, 0),
(37, 84, 100, 0),
(38, 85, 97, 0),
(39, 86, 100, 0),
(40, 87, 234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`product_id`, `image`, `category_id`, `product_name`, `product_code`, `quantity`, `price`, `date_added`) VALUES
(1, 'uploads/main-qimg-2f7d45ecc0d2e020285b621120346332-lq.jpg', 60, 'Concrete', '', -1204, 23.00, '2024-01-15 09:53:45'),
(2, 'uploads/WP-Photos-Gaby-5-770x403.png', 61, 'Common Nail', '', 100, 50.00, '2024-01-15 15:01:45'),
(3, 'uploads/san-diegos-best-gym-boulevard-fitness-north-park-panorama-2.jpg', 61, 'Finishin Nail', '', 200, 50.00, '2024-01-15 15:02:18'),
(4, 'uploads/Screenshot (187).png', 62, 'Lubi', '', 100, 150.00, '2024-01-16 00:11:29'),
(5, 'uploads/Screenshot (192).png', 62, 'Batilis', '', 100, 250.00, '2024-01-16 00:11:56'),
(6, 'uploads/Screenshot (385).png', 64, 'Ice candy', '', 100, 10.00, '2024-01-17 00:52:07'),
(7, 'uploads/Screenshot (195).png', 64, 'wew', '', 234, 234.00, '2024-01-17 01:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `returned_table`
--

CREATE TABLE `returned_table` (
  `returned_id` int(11) NOT NULL,
  `transact_id` int(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `return_quantity` int(20) NOT NULL,
  `transact_code` varchar(50) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `return_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_table`
--

CREATE TABLE `sales_table` (
  `sale_id` int(11) NOT NULL,
  `customer_id` int(25) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `cash` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `remainder` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `transaction_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL,
  `transaction_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `inventory_table`
--
ALTER TABLE `inventory_table`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `products_table`
--
ALTER TABLE `products_table`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `returned_table`
--
ALTER TABLE `returned_table`
  ADD PRIMARY KEY (`returned_id`);

--
-- Indexes for table `sales_table`
--
ALTER TABLE `sales_table`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inventory_table`
--
ALTER TABLE `inventory_table`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products_table`
--
ALTER TABLE `products_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `returned_table`
--
ALTER TABLE `returned_table`
  MODIFY `returned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `sales_table`
--
ALTER TABLE `sales_table`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
