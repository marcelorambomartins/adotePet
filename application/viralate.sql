CREATE DATABASE viralate;
USE viralate;

CREATE TABLE pessoa(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
sexo CHAR NOT NULL,
email VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
userType INTEGER NOT NULL,
imagem VARCHAR(100) NOT NULL,
dataCadastro DATE NOT NULL);

CREATE TABLE cao(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
idade INTEGER NOT NULL, 
porte VARCHAR(50) NOT NULL,
imagem VARCHAR(100) NOT NULL,
castrado BOOLEAN NOT NULL,
vacinado BOOLEAN NOT NULL,
adotado BOOLEAN NOT NULL,
dataCadastro DATE NOT NULL);

INSERT INTO pessoa(nome,sexo,email,senha,userType,imagem,dataCadastro)
	VALUES ('adm','M','adm@adm.com','123456',1,'imagem','2017-06-13');


SELECT * FROM pessoa;


#DROP DATABASE viralate;