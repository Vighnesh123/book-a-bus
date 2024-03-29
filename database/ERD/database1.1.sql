SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bookabus
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bookabus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bookabus` ;

-- -----------------------------------------------------
-- Table `bookabus`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`customer` (
  `id` INT NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  `MI` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `birthday` DATE NOT NULL,
  `valid` VARCHAR(45) NOT NULL,
  `register_date` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`credit_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`credit_info` (
  `customer_id` INT NOT NULL,
  `card_number` VARCHAR(45) NOT NULL,
  `credit_provider` VARCHAR(45) NOT NULL,
  `expiration_date` DATE NOT NULL,
  INDEX `fk_credit_info_customer1_idx` (`customer_id` ASC),
  PRIMARY KEY (`customer_id`, `card_number`),
  CONSTRAINT `fk_credit_info_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `bookabus`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`loginfo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`loginfo` (
  `customer_id` INT NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  INDEX `fk_loginfo_user1_idx` (`customer_id` ASC),
  CONSTRAINT `fk_loginfo_user1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `bookabus`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`bus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`bus` (
  `id` INT NOT NULL,
  `plate_no` VARCHAR(7) NOT NULL,
  `seating_cap` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `condition` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`scheadule`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`scheadule` (
  `id` INT NOT NULL,
  `bus_id` INT NOT NULL,
  `destination` VARCHAR(45) NOT NULL,
  `station` VARCHAR(45) NOT NULL,
  `departure` TIME NOT NULL,
  `ETA` TIME NOT NULL,
  `date` DATE NOT NULL,
  `fare` DECIMAL(4,2) NOT NULL,
  `trip_status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_scheadule_bus1_idx` (`bus_id` ASC),
  CONSTRAINT `fk_scheadule_bus1`
    FOREIGN KEY (`bus_id`)
    REFERENCES `bookabus`.`bus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`booking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`booking` (
  `id` INT NOT NULL,
  `scheadule_id` INT NOT NULL,
  `customer_id` INT NOT NULL,
  `booking_status` VARCHAR(10) NOT NULL,
  INDEX `fk_booking_scheadule1_idx` (`scheadule_id` ASC),
  INDEX `fk_booking_customer1_idx` (`customer_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_booking_scheadule1`
    FOREIGN KEY (`scheadule_id`)
    REFERENCES `bookabus`.`scheadule` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_booking_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `bookabus`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`seat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`seat` (
  `seat_code` VARCHAR(4) NOT NULL,
  `booking_id` INT NOT NULL,
  INDEX `fk_seat_booking1_idx` (`booking_id` ASC),
  CONSTRAINT `fk_seat_booking1`
    FOREIGN KEY (`booking_id`)
    REFERENCES `bookabus`.`booking` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookabus`.`reward`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookabus`.`reward` (
  `id` INT NOT NULL,
  `customer_id` INT NOT NULL,
  `point` INT NOT NULL,
  `action` VARCHAR(10) NOT NULL,
  `description` TINYTEXT NOT NULL,
  `date` DATE NOT NULL,
  INDEX `fk_reward_customer1_idx` (`customer_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_reward_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `bookabus`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
