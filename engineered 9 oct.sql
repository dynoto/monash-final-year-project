-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2012 at 06:16 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(3, NULL, 'Group', 4, NULL, 1, 10),
(4, NULL, 'Group', 5, NULL, 11, 14),
(7, 3, 'User', 8, NULL, 2, 3),
(8, 3, 'User', 10, NULL, 4, 5),
(9, 3, 'User', 13, NULL, 6, 7),
(10, 4, 'User', 15, NULL, 12, 13),
(11, 3, 'User', 16, NULL, 8, 9);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `type`) VALUES
(1, 'Finish', NULL),
(2, 'Colour', NULL),
(3, 'Type', NULL),
(4, 'Material', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(4, 15, 'Iron');

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `customer_type_id` int(11) NOT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customers_customer_type1_idx` (`customer_type_id`),
  KEY `fk_customers_discounts1_idx` (`discount_id`),
  KEY `fk_customers_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'retail'),
(2, 'wholesale');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(4, 'Administrators', '2012-10-10 06:41:55', '2012-10-11 15:42:57'),
(5, 'Customers', '2012-10-10 06:42:00', '2012-10-11 15:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `kitchen_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_kitchens1_idx` (`kitchen_id`),
  KEY `fk_images_products1_idx` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `kitchen_id`, `product_id`) VALUES
(1, '11.jpg', 1, NULL),
(2, '12.jpg', 1, NULL),
(3, '21.jpg', 2, NULL),
(4, '22.jpg', 2, NULL),
(5, '23.jpg', 2, NULL),
(6, '31.jpg', 3, NULL),
(7, '32.jpg', 3, NULL),
(8, '41.jpg', 4, NULL),
(9, '42.jpg', 4, NULL),
(10, '43.jpg', 4, NULL),
(11, '44.jpg', 4, NULL),
(12, '45.jpg', 4, NULL),
(13, '32.jpg', 5, NULL),
(14, '12.jpg', 5, NULL),
(15, '22.jpg', 5, NULL),
(16, '42.jpg', 6, NULL),
(17, '44.jpg', 7, NULL),
(18, '31.jpg', 6, NULL),
(19, '23.jpg', 7, NULL),
(20, '11.jpg', 7, NULL),
(21, '12.jpg', 8, NULL),
(22, '22.jpg', 8, NULL);

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
  `customer_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_customers1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders_product_submodels`
--

CREATE TABLE `orders_product_submodels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_submodel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_submodels_orders_orders1_idx` (`order_id`),
  KEY `fk_product_submodels_orders_product_submodels1_idx` (`product_submodel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_discounts1_idx` (`discount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_submodels`
--

CREATE TABLE `product_submodels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `criteria_value_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_criteria_values_products_products1_idx` (`product_id`),
  KEY `fk_criteria_values_products_criteria_values1_idx` (`criteria_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_users_group1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `group_id`, `created`, `modified`) VALUES
(8, 'user', '', 4, '2012-10-10 06:43:28', '2012-10-10 06:43:28'),
(10, 'user2', '5da635fb2f36bc8571a94f9048ccb50914b487a9', 4, '2012-10-10 06:50:03', '2012-10-10 06:50:03'),
(13, 'user3', '5da635fb2f36bc8571a94f9048ccb50914b487a9', 4, '2012-10-10 06:50:19', '2012-10-10 06:50:19'),
(15, 'user22', 'd33fd9b28f3c36a93ff856f73bbfc09c33d2c97d', 5, '2012-10-11 15:42:34', '2012-10-11 15:42:34'),
(16, 'admin', '129ba08f59a3ccf765267c1676feef7a84b8dc75', 4, '2012-10-11 15:43:15', '2012-10-11 15:43:15');

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
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_customer_type1` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_discounts1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `orders_product_submodels`
--
ALTER TABLE `orders_product_submodels`
  ADD CONSTRAINT `fk_product_submodels_orders_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_submodels_orders_product_submodels1` FOREIGN KEY (`product_submodel_id`) REFERENCES `product_submodels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_discounts1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_submodels`
--
ALTER TABLE `product_submodels`
  ADD CONSTRAINT `fk_criteria_values_products_criteria_values1` FOREIGN KEY (`criteria_value_id`) REFERENCES `criteria_values` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_criteria_values_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
