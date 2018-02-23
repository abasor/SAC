-- MySQL Script generated by MySQL Workbench
-- Thu Feb 15 13:20:18 2018
-- prueba
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbsac` DEFAULT CHARACTER SET utf8 ;
USE `dbsac` ;

-- -----------------------------------------------------
-- Table `mydb`.`Indicadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Indicadores` (
  `rut` INT NOT NULL,
  `nombres` VARCHAR(100) NULL,
  `apPaterno` VARCHAR(45) NULL,
  `apMaterno` VARCHAR(45) NULL,
  `anyoIngreso` INT NULL,
  `codigoPlan` VARCHAR(45) NULL,
  `carrera` VARCHAR(45) NULL,
  `clase` VARCHAR(45) NULL,
  `a1a6` VARCHAR(45) NULL,
  `a7a12` VARCHAR(45) NULL,
  `tiempoAnt` VARCHAR(45) NULL,
  `tiempoR` VARCHAR(45) NULL,
  `mencion` VARCHAR(45) NULL,
  `condicion` VARCHAR(45) NULL,
  `r1a6` VARCHAR(45) NULL,
  `r7a10` VARCHAR(45) NULL,
  `utilizoCuarta` VARCHAR(45) NULL,
  `segSemCuarta` VARCHAR(45) NULL,
  `doblePermanencia` VARCHAR(45) NULL,
  `gratuidad` VARCHAR(45) NULL,
  PRIMARY KEY (`rut`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PlanNuevo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PlanNuevo` (
  `anyo` INT NULL,
  `rut` INT NOT NULL,
  `codigoAsignatura` VARCHAR(45) NOT NULL,
  `plan` VARCHAR(45) NULL,
  `mencion` VARCHAR(45) NULL,
  `nivel` VARCHAR(45) NULL,
  `descAsigRed` VARCHAR(45) NULL,
  `asigAprob` VARCHAR(45) NULL,
  `traslado` VARCHAR(45) NULL,
  PRIMARY KEY (`rut`, `codigoAsignatura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PlanAntiguo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PlanAntiguo` (
  `anyoIngreso` INT NULL,
  `carrera` VARCHAR(45) NULL,
  `rut` INT NOT NULL,
  `codigoPlan` VARCHAR(45) NULL,
  `nivel` VARCHAR(45) NULL,
  `codigoAsignatura` VARCHAR(45) NOT NULL,
  `nombreAsignatura` VARCHAR(45) NULL,
  `asigAprobadas` VARCHAR(45) NULL,
  `traslado` VARCHAR(45) NULL,
  PRIMARY KEY (`codigoAsignatura`, `rut`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;