-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:41 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `password`, `admin_image`, `admin_phone`) VALUES
(1, 'Sayeed sazzad Rion', 'shakib3127@gmail.com', '123', '3.png', '01783198879'),
(2, 'RakibulHossain', 'rakib@gmail.com', '12345', NULL, '01792894263'),
(3, 'RakibulHossain', 'rakib@gmail.com', '12345', NULL, '01792894263'),
(4, 'Imran khan', 'robi@gmail.com', '12345', NULL, '17315040745'),
(5, 'sadab', 'sadab@codeian.xyz', 'sadab', 'mich.jpg', '52423573');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `brand_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`, `publication_status`) VALUES
(18, 'Apple', 'apple.jpg', 1),
(19, 'samsung', 'samlogo.jpg', 1),
(20, 'Acer', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_desc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `featured_status` int(11) DEFAULT NULL,
  `mix_class_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `publication_status`, `parent_id`, `featured_status`, `mix_class_name`) VALUES
(1, 'Electronics', 'Television category', 1, NULL, 1, 'ele'),
(3, 'Laptop', '<p>Laptop category</p>', 1, 1, 1, 'lap'),
(5, 'cloths', '<p>This is cloths category</p>', 1, NULL, 1, 'clo'),
(6, 'Mobile', '<p><br></p><p>N/A</p>', 1, 1, 1, 'mobile'),
(7, 'Television', '<p><br></p><p>N/A</p>', 1, 1, 1, 'tv'),
(8, 'Hoodi', '<p>N/A</p>', 1, 5, 1, 'hoodi');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `color_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`) VALUES
(5, 'tomato', '#ff8040'),
(6, 'green', '#00ff40');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `telephone`) VALUES
(1, 'sayeed', 'sazzad', 'sazzad@gmail.com', '123', '01783198879'),
(2, 'Rakib', 'Hasan', 'rakib@gmail.com', '123', '01792894263'),
(3, 'Rohan', 'islam', 'rohan@gmail.com', '1456', '01731504074'),
(4, 'Asik', 'Mahmud', 'as@gmail.com', '65', '01792894267'),
(7, 'Sadab', 'Rahman', 'sadab@codeian.xyz', 'sadab', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_sales_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(1, 1, 13, 'samsung s6', 20000, 1),
(2, 2, 14, 'iphone-6', 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_method` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `payment_date_time`) VALUES
(1, 'cash on delivery', 0, '2018-08-28 06:06:59'),
(2, 'bkash', 0, '2018-08-28 06:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_sku` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text COLLATE utf8_unicode_ci,
  `product_image_1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `discount_amount` int(11) DEFAULT NULL,
  `product_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallary_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_level` int(11) DEFAULT NULL,
  `product_featured_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_sku`, `category_id`, `brand_name`, `product_qty`, `product_price`, `product_description`, `product_image_1`, `discount_amount`, `product_color`, `product_size`, `gallary_image`, `new_level`, `product_featured_status`) VALUES
(13, 'samsung s6', '7c8scs', 6, 'Firefox', 3, 20000, '<p><p><p><p><br></p><p>N/A</p></p></p></p>', 'p2.jpg', NULL, NULL, NULL, '1.jpg,2.jpg,3.jpg,8.jpg', NULL, 1),
(14, 'iphone-6', 'i78ca', 6, 'Firefox', 7, 5000, '<p><p><p><p><p><p><p><br></p><p>N/a</p></p></p></p></p></p></p>', 'p15.jpg', NULL, NULL, NULL, '9.jpg,10.jpg', NULL, 1),
(15, 'Acer v-5', 'a450x', 3, '20', 5, 5800, '<p><p><br></p><p>N/A</p></p>', 'p1.jpg', NULL, NULL, NULL, 'p5.jpg,p8.jpg,p13.jpg', 1, 1),
(17, 'Hoody', 'adcd', 8, 'Firefox', 54, 487, '<p><p><p>N/A</p></p></p>', 'f1.jpg', NULL, NULL, NULL, 'f1.jpg', 1, 1),
(18, 'Sony Bravia', 'a478', 7, NULL, 8, 4879, '<p><br></p><p>N/A</p>', 'p16.jpg', NULL, NULL, NULL, '12.jpg,br4.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `shipping_first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_telephone`, `shipping_email`) VALUES
(1, 'sayeed', 'sazzad', 'Nikunjo-2,Dhaka', '01783198879', 'sazzad@gmail.com'),
(2, 'rakib', 'hossain', 'Banani-02,Dhaka', '01792894263', 'rakib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size_scale` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_scale`, `size_name`) VALUES
(3, '32\"', 'L'),
(4, '35\"', 'XL'),
(6, '30\"', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date_time`) VALUES
(1, 1, 1, 1, 25444, 0, '2018-08-28 06:04:33'),
(2, 2, 2, 2, 1254, 0, '2018-08-28 06:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_sku` (`product_sku`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
