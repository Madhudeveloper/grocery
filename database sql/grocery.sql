-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `title`, `sub_title`, `image`, `created`, `modified`) VALUES
(1, 'Welcome to Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate id est laborum.\r\n\r\nIus ferri velit sanctus cu, sed at soleat accusata. Dictas prompta et Ut placerat legendos interpre.Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante Etiam sit amet orci eget. Quis commodo odio aenean sed adipiscing. Turpis massa tincidunt dui ut ornare lectus. Auctor elit sed vulputate mi sit amet. Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate id est laborum.', '622f45ffee6e3_about-1.png', '2022-03-14 13:32:39', '2022-03-14 13:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Puma', '2022-02-26 04:35:47', '2022-02-26 04:35:47'),
(2, 'Teakwood', '2022-03-04 07:30:39', '2022-03-04 07:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` int(11) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `map_link`, `created`, `modified`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.8799281941624!2d77.5690824145771!3d9.431929693242019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06c20d0f6094af%3A0xb459daf82b9180b0!2sPonnagaram%20EB%20Substation!5e0!3m2!1sen!2sin!4v16', '2022-03-14 14:03:08', '2022-03-14 14:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `expiry_date` date NOT NULL,
  `coupon_percentage` int(11) DEFAULT NULL,
  `created_for` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `is_active`, `expiry_date`, `coupon_percentage`, `created_for`, `created`, `modified`) VALUES
