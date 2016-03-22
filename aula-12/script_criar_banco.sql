-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ingresso
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ingresso
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ingresso` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ingresso` ;

-- -----------------------------------------------------
-- Table `ingresso`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ingresso`.`usuarios` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NULL,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ingresso`.`ingressos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ingresso`.`ingressos` (
  `id` INT NOT NULL,
  `nome_evento` VARCHAR(45) NOT NULL,
  `data_evento` DATETIME NOT NULL,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ingresso`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ingresso`.`compras` (
  `id` INT NOT NULL,
  `valor` DECIMAL NOT NULL,
  `data_compra` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `usuarios_id` INT NOT NULL,
  `ingressos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `usuarios_id`, `ingressos_id`) ,
  INDEX `fk_compras_usuarios_idx` (`usuarios_id` ASC) ,
  INDEX `fk_compras_ingressos1_idx` (`ingressos_id` ASC) ,
  CONSTRAINT `fk_compras_usuarios`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `ingresso`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_ingressos1`
    FOREIGN KEY (`ingressos_id`)
    REFERENCES `ingresso`.`ingressos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ingresso`.`amigos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ingresso`.`amigos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ingresso`.`usuarios_has_amigos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ingresso`.`usuarios_has_amigos` (
  `usuarios_id` INT NOT NULL,
  `amigos_id` INT NOT NULL,
  PRIMARY KEY (`usuarios_id`, `amigos_id`) ,
  INDEX `fk_usuarios_has_amigos_amigos1_idx` (`amigos_id` ASC) ,
  INDEX `fk_usuarios_has_amigos_usuarios1_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_usuarios_has_amigos_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `ingresso`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_amigos_amigos1`
    FOREIGN KEY (`amigos_id`)
    REFERENCES `ingresso`.`amigos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
