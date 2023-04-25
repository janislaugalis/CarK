
-- -----------------------------------------------------
-- Table `metadigi_cark`.`atrumkarba`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`atrumkarba` (
  `atrumkarba_id` INT(11) NOT NULL AUTO_INCREMENT,
  `nosaukums` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`atrumkarba_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`sedvietas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`sedvietas` (
  `sedvietas_id` INT(11) NOT NULL AUTO_INCREMENT,
  `sedvietu_skaits` INT(11) NOT NULL,
  PRIMARY KEY (`sedvietas_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`degvielas_paterins`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`degvielas_paterins` (
  `degvielas_paterins_id` INT(11) NOT NULL AUTO_INCREMENT,
  `minimalais` VARCHAR(100) NOT NULL,
  `videjais` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`degvielas_paterins_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`dzineja_veids`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`dzineja_veids` (
  `dzineja_veids_id` INT(11) NOT NULL AUTO_INCREMENT,
  `veids` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`dzineja_veids_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`ekstras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`ekstras` (
  `ekstras` INT(11) NOT NULL AUTO_INCREMENT,
  `Navigacija` TINYINT(4) NULL DEFAULT NULL,
  `bernu_sedeklis` TINYINT(4) NULL DEFAULT NULL,
  `apdrosinasana` TINYINT(4) NULL DEFAULT NULL,
  `izbrauksana` TINYINT(4) NULL DEFAULT NULL,
  `tuksa_baka` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`ekstras`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`lietotaji`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`lietotaji` (
  `lietotaji_id` INT(11) NOT NULL AUTO_INCREMENT,
  `lietotajvards` VARCHAR(45) NOT NULL,
  `parole` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`lietotaji_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`bagazas_ietilpiba`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`bagazas_ietilpiba` (
  `bagazas_ietilpiba_id` INT(11) NOT NULL AUTO_INCREMENT,
  `bagazas_ietilpibas_skaits` INT(11) NOT NULL,
  PRIMARY KEY (`bagazas_ietilpiba_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`virsbuves_tipi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`virsbuves_tipi` (
  `virsbuves_tips_id` INT(11) NOT NULL AUTO_INCREMENT,
  `tips` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`virsbuves_tips_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`automasinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`automasinas` (
  `automasinas_id` INT(11) NOT NULL AUTO_INCREMENT,
  `vnz` VARCHAR(10) NOT NULL,
  `marka` VARCHAR(45) NOT NULL,
  `modelis` VARCHAR(45) NOT NULL,
  `gads` INT(4) NOT NULL,
  `id_virsbuves_tips` INT(11) NOT NULL,
  `id_atrumkarba` INT(11) NOT NULL,
  `id_dzineja_veids` INT(11) NOT NULL,
  `dzineja_tilpums` DECIMAL(2,1) NOT NULL,
  `attels` VARCHAR(255) NOT NULL,
  `cena_diena` FLOAT(5,2) NOT NULL,
  `id_lietotaji` INT(11) NOT NULL,
  `pieejams` TINYINT(4) NOT NULL DEFAULT 1,
  `sedvietas_id` INT(11) NOT NULL,
  `bagazas_ietilpiba_id` INT(11) NOT NULL,
  `degvielas_paterins_degvielas_paterins_id` INT(11) NOT NULL,
  `ekstras_ekstras` INT(11) NOT NULL,
  `pievienosanas_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `pedejo_izmainu_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`automasinas_id`),
  CONSTRAINT `fk_automasinas_atrumkarba1`
    FOREIGN KEY (`id_atrumkarba`)
    REFERENCES `metadigi_cark`.`atrumkarba` (`atrumkarba_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_atrumkarba_copy11`
    FOREIGN KEY (`sedvietas_id`)
    REFERENCES `metadigi_cark`.`sedvietas` (`sedvietas_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_degvielas_paterins1`
    FOREIGN KEY (`degvielas_paterins_degvielas_paterins_id`)
    REFERENCES `metadigi_cark`.`degvielas_paterins` (`degvielas_paterins_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_dzineja_veids1`
    FOREIGN KEY (`id_dzineja_veids`)
    REFERENCES `metadigi_cark`.`dzineja_veids` (`dzineja_veids_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_ekstras1`
    FOREIGN KEY (`ekstras_ekstras`)
    REFERENCES `metadigi_cark`.`ekstras` (`ekstras`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_lietotaji1`
    FOREIGN KEY (`id_lietotaji`)
    REFERENCES `metadigi_cark`.`lietotaji` (`lietotaji_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_sedvietas_copy11`
    FOREIGN KEY (`bagazas_ietilpiba_id`)
    REFERENCES `metadigi_cark`.`bagazas_ietilpiba` (`bagazas_ietilpiba_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_automasinas_virsbuves_tipi`
    FOREIGN KEY (`id_virsbuves_tips`)
    REFERENCES `metadigi_cark`.`virsbuves_tipi` (`virsbuves_tips_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 44
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`blogs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`blogs` (
  `jaunumi_id` INT(11) NOT NULL AUTO_INCREMENT,
  `virsraksts` VARCHAR(255) NOT NULL,
  `teksts` TEXT NOT NULL,
  `attels` VARCHAR(255) NOT NULL,
  `id_lietotaji` INT(11) NOT NULL,
  `pievienosanas_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `pedejo_izmainu_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`jaunumi_id`),
  CONSTRAINT `fk_jaunumi_lietotaji1`
    FOREIGN KEY (`id_lietotaji`)
    REFERENCES `metadigi_cark`.`lietotaji` (`lietotaji_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`klienti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`klienti` (
  `klienti_id` INT(11) NOT NULL AUTO_INCREMENT,
  `vards` VARCHAR(45) NOT NULL,
  `uzvards` VARCHAR(45) NOT NULL,
  `epasts` VARCHAR(45) NOT NULL,
  `talrunis` INT(16) NOT NULL,
  `registresanas_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`klienti_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`statuss`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`statuss` (
  `statuss_id` INT(11) NOT NULL AUTO_INCREMENT,
  `statusa_nosaukums` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`statuss_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


-- -----------------------------------------------------
-- Table `metadigi_cark`.`pasutijumi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `metadigi_cark`.`pasutijumi` (
  `pieteikumi_id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_klienti` INT(11) NOT NULL,
  `id_automasinas` INT(11) NOT NULL,
  `id_statuss` INT(11) NOT NULL DEFAULT 1,
  `sanemsanas_daatums` DATETIME NOT NULL,
  `nodosanas_datums` DATETIME NOT NULL,
  `pasutijuma_izveidosanas_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `pasutijuma_pedejo_izmainu_datums` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`pieteikumi_id`),
  CONSTRAINT `fk_pieteikumi_automasinas1`
    FOREIGN KEY (`id_automasinas`)
    REFERENCES `metadigi_cark`.`automasinas` (`automasinas_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pieteikumi_klienti1`
    FOREIGN KEY (`id_klienti`)
    REFERENCES `metadigi_cark`.`klienti` (`klienti_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pieteikumi_statuss1`
    FOREIGN KEY (`id_statuss`)
    REFERENCES `metadigi_cark`.`statuss` (`statuss_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 19
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_latvian_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;