CREATE TABLE IF NOT EXISTS `depto`( 
  `id` INT(11) NOT NULL AUTO_INCREMENT, 
  `id_campi` INT(11) NOT NULL, 
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);