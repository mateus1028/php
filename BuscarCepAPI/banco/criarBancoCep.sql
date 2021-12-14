USE unisale;
DROP TABLE IF EXISTS `unisale`.`cep`;
CREATE TABLE  `unisale`.`cep` (
`codigoCep` varchar(10) NOT NULL,
`endereco` varchar(40) NOT NULL,
`bairro` varchar(20) NOT NULL,
`cidade` varchar(20) NOT NULL,
PRIMARY KEY (`codigoCep`))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO cep (codigoCep, endereco, bairro, cidade) values
('16100-001', 'Rua das Palmeiras', 'Centro', 'Aracatuba'),
('16100-002', 'Av. das Nações', 'Parque Olimpico', 'Aracatuba'),
('16100-003', 'Rua Votuporanga', 'Jardim Perola', 'Aracatuba'),
('16100-004', 'Rua dos Fundadores', 'Centro', 'Aracatuba'),
('16100-005', 'Rua dos Navegantes', 'Centro', 'Aracatuba');


