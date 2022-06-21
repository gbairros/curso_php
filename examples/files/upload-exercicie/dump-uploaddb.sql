CREATE DATABASE uploaddb;
use uploaddb;

CREATE TABLE IF NOT EXISTS avatars (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  `photo_path` VARCHAR(250) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


