#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE `compte`(
        id     Int NOT NULL ,
        admin  Bool NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        prenom Varchar (50) NOT NULL ,
        mdp    Varchar (255) NOT NULL
	,CONSTRAINT compte_PK PRIMARY KEY (id)

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: editeur
#------------------------------------------------------------

CREATE TABLE `editeur`(
        `id`      Int  Auto_increment  NOT NULL ,
        `libelle` Varchar (255) NOT NULL
	,CONSTRAINT editeur_PK PRIMARY KEY (id)

)ENGINE=InnoDB;

INSERT INTO `Editeur` (id,libelle) VALUES
 (1,'Hutchinson'),
 (2,'Harcourt'),
 (3,'Julliard'),
 (4,'Ace Book'),
 (5,'Chilton Books'),
 (6,'Double day'),
 (7,'Gnome Press'),
 (8,'Millenium'),
 (9,'Kindle Direct Publishing'),
 (10,'Gallimard');


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE `genre`(
        `id`      Int  Auto_increment  NOT NULL ,
        `libelle` Varchar (255) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id)

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: langue
#------------------------------------------------------------

CREATE TABLE `langue`(
        `id`      Int  Auto_increment  NOT NULL ,
        `libelle` Varchar (50) NOT NULL
	,CONSTRAINT langue_PK PRIMARY KEY (id)

)ENGINE=InnoDB;

INSERT INTO `Langue` (id,libelle) VALUES
 (1,'Anglais Britannique'),
 (2,'Français'),
 (3,'Anglais Américain'),
 (4,'Anglais Australien');


#------------------------------------------------------------
# Table: livre
#------------------------------------------------------------

CREATE TABLE `livre`(
        isbn       Varchar (255) NOT NULL ,
        titre      Varchar (50) NOT NULL ,
        annee      Int ,
        genre      Int NOT NULL ,
        langue     Int NOT NULL ,
        nbpages    Int ,
        editeur    Int NOT NULL ,
        reserve    Bool NOT NULL ,
	,CONSTRAINT livre_PK PRIMARY KEY (isbn)
        
)ENGINE=InnoDB;

INSERT INTO `livre` (isbn,titre,editeur,annee,genre,langue,nbpages) VALUES 
 ('9780090898305','2001:' 'L''Odyssée De' ' L''espace',1,2001,'2'and '1',1,648),
 ('9780151001637','Des Fleurs Pour Algernon',2,1968,'1',3,80),
 ('9780307792365','La Planete Des Singes',3,1963,'1' and '2',2,208),
 ('9780307969941','Neuromancien',4,1984,'1',3,270),
 ('9780340960196','Dune',5,1965,'1' and '2',3,208),
 ('9780385249508','La Chute de Hypérion',6,1990,'1' and '2',3,107),
 ('9780613135818','Fondation',7,1951,'1',3,200),
 ('9782253087830','Axiomatique',8,1995,'1',4,150),
 ('9782330180805','Silo',9,2012,'1',3,155),
 ('9783746612249','Malevil',10,1972,'1',2,240);


#------------------------------------------------------------
# Table: personne
#------------------------------------------------------------

CREATE TABLE `personne`(
        id     Int  Auto_increment  NOT NULL ,
        nom    Varchar (255) NOT NULL ,
        prenom Varchar (255) NOT NULL
	,CONSTRAINT personne_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `Personne` (id,nom,prenom) VALUES 
 (1,'Clarke','Arthur.C'),
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


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE `role`(
        `id`      Int  Auto_increment  NOT NULL ,
        `libelle` Varchar (255) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `role` (id,libelle) VALUES (1,'Ecrivain'),
 (2,'Traducteur');

#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        `isbn` Varchar (255) NOT NULL ,
        `id`   Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (isbn,id)
	,CONSTRAINT favoris_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT favoris_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Auteur
#------------------------------------------------------------

CREATE TABLE `Auteur`(
        id      Int NOT NULL ,
        isbn    Varchar (255) NOT NULL ,
        id_role Int NOT NULL
	,CONSTRAINT Auteur_PK PRIMARY KEY (id,isbn,id_role)

	,CONSTRAINT Auteur_personne_FK FOREIGN KEY (id) REFERENCES personne(id)
	,CONSTRAINT Auteur_livre0_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT Auteur_role1_FK FOREIGN KEY (id_role) REFERENCES role(id)
)ENGINE=InnoDB;

INSERT INTO `Auteur` (idPersonne,idLivre,idRole) VALUES 
(1,"9780090898305",1),
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




#------------------------------------------------------------
# Table: Commentaire
#------------------------------------------------------------

CREATE TABLE Commentaire(
        isbn        Varchar (255) NOT NULL ,
        id          Int NOT NULL ,
        commentaire Text NOT NULL
	,CONSTRAINT Commentaire_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT Commentaire_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT Commentaire_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;




#------------------------------------------------------------
# Table: Note
#------------------------------------------------------------

CREATE TABLE Note(
        isbn   Varchar (255) NOT NULL ,
        id     Int NOT NULL ,
        etoile Int NOT NULL
	,CONSTRAINT Note_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT Note_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT Note_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;

