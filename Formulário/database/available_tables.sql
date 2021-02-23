DROP DATABASE IF EXISTS site_do_povao;
CREATE DATABASE site_do_povao;
USE site_do_povao;

CREATE TABLE user (
    cpf BIGINT NOT NULL,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    sexo CHAR NOT NULL,
    estado VARCHAR(2) NOT NULL,
    dataNascimento DATE NOT NULL,
    PRIMARY KEY (cpf)
);

CREATE TABLE product (
    idProduto INTEGER NOT NULL AUTO_INCREMENT,
    idUser BIGINT NULL,
    nome VARCHAR(45) NOT NULL,
    descricao TEXT NOT NULL,
    imagem LONGBLOB NOT NULL,
    preco DECIMAL(4,2) NOT NULL,
    produtora VARCHAR(20) NOT NULL,
    dataLancamento DATE NOT NULL,
    PRIMARY KEY (idProduto),
    FOREIGN KEY (idUser) REFERENCES user (cpf)
);