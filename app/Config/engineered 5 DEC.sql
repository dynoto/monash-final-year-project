-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 10:37 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 292),
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
(135, 88, NULL, NULL, 'make_order', 195, 196),
(136, 1, NULL, NULL, 'RangeTypes', 268, 279),
(137, 136, NULL, NULL, 'index', 269, 270),
(138, 136, NULL, NULL, 'view', 271, 272),
(139, 136, NULL, NULL, 'add', 273, 274),
(140, 136, NULL, NULL, 'edit', 275, 276),
(141, 136, NULL, NULL, 'delete', 277, 278),
(142, 1, NULL, NULL, 'RangeValues', 280, 291),
(143, 142, NULL, NULL, 'index', 281, 282),
(144, 142, NULL, NULL, 'view', 283, 284),
(145, 142, NULL, NULL, 'add', 285, 286),
(146, 142, NULL, NULL, 'edit', 287, 288),
(147, 142, NULL, NULL, 'delete', 289, 290);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 8),
(2, NULL, 'Group', 2, NULL, 9, 32),
(3, 1, 'User', 1, NULL, 2, 3),
(4, 1, 'User', 2, NULL, 4, 5),
(5, 2, 'User', 3, NULL, 10, 11),
(6, 2, 'User', 5, NULL, 12, 13),
(7, 2, 'User', 6, NULL, 14, 15),
(8, 2, 'User', 7, NULL, 16, 17),
(9, 2, 'User', 8, NULL, 18, 19),
(10, 2, 'User', 9, NULL, 20, 21),
(11, 2, 'User', 10, NULL, 22, 23),
(12, 2, 'User', 12, NULL, 24, 25),
(13, 1, 'User', 13, NULL, 26, 27),
(14, 2, 'User', 14, NULL, 28, 29),
(15, 2, 'User', 15, NULL, 30, 31),
(16, 1, 'User', 20, 'aaa', 6, 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `kitchen`, `product`) VALUES
(1, 'Finish', 1, 0),
(2, 'Colour', 1, 0),
(3, 'Type', 1, 0),
(4, 'Material', 1, 0),
(7, 'Cabinet', 0, 1),
(8, 'Accesory', 0, 1);

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

--
-- Dumping data for table `criteria_values`
--

INSERT INTO `criteria_values` (`criteria_id`, `id`, `name`) VALUES
(1, 1, 'glossyyyyyyy'),
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
(7, 21, 'Door'),
(7, 22, 'Body'),
(7, 23, 'Feet'),
(8, 25, 'Chair'),
(8, 26, 'Table Mat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `criteria_values_kitchens`
--

INSERT INTO `criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES
(5, 2, 2),
(9, 3, 3),
(10, 3, 6),
(11, 3, 9),
(12, 3, 13),
(13, 4, 1),
(14, 4, 6),
(15, 4, 10),
(16, 4, 14),
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
(32, 8, 12),
(39, 1, 1),
(47, 2, 12),
(48, 3, 13),
(49, 4, 14),
(50, 6, 11),
(51, 7, 13),
(52, 8, 12),
(54, 2, 12),
(55, 3, 13),
(56, 4, 14),
(57, 6, 11),
(58, 7, 13),
(59, 8, 12),
(78, 1, 3),
(79, 2, 1),
(80, 2, 6),
(81, 2, 7),
(82, 1, 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `criteria_values_products`
--

INSERT INTO `criteria_values_products` (`id`, `product_id`, `criteria_value_id`) VALUES
(12, 14, 22),
(13, 14, 23);

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
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customers_customer_type1_idx` (`customer_type_id`),
  KEY `fk_customers_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `discount`, `customer_type_id`, `user_id`) VALUES
(1, 'cust1 full name', 'cust@omer.com', 'something very very long..bla bla bla bal ab ', '2873829479234', NULL, 2, 5),
(2, 'customer33', 'cau@field.com', 'oansetuhaotnueanstuh', '12324235325', NULL, 1, 6),
(3, 'ahahahah', 'hahahaha', 'hahahaha', '340958439058', NULL, NULL, 7),
(4, 'customer10', 'customer10@email.com', 'my house', '123456', NULL, NULL, 8),
(5, 'DAVID TJOKROAMINOTO', 'dynamic.dante@gmail.com', '88 park st melbourne 3000', '0486795739333', NULL, NULL, 9),
(6, 'David Tjokroaminoto', 'haha@gmail.com', 'test', '2345890', NULL, NULL, NULL),
(7, 'SAONETUHAOTNESUH', 'ASEUHTNOEAUH', 'SOAUHTOSANEUH', '34L5G4C5G43R5', NULL, NULL, NULL),
(8, 'a', 'a', 'a', 'a', NULL, NULL, NULL),
(9, 'DR. EVIL', 'DR@EVIL.COM', 'MOUNT DOOM ', '666', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `dimension_type_id`, `min`, `max`, `increment`, `default`) VALUES
(1, 1, 3, 114, 2, 113),
(2, 2, 10, 100, 11, 77),
(3, 3, 95, 115, 12, 99),
(4, 1, 40, 1000, 40, NULL),
(5, 2, 25, 525, 25, NULL),
(6, 3, 50, 150, 10, NULL),
(16, 1, 0, 0, 0, 10),
(17, 2, 0, 0, 0, 20),
(18, 3, 0, 0, 0, 30),
(22, 1, 0, 0, 0, 0),
(23, 2, 0, 0, 0, 0),
(24, 3, 0, 0, 0, 0),
(25, 1, 0, 0, 0, 0),
(26, 2, 0, 0, 0, 0),
(27, 3, 0, 0, 0, 0),
(28, 1, 0, 0, 0, 0),
(29, 2, 0, 0, 0, 0),
(30, 3, 0, 0, 0, 0),
(31, 1, 0, 0, 0, 0),
(32, 2, 0, 0, 0, 0),
(33, 3, 0, 0, 0, 0),
(34, 1, NULL, NULL, NULL, 1),
(35, 2, NULL, NULL, NULL, -3),
(36, 3, NULL, NULL, NULL, -3),
(37, 1, NULL, NULL, NULL, 33),
(38, 2, NULL, NULL, NULL, 1),
(39, 3, NULL, NULL, NULL, 44),
(40, 1, NULL, NULL, NULL, 33),
(41, 2, NULL, NULL, NULL, 1),
(42, 3, NULL, NULL, NULL, 44);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `dimensions_products`
--

INSERT INTO `dimensions_products` (`id`, `product_id`, `dimension_id`) VALUES
(28, 8, 16),
(29, 8, 17),
(30, 8, 18),
(37, 10, 22),
(38, 10, 23),
(39, 10, 24),
(40, 11, 25),
(41, 11, 26),
(42, 11, 27),
(43, 12, 28),
(44, 12, 29),
(45, 12, 30),
(46, 13, 31),
(47, 13, 32),
(48, 13, 33),
(49, 14, 34),
(50, 14, 35),
(51, 14, 36),
(52, 15, 37),
(53, 15, 38),
(54, 15, 39),
(55, 16, 40),
(56, 16, 41),
(57, 16, 42),
(58, 1, 1),
(59, 1, 2),
(60, 1, 3);

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

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `telephone`, `message`) VALUES
(0, 'david', '-', '22', 'aaa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `homepage_images`
--

INSERT INTO `homepage_images` (`id`, `image_id`, `position`) VALUES
(3, 5, 5),
(4, 11, 2),
(5, 12, 3),
(6, 3, 4),
(7, 17, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
(16, '42.jpg', 6, NULL, NULL),
(17, '44.jpg', 7, NULL, NULL),
(18, '31.jpg', 6, NULL, NULL),
(19, '23.jpg', 7, NULL, NULL),
(20, '11.jpg', 7, NULL, NULL),
(21, '12.jpg', 8, NULL, NULL),
(22, '22.jpg', 8, NULL, NULL),
(23, 'be491878d58a3d8e3ac315cfd7d5b2cd.jpg', NULL, 13, NULL);

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
(1, 'abcd', 'efg'),
(2, 'Second Kitchen', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor.'),
(3, 'three Kitchen', 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'),
(4, 'fourth kitchen', 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.'),
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
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customers1_idx` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`) VALUES
(13, NULL, '0000-00-00 00:00:00'),
(14, NULL, '0000-00-00 00:00:00'),
(15, NULL, '0000-00-00 00:00:00'),
(16, NULL, '0000-00-00 00:00:00'),
(17, NULL, '0000-00-00 00:00:00'),
(18, NULL, '2012-01-01 00:00:00'),
(19, NULL, '2012-01-01 00:00:00'),
(20, 8, '2012-01-01 00:00:00'),
(21, 8, '2012-01-01 00:00:00'),
(22, 8, '0000-00-00 00:00:00'),
(23, 8, '2012-12-30 00:00:00'),
(24, 8, '2012-12-02 13:47:29'),
(25, 8, '2012-12-02 13:57:41'),
(26, 8, '2012-12-02 14:17:33'),
(27, NULL, '2012-12-02 14:20:34'),
(28, NULL, '2012-12-02 14:20:59'),
(29, NULL, '2012-12-02 14:21:42');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `order_id`, `product_id`, `height`, `width`, `depth`) VALUES
(2, 8, 13, 8, 10, 20, 30),
(3, 8, 14, 8, 10, 20, 30),
(4, 10, 15, 1, 10, 30, 999),
(5, 30, 15, 8, 10, 20, 30),
(6, 39, 15, 1, 10, 999, 999),
(7, 444, 16, 8, 10, 20, 30),
(8, 1, 16, 1, 10, 3, 3),
(9, 3, 17, 1, 10, 999, 999),
(10, 3, 18, 1, 10, 999, 999),
(11, 3, 19, 1, 10, 999, 999),
(12, 3, 20, 1, 10, 999, 999),
(13, 3, 21, 1, 10, 999, 999),
(14, 3, 22, 1, 10, 999, 999),
(15, 3, 23, 1, 10, 999, 999),
(16, 3, 24, 1, 10, 999, 999),
(17, 3, 25, 1, 10, 999, 999),
(18, 1, 28, 1, 10, 999, 999),
(19, 1, 29, 1, 10, 999, 999);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `order_items_range_values`
--

INSERT INTO `order_items_range_values` (`id`, `order_item_id`, `range_value_id`) VALUES
(1, 2, 4),
(2, 3, 2),
(3, 3, 4),
(4, 4, 2),
(5, 4, 4),
(6, 5, 2),
(7, 5, 4),
(8, 6, 2),
(9, 6, 4),
(10, 7, 2),
(11, 7, 4),
(12, 8, 2),
(13, 8, 4),
(14, 9, 2),
(15, 9, 4),
(16, 10, 2),
(17, 10, 4),
(18, 11, 2),
(19, 11, 4),
(20, 12, 2),
(21, 12, 4),
(22, 13, 2),
(23, 13, 4),
(24, 14, 2),
(25, 14, 4),
(26, 15, 2),
(27, 15, 4),
(28, 16, 2),
(29, 16, 4),
(30, 17, 2),
(31, 17, 4),
(38, 18, 2),
(39, 18, 4),
(40, 19, 2),
(41, 19, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `discount`) VALUES
(1, 'cabinet', 'awesome cabinet', 500.00, NULL),
(8, 'Test', '123', 0.00, NULL),
(10, 'producauaoeu', 'aeuoeueou', 0.00, NULL),
(11, 'producauaoeu', 'aeuoeueou', 0.00, NULL),
(12, 'producauaoeu', 'aeuoeueou', 0.00, NULL),
(13, 'producauaoeu', 'aeuoeueou', 0.00, NULL),
(14, '12321313@@', '123213', 0.00, NULL),
(15, 'ouaoe3', '', 0.00, NULL),
(16, 'ouaoe3', '', 0.00, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `products_range_values`
--

INSERT INTO `products_range_values` (`id`, `product_id`, `range_value_id`) VALUES
(15, 1, 4),
(16, 1, 5),
(17, 1, 2),
(22, 8, 2),
(24, 8, 4),
(26, 10, 4),
(27, 11, 4),
(28, 12, 4),
(29, 13, 4),
(30, 1, 11),
(31, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `range_types`
--

CREATE TABLE `range_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `range_types`
--

INSERT INTO `range_types` (`id`, `name`) VALUES
(1, 'Finishesos'),
(2, 'Hardware Grade3'),
(3, 'NewRangeTypenstnhtnh');

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

--
-- Dumping data for table `range_values`
--

INSERT INTO `range_values` (`id`, `name`, `range_type_id`) VALUES
(2, 'Melamine', 1),
(4, 'Standard', 2),
(5, 'Premium', 2),
(8, 'aouaouoeu', 1),
(10, 'test test testaouoauoeuoeau', 3),
(11, 'test test test', 3),
(12, 'new new new', 3);

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
(1, '', 1),
(2, 'Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.', 2),
(3, 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum.', 3),
(4, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.', 4),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group_id`, `created`, `modified`, `approved`) VALUES
(1, 'admin', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 1, '2012-10-15 08:57:01', '2012-12-05 01:56:49', 1),
(5, 'cust2', '24d73da9f87f6fde6e2d1fb4422138d7a26fa8e6', 2, '2012-10-15 09:16:49', '2012-12-05 03:25:51', 1),
(6, 'customeruser', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 09:27:26', '2012-10-15 09:27:26', 1),
(7, 'customerwithoutlogin', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 09:27:55', '2012-10-15 09:27:55', 0),
(8, 'customer10', 'd327def90b231fc4935ff6a1c45ea4ab815dd0ff', 2, '2012-10-15 16:44:29', '2012-10-15 16:44:29', 0),
(9, 'firstcustomer', 'd33fd9b28f3c36a93ff856f73bbfc09c33d2c97d', 2, '2012-11-15 11:09:06', '2012-11-15 11:09:06', 0),
(13, 'customer', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 1, '2012-12-02 07:33:48', '2012-12-05 06:54:18', 1),
(16, 'david', 'a44d7374d91f839c3765ea752ba997c8d0b0655b', 1, '2012-12-05 03:26:52', '2012-12-05 03:26:52', 1),
(17, 'asunhoentueuh', '24d73da9f87f6fde6e2d1fb4422138d7a26fa8e6', 2, '2012-12-05 03:27:32', '2012-12-05 03:27:32', 1),
(18, 'admin-2', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, NULL, NULL, 1),
(19, 'newadmin', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 1, '2012-12-05 06:58:10', '2012-12-05 06:58:10', 1),
(20, 'aaa', '7348f5d62335ba3cbc769dbb045009aa738e2406', 1, '2012-12-05 07:09:07', '2012-12-05 07:09:07', 1);

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
