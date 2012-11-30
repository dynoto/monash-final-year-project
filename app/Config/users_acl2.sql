-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2012 at 05:01 PM
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

CREATE TABLE IF NOT EXISTS `acos` (
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

CREATE TABLE IF NOT EXISTS `aros` (
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

CREATE TABLE IF NOT EXISTS `aros_acos` (
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

-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(12, 'aosunthoeau', '16138e307f8ec87397254d1accf8252aca260b79', 2, '2012-11-15 16:59:09', '2012-11-15 16:59:09', 1);


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
(7, 'SAONETUHAOTNESUH', 'ASEUHTNOEAUH', 'SOAUHTOSANEUH', '34L5G4C5G43R5', NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `customer_types`
--

CREATE TABLE IF NOT EXISTS `customer_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_types`
--


-- --------------------------------------------------------

--
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_customer_type1` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_group1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
