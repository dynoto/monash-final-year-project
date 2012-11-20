-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2012 at 05:35 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 194),
(2, 1, NULL, NULL, 'Administrators', 2, 7),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'homepage_manage', 5, 6),
(5, 1, NULL, NULL, 'CriteriaValues', 8, 19),
(6, 5, NULL, NULL, 'index', 9, 10),
(7, 5, NULL, NULL, 'view', 11, 12),
(8, 5, NULL, NULL, 'add', 13, 14),
(9, 5, NULL, NULL, 'edit', 15, 16),
(10, 5, NULL, NULL, 'delete', 17, 18),
(11, 1, NULL, NULL, 'CriteriaValuesKitchens', 20, 31),
(12, 11, NULL, NULL, 'index', 21, 22),
(13, 11, NULL, NULL, 'view', 23, 24),
(14, 11, NULL, NULL, 'add', 25, 26),
(15, 11, NULL, NULL, 'edit', 27, 28),
(16, 11, NULL, NULL, 'delete', 29, 30),
(17, 1, NULL, NULL, 'Criterias', 32, 43),
(18, 17, NULL, NULL, 'index', 33, 34),
(19, 17, NULL, NULL, 'view', 35, 36),
(20, 17, NULL, NULL, 'add', 37, 38),
(21, 17, NULL, NULL, 'edit', 39, 40),
(22, 17, NULL, NULL, 'delete', 41, 42),
(23, 1, NULL, NULL, 'CustomerTypes', 44, 55),
(24, 23, NULL, NULL, 'index', 45, 46),
(25, 23, NULL, NULL, 'view', 47, 48),
(26, 23, NULL, NULL, 'add', 49, 50),
(27, 23, NULL, NULL, 'edit', 51, 52),
(28, 23, NULL, NULL, 'delete', 53, 54),
(29, 1, NULL, NULL, 'Customers', 56, 69),
(30, 29, NULL, NULL, 'index', 57, 58),
(31, 29, NULL, NULL, 'view', 59, 60),
(32, 29, NULL, NULL, 'add', 61, 62),
(33, 29, NULL, NULL, 'edit', 63, 64),
(34, 29, NULL, NULL, 'delete', 65, 66),
(35, 1, NULL, NULL, 'Discounts', 70, 81),
(36, 35, NULL, NULL, 'index', 71, 72),
(37, 35, NULL, NULL, 'view', 73, 74),
(38, 35, NULL, NULL, 'add', 75, 76),
(39, 35, NULL, NULL, 'edit', 77, 78),
(40, 35, NULL, NULL, 'delete', 79, 80),
(41, 1, NULL, NULL, 'Groups', 82, 93),
(42, 41, NULL, NULL, 'index', 83, 84),
(43, 41, NULL, NULL, 'view', 85, 86),
(44, 41, NULL, NULL, 'add', 87, 88),
(45, 41, NULL, NULL, 'edit', 89, 90),
(46, 41, NULL, NULL, 'delete', 91, 92),
(47, 1, NULL, NULL, 'Images', 94, 105),
(48, 47, NULL, NULL, 'index', 95, 96),
(49, 47, NULL, NULL, 'view', 97, 98),
(50, 47, NULL, NULL, 'add', 99, 100),
(51, 47, NULL, NULL, 'delete', 101, 102),
(52, 47, NULL, NULL, 'add_ajax', 103, 104),
(53, 1, NULL, NULL, 'Kitchens', 106, 119),
(54, 53, NULL, NULL, 'index', 107, 108),
(55, 53, NULL, NULL, 'view', 109, 110),
(56, 53, NULL, NULL, 'add', 111, 112),
(57, 53, NULL, NULL, 'edit', 113, 114),
(58, 53, NULL, NULL, 'delete', 115, 116),
(59, 1, NULL, NULL, 'Orders', 120, 131),
(60, 59, NULL, NULL, 'index', 121, 122),
(61, 59, NULL, NULL, 'view', 123, 124),
(62, 59, NULL, NULL, 'add', 125, 126),
(63, 59, NULL, NULL, 'edit', 127, 128),
(64, 59, NULL, NULL, 'delete', 129, 130),
(65, 1, NULL, NULL, 'Pages', 132, 135),
(66, 65, NULL, NULL, 'display', 133, 134),
(67, 1, NULL, NULL, 'Products', 136, 147),
(68, 67, NULL, NULL, 'index', 137, 138),
(69, 67, NULL, NULL, 'view', 139, 140),
(70, 67, NULL, NULL, 'add', 141, 142),
(71, 67, NULL, NULL, 'edit', 143, 144),
(72, 67, NULL, NULL, 'delete', 145, 146),
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
(88, 1, NULL, NULL, 'Visitors', 178, 191),
(89, 88, NULL, NULL, 'index', 179, 180),
(90, 88, NULL, NULL, 'gallery', 181, 182),
(91, 88, NULL, NULL, 'products', 183, 184),
(92, 88, NULL, NULL, 'testimonials', 185, 186),
(93, 88, NULL, NULL, 'about_us', 187, 188),
(94, 88, NULL, NULL, 'contact_us', 189, 190),
(95, 1, NULL, NULL, 'AclExtras', 192, 193),
(96, 29, NULL, NULL, 'approve', 67, 68),
(97, 53, NULL, NULL, 'fill_missing_criteria', 117, 118);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 85, '1', '1', '1', '1'),
(4, 2, 86, '1', '1', '1', '1');

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
  `customer_type_id` int(11) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customers_customer_type1_idx` (`customer_type_id`),
  KEY `fk_customers_discounts1_idx` (`discount_id`),
  KEY `fk_customers_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `customer_type_id`, `discount_id`, `user_id`) VALUES
(1, 'cust1 full name', 'cust@omer.com', 'something very very long..bla bla bla bal ab ', '2873829479234', 2, 4, 5),
(2, 'customer33', 'cau@field.com', 'oansetuhaotnueanstuh', '12324235325', 1, 1, 6),
(3, 'ahahahah', 'hahahaha', 'hahahaha', '340958439058', NULL, NULL, 7),
(4, 'customer10', 'customer10@email.com', 'my house', '123456', NULL, NULL, 8),
(5, 'DAVID TJOKROAMINOTO', 'dynamic.dante@gmail.com', '88 park st melbourne 3000', '0486795739333', NULL, NULL, 9),
(6, 'David Tjokroaminoto', 'haha@gmail.com', 'test', '2345890', NULL, NULL, 10),
(7, 'SAONETUHAOTNESUH', 'ASEUHTNOEAUH', 'SOAUHTOSANEUH', '34L5G4C5G43R5', NULL, NULL, 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_customer_type1` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_discounts1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_group1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
