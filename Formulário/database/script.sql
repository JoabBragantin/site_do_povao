DROP DATABASE IF EXISTS site_do_povao;
CREATE DATABASE site_do_povao;
USE site_do_povao;

CREATE TABLE user (
    cpf BIGINT NOT NULL,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    senha VARCHAR(35) NOT NULL,
    sexo CHAR NOT NULL,
    estado VARCHAR(2) NOT NULL,
    dataNascimento DATE NOT NULL,
    PRIMARY KEY (cpf)
);

CREATE TABLE product (
    idProduto INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    descricao TEXT NOT NULL,
    video_url VARCHAR(20) NOT NULL,
    preco DECIMAL(4,2) NOT NULL,
    plataforma VARCHAR(20) NOT NULL,
    produtora VARCHAR(20) NOT NULL,
    dataLancamento DATE NOT NULL,
    PRIMARY KEY (idProduto)
);

CREATE TABLE product_image (
    id INTEGER NOT NULL AUTO_INCREMENT,
    product INTEGER NOT NULL,
    capa_imagem LONGBLOB NOT NULL,
    descricao_imagem LONGBLOB NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (product) REFERENCES product(idProduto)
);

CREATE TABLE products_users (
    id INTEGER NOT NULL AUTO_INCREMENT,
    user BIGINT NOT NULL,
    product INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user) REFERENCES user(cpf),
    FOREIGN KEY (product) REFERENCES product(idProduto)
);

CREATE TABLE max_recommendation (
    id INTEGER NOT NULL AUTO_INCREMENT,
    sistema_operacional VARCHAR(20) NOT NULL,
    processador VARCHAR(20) NOT NULL,
    memoria_ram VARCHAR(20) NOT NULL,
    placa_grafica VARCHAR(20) NOT NULL,
    armazenamento VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE min_recommendation (
    id INTEGER NOT NULL AUTO_INCREMENT,
    sistema_operacional VARCHAR(20) NOT NULL,
    processador VARCHAR(20) NOT NULL,
    memoria_ram VARCHAR(20) NOT NULL,
    placa_grafica VARCHAR(20) NOT NULL,
    armazenamento VARCHAR(20) NOT NULL,
    PRIMARY KEY (id) 
);

CREATE TABLE hardware_recommendation (
    id INTEGER NOT NULL AUTO_INCREMENT,
    product INTEGER NOT NULL,
    max_rec INTEGER NOT NULL,
    min_rec INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (product) REFERENCES product(idProduto),
    FOREIGN KEY (max_rec) REFERENCES max_recommendation(id),
    FOREIGN KEY (min_rec) REFERENCES min_recommendation(id)
);