(1, 'april2022', 1, '2022-04-29', 60, NULL, '2022-03-04 09:45:56', '2022-04-23 05:25:48'),
(2, 'may2022', 1, '2022-05-19', 60, NULL, '2022-04-02 11:00:04', '2022-04-02 11:00:04'),
(5, 'test2022', 1, '2022-07-20', 60, NULL, '2022-04-23 05:30:56', '2022-04-23 05:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `mobile`, `message`, `created`, `modified`) VALUES
(1, 'Madhu', 'madhu8991.s@gmail.com', '8610693389', 'Hai', '2022-04-21 12:30:53', '2022-04-21 12:30:53'),
(2, 'Aruldass', 'aruldass.d.infotech@gmail.com', '8610693389', 'new', '2022-04-21 12:31:39', '2022-04-21 12:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `header_marketing`
--

CREATE TABLE `header_marketing` (
  `id` int(11) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_marketing`
--

INSERT INTO `header_marketing` (`id`, `text1`, `text2`, `text3`, `created`, `modified`) VALUES
(1, '100% Secure delivery without contacting the courier', 'Supper Value Deals - Save more with coupons', 'Trendy 25silver jewelry, save up 35% off today', '2022-03-11 08:30:37', '2022-03-11 08:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `homebanners`
--

CREATE TABLE `homebanners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homebanners`
--

INSERT INTO `homebanners` (`id`, `title`, `sub_title`, `image`, `created`, `modified`) VALUES
(0, 'Don,t miss amazing grocery deals', 'Sign up for the daily newsletter', '621da3ffd5d67_slider-1.png', '2022-03-01 04:41:35', '2022-03-01 04:41:35'),
(0, 'Fresh Vegetables Big Discount', 'Save upto 50% off on your first order', '621da4314bd94_slider-2.png', '2022-03-01 04:42:25', '2022-03-01 04:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `sub_total` varchar(255) NOT NULL DEFAULT '0',
  `discount` varchar(255) NOT NULL DEFAULT '0',
  `coupon_id` varchar(10) NOT NULL DEFAULT '0',
  `gst_percentage` varchar(11) NOT NULL DEFAULT '0',
  `total` varchar(2500) NOT NULL DEFAULT '0',
  `order_type` int(11) NOT NULL DEFAULT 1 COMMENT '1 => Shop , 2 => online',
  `payment_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => COD 1=> Payment',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 => Ordered , 2 => Delivered , 3 => In transit',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_number`, `sub_total`, `discount`, `coupon_id`, `gst_percentage`, `total`, `order_type`, `payment_type`, `status`, `created`, `modified`) VALUES
(1, 6, '0001', '3600', '40', '2', '0', '2160', 1, 0, 1, '2022-04-21 11:26:41', '2022-04-21 11:26:41'),
(2, 6, '0002', '2450', '40', '1', '0', '1470', 1, 0, 1, '2022-04-21 12:28:57', '2022-04-21 12:28:57'),
(3, 6, '0003', '450', '60', '5', '0', '180', 1, 0, 1, '2022-04-23 06:20:36', '2022-04-23 06:20:36'),
(7, 6, '0004', '1800', '60', '2', '0', '720', 1, 0, 1, '2022-04-23 06:41:22', '2022-04-23 06:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_invoices`
--

CREATE TABLE `order_invoices` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `billing_name` varchar(255) NOT NULL,
  `billing_contact_1` varchar(255) NOT NULL,
  `billing_contact_2` varchar(255) DEFAULT NULL,
  `billing_email` varchar(255) NOT NULL,
  `billing_street` varchar(255) NOT NULL,
  `billing_location` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `state` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `billing_notes` varchar(255) DEFAULT NULL,
  `billing_pincode` varchar(255) NOT NULL,
  `dispatch_address` text DEFAULT NULL,
  `courier_name` varchar(255) DEFAULT NULL,
  `bill_number` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_invoices`
--

INSERT INTO `order_invoices` (`id`, `order_id`, `billing_name`, `billing_contact_1`, `billing_contact_2`, `billing_email`, `billing_street`, `billing_location`, `billing_city`, `state`, `billing_notes`, `billing_pincode`, `dispatch_address`, `courier_name`, `bill_number`, `created`, `modified`) VALUES
(1, 1, 'Madhus', '9865857899', 'Ponnagaram', 'madhu8991.s@gmail.com', '3/440, Kandapanan Thottam Sukkamplayam', 'Palladam', 'Tirupur', 'Tamil Nadu', 'Test', '641662', NULL, 'Dart', '1477', '2022-04-21 11:26:41', '2022-04-21 11:26:41'),
(2, 2, 'Madhus', '9865857899', 'Ponnagaram', 'madhu8991.s@gmail.com', '3/440, Kandapanan Thottam Sukkamplayam', 'Indian Bank Near', 'Tirupur', 'Tamil Nadu', 'ook', '641662', NULL, NULL, NULL, '2022-04-21 12:28:57', '2022-04-21 12:28:57'),
(3, 3, 'Madhus', '9865857899', 'Ponnagaram', 'madhu8991.s@gmail.com', '3/440, Kandapanan Thottam Sukkamplayam', 'Indian Bank Near', 'Tirupur', 'Tamil Nadu', 'nyagyag', '641662', NULL, NULL, NULL, '2022-04-23 06:20:36', '2022-04-23 06:20:36'),
(4, 6, 'Madhus', '9865857899', 'Ponnagaram', 'madhu8991.s@gmail.com', '3/440, Kandapanan Thottam Sukkamplayam', 'Palladam', 'Tirupur', 'Telangana', 'nsijsoks', '641662', NULL, NULL, NULL, '2022-04-23 06:26:07', '2022-04-23 06:26:07'),
(5, 7, 'Madhus', '9865857899', 'Ponnagaram', 'madhu8991.s@gmail.com', '3/440, Kandapanan Thottam Sukkamplayam', 'Indian Bank Near', 'Tirupur', 'Tamil Nadu', 'sjhkja', '641662', NULL, NULL, NULL, '2022-04-23 06:41:22', '2022-04-23 06:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_variant_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` varchar(255) NOT NULL DEFAULT '0',
  `gst_percentage` varchar(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `product_id`, `order_id`, `product_variant_id`, `quantity`, `price`, `gst_percentage`, `created`, `modified`) VALUES
(1, 18, 1, 16, 1, '2160', '0', '2022-04-21 11:26:41', '2022-04-21 11:26:41'),
(2, 3, 1, 24, 4, '2160', '0', '2022-04-21 11:26:41', '2022-04-21 11:26:41'),
(3, 18, 2, 16, 1, '1470', '0', '2022-04-21 12:28:58', '2022-04-21 12:28:58'),
(4, 22, 3, 19, 1, '180', '0', '2022-04-23 06:20:36', '2022-04-23 06:20:36'),
(5, 1, 6, 1, 2, '400', '0', '2022-04-23 06:26:07', '2022-04-23 06:26:07'),
(6, 22, 7, 19, 4, '720', '0', '2022-04-23 06:41:22', '2022-04-23 06:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `order_id`, `status`, `created`, `modified`) VALUES
(1, 1, 'Ordered', '2022-04-21 11:26:41', '2022-04-21 11:26:41'),
(2, 2, 'Ordered', '2022-04-21 12:28:57', '2022-04-21 12:28:57'),
(3, 3, 'Ordered', '2022-04-23 06:20:36', '2022-04-23 06:20:36'),
(4, 6, 'Ordered', '2022-04-23 06:26:07', '2022-04-23 06:26:07'),
(5, 7, 'Ordered', '2022-04-23 06:41:22', '2022-04-23 06:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_sub_category_id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL DEFAULT 0,
  `is_feature` int(11) NOT NULL DEFAULT 0,
  `is_popular` int(11) NOT NULL DEFAULT 0,
  `deals_end_day` datetime DEFAULT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_sub_category_id`, `slug`, `product_name`, `product_description`, `image_1`, `image_2`, `brand_id`, `is_feature`, `is_popular`, `deals_end_day`, `is_deleted`, `created`, `modified`) VALUES
(1, 1, 't-shirts', 'T-shirts', 'Cabbage New One', '626155d798d03_621dfd2174d5f_product-16-4.jpg', '626155d798e32_621dfd2174964_product-16-2.jpg', 1, 0, 0, '2022-07-21 22:35:00', 0, '2022-02-26 04:43:04', '2022-04-21 13:02:15'),
(2, 3, 'watches', 'Watches', 'New', '6219b06a1751c_index.jpg', '6219b06a1770d_product-1-1.jpg', 1, 0, 0, '2022-03-16 12:11:52', 0, '2022-02-26 04:45:30', '2022-02-26 04:53:41'),
(3, 2, 'mens', 'Shoes', 'About the Product\nCauliflower is made up of tightly bound clusters of soft, crumbly, sweet cauliflower florets that form a dense head.\nResembling a classic tree, the florets are attached to a central edible white trunk which is firm and tender.', '6219afd8428ba_cat-1.png', '6219afd842c06_cat-2.png', 1, 0, 0, '2022-03-04 12:11:58', 0, '2022-02-26 04:43:04', '2022-02-26 04:43:04'),
(4, 2, 'armour', 'Armour', 'New', '6219b06a1751c_index.jpg', '6219b06a1770d_product-1-1.jpg', 1, 0, 1, '2022-03-11 12:12:09', 0, '2022-02-26 04:45:30', '2022-02-26 04:45:30'),
(5, 3, 'football', 'Football', 'New', '6219afd8428ba_cat-1.png', '6219afd842c06_cat-2.png', 1, 0, 0, '2022-03-31 12:12:17', 0, '2022-02-26 04:43:04', '2022-02-26 04:43:04'),
(6, 6, 'mobiles', 'Mobiles', 'New', '6219b06a1751c_index.jpg', '6219b06a1770d_product-1-1.jpg', 1, 0, 0, NULL, 0, '2022-02-26 04:45:30', '2022-02-26 04:45:30'),
(7, 4, 'trimmer', 'Trimmer', 'New', '6219afd8428ba_cat-1.png', '6219afd842c06_cat-2.png', 1, 0, 0, NULL, 0, '2022-02-26 04:43:04', '2022-02-26 04:43:04'),
(8, 4, 'menswears', 'T-shirts', 'New', '6219b06a1751c_index.jpg', '6219b06a1770d_product-1-1.jpg', 1, 0, 0, NULL, 0, '2022-02-26 04:45:30', '2022-02-26 04:45:30'),
(12, 6, 'iphones', 'Iphones', 'nhx', '621dfd2174964_product-16-2.jpg', '621dfd2174d5f_product-16-4.jpg', 1, 0, 0, '2022-03-24 00:00:00', 0, '2022-03-01 11:01:53', '2022-03-01 11:06:18'),
(13, 5, 'headphones', 'Headphones', 'Jdndn', '621dfefcb9e6f_cat-15.png', '621dfefcba2af_cat-15.png', 1, 0, 0, NULL, 0, '2022-03-01 11:09:48', '2022-03-01 11:09:48'),
(18, 3, 'puma-football-shoes', 'Puma football shoes', 'new one', '622591fc504fe_product-6-1.jpg', '622591fc50869_product-6-2.jpg', 1, 1, 0, NULL, 0, '2022-03-07 05:02:52', '2022-03-07 05:02:52'),
(19, 5, 'stainless-steel', 'Stainless steel ', 'snhbshb', '62259dc06eed8_product-8-1.jpg', '62259dc06f3ac_product-8-2.jpg', 2, 0, 0, '2022-03-31 00:00:00', 0, '2022-03-07 05:53:04', '2022-03-07 06:02:15'),
(20, 6, 'story-books', 'Story Books', ' bvnjvndm ', '6225b69eefd3a_product-15-2.jpg', '6225b69ef02c8_product-10-1.jpg', 1, 0, 1, NULL, 0, '2022-03-07 07:39:11', '2022-03-07 07:39:11'),
(21, 3, 'kmmc', 'kmm', 'kmkdm', '6225fcae4f15c_product-16-6.jpg', '6225fcae4f6b2_product-11-1.jpg', 1, 0, 0, NULL, 0, '2022-03-07 12:38:06', '2022-03-07 12:38:06'),
(22, 2, 'jeans-pant', 'Nutrition', 'm c', '6226058fe0804_index.jpg', '6226058fe0ad8_product-1-1.jpg', 2, 1, 0, NULL, 0, '2022-03-07 13:15:59', '2022-03-07 13:15:59'),
(23, 2, 'redmi-mobiles', 'Redmi Mobiles', 'carbon body', '62274b129b4f4_product-12-2.jpg', '62274b129c913_product-3-2.jpg', 2, 0, 1, NULL, 0, '2022-03-08 12:24:50', '2022-03-08 12:24:50'),
(24, 3, 'spikes', 'Spikes', 'Trendy', '622ef6ae8d7b8_product-11-1.jpg', '622ef6ae8eb59_product-9-2.jpg', 1, 0, 0, NULL, 0, '2022-03-14 08:02:54', '2022-03-14 08:02:54'),
(26, 4, 'silk-saree', 'silk saree', 'snghb', '622efb9aaba9a_product-9-1.jpg', '622efb9aabceb_product-9-2.jpg', 1, 0, 0, NULL, 0, '2022-03-14 08:23:54', '2022-03-14 08:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `created`, `modified`) VALUES
(1, 'Mens Wears', 'mens-wear', '2022-03-02 07:11:31', '2022-04-23 05:34:39'),
(2, 'Electronics', 'electronics', '2022-03-02 07:11:31', '2022-03-02 07:11:31'),
(3, 'Sports', 'sports', '2022-03-02 07:11:55', '2022-03-02 07:11:55'),
(4, 'Womens Wear', 'womens-wear', '2022-03-02 07:11:55', '2022-03-02 07:11:55'),
(5, 'Home Appliances', 'home-appliances', '2022-03-04 07:18:19', '2022-03-04 07:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_categories`
--

CREATE TABLE `product_sub_categories` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sub_categories`
--

INSERT INTO `product_sub_categories` (`id`, `product_category_id`, `name`, `slug`, `created`, `modified`) VALUES
(1, 3, 'T-Shirts', 't-shirts', '2022-02-17 11:17:01', '2022-04-21 12:39:31'),
(2, 2, 'Mobiles', 'mobiles', '2022-03-03 09:57:07', '2022-03-03 09:57:07'),
(3, 3, 'Football shoes', 'football-shoes', '2022-03-03 09:57:07', '2022-03-03 09:57:07'),
(4, 4, 'Sarees', 'sarees', '2022-03-03 09:58:00', '2022-03-03 09:58:00'),
(5, 5, 'Furnitures', 'furnitures', '2022-03-04 07:18:58', '2022-03-04 07:18:58'),
(6, 5, 'Books', 'books', '2022-03-04 07:22:10', '2022-03-04 07:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant` varchar(255) NOT NULL,
  `uom_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0',
  `offer_percentage` varchar(11) NOT NULL,
  `gst_percentage` varchar(10) NOT NULL DEFAULT '0',
  `skucode` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant`, `uom_id`, `price`, `offer_percentage`, `gst_percentage`, `skucode`, `created`, `modified`) VALUES
(1, 1, 'Kids', 1, '1000', '50', '1', 'nxsnx ', '2022-02-26 04:37:14', '2022-02-26 04:37:14'),
(2, 2, 'New', 2, '1000', '10', '2', 'bhgshbsx', '2022-02-26 04:39:12', '2022-02-26 04:39:12'),
(3, 1, 'New One', 2, '4000', '20', '12', 'newone13225', '2022-02-26 04:43:04', '2022-02-26 04:43:04'),
(4, 4, 'Kids', 1, '2000', '20', '5', 'nnsns ', '2022-02-26 04:45:30', '2022-02-26 04:45:30'),
(5, 9, 'Every', 2, '1000', '10', '5', 'jsxj', '2022-03-01 10:51:34', '2022-03-01 10:51:34'),
(6, 10, 'New', 1, '10000', '10', '4', 'nbxb', '2022-03-01 10:56:18', '2022-03-01 10:56:18'),
(7, 11, 'New One', 1, '100', '10', '2', 'bbshbs', '2022-03-01 11:00:25', '2022-03-01 11:00:25'),
(8, 12, 'New One', 2, '800000', '50', '20', 'hxbsxxn', '2022-03-01 11:01:53', '2022-03-01 11:01:53'),
(10, 13, 'Wireless Headphones', 2, '1000', '20', '2', ' dfnmdnkdn', '2022-03-01 11:09:48', '2022-03-01 11:09:48'),
(11, 14, 'Chair', 2, '15000', '50', '12', 'sofa201r', '2022-03-04 07:32:12', '2022-03-04 07:32:12'),
(13, 15, 'Wheels Chairs', 1, '12000', '40', '10', 'sofa22rq', '2022-03-04 07:35:41', '2022-03-04 07:35:41'),
(14, 16, 'New', 2, '120000', '50', '10', 'nbsj', '2022-03-04 11:18:52', '2022-03-04 11:18:52'),
(15, 17, 'puma shoes', 2, '3000', '50', '12', 'jdkfd', '2022-03-07 05:01:27', '2022-03-07 05:01:27'),
(16, 18, 'Formual Pants', 1, '4900', '50', '12', 'ncnsd', '2022-03-07 05:02:52', '2022-03-07 05:02:52'),
(17, 19, 'New One', 1, '15000', '10', '5', 'newomw', '2022-03-07 05:53:04', '2022-03-07 05:53:04'),
(19, 22, 'Books ', 1, '500', '10', '8', 'booknew', '2022-03-07 07:39:11', '2022-03-07 07:39:11'),
(20, 21, 'New', 1, '10000', '10', '2', 'jncdn', '2022-03-07 12:38:06', '2022-03-07 12:38:06'),
(22, 23, 'Iphone 11 pro max', 1, '30000', '10', '2', 'bhxhxh', '2022-03-08 12:24:50', '2022-03-08 12:24:50'),
(23, 20, 'New Books', 1, '300', '50', '12', 'dbdnbdn', '2022-03-11 09:44:54', '2022-03-11 09:44:54'),
(24, 3, 'new', 2, '1000', '10', '3', 'jhh', '2022-03-11 09:52:51', '2022-03-11 09:52:51'),
(25, 5, 'Materials', 1, '250', '10', '5', 'bxbjds', '2022-03-11 09:53:39', '2022-03-11 09:53:39'),
(26, 6, 'Boots', 2, '2000', '30', '12', 'newone', '2022-03-11 09:54:22', '2022-03-11 09:54:22'),
(27, 7, 'mobiles', 1, '40000', '50', '12', 'mobile1341', '2022-03-11 09:55:04', '2022-03-11 09:55:04'),
(28, 24, 'football shoes', 1, '2000', '40', '10', 'bhbxh', '2022-03-14 08:02:54', '2022-03-14 08:02:54'),
(29, 8, 'test', 2, '299', '10', '5', 'nsghsg', '2022-03-14 09:05:50', '2022-03-14 09:05:50'),
(30, 25, 'teakwood sofa', 2, '10000', '40', '12', 'bhbsb', '2022-03-14 08:19:23', '2022-03-14 08:19:23'),
(31, 26, 'New sarees', 2, '3000', '30', '12', 'xshbxb', '2022-03-14 12:16:04', '2022-03-14 12:16:04'),
(32, 1, '', 1, '', '', '', '', '2022-04-21 13:02:15', '2022-04-21 13:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(5) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `created`, `modified`) VALUES
(1, 1, 1, 2, '2022-03-19 15:56:12', '2022-03-19 15:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `image` varchar(244) NOT NULL,
  `loader_image` varchar(255) NOT NULL,
  `working_hours_start` time NOT NULL,
  `working_hours_end` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phonenumber`, `image`, `loader_image`, `working_hours_start`, `working_hours_end`, `created`, `modified`) VALUES
(1, '8610693389', '622ca1484d3b8_logo.png', '622ca1484d4f4_loading.gif', '10:00:00', '06:00:00', '2022-03-12 13:34:00', '2022-03-12 13:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `pintrest_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `reserved_text` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gst` int(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `pintrest_link`, `youtube_link`, `reserved_text`, `company_name`, `address`, `gst`, `email_address`, `created`, `modified`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/accounts/login/', 'https://www.linkedin.com/', 'https://www.pintrest.com/', 'https://www.youtube.com/', 'Created By Own', 'Own Company', '68/1 Ponnagram\r\nRajapalayam', 2147483647, 'madhu@gmail.com', '2022-03-11 07:28:43', '2022-03-11 07:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `subbanners`
--

CREATE TABLE `subbanners` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subbanners`
--

INSERT INTO `subbanners` (`id`, `sub_title`, `image`, `button_name`, `created`, `modified`) VALUES
(1, 'Everyday Fresh & Clean with Our Products', '622af9895a6c2_banner-1.png', 'Shop Now', '2022-03-11 07:26:01', '2022-03-11 07:26:01'),
(2, 'Make your Breakfast Healthy and Easy', '622af99ee135e_banner-2.png', 'Shop Now', '2022-03-11 07:26:22', '2022-03-11 07:26:22'),
(3, 'The best Organic Products Online', '622af9ad7ce8a_banner-3.png', 'Shop Now', '2022-03-11 07:26:37', '2022-03-11 07:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `uoms`
--

CREATE TABLE `uoms` (
  `id` int(11) NOT NULL,
  `uomname` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uoms`
--

INSERT INTO `uoms` (`id`, `uomname`, `created`, `modified`) VALUES
(1, 'KG', '2022-02-26 05:36:05', '2022-02-26 05:36:05'),
(2, 'Litre', '2022-02-26 05:36:05', '2022-02-26 05:36:05'),
(3, 'Gram', '2022-03-14 08:28:14', '2022-03-14 08:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => Not activated , 1 => Activated',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `user_role_id`, `created_by`, `status`, `created`, `modified`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '8610693389', '$2y$10$rw2sFQEvCI5bTcxG0NEujurpSBRdqW7tOgnb.qa09BocB23kv3v.C', 1, 0, 1, '2022-02-17 07:26:16', '2022-02-17 07:26:16'),
(4, 'madhu s', 'madhuinfotech4@gmail.com', '8610693389', '$2y$10$ge2E0ZuUrIuYadTUS..bVOM4RqAX8JOc.eQG6ch.S1wP7Vh1CW4TS', 3, 0, 1, '2022-03-01 05:44:45', '2022-03-07 11:11:07'),
(5, 'Aruldass', 'aruldass@gmail.com', '09488370947', '$2y$10$U8H9pP2Gb6AS.N9r3abtFu8qaWLRrgpV9PRTTdHnlsrEllmJNJs6O', 3, 0, 1, '2022-03-03 09:53:57', '2022-03-03 09:53:57'),
(6, 'Madhus', 'madhu8991.s@gmail.com', '9865857899', '$2y$10$rr3dqQ4CzA.T6xHNPEhbe.2F.jDu81eByGNsQ0yJ19RNNQBhUcNXC', 3, 0, 1, '2022-03-04 12:36:26', '2022-03-04 13:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `created`, `modified`) VALUES
(1, 'Super Admin', '2022-03-01 05:58:55', '2022-03-01 05:58:55'),
(2, 'Vendor', '2022-03-01 05:58:55', '2022-03-01 05:58:55'),
(3, 'Customer', '2022-03-01 05:59:45', '2022-03-01 05:59:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_marketing`
--
ALTER TABLE `header_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_invoices`
--
ALTER TABLE `order_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subbanners`
--
ALTER TABLE `subbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uoms`
--
ALTER TABLE `uoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_marketing`
--
ALTER TABLE `header_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_invoices`
--
ALTER TABLE `order_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subbanners`
--
ALTER TABLE `subbanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uoms`
--
ALTER TABLE `uoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
