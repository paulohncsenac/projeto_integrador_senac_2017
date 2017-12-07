-- MySQL Script generated by MySQL Workbench
-- Wed Dec  6 14:43:03 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ColdBeer
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ColdBeer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coldbeer` DEFAULT CHARACTER SET utf8 ;
USE `coldbeer` ;

-- -----------------------------------------------------
-- Table `ColdBeer`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coldbeer`.`produto` (
  `IdProd` BIGINT(20) NOT NULL,
  `NomeProd` VARCHAR(30) NOT NULL,
  `MarcaProd` VARCHAR(20) NOT NULL,
  `Unidade` INT NOT NULL,
  `Embalagem`  VARCHAR(30) NOT NULL,
  `Teor`VARCHAR(10) NOT NULL,
  `ML` INT NOT NULL,
  `PrecoUnitario` FLOAT NOT NULL,
  `Promocao` VARCHAR(45) NULL,
  `Categoria` VARCHAR(20) NOT NULL,
  `Estoque` INT NOT NULL,
  `imagens` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`IdProd`),
  UNIQUE INDEX `IdProd_UNIQUE` (`IdProd` ASC),
  UNIQUE INDEX `imagens_UNIQUE` (`imagens` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
