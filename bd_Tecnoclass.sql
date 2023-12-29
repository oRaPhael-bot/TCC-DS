create database bd_Tecnoclass;
use bd_Tecnoclass;

CREATE TABLE professor (
nome_prof varchar(80) NOT NULL,
email_prof int(15) NOT NULL,
turmas_prof varchar(40) NOT NULL,
materia_prof varchar(40) NOT NULL,
aulas_prof varchar(40) NOT NULL,
PRIMARY KEY (nome_prof)
);

CREATE TABLE aluno (
nome_aluno varchar(80) NOT NULL,
turma_aluno varchar(30) NOT NULL,
email_aluno varchar(30) NOT NULL,
aulas_aluno varchar(40) NOT NULL,
PRIMARY KEY (nome_aluno)
);

CREATE TABLE usuario (
cadastro int(5) AUTO_INCREMENT,
senha varchar(10) not null,
tipo_usuario varchar(30) not null,
PRIMARY KEY (cadastro)
);

CREATE TABLE comentarios (
cod_post int(5) AUTO_INCREMENT,
nome_usuario varchar(80) NOT NULL,
email_usuario varchar(30) not null,
curso_usuario  varchar(30) not null,
mensagem varchar(500) NOT NULL,
data_post DATETIME NOT NULL,
likes int,
PRIMARY KEY (cod_post)
);

CREATE TABLE respostas (
cod_resp int(5) AUTO_INCREMENT,
nome_prof_resp varchar(80) NOT NULL,
email_prof_resp varchar(30) NOT NULL,
mensagem_resp varchar(500) NOT NULL,
data_resp DATETIME NOT NULL,
likes_resp int,
PRIMARY KEY (cod_resp)
);