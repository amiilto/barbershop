CREATE DATABASE barbershop;

USE barbershop;

CREATE TABLE `barbershop`.`users` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
    );

CREATE TABLE `barbershop`.`clients` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `cpf` INT(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
    );

CREATE TABLE `barbershop`.`products` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `price` FLOAT(20) NOT NULL,
    PRIMARY KEY (`id`)
    );

CREATE TABLE `barbershop`.`schedule` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` INT(11) NOT NULL,
    `date` DATE NOT NULL,
    `time` TIME NOT NULL,
    PRIMARY KEY (`id`)
    );

CREATE TABLE `barbershop`.`sales` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_client` VARCHAR(50) NOT NULL,
    `id_product` INT(11) NOT NULL,
    `price_product` FLOAT(20) NOT NULL,
    PRIMARY KEY (`id`)
    );

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES ('1', 'Administrador', 'admin', 'admin');