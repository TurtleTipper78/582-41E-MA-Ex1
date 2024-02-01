CREATE TABLE IF NOT EXISTS `recette` (
  `id` INT NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `description` TINYTEXT NULL,
  `ingredient` MEDIUMTEXT NOT NULL,
  `etapes` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;