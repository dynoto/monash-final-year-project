SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`discounts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`discounts` (
  `id` INT NOT NULL ,
  `discount` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`products` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `discounts_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_products_discounts1_idx` (`discounts_id` ASC) ,
  CONSTRAINT `fk_products_discounts1`
    FOREIGN KEY (`discounts_id` )
    REFERENCES `fit-ie-s34a`.`discounts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`criterias`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`criterias` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `type` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`criteria_values`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`criteria_values` (
  `criteria_id` INT NOT NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_substyles_styles_idx` (`criteria_id` ASC) ,
  CONSTRAINT `fk_substyles_styles`
    FOREIGN KEY (`criteria_id` )
    REFERENCES `fit-ie-s34a`.`criterias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`kitchens`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`kitchens` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`images`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`images` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `kitchen_id` INT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_images_kitchens1_idx` (`kitchen_id` ASC) ,
  CONSTRAINT `fk_images_kitchens1`
    FOREIGN KEY (`kitchen_id` )
    REFERENCES `fit-ie-s34a`.`kitchens` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`customer_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`customer_types` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`customers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`customers` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `customer_type_id` INT NOT NULL ,
  `discounts_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_customers_customer_type1_idx` (`customer_type_id` ASC) ,
  INDEX `fk_customers_discounts1_idx` (`discounts_id` ASC) ,
  CONSTRAINT `fk_customers_customer_type1`
    FOREIGN KEY (`customer_type_id` )
    REFERENCES `fit-ie-s34a`.`customer_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customers_discounts1`
    FOREIGN KEY (`discounts_id` )
    REFERENCES `fit-ie-s34a`.`discounts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`orders`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`orders` (
  `id` INT NOT NULL ,
  `customers_id` INT NOT NULL ,
  `date` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_orders_customers1_idx` (`customers_id` ASC) ,
  CONSTRAINT `fk_orders_customers1`
    FOREIGN KEY (`customers_id` )
    REFERENCES `fit-ie-s34a`.`customers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`testimonials`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`testimonials` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` LONGTEXT NULL ,
  `kitchen_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_testimonials_kitchens1_idx` (`kitchen_id` ASC) ,
  CONSTRAINT `fk_testimonials_kitchens1`
    FOREIGN KEY (`kitchen_id` )
    REFERENCES `fit-ie-s34a`.`kitchens` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fit-ie-s34a`.`criteria_values_kitchens`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fit-ie-s34a`.`criteria_values_kitchens` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `kitchen_id` INT NOT NULL ,
  `criteria_value_id` INT NOT NULL ,
  INDEX `fk_kitchens_subcriterias_subcriterias1_idx` (`criteria_value_id` ASC) ,
  INDEX `fk_kitchens_subcriterias_kitchens1_idx` (`kitchen_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_kitchens_subcriterias_subcriterias1`
    FOREIGN KEY (`criteria_value_id` )
    REFERENCES `fit-ie-s34a`.`criteria_values` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kitchens_subcriterias_kitchens1`
    FOREIGN KEY (`kitchen_id` )
    REFERENCES `fit-ie-s34a`.`kitchens` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`criterias`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`criterias` (`id`, `name`, `type`) VALUES (1, 'Finish', NULL);
INSERT INTO `fit-ie-s34a`.`criterias` (`id`, `name`, `type`) VALUES (2, 'Colour', NULL);
INSERT INTO `fit-ie-s34a`.`criterias` (`id`, `name`, `type`) VALUES (3, 'Type', NULL);
INSERT INTO `fit-ie-s34a`.`criterias` (`id`, `name`, `type`) VALUES (4, 'Material', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`criteria_values`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (1, 1, 'glossy');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (1, 2, 'matte');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (1, 3, 'coarse');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (2, 4, 'black');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (2, 5, 'white');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (2, 6, 'blue');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (3, 7, 'Modern');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (3, 8, 'Contemporary');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (3, 9, 'Old School');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (3, 10, 'Vintage');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (4, 11, 'Aluminium');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (4, 12, 'Gold');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (4, 13, 'Wood');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (4, 14, 'Silver');
INSERT INTO `fit-ie-s34a`.`criteria_values` (`criteria_id`, `id`, `name`) VALUES (4, 15, 'Iron');

COMMIT;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`kitchens`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (1, 'One Kitchen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (2, 'Second Kitchen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (3, 'three Kitchen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (4, 'fourth kitchen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (5, 'fifth kichen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (6, 'sixth chenkit');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (7, 'seventh kitchen');
INSERT INTO `fit-ie-s34a`.`kitchens` (`id`, `name`) VALUES (8, 'Eight Kitchen');

COMMIT;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`images`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '11.jpg', 1);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '12.jpg', 1);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '21.jpg', 2);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '22.jpg', 2);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '23.jpg', 2);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '31.jpg', 3);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '32.jpg', 3);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '41.jpg', 4);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '42.jpg', 4);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '43.jpg', 4);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '44.jpg', 4);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '45.jpg', 4);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '32.jpg', 5);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '12.jpg', 5);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '22.jpg', 5);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '42.jpg', 6);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '44.jpg', 7);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '31.jpg', 6);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '23.jpg', 7);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '11.jpg', 7);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '12.jpg', 8);
INSERT INTO `fit-ie-s34a`.`images` (`id`, `name`, `kitchen_id`) VALUES (NULL, '22.jpg', 8);

COMMIT;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`testimonials`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`testimonials` (`id`, `description`, `kitchen_id`) VALUES (1, 'this is awesome chicken!', 3);
INSERT INTO `fit-ie-s34a`.`testimonials` (`id`, `description`, `kitchen_id`) VALUES (2, 'incomparable!', 7);

COMMIT;

-- -----------------------------------------------------
-- Data for table `fit-ie-s34a`.`criteria_values_kitchens`
-- -----------------------------------------------------
START TRANSACTION;
USE `fit-ie-s34a`;
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 1, 1);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 1, 4);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 1, 7);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 1, 11);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 2, 2);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 2, 5);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 2, 8);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 2, 12);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 3, 3);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 3, 6);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 3, 9);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 3, 13);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 4, 1);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 4, 6);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 4, 10);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 4, 14);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 5, 2);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 5, 5);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 5, 7);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 5, 15);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 6, 3);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 6, 4);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 6, 9);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 6, 11);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 7, 1);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 7, 5);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 7, 8);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 7, 13);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 8, 2);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 8, 4);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 8, 10);
INSERT INTO `fit-ie-s34a`.`criteria_values_kitchens` (`id`, `kitchen_id`, `criteria_value_id`) VALUES (NULL, 8, 12);

COMMIT;
