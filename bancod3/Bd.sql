CREATE DATABASE escola;

USE escola;

CREATE TABLE alunos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100)
);

CREATE TABLE cursos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100)
);

CREATE TABLE vinculos (
id INT AUTO_INCREMENT PRIMARY KEY,
aluno_id INT,
curso_id INT
);
-----------------------------------------------
--------Teste de Banco de Dados----------------
Create Table teste (                         ---
  nome varchar (100),                         --
  idade int                                   --
)                                             --
                                             ---
-----------------------------------------------
----------------------------------------------