create database componentes;
use componentes;
CREATE TABLE `componentes`.`t_componentes` (
  `id_componente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `serie` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `capacidad` VARCHAR(45),
  `precio` VARCHAR(45) NOT NULL,
  `nombreArchivo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_componente`));

