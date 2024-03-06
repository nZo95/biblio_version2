DROP TABLE IF EXISTS Role;
DROP TABLE IF EXISTS Personne;
DROP TABLE IF EXISTS Auteur;
DROP TABLE IF EXISTS Editeur;
DROP Table IF EXISTS Langue;
DROP Table IF EXISTS Genre;
DROP TABLE IF EXISTS Livre;

CREATE TABLE `Role` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`libelle`	VARCHAR(150) NOT NULL
);
INSERT INTO `Role` (id,libelle) VALUES (1,'Ecrivain'),
 (2,'Traducteur');


CREATE TABLE `Personne` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`nom`	VARCHAR(150) NOT NULL,
	`prenom`	VARCHAR(150)
);
INSERT INTO `Personne` (id,nom,prenom) VALUES (1,'Clarke','Arthur.C'),
 (2,'Keyes','Daniel'),
 (3,'Boulle','Pierre'),
 (4,'Gallet','George.H'),
 (5,'Abbadia','Guy'),
 (6,'Herbert','Frank'),
 (7,'Simmons','Dan'),
 (8,'Asimov','Isaac'),
 (9,'Egan','Greg'),
 (10,'Howey','Hugh'),
 (11,'Merle','Robert'),
 (12,'Demuth','Michel'),
 (13,'Bonnefoy','Jean'),
 (14,'Rosenthal','Jean'),
 (15,'Denis','Sylvis'),
 (16,'Yoann','Gentric'),
 (17, 'William','Gibson');
 
CREATE TABLE `Livre` (
	`isbn`	VARCHAR(15) NOT NULL,
	`titre`	VARCHAR(500) NOT NULL,
	`editeur`	INTEGER NOT NULL,
	`annee`	INTEGER,
	`genre`	INTEGER,
	`langue`	INTEGER,
	`nbpages`	INTEGER,
	PRIMARY KEY(isbn)
);
INSERT INTO `Livre` (isbn,titre,editeur,annee,genre,langue,nbpages) VALUES ('9780090898305','2001:' 'L''Odyssée De' ' L''espace',1,2001,'2'and '1',1,648),
 ('9780151001637','Des Fleurs Pour Algernon',2,1968,'1',3,80),
 ('9780307792365','La Planete Des Singes',3,1963,'1' and '2',2,208),
 ('9780307969941','Neuromancien',4,1984,'1',3,270),
 ('9780340960196','Dune',5,1965,'1' and '2',3,208),
 ('9780385249508','La Chute de Hypérion',6,1990,'1' and '2',3,107),
 ('9780613135818','Fondation',7,1951,'1',3,200),
 ('9782253087830','Axiomatique',8,1995,'1',4,150),
 ('9782330180805','Silo',9,2012,'1',3,155),
 ('9783746612249','Malevil',10,1972,'1',2,240);
CREATE TABLE `Langue` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`libelle`	VARCHAR(150) NOT NULL
);
INSERT INTO `Langue` (id,libelle) VALUES (1,'Anglais Britannique'),
 (2,'Français'),
 (3,'Anglais Américain'),
 (4,'Anglais Australien');
CREATE TABLE `Genre` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`libelle`	VARCHAR(150) NOT NULL UNIQUE
);
INSERT INTO `Genre` (id,libelle) VALUES (1,'Science-fiction'),
 (2,'Roman');
CREATE TABLE `Editeur` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`libelle`	VARCHAR(150) NOT NULL
);
INSERT INTO `Editeur` (id,libelle) VALUES (1,'Hutchinson'),
 (2,'Harcourt'),
 (3,'Julliard'),
 (4,'Ace Book'),
 (5,'Chilton Books'),
 (6,'Double day'),
 (7,'Gnome Press'),
 (8,'Millenium'),
 (9,'Kindle Direct Publishing'),
 (10,'Gallimard');
CREATE TABLE `Auteur` (
	`idPersonne`	INTEGER NOT NULL,
	`idLivre`	VARCHAR(15) NOT NULL,
	`idRole`	INTEGER NOT NULL
);
INSERT INTO `Auteur` (idPersonne,idLivre,idRole) VALUES (1,"9780090898305",1),
 (12,"9780090898305",2),
 (2,"9780151001637",1),
 (4,"9780151001637",2),
 (3,"9780307792365",1),
 (17,"9780307969941",1),
 (13,"9780307969941",2),
 (6,"9780340960196",1),
 (12,"9780340960196",2),
 (7,"9780385249508",1),
 (5,"9780385249508",2),
 (8,"9780613135818",1),
 (14,"9780613135818",2),
 (9,"9782253087830",1),
 (15,"9782253087830",2),
 (10,"9782330180805",1),
 (16,"9782330180805",2),
 (11,"9783746612249",1);
