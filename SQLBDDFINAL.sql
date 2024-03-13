#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: _compte
#------------------------------------------------------------

CREATE TABLE _compte(
        id     Int NOT NULL ,
        admin  Bool NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        prenom Varchar (50) NOT NULL ,
        mdp    Varchar (255) NOT NULL
	,CONSTRAINT _compte_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _editeur
#------------------------------------------------------------

CREATE TABLE _editeur(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _editeur_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _genre
#------------------------------------------------------------

CREATE TABLE _genre(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _genre_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _langue
#------------------------------------------------------------

CREATE TABLE _langue(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _langue_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _livre
#------------------------------------------------------------

CREATE TABLE _livre(
        isbn        Varchar (255) NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        annee       Int ,
        nbpages     Int ,
        reserve     Bool NOT NULL ,
        resume      Varchar (4096) NOT NULL ,
        id          Int NOT NULL ,
        id__genre   Int NOT NULL ,
        id__editeur Int
	,CONSTRAINT _livre_PK PRIMARY KEY (isbn)

	,CONSTRAINT _livre__langue_FK FOREIGN KEY (id) REFERENCES _langue(id)
	,CONSTRAINT _livre__genre0_FK FOREIGN KEY (id__genre) REFERENCES _genre(id)
	,CONSTRAINT _livre__editeur1_FK FOREIGN KEY (id__editeur) REFERENCES _editeur(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _personne
#------------------------------------------------------------

CREATE TABLE _personne(
        id     Int  Auto_increment  NOT NULL ,
        nom    Varchar (255) NOT NULL ,
        prenom Varchar (255) NOT NULL
	,CONSTRAINT _personne_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _role
#------------------------------------------------------------

CREATE TABLE _role(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _role_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Inscription
#------------------------------------------------------------

CREATE TABLE _Inscription(
        id  Varchar (50) NOT NULL ,
        mdp Varchar (50) NOT NULL
	,CONSTRAINT _Inscription_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _favoris
#------------------------------------------------------------

CREATE TABLE _favoris(
        isbn Varchar (255) NOT NULL ,
        id   Int NOT NULL
	,CONSTRAINT _favoris_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT _favoris__livre_FK FOREIGN KEY (isbn) REFERENCES _livre(isbn)
	,CONSTRAINT _favoris__compte0_FK FOREIGN KEY (id) REFERENCES _compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Auteur
#------------------------------------------------------------

CREATE TABLE _Auteur(
        id       Int NOT NULL ,
        isbn     Varchar (255) NOT NULL ,
        id__role Int NOT NULL
	,CONSTRAINT _Auteur_PK PRIMARY KEY (id,isbn,id__role)

	,CONSTRAINT _Auteur__personne_FK FOREIGN KEY (id) REFERENCES _personne(id)
	,CONSTRAINT _Auteur__livre0_FK FOREIGN KEY (isbn) REFERENCES _livre(isbn)
	,CONSTRAINT _Auteur__role1_FK FOREIGN KEY (id__role) REFERENCES _role(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Commentaire
#------------------------------------------------------------

CREATE TABLE _Commentaire(
        isbn        Varchar (255) NOT NULL ,
        id          Int NOT NULL ,
        commentaire Text NOT NULL
	,CONSTRAINT _Commentaire_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT _Commentaire__livre_FK FOREIGN KEY (isbn) REFERENCES _livre(isbn)
	,CONSTRAINT _Commentaire__compte0_FK FOREIGN KEY (id) REFERENCES _compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Note
#------------------------------------------------------------

CREATE TABLE _Note(
        isbn   Varchar (255) NOT NULL ,
        id     Int NOT NULL ,
        etoile Int NOT NULL
	,CONSTRAINT _Note_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT _Note__livre_FK FOREIGN KEY (isbn) REFERENCES _livre(isbn)
	,CONSTRAINT _Note__compte0_FK FOREIGN KEY (id) REFERENCES _compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: EstVerifié
#------------------------------------------------------------

CREATE TABLE EstVerifie(
        id         Varchar (50) NOT NULL ,
        id__compte Int NOT NULL
	,CONSTRAINT EstVerifie_PK PRIMARY KEY (id,id__compte)

	,CONSTRAINT EstVerifie__Inscription_FK FOREIGN KEY (id) REFERENCES _Inscription(id)
	,CONSTRAINT EstVerifie__compte0_FK FOREIGN KEY (id__compte) REFERENCES _compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reserve
#------------------------------------------------------------

CREATE TABLE reserve(
        isbn Varchar (255) NOT NULL ,
        id   Int NOT NULL ,
        date Date NOT NULL
	,CONSTRAINT reserve_PK PRIMARY KEY (isbn,id)




	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
