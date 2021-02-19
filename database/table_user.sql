CREATE TABLE user (
    cpf INTEGER NOT NULL,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    sexo CHAR NOT NULL,
    estado VARCHAR(15) NOT NULL,
    dataNascimento DATE NOT NULL,
    PRIMARY KEY (cpf)
);