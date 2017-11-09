CREATE DATABASE viralate;
USE viralate;

CREATE TABLE pessoa(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
sexo CHAR NOT NULL, # M,F
email VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
userType INTEGER NOT NULL, # 1 = ADM,  2 = Moderador,  3 = User comum
imagem VARCHAR(100) NOT NULL,
dataCadastro DATE NOT NULL);

CREATE TABLE cao(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
idade INTEGER NOT NULL, 
porte VARCHAR(50) NOT NULL,
raca VARCHAR(50) NOT NULL,
sexo VARCHAR(10) NOT NULL,
imagem VARCHAR(100) NOT NULL,
castrado BOOLEAN NOT NULL,
vacinado BOOLEAN NOT NULL,
adotado BOOLEAN NOT NULL,
descricao VARCHAR(200) NOT NULL,
dataCadastro DATE NOT NULL);

CREATE TABLE adocao(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
dataCadastro DATE NOT NULL,
status INTEGER NOT NULL, #Pendente, Aprovado, Recusado
observacao VARCHAR(100),
pessoaID INTEGER NOT NULL,
caoID INTEGER NOT NULL,
FOREIGN KEY (pessoaID) REFERENCES pessoa(id),
FOREIGN KEY (caoID) REFERENCES cao(id));


INSERT INTO pessoa(nome,sexo,email,senha,userType,imagem,dataCadastro)
	VALUES ('adm','M','adm@adm.com','123456',1,'imagem','2017-06-13');


SELECT * FROM pessoa;


#DROP DATABASE viralate;