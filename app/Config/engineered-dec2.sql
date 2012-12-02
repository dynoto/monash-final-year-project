-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2012 at 08:23 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `engineered`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 268),
(2, 1, NULL, NULL, 'Administrators', 2, 5),
(3, 2, NULL, NULL, 'index', 3, 4),
(5, 1, NULL, NULL, 'CriteriaValues', 6, 17),
(6, 5, NULL, NULL, 'index', 7, 8),
(7, 5, NULL, NULL, 'view', 9, 10),
(8, 5, NULL, NULL, 'add', 11, 12),
(9, 5, NULL, NULL, 'edit', 13, 14),
(10, 5, NULL, NULL, 'delete', 15, 16),
(11, 1, NULL, NULL, 'CriteriaValuesKitchens', 18, 29),
(12, 11, NULL, NULL, 'index', 19, 20),
(13, 11, NULL, NULL, 'view', 21, 22),
(14, 11, NULL, NULL, 'add', 23, 24),
(15, 11, NULL, NULL, 'edit', 25, 26),
(16, 11, NULL, NULL, 'delete', 27, 28),
(17, 1, NULL, NULL, 'Criterias', 30, 41),
(18, 17, NULL, NULL, 'index', 31, 32),
(19, 17, NULL, NULL, 'view', 33, 34),
(20, 17, NULL, NULL, 'add', 35, 36),
(21, 17, NULL, NULL, 'edit', 37, 38),
(22, 17, NULL, NULL, 'delete', 39, 40),
(23, 1, NULL, NULL, 'CustomerTypes', 42, 53),
(24, 23, NULL, NULL, 'index', 43, 44),
(25, 23, NULL, NULL, 'view', 45, 46),
(26, 23, NULL, NULL, 'add', 47, 48),
(27, 23, NULL, NULL, 'edit', 49, 50),
(28, 23, NULL, NULL, 'delete', 51, 52),
(29, 1, NULL, NULL, 'Customers', 54, 67),
(30, 29, NULL, NULL, 'index', 55, 56),
(31, 29, NULL, NULL, 'view', 57, 58),
(32, 29, NULL, NULL, 'add', 59, 60),
(33, 29, NULL, NULL, 'edit', 61, 62),
(34, 29, NULL, NULL, 'delete', 63, 64),
(35, 1, NULL, NULL, 'Discounts', 68, 79),
(36, 35, NULL, NULL, 'index', 69, 70),
(37, 35, NULL, NULL, 'view', 71, 72),
(38, 35, NULL, NULL, 'add', 73, 74),
(39, 35, NULL, NULL, 'edit', 75, 76),
(40, 35, NULL, NULL, 'delete', 77, 78),
(41, 1, NULL, NULL, 'Groups', 80, 91),
(42, 41, NULL, NULL, 'index', 81, 82),
(43, 41, NULL, NULL, 'view', 83, 84),
(44, 41, NULL, NULL, 'add', 85, 86),
(45, 41, NULL, NULL, 'edit', 87, 88),
(46, 41, NULL, NULL, 'delete', 89, 90),
(47, 1, NULL, NULL, 'Images', 92, 103),
(48, 47, NULL, NULL, 'index', 93, 94),
(49, 47, NULL, NULL, 'view', 95, 96),
(50, 47, NULL, NULL, 'add', 97, 98),
(51, 47, NULL, NULL, 'delete', 99, 100),
(52, 47, NULL, NULL, 'add_ajax', 101, 102),
(53, 1, NULL, NULL, 'Kitchens', 104, 117),
(54, 53, NULL, NULL, 'index', 105, 106),
(55, 53, NULL, NULL, 'view', 107, 108),
(56, 53, NULL, NULL, 'add', 109, 110),
(57, 53, NULL, NULL, 'edit', 111, 112),
(58, 53, NULL, NULL, 'delete', 113, 114),
(59, 1, NULL, NULL, 'Orders', 118, 129),
(60, 59, NULL, NULL, 'index', 119, 120),
(61, 59, NULL, NULL, 'view', 121, 122),
(62, 59, NULL, NULL, 'add', 123, 124),
(63, 59, NULL, NULL, 'edit', 125, 126),
(64, 59, NULL, NULL, 'delete', 127, 128),
(65, 1, NULL, NULL, 'Pages', 130, 133),
(66, 65, NULL, NULL, 'display', 131, 132),
(67, 1, NULL, NULL, 'Products', 134, 147),
(68, 67, NULL, NULL, 'index', 135, 136),
(69, 67, NULL, NULL, 'view', 137, 138),
(70, 67, NULL, NULL, 'add', 139, 140),
(71, 67, NULL, NULL, 'edit', 141, 142),
(72, 67, NULL, NULL, 'delete', 143, 144),
(73, 1, NULL, NULL, 'Testimonials', 148, 159),
(74, 73, NULL, NULL, 'index', 149, 150),
(75, 73, NULL, NULL, 'view', 151, 152),
(76, 73, NULL, NULL, 'add', 153, 154),
(77, 73, NULL, NULL, 'edit', 155, 156),
(78, 73, NULL, NULL, 'delete', 157, 158),
(79, 1, NULL, NULL, 'Users', 160, 177),
(80, 79, NULL, NULL, 'index', 161, 162),
(81, 79, NULL, NULL, 'view', 163, 164),
(82, 79, NULL, NULL, 'add', 165, 166),
(83, 79, NULL, NULL, 'edit', 167, 168),
(84, 79, NULL, NULL, 'delete', 169, 170),
(85, 79, NULL, NULL, 'login', 171, 172),
(86, 79, NULL, NULL, 'logout', 173, 174),
(87, 79, NULL, NULL, 'initDB', 175, 176),
(88, 1, NULL, NULL, 'Visitors', 178, 197),
(89, 88, NULL, NULL, 'index', 179, 180),
(90, 88, NULL, NULL, 'gallery', 181, 182),
(91, 88, NULL, NULL, 'products', 183, 184),
(92, 88, NULL, NULL, 'testimonials', 185, 186),
(93, 88, NULL, NULL, 'about_us', 187, 188),
(94, 88, NULL, NULL, 'contact_us', 189, 190),
(95, 1, NULL, NULL, 'AclExtras', 198, 199),
(96, 29, NULL, NULL, 'approve', 65, 66),
(97, 53, NULL, NULL, 'fill_missing_criteria', 115, 116),
(98, 1, NULL, NULL, 'CriteriaValuesProducts', 200, 211),
(99, 98, NULL, NULL, 'index', 201, 202),
(100, 98, NULL, NULL, 'view', 203, 204),
(101, 98, NULL, NULL, 'add', 205, 206),
(102, 98, NULL, NULL, 'edit', 207, 208),
(103, 98, NULL, NULL, 'delete', 209, 210),
(104, 1, NULL, NULL, 'EcSettings', 212, 223),
(105, 104, NULL, NULL, 'index', 213, 214),
(106, 104, NULL, NULL, 'view', 215, 216),
(107, 104, NULL, NULL, 'add', 217, 218),
(108, 104, NULL, NULL, 'edit', 219, 220),
(109, 104, NULL, NULL, 'delete', 221, 222),
(110, 1, NULL, NULL, 'Enquiries', 224, 235),
(111, 110, NULL, NULL, 'index', 225, 226),
(112, 110, NULL, NULL, 'view', 227, 228),
(113, 110, NULL, NULL, 'add', 229, 230),
(114, 110, NULL, NULL, 'edit', 231, 232),
(115, 110, NULL, NULL, 'delete', 233, 234),
(116, 1, NULL, NULL, 'FinishTypes', 236, 237),
(117, 1, NULL, NULL, 'Finishes', 238, 249),
(118, 117, NULL, NULL, 'index', 239, 240),
(119, 117, NULL, NULL, 'view', 241, 242),
(120, 117, NULL, NULL, 'add', 243, 244),
(121, 117, NULL, NULL, 'edit', 245, 246),
(122, 117, NULL, NULL, 'delete', 247, 248),
(123, 1, NULL, NULL, 'Homepageimages', 250, 255),
(124, 123, NULL, NULL, 'index', 251, 252),
(125, 123, NULL, NULL, 'add', 253, 254),
(126, 1, NULL, NULL, 'OrderItems', 256, 267),
(127, 126, NULL, NULL, 'index', 257, 258),
(128, 126, NULL, NULL, 'view', 259, 260),
(129, 126, NULL, NULL, 'add', 261, 262),
(130, 126, NULL, NULL, 'edit', 263, 264),
(131, 126, NULL, NULL, 'delete', 265, 266),
(132, 67, NULL, NULL, 'fill_missing_criteria', 145, 146),
(133, 88, NULL, NULL, 'cart_add', 191, 192),
(134, 88, NULL, NULL, 'cart_list', 193, 194),
(135, 88, NULL, NULL, 'make_order', 195, 196);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, NULL, 'Group', 2, NULL, 7, 30),
(3, 1, 'User', 1, NULL, 2, 3),
(4, 1, 'User', 2, NULL, 4, 5),
(5, 2, 'User', 3, NULL, 8, 9),
(6, 2, 'User', 5, NULL, 10, 11),
(7, 2, 'User', 6, NULL, 12, 13),
(8, 2, 'User', 7, NULL, 14, 15),
(9, 2, 'User', 8, NULL, 16, 17),
(10, 2, 'User', 9, NULL, 18, 19),
(11, 2, 'User', 10, NULL, 20, 21),
(12, 2, 'User', 12, NULL, 22, 23),
(13, 2, 'User', 13, NULL, 24, 25),
(14, 2, 'User', 14, NULL, 26, 27),
(15, 2, 'User', 15, NULL, 28, 29);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 85, '1', '1', '1', '1'),
(4, 2, 86, '1', '1', '1', '1'),
(5, 2, 88, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `kitchen` tinyint(4) NOT NULL DEFAULT '0',
  `product` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `kitchen`, `product`) VALUES
