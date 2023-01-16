-- DROP DATABASE IF EXISTS Alfabets;
CREATE DATABASE Alfabets;
USE Alfabets;



-- Login
CREATE TABLE Usuarios (
    idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeResponsavel VARCHAR (30),
    email VARCHAR (30),
    senha VARCHAR (10),
	nomeCrianca VARCHAR (30),
	aniversarioCrianca DATE,
	nivel INT (2)
);



-- Fases
CREATE TABLE Fase(
    idFase INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeFase VARCHAR (11)
);

CREATE TABLE Resultado(
    idResul INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    situacao VARCHAR (11),
    codUser INT NOT NULL,
    codfase INT NOT NULL,
    CONSTRAINT fkUser FOREIGN KEY (codUser) REFERENCES Usuarios (idUser),
    CONSTRAINT fkfase FOREIGN KEY (codfase) REFERENCES Fase (idFase)
);

INSERT INTO fase(nomeFase) VALUES ("Atividade1");
INSERT INTO fase(nomeFase) VALUES ("Atividade2");
INSERT INTO fase(nomeFase) VALUES ("Atividade3");
INSERT INTO fase(nomeFase) VALUES ("Atividade4");
INSERT INTO fase(nomeFase) VALUES ("Atividade5");
INSERT INTO fase(nomeFase) VALUES ("Atividade6");