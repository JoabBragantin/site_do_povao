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
    user INTEGER NULL,
    nome VARCHAR(45) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(4,2) NOT NULL,
    produtora VARCHAR(20) NOT NULL,
    dataLancamento DATE NOT NULL,
    
    PRIMARY KEY (idProduto),
    FOREIGN KEY (user) REFERENCES user(cpf)
);