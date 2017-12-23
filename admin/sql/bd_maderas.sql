-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bd_maderas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_maderas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_maderas` ;
-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------
USE `bd_maderas` ;

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_slider`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_slider`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_slider` (
  `i_idSlider` INT NOT NULL AUTO_INCREMENT,
  `s_titulo` VARCHAR(30) NULL,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idSlider`))
ENGINE = InnoDB;


/*DROP PROCEDURE IF EXISTS sp_cambiar_orden;
DELIMITER //
CREATE PROCEDURE sp_cambiar_orden(IN v_idSlider INT, IN v_dir INT)
BEGIN
	DECLARE idSliderAnt INT;
    DECLARE idSliderDesp INT;
    DECLARE posSlider INT;
    SET posSlider = (SELECT i_orden FROM tb_slider WHERE i_idSlider = v_idSlider);
    SET idSliderAnt = (SELECT i_idSlider FROM tb_slider WHERE i_orden = posSlider - 1);
    SET idSliderAnt = (SELECT i_idSlider FROM tb_slider WHERE i_orden = posSlider + 1);
    IF v_dir = 0 THEN
		UPDATE tb_slider SET i_orden = posSlider - 1 WHERE i_idSlider = v_idSlider;
        UPDATE tb_slider SET i_orden = posSlider + 1 WHERE i_idSlider = idSliderAnt;
    END IF;
    
END //
*/
-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_categoria`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_categoria` (
  `i_idCategoria` INT NOT NULL AUTO_INCREMENT,
  `s_nombre` VARCHAR(50) NOT NULL,
  `s_nombreImg` VARCHAR(100) NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idCategoria`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_categoria`(`s_nombre`,`s_nombreImg`) VALUES('Ninguna','');


-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_producto`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_producto` (
  `i_idProducto` INT NOT NULL AUTO_INCREMENT,
  `s_nombre` VARCHAR(50) NOT NULL,
  `s_caract` VARCHAR(200) NOT NULL,
  `s_usos` VARCHAR(50) NOT NULL,
  `s_densidad` VARCHAR(100) NOT NULL,
  `s_disponib` VARCHAR(100) NOT NULL,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  `i_idCategoria` INT NOT NULL,
  PRIMARY KEY (`i_idProducto`),
  FOREIGN KEY (`i_idCategoria`) REFERENCES tb_categoria(`i_idCategoria`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `s_nombre_UNIQUE` ON `bd_maderas`.`tb_producto` (`s_nombre` ASC);


-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_oferta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_oferta`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_oferta` (
  `i_idOferta` INT NOT NULL AUTO_INCREMENT,
  `i_dcto` INT NOT NULL,
  `s_tipoOferta` CHAR(1) NOT NULL,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  `i_idCategoria` INT NOT NULL,
  PRIMARY KEY (`i_idOferta`),
  FOREIGN KEY (`i_idCategoria`) REFERENCES `bd_maderas`.`tb_categoria`(`i_idCategoria`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_cliente`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_cliente` (
  `i_idCliente` INT NOT NULL AUTO_INCREMENT,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idCliente`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_marca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_marca`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_marca` (
  `i_idMarca` INT NOT NULL AUTO_INCREMENT,
  `s_nombre` VARCHAR(40) NOT NULL,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idMarca`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `s_nombreImg_UNIQUE` ON `bd_maderas`.`tb_marca` (`s_nombreImg` ASC);

DROP TABLE IF EXISTS `bd_maderas`.`tb_marca_prod`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_marca_prod` (
  `i_idMarcaProd` INT NOT NULL AUTO_INCREMENT,
  `s_titulo` VARCHAR(30) NOT NULL,
  `s_nombreImg` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  `i_idMarca` INTEGER NOT NULL,
  PRIMARY KEY (`i_idMarcaProd`),
  FOREIGN KEY (`i_idMarca`) REFERENCES `tb_marca`(`i_idMarca`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `bd_maderas`.`tb_marca_prod_color`;
CREATE TABLE IF NOT EXISTS `bd_madetb_marca_prod_colortb_marca_prod_colorras`.`tb_marca_prod_color` (
  `i_idMarPrCol` INT NOT NULL AUTO_INCREMENT,
  `s_color` VARCHAR(7) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  `i_idMarcaProd` INTEGER NOT NULL,
  PRIMARY KEY (`i_idMarPrCol`),
  FOREIGN KEY (`i_idMarcaProd`) REFERENCES `tb_marca_prod`(`i_idMarcaProd`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_nosotros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_nosotros`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_nosotros` (
  `i_idNosotros` INT NOT NULL AUTO_INCREMENT,
  `s_somos` VARCHAR(200),
  `s_mision` VARCHAR(200),
  `s_vision` VARCHAR(200),
  `s_caract1` VARCHAR(30),
  `s_caract2` VARCHAR(30),
  `s_caract3` VARCHAR(30),
  PRIMARY KEY (`i_idNosotros`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_nosotros`(s_somos,s_mision,s_vision,s_caract1,s_caract2,s_caract3) 
	VALUES('Somos una empresa que nos dedicamos a la satisfacción del mercado nacional, gracias al liderazgo de nuestros clientes y a la excelente calidad de nuestros productos.',
			'Conectar a los clientes, productos y tecnología a través de la innovación y la experiencia para mejora la rentabilidad.',
            'Ser la compañia más valorada, proveedora de soluciones con tecnología a la cadena de consumo de nuestros socios en la industria que damos servicios.',
            'Maderas de alto rendimiento','La mejor calidad','Amplia variedad');

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_horario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_horario`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_horario` (
  `i_idHorario` INT NOT NULL AUTO_INCREMENT,
  `s_horario` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`i_idHorario`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_horario`(s_horario) VALUES('Lun - Sab: 9am a 6pm');

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_telefono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_telefono`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_telefono` (
  `i_idTelefono` INT NOT NULL AUTO_INCREMENT,
  `s_telefono` VARCHAR(20) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idTelefono`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_telefono`(s_telefono) VALUES('+511 295 0215');

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_envios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_envios`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_envios` (
  `i_idEnvios` INT NOT NULL AUTO_INCREMENT,
  `s_lugares` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idEnvios`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_envios`(s_lugares) VALUES('A nivel nacional');

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_tarjeta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_tarjeta` (
  `i_idTarjeta` INT NOT NULL AUTO_INCREMENT,
  `s_nombre` VARCHAR(50) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idTarjeta`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_tarjeta`(s_nombre) VALUES('Visa Mastercard');

-- -----------------------------------------------------
-- Table `bd_maderas`.`tb_correo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_maderas`.`tb_correo`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_correo` (
  `i_idCorreo` INT NOT NULL AUTO_INCREMENT,
  `s_correo` VARCHAR(100) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idCorreo`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `correo_UNIQUE` ON `bd_maderas`.`tb_correo` (`s_correo` ASC);

INSERT INTO `bd_maderas`.`tb_correo`(s_correo) VALUES('ventas@maderasamerica.com');
INSERT INTO `bd_maderas`.`tb_correo`(s_correo) VALUES('ventas1@maderasamerica.com');

DROP TABLE IF EXISTS `bd_maderas`.`tb_usuario`;
CREATE TABLE IF NOT EXISTS `bd_maderas`.`tb_usuario` (
  `i_idUsuario` INT NOT NULL AUTO_INCREMENT,
  `s_usuario` VARCHAR(16) UNIQUE NOT NULL,
  `s_passwd` VARCHAR(40) NOT NULL,
  `s_estado` CHAR(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`i_idUsuario`))
ENGINE = InnoDB;

INSERT INTO `bd_maderas`.`tb_usuario`(`s_usuario`,`s_passwd`) VALUES('admin',sha1('123')); 


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

