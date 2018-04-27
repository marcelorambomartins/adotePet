CREATE DATABASE viralate;
USE viralate;

CREATE TABLE pessoa(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
sexo CHAR NOT NULL, # M,F
telefone VARCHAR(11) NOT NULL,
email VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
userType INTEGER NOT NULL, # 1 = ADM,  2 = Moderador,  3 = User comum
imagem VARCHAR(100) NOT NULL,
listaCaesAdotar VARCHAR(100),
bloqueado BOOLEAN NOT NULL,
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
status VARCHAR(10) NOT NULL, #Aguardando, Aprovado, Recusado
observacao VARCHAR(100),
pessoaID INTEGER NOT NULL,
caoID INTEGER NOT NULL,
FOREIGN KEY (pessoaID) REFERENCES pessoa(id),
FOREIGN KEY (caoID) REFERENCES cao(id));


INSERT INTO pessoa(nome,sexo,telefone,email,senha,userType,imagem, bloqueado,dataCadastro)
	VALUES ('adm','M', '00000000000','adm@adm.com','123456',1,'imagem', false,'2017-06-13');


SELECT * FROM pessoa;


#DROP DATABASE viralate;