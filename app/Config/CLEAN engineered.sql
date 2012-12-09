-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2012 at 01:53 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 290),
(2, 1, NULL, NULL, 'Administrators', 2, 5),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 1, NULL, NULL, 'CriteriaValues', 6, 17),
(5, 4, NULL, NULL, 'index', 7, 8),
(6, 4, NULL, NULL, 'view', 9, 10),
(7, 4, NULL, NULL, 'add', 11, 12),
(8, 4, NULL, NULL, 'edit', 13, 14),
(9, 4, NULL, NULL, 'delete', 15, 16),
(10, 1, NULL, NULL, 'CriteriaValuesKitchens', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'CriteriaValuesProducts', 30, 41),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 1, NULL, NULL, 'Criterias', 42, 53),
(23, 22, NULL, NULL, 'index', 43, 44),
(24, 22, NULL, NULL, 'view', 45, 46),
(25, 22, NULL, NULL, 'add', 47, 48),
(26, 22, NULL, NULL, 'edit', 49, 50),
(27, 22, NULL, NULL, 'delete', 51, 52),
(28, 1, NULL, NULL, 'CustomerTypes', 54, 65),
(29, 28, NULL, NULL, 'index', 55, 56),
(30, 28, NULL, NULL, 'view', 57, 58),
(31, 28, NULL, NULL, 'add', 59, 60),
(32, 28, NULL, NULL, 'edit', 61, 62),
(33, 28, NULL, NULL, 'delete', 63, 64),
(34, 1, NULL, NULL, 'Customers', 66, 79),
(35, 34, NULL, NULL, 'index', 67, 68),
(36, 34, NULL, NULL, 'approve', 69, 70),
(37, 34, NULL, NULL, 'view', 71, 72),
(38, 34, NULL, NULL, 'add', 73, 74),
(39, 34, NULL, NULL, 'edit', 75, 76),
(40, 34, NULL, NULL, 'delete', 77, 78),
(41, 1, NULL, NULL, 'Discounts', 80, 91),
(42, 41, NULL, NULL, 'index', 81, 82),
(43, 41, NULL, NULL, 'view', 83, 84),
(44, 41, NULL, NULL, 'add', 85, 86),
(45, 41, NULL, NULL, 'edit', 87, 88),
(46, 41, NULL, NULL, 'delete', 89, 90),
(47, 1, NULL, NULL, 'EcSettings', 92, 103),
(48, 47, NULL, NULL, 'index', 93, 94),
(49, 47, NULL, NULL, 'view', 95, 96),
(50, 47, NULL, NULL, 'add', 97, 98),
(51, 47, NULL, NULL, 'edit', 99, 100),
(52, 47, NULL, NULL, 'delete', 101, 102),
(53, 1, NULL, NULL, 'Enquiries', 104, 115),
(54, 53, NULL, NULL, 'index', 105, 106),
(55, 53, NULL, NULL, 'view', 107, 108),
(56, 53, NULL, NULL, 'add', 109, 110),
(57, 53, NULL, NULL, 'edit', 111, 112),
(58, 53, NULL, NULL, 'delete', 113, 114),
(59, 1, NULL, NULL, 'FinishTypes', 116, 117),
(60, 1, NULL, NULL, 'Finishes', 118, 129),
(61, 60, NULL, NULL, 'index', 119, 120),
(62, 60, NULL, NULL, 'view', 121, 122),
(63, 60, NULL, NULL, 'add', 123, 124),
(64, 60, NULL, NULL, 'edit', 125, 126),
(65, 60, NULL, NULL, 'delete', 127, 128),
(66, 1, NULL, NULL, 'Groups', 130, 141),
(67, 66, NULL, NULL, 'index', 131, 132),
(68, 66, NULL, NULL, 'view', 133, 134),
(69, 66, NULL, NULL, 'add', 135, 136),
(70, 66, NULL, NULL, 'edit', 137, 138),
(71, 66, NULL, NULL, 'delete', 139, 140),
(72, 1, NULL, NULL, 'Homepageimages', 142, 147),
(73, 72, NULL, NULL, 'index', 143, 144),
(74, 72, NULL, NULL, 'add', 145, 146),
(75, 1, NULL, NULL, 'Images', 148, 159),
(76, 75, NULL, NULL, 'index', 149, 150),
(77, 75, NULL, NULL, 'view', 151, 152),
(78, 75, NULL, NULL, 'add', 153, 154),
(79, 75, NULL, NULL, 'delete', 155, 156),
(80, 75, NULL, NULL, 'add_ajax', 157, 158),
(81, 1, NULL, NULL, 'Kitchens', 160, 173),
(82, 81, NULL, NULL, 'index', 161, 162),
(83, 81, NULL, NULL, 'view', 163, 164),
(84, 81, NULL, NULL, 'add', 165, 166),
(85, 81, NULL, NULL, 'edit', 167, 168),
(86, 81, NULL, NULL, 'delete', 169, 170),
(87, 81, NULL, NULL, 'fill_missing_criteria', 171, 172),
(88, 1, NULL, NULL, 'OrderItems', 174, 185),
(89, 88, NULL, NULL, 'index', 175, 176),
(90, 88, NULL, NULL, 'view', 177, 178),
(91, 88, NULL, NULL, 'add', 179, 180),
(92, 88, NULL, NULL, 'edit', 181, 182),
(93, 88, NULL, NULL, 'delete', 183, 184),
(94, 1, NULL, NULL, 'Orders', 186, 197),
(95, 94, NULL, NULL, 'index', 187, 188),
(96, 94, NULL, NULL, 'view', 189, 190),
(97, 94, NULL, NULL, 'add', 191, 192),
(98, 94, NULL, NULL, 'edit', 193, 194),
(99, 94, NULL, NULL, 'delete', 195, 196),
(100, 1, NULL, NULL, 'Pages', 198, 201),
(101, 100, NULL, NULL, 'display', 199, 200),
(102, 1, NULL, NULL, 'Products', 202, 215),
(103, 102, NULL, NULL, 'index', 203, 204),
(104, 102, NULL, NULL, 'view', 205, 206),
(105, 102, NULL, NULL, 'add', 207, 208),
(106, 102, NULL, NULL, 'edit', 209, 210),
(107, 102, NULL, NULL, 'delete', 211, 212),
(108, 102, NULL, NULL, 'fill_missing_criteria', 213, 214),
(109, 1, NULL, NULL, 'RangeTypes', 216, 227),
(110, 109, NULL, NULL, 'index', 217, 218),
(111, 109, NULL, NULL, 'view', 219, 220),
(112, 109, NULL, NULL, 'add', 221, 222),
(113, 109, NULL, NULL, 'edit', 223, 224),
(114, 109, NULL, NULL, 'delete', 225, 226),
(115, 1, NULL, NULL, 'RangeValues', 228, 239),
(116, 115, NULL, NULL, 'index', 229, 230),
(117, 115, NULL, NULL, 'view', 231, 232),
(118, 115, NULL, NULL, 'add', 233, 234),
(119, 115, NULL, NULL, 'edit', 235, 236),
(120, 115, NULL, NULL, 'delete', 237, 238),
(121, 1, NULL, NULL, 'Testimonials', 240, 251),
(122, 121, NULL, NULL, 'index', 241, 242),
(123, 121, NULL, NULL, 'view', 243, 244),
(124, 121, NULL, NULL, 'add', 245, 246),
(125, 121, NULL, NULL, 'edit', 247, 248),
(126, 121, NULL, NULL, 'delete', 249, 250),
(127, 1, NULL, NULL, 'Users', 252, 269),
(128, 127, NULL, NULL, 'index', 253, 254),
(129, 127, NULL, NULL, 'view', 255, 256),
(130, 127, NULL, NULL, 'add', 257, 258),
(131, 127, NULL, NULL, 'edit', 259, 260),
(132, 127, NULL, NULL, 'delete', 261, 262),
(133, 127, NULL, NULL, 'login', 263, 264),
(134, 127, NULL, NULL, 'logout', 265, 266),
(135, 127, NULL, NULL, 'initdb', 267, 268),
(136, 1, NULL, NULL, 'Visitors', 270, 287),
(137, 136, NULL, NULL, 'index', 271, 272),
(138, 136, NULL, NULL, 'gallery', 273, 274),
(139, 136, NULL, NULL, 'products', 275, 276),
(140, 136, NULL, NULL, 'cart_add', 277, 278),
(141, 136, NULL, NULL, 'cart_list', 279, 280),
(142, 136, NULL, NULL, 'testimonials', 281, 282),
(143, 136, NULL, NULL, 'about_us', 283, 284),
(144, 136, NULL, NULL, 'contact_us', 285, 286),
(145, 1, NULL, NULL, 'AclExtras', 288, 289);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, 'Administrators', 1, 4),
(2, NULL, 'Group', 2, 'Customers', 5, 6),
(3, 1, 'User', 42, 'admin', 2, 3);

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
(3, 2, 136, '1', '1', '1', '1'),
(4, 2, 133, '1', '1', '1', '1'),
(5, 2, 134, '1', '1', '1', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` text,
  `phone` varchar(45) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `customer_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customers_customer_type1_idx` (`customer_type_id`),
  KEY `fk_customers_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'Width'),
(2, 'Height'),
(3, 'Depth');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `priority` decimal(6,3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customers1_idx` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `priority` decimal(6,3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `range_types`
--

CREATE TABLE `range_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group_id`, `created`, `modified`, `approved`) VALUES
(42, 'admin', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 1, '2012-12-09 13:49:58', '2012-12-09 13:49:58', 1);

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
  ADD CONSTRAINT `fk_kitchens_subcriterias_kitchens1` FOREIGN KEY (`kitchen_id`) REFERENCES `kitchens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kitchens_subcriterias_subcriterias1` FOREIGN KEY (`criteria_value_id`) REFERENCES `criteria_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `criteria_values_products`
--
ALTER TABLE `criteria_values_products`
  ADD CONSTRAINT `fk_criteria_values_products_criteria_values1` FOREIGN KEY (`criteria_value_id`) REFERENCES `criteria_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_criteria_values_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_dimensions_products_dimensions1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dimensions_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_finish_types_order_items_finish_types1` FOREIGN KEY (`range_value_id`) REFERENCES `range_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_finish_types_order_items_order_items1` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_range_values`
--
ALTER TABLE `products_range_values`
  ADD CONSTRAINT `fk_finishes_products_finish_types1` FOREIGN KEY (`range_value_id`) REFERENCES `range_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_finishes_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `range_values`
--
ALTER TABLE `range_values`
  ADD CONSTRAINT `fk_finish_types_finishes1` FOREIGN KEY (`range_type_id`) REFERENCES `range_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
