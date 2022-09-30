-- -----------------------------------------------------
-- Schema lunchy_kids
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lunchy_kids` DEFAULT CHARACTER SET utf8 ;
USE `lunchy_kids` ;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`ROLES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`ROLES` (
  `id_rol` INT NOT NULL,
  `nombreRol` VARCHAR(150) NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`USUARIOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`USUARIOS` (
  `id_rol` INT NOT NULL,
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(150) NOT NULL,
  `apellido_usuario` VARCHAR(150) NOT NULL,
  `correo_usuario` VARCHAR(150) NOT NULL,
  `telefono_usuario` VARCHAR(150) NOT NULL,
  `direccion_usuario` VARCHAR(150) NOT NULL,
  `contraseña_usuario` VARCHAR(150) NOT NULL,
  `estado_usuario` BIT(2) NOT NULL,
  PRIMARY KEY (`id_usuario`),  
  INDEX `ind_usuarios_rol` (`id_rol`),
  CONSTRAINT `fk_usuarios_roles`
    FOREIGN KEY (`id_rol`)
    REFERENCES `lunchy_kids`.`ROLES` (`id_rol`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`DIRECTOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`DIRECTOR` (
  `idDirector` INT NOT NULL,
  PRIMARY KEY (`idDirector`),
  INDEX `ind_director_usuarios` (`idDirector`),
   CONSTRAINT `fk_director_usuarios`
    FOREIGN KEY (`idDirector`)
    REFERENCES `lunchy_kids`.`USUARIOS` (`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE) 
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`COORDINADOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`COORDINADOR` (
  `id_coordinador` INT NOT NULL,
  `oficina_coord` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_coordinador`),
  INDEX `ind_coordinador_usuarios` (`id_coordinador`),
  CONSTRAINT `fk_coordinador_usuarios`
    FOREIGN KEY (`id_coordinador`)
    REFERENCES `lunchy_kids`.`USUARIOS` (`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`AUXILIAR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`AUXILIAR` (
  `id_auxiliar` INT NOT NULL AUTO_INCREMENT,
  `jornada_auxiliar` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_auxiliar`),
  INDEX `ind_auxiliar_usuarios` (`id_auxiliar`),
  CONSTRAINT `fk_auxiliar_usuarios`
    FOREIGN KEY (`id_auxiliar`)
    REFERENCES `lunchy_kids`.`USUARIOS` (`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`REFRIGERIOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`REFRIGERIOS` (
  `id_coordinador_refri` INT NOT NULL,
  `id_auxiliar_refri` INT NOT NULL,
  `id_refrigerio` INT NOT NULL AUTO_INCREMENT,
  `fecha_refrigerio` DATE NOT NULL,
  `hora_refrigerio` DATETIME NOT NULL,
  `tipo_refrigerio` VARCHAR(20) NOT NULL,
  `descripcion_refrigerio` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_refrigerio`),
  INDEX `ind_refrigerio_auxiliar` (`id_auxiliar_refri`),
  INDEX `ind_refrigerio_coordinador` (`id_coordinador_refri`),
  CONSTRAINT `fk_refrigerio_auxiliar`
    FOREIGN KEY (`id_auxiliar_refri`)
    REFERENCES `lunchy_kids`.`AUXILIAR` (`id_auxiliar`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_refrigerio_coordinador`
    FOREIGN KEY (`id_coordinador_refri`)
    REFERENCES `lunchy_kids`.`COORDINADOR` (`id_coordinador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`CURSOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`CURSOS` (
  `id_curso` INT NOT NULL AUTO_INCREMENT,
  `idAuxiliar_curso` INT NOT NULL,
  `idDirector_curso` INT NOT NULL,
  `estado_curso` BIT(1) NOT NULL,
  `sede_curso` VARCHAR(50) NOT NULL,
  `cantAlum_curso` INT NOT NULL,
  PRIMARY KEY (`id_curso`),
  INDEX `ind_curso_director` (`idDirector_curso`),
  INDEX `ind_curso_auxiliar` (`idAuxiliar_curso`),
  CONSTRAINT `fk_curso_director`
    FOREIGN KEY (`idDirector_curso`)
    REFERENCES `lunchy_kids`.`DIRECTOR` (`idDirector`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_curso_auxiliar`
    FOREIGN KEY (`idAuxiliar_curso`)
    REFERENCES `lunchy_kids`.`AUXILIAR` (`id_auxiliar`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `lunchy_kids`.`LISTA_REFRIGERIOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lunchy_kids`.`LISTA_REFRIGERIOS` (
  `id_refrigerios_list` INT NOT NULL,
  `id_curso_list` INT NOT NULL,
  INDEX `ind_lista_refrigerios_refrigerios` (`id_refrigerios_list`),
  INDEX `ind_lista_refrigerios_curso` (`id_curso_list`),
  CONSTRAINT `fk_lista refrigerios_refrigerios`
    FOREIGN KEY (`id_refrigerios_list`)
    REFERENCES `lunchy_kids`.`REFRIGERIOS` (`id_refrigerio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_lista_refrigerios_curso`
    FOREIGN KEY (`id_curso_list`)
    REFERENCES `lunchy_kids`.`CURSOS` (`id_curso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;