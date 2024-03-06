#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE compte(
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

CREATE TABLE editeur(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT editeur_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE genre(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: langue
#------------------------------------------------------------

CREATE TABLE langue(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT langue_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livre
#------------------------------------------------------------

CREATE TABLE livre(
        isbn       Varchar (255) NOT NULL ,
        titre      Varchar (50) NOT NULL ,
        auteur     Varchar (50) NOT NULL ,
        annee      Int ,
        genre      Int NOT NULL ,
        langue     Int NOT NULL ,
        nbpages    Int ,
        editeur    Int NOT NULL ,
        reserve    Bool NOT NULL ,
        id         Int NOT NULL ,
        id_genre   Int NOT NULL ,
        id_editeur Int
	,CONSTRAINT livre_PK PRIMARY KEY (isbn)

	,CONSTRAINT livre_langue_FK FOREIGN KEY (id) REFERENCES langue(id)
	,CONSTRAINT livre_genre0_FK FOREIGN KEY (id_genre) REFERENCES genre(id)
	,CONSTRAINT livre_editeur1_FK FOREIGN KEY (id_editeur) REFERENCES editeur(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: personne
#------------------------------------------------------------

CREATE TABLE personne(
        id     Int  Auto_increment  NOT NULL ,
        nom    Varchar (255) NOT NULL ,
        prenom Varchar (255) NOT NULL
	,CONSTRAINT personne_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        isbn Varchar (255) NOT NULL ,
        id   Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT favoris_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT favoris_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Auteur
#------------------------------------------------------------

CREATE TABLE Auteur(
        id      Int NOT NULL ,
        isbn    Varchar (255) NOT NULL ,
        id_role Int NOT NULL
	,CONSTRAINT Auteur_PK PRIMARY KEY (id,isbn,id_role)

	,CONSTRAINT Auteur_personne_FK FOREIGN KEY (id) REFERENCES personne(id)
	,CONSTRAINT Auteur_livre0_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT Auteur_role1_FK FOREIGN KEY (id_role) REFERENCES role(id)
)ENGINE=InnoDB;


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