(1, 'Finish', 1, 0),
(2, 'Colour', 1, 0),
(3, 'Type', 1, 0),
(4, 'Material', 1, 0),
(6, 'Category', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `criteria_values`
--

CREATE TABLE `criteria_values` (
  `criteria_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_substyles_styles_idx` (`criteria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `criteria_values`
--

INSERT INTO `criteria_values` (`criteria_id`, `id`, `name`) VALUES
(1, 1, 'glossy'),
(1, 2, 'matte'),
(1, 3, 'coarse'),
(2, 4, 'black'),
(2, 5, 'white'),
(2, 6, 'blue'),
(3, 7, 'Modern'),
(3, 8, 'Contemporary'),
(3, 9, 'Old School'),
(3, 10, 'Vintage'),
(4, 11, 'Aluminium'),
(4, 12, 'Gold'),
(4, 13, 'Wood'),
(4, 14, 'Silver'),
(4, 15, 'Iron'),
(6, 18, 'Accesories'),
(6, 19, 'Cabinets'),
(6, 20, 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_values_kitchens`
--

CREATE TABLE `criteria_values_kitchens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kitchen_id` int(11) NOT NULL,
  `criteria_value_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kitchens_subcriterias_subcriterias1_idx` (`criteria_value_id`),
  KEY `fk_kitchens_subcriterias_kitchens1_idx` (`kitchen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `criteria_values_kitchens`
--

INSERT INTO `criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 7),
(4, 1, 11),
(5, 2, 2),
(6, 2, 5),
(7, 2, 8),
(8, 2, 12),
(9, 3, 3),
(10, 3, 6),
(11, 3, 9),
(12, 3, 13),
(13, 4, 1),
(14, 4, 6),
(15, 4, 10),
(16, 4, 14),
(17, 5, 2),
(18, 5, 5),
(19, 5, 7),
(20, 5, 15),
(21, 6, 3),
(22, 6, 4),
(23, 6, 9),
(24, 6, 11),
(25, 7, 1),
(26, 7, 5),
(27, 7, 8),
(28, 7, 13),
(29, 8, 2),
(30, 8, 4),
(31, 8, 10),
(32, 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `criteria_values_products`
--

CREATE TABLE `criteria_values_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `criteria_value_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_criteria_values_products_products1_idx` (`product_id`),
  KEY `fk_criteria_values_products_criteria_values1_idx` (`criteria_value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `criteria_values_products`
--

INSERT INTO `criteria_values_products` (`id`, `product_id`, `criteria_value_id`) VALUES
(3, 1, 19),
(10, 8, 18),
(11, 8, 20);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `customer_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customers_customer_type1_idx` (`customer_type_id`),
  KEY `fk_customers_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `discount`, `customer_type_id`, `user_id`) VALUES
(1, 'cust1 full name', 'cust@omer.com', 'something very very long..bla bla bla bal ab ', '2873829479234', NULL, 2, 5),
(2, 'customer33', 'cau@field.com', 'oansetuhaotnueanstuh', '12324235325', NULL, 1, 6),
(3, 'ahahahah', 'hahahaha', 'hahahaha', '340958439058', NULL, NULL, 7),
(4, 'customer10', 'customer10@email.com', 'my house', '123456', NULL, NULL, 8),
(5, 'DAVID TJOKROAMINOTO', 'dynamic.dante@gmail.com', '88 park st melbourne 3000', '0486795739333', NULL, NULL, 9),
(6, 'David Tjokroaminoto', 'haha@gmail.com', 'test', '2345890', NULL, NULL, 10),
(7, 'SAONETUHAOTNESUH', 'ASEUHTNOEAUH', 'SOAUHTOSANEUH', '34L5G4C5G43R5', NULL, NULL, 12),
(8, 'a', 'a', 'a', 'a', NULL, NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `customer_types`
--

CREATE TABLE `customer_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_types`
--

INSERT INTO `customer_types` (`id`, `name`) VALUES
(1, 'Retail'),
(2, 'Wholesale');

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dimension_type_id` int(11) NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `increment` int(11) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dimension_dimension_type1_idx` (`dimension_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `dimension_type_id`, `min`, `max`, `increment`, `default`) VALUES
(1, 1, 100, 1000, 100, 10),
(2, 2, 10, 600, 100, 999),
(3, 3, 95, 500, 50, 999),
(4, 1, 40, 1000, 40, NULL),
(5, 2, 25, 525, 25, NULL),
(6, 3, 50, 150, 10, NULL),
(16, 1, 0, 0, 0, 10),
(17, 2, 0, 0, 0, 20),
(18, 3, 0, 0, 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `dimensions_products`
--

CREATE TABLE `dimensions_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `dimension_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dimensions_products_products1_idx` (`product_id`),
  KEY `fk_dimensions_products_dimensions1_idx` (`dimension_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `dimensions_products`
--

INSERT INTO `dimensions_products` (`id`, `product_id`, `dimension_id`) VALUES
(16, 1, 1),
(17, 1, 2),
(18, 1, 3),
(28, 8, 16),
(29, 8, 17),
(30, 8, 18);

-- --------------------------------------------------------

--
-- Table structure for table `dimension_types`
--

CREATE TABLE `dimension_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dimension_types`
--

INSERT INTO `dimension_types` (`id`, `name`) VALUES
(1, 'Height'),
(2, 'Width'),
(3, 'Depth');

-- --------------------------------------------------------

--
-- Table structure for table `ec_settings`
--

CREATE TABLE `ec_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ec_settings`
--

INSERT INTO `ec_settings` (`id`, `name`, `value`) VALUES
(1, 'youtube_link', 'https://www.youtube.com/embed/NK8zYHyKWb4'),
(2, 'about_us_description', 'The Focal / Engineering Cabinets was established by Liam Gonsalvez , in response to the interest to make someone’s dream kitchen in to reality. Engineered Cabinets / Focal is a business that focuses on building kitchens as a central area of functionality and design. This method of production will guarantee that your components are manufactured to the highest standard of quality, in a reasonable amount of time, at a competitive price to suit your budget. You can be confident that your job will be completed, without having to put up with the labour content, as well as the dust factor involved. We pride ourselves on our vast experience, industry knowledge, quality workmanship and high level of customer service to ensure that your experience with Focal / Engineering Cabinets is a memorable one.'),
(3, 'address_line_1', '27 Sir Laurence Drive'),
(4, 'address_line_2', 'Seaford, VIC, 3198'),
(5, 'address_line_3', 'Australia'),
(6, 'email', 'admin@engineeredcabinets.com.au\n'),
(7, 'phone', '(03) 9776 8100'),
(8, 'google_maps_coordinate', '-38.116322,145.143196');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrators', '2012-10-15 08:56:47', '2012-10-15 08:56:47'),
(2, 'Customers', '2012-10-15 08:56:52', '2012-10-15 08:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_images`
--

CREATE TABLE `homepage_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_homepage_images_images1_idx` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `kitchen_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `primary` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_kitchens1_idx` (`kitchen_id`),
  KEY `fk_images_products1_idx` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `kitchen_id`, `product_id`, `primary`) VALUES
(1, '11.jpg', 1, NULL, NULL),
(2, '12.jpg', 1, NULL, NULL),
(3, '21.jpg', 2, NULL, NULL),
(4, '22.jpg', 2, NULL, NULL),
(5, '23.jpg', 2, NULL, NULL),
(6, '31.jpg', 3, NULL, NULL),
(7, '32.jpg', 3, NULL, NULL),
(8, '41.jpg', 4, NULL, NULL),
(9, '42.jpg', 4, NULL, NULL),
(10, '43.jpg', 4, NULL, NULL),
(11, '44.jpg', 4, NULL, NULL),
(12, '45.jpg', 4, NULL, NULL),
(13, '32.jpg', 5, NULL, NULL),
(14, '12.jpg', 5, NULL, NULL),
(15, '22.jpg', 5, NULL, NULL),
(16, '42.jpg', 6, NULL, NULL),
(17, '44.jpg', 7, NULL, NULL),
(18, '31.jpg', 6, NULL, NULL),
(19, '23.jpg', 7, NULL, NULL),
(20, '11.jpg', 7, NULL, NULL),
(21, '12.jpg', 8, NULL, NULL),
(22, '22.jpg', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kitchens`
--

INSERT INTO `kitchens` (`id`, `name`, `description`) VALUES
(1, 'One Kitchen', 'Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'),
(2, 'Second Kitchen', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor.'),
(3, 'three Kitchen', 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'),
(4, 'fourth kitchen', 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.'),
(5, 'fifth kichen', 'Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'),
(6, 'sixth chenkit', 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue.'),
(7, 'seventh kitchen', 'Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue.'),
(8, 'Eight Kitchen', 'Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customers1_idx` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`) VALUES
(1, NULL, NULL),
(2, 1, NULL),
(3, 1, NULL),
(4, 1, NULL),
(5, 1, NULL),
(6, 1, NULL),
(7, 1, NULL),
(8, 8, NULL),
(9, NULL, NULL),
(11, 1, '0000-00-00'),
(12, NULL, '0000-00-00'),
(13, NULL, '0000-00-00'),
(14, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_items_orders1_idx` (`order_id`),
  KEY `fk_order_items_products1_idx` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `order_id`, `product_id`, `height`, `width`, `depth`) VALUES
(2, 8, 13, 8, 10, 20, 30),
(3, 8, 14, 8, 10, 20, 30);

-- --------------------------------------------------------

--
-- Table structure for table `order_items_range_values`
--

CREATE TABLE `order_items_range_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_item_id` int(11) NOT NULL,
  `range_value_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_finish_types_order_items_order_items1_idx` (`order_item_id`),
  KEY `fk_finish_types_order_items_finish_types1_idx` (`range_value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_items_range_values`
--

INSERT INTO `order_items_range_values` (`id`, `order_item_id`, `range_value_id`) VALUES
(1, 2, 4),
(2, 3, 2),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `price` decimal(7,2) DEFAULT '0.00',
  `discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `discount`) VALUES
(1, 'cabinet', 'awesome cabinet', 500.00, NULL),
(8, 'Test', '123', 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_range_values`
--

CREATE TABLE `products_range_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `range_value_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_finishes_products_products1_idx` (`product_id`),
  KEY `fk_finishes_products_finish_types1_idx` (`range_value_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `products_range_values`
--

INSERT INTO `products_range_values` (`id`, `product_id`, `range_value_id`) VALUES
(15, 1, 4),
(16, 1, 5),
(17, 1, 2),
(22, 8, 2),
(23, 8, 3),
(24, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `range_types`
--

CREATE TABLE `range_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `range_types`
--

INSERT INTO `range_types` (`id`, `name`) VALUES
(1, 'Finish'),
(2, 'Hardware Grade');

-- --------------------------------------------------------

--
-- Table structure for table `range_values`
--

CREATE TABLE `range_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `range_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_finish_types_finishes1_idx` (`range_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `range_values`
--

INSERT INTO `range_values` (`id`, `name`, `range_type_id`) VALUES
(1, 'Paint', 1),
(2, 'Melamine', 1),
(3, 'Stainless Steel', 1),
(4, 'Standard', 2),
(5, 'Premium', 2);

-- --------------------------------------------------------

--
-- Table structure for table `standard_dimensions`
--

CREATE TABLE `standard_dimensions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_standard_dimensions_products1_idx` (`products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `standard_dimensions`
--

INSERT INTO `standard_dimensions` (`id`, `description`, `products_id`) VALUES
(1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext,
  `kitchen_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_testimonials_kitchens1_idx` (`kitchen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `description`, `kitchen_id`) VALUES
(1, 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue.', 1),
(2, 'Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.', 2),
(3, 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum.', 3),
(4, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.', 4),
(5, 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.', 5),
(6, 'Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\rEtiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur.', 6),
(7, 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec id elit non mi porta gravida at eget metus.', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_users_group1` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group_id`, `created`, `modified`, `approved`) VALUES
(1, 'admin', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 1, '2012-10-15 08:57:01', '2012-10-15 08:57:01', 1),
(2, 'admin2', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 1, '2012-10-15 09:14:29', '2012-10-15 09:14:29', 0),
(5, 'cust2', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 09:16:49', '2012-10-15 09:16:49', 1),
(6, 'customeruser', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 09:27:26', '2012-10-15 09:27:26', 1),
(7, 'customerwithoutlogin', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 09:27:55', '2012-10-15 09:27:55', 0),
(8, 'customer10', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 16:44:29', '2012-10-15 16:44:29', 0),
(9, 'firstcustomer', 'd33fd9b28f3c36a93ff856f73bbfc09c33d2c97d', 2, '2012-11-15 11:09:06', '2012-11-15 11:09:06', 0),
(10, 'newUser', 'd33fd9b28f3c36a93ff856f73bbfc09c33d2c97d', 2, '2012-11-15 16:08:05', '2012-11-15 16:08:05', 1),
(12, 'aosunthoeau', '16138e307f8ec87397254d1accf8252aca260b79', 2, '2012-11-15 16:59:09', '2012-11-15 16:59:09', 1),
(13, 'customer', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-12-02 07:33:48', '2012-12-02 07:33:48', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `criteria_values`
--
ALTER TABLE `criteria_values`
  ADD CONSTRAINT `fk_substyles_styles` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `criteria_values_kitchens`
--
ALTER TABLE `criteria_values_kitchens`
  ADD CONSTRAINT `fk_kitchens_subcriterias_subcriterias1` FOREIGN KEY (`criteria_value_id`) REFERENCES `criteria_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kitchens_subcriterias_kitchens1` FOREIGN KEY (`kitchen_id`) REFERENCES `kitchens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `criteria_values_products`
--
ALTER TABLE `criteria_values_products`
  ADD CONSTRAINT `fk_criteria_values_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_criteria_values_products_criteria_values1` FOREIGN KEY (`criteria_value_id`) REFERENCES `criteria_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_customer_type1` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD CONSTRAINT `fk_dimension_dimension_type1` FOREIGN KEY (`dimension_type_id`) REFERENCES `dimension_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dimensions_products`
--
ALTER TABLE `dimensions_products`
  ADD CONSTRAINT `fk_dimensions_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dimensions_products_dimensions1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `homepage_images`
--
ALTER TABLE `homepage_images`
  ADD CONSTRAINT `fk_homepage_images_images1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_kitchens1` FOREIGN KEY (`kitchen_id`) REFERENCES `kitchens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_images_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_items_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_items_range_values`
--
ALTER TABLE `order_items_range_values`
  ADD CONSTRAINT `fk_finish_types_order_items_order_items1` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_finish_types_order_items_finish_types1` FOREIGN KEY (`range_value_id`) REFERENCES `range_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_range_values`
--
ALTER TABLE `products_range_values`
  ADD CONSTRAINT `fk_finishes_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_finishes_products_finish_types1` FOREIGN KEY (`range_value_id`) REFERENCES `range_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `range_values`
--
ALTER TABLE `range_values`
  ADD CONSTRAINT `fk_finish_types_finishes1` FOREIGN KEY (`range_type_id`) REFERENCES `range_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `standard_dimensions`
--
ALTER TABLE `standard_dimensions`
  ADD CONSTRAINT `fk_standard_dimensions_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `fk_testimonials_kitchens1` FOREIGN KEY (`kitchen_id`) REFERENCES `kitchens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_group1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
