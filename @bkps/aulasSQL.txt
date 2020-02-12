-- Criar tabelas
CREATE TABLE usuario (
  id_user int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  email varchar(150) NOT NULL,
  tel varchar(50) DEFAULT NULL,
  senha varchar(100) NOT NULL
);

CREATE TABLE endereco (
    cep varchar(9) NOT NULL PRIMARY KEY,
    logradouro varchar(100) DEFAULT NULL,
    bairro varchar(50) DEFAULT NULL,
    cidade varchar(50) DEFAULT NULL,
    uf varchar(2) DEFAULT NULL
);

-- Modificar tabelas
ALTER TABLE usuario
    ADD cep varchar(9),
    ADD numero varchar(10),
    ADD complemento varchar(100);

ALTER TABLE usuario
  ADD FOREIGN KEY (cep) REFERENCES endereco(cep);