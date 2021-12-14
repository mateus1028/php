CREATE TABLE `empresa` (
  `idEmpresa` INT NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB;

CREATE TABLE `pacotes` (
  `idPacote` INT NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) NULL,
  `telefone` int(30) NULL,
  `cidade` varchar(45) NULL,
  `hotel` varchar(45) NULL,
  `dias` int(30) NULL,
  `preco` decimal (10,2) NULL,
  PRIMARY KEY (`idPacote`)
) ENGINE=InnoDB;


CREATE TABLE `sessions` (
  `idSession` INT NOT NULL AUTO_INCREMENT,
  `sessions` varchar(255) NULL,
  `dia` 	 date not null,
  `hora` 	 time not null,
  `idEmpresa` INT NOT NULL,
  PRIMARY KEY (`idSession`)
) ENGINE=InnoDB;

Alter table Agenda add Foreign Key (idEmpresa) references empresa (idEmpresa) on delete  restrict on update  restrict;

