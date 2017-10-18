CREATE DATABASE viralate;
USE viralate;

CREATE TABLE pessoa(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
sexo CHAR NOT NULL,
email VARCHAR(20) NOT NULL,
senha VARCHAR(20) NOT NULL,
userType INTEGER NOT NULL,
imagem VARCHAR(50),
dataCadastro DATE NOT NULL);

CREATE TABLE cao(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
idade INTEGER NOT NULL, 
porte VARCHAR NOT NULL,
imagem VARCHAR(50),
castrado BOOLEAN NOT NULL,
vacinado BOOLEAN NOT NULL,
adotado BOOLEAN NOT NULL,
dataCadastro DATE NOT NULL);

INSERT INTO pessoa(nome,email,senha,userType,imagem,dataCadastro)
	VALUES ('adm','adm@adm.com','123456',1,'imagem','2017-06-13');


SELECT * FROM pessoa;


#DROP DATABASE viralate;