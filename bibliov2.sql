#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: _compte
#------------------------------------------------------------

CREATE TABLE compte(
        id     Varchar(255) NOT NULL ,
        admin  Bool NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        prenom Varchar (50) NOT NULL ,
        mdp    Varchar (255) NOT NULL,
        phone Varchar(50) NOT NULL,
        mail Varchar(255) NOT NULL
	,CONSTRAINT _compte_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _editeur
#------------------------------------------------------------

CREATE TABLE editeur(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _editeur_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `editeur` (id,libelle) VALUES 
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
# Table: _genre
#------------------------------------------------------------

CREATE TABLE genre(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT genre_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `genre` (id,libelle) VALUES 
 (1,'Science-fiction'),
 (2,'Roman');

#------------------------------------------------------------
# Table: _langue
#------------------------------------------------------------

CREATE TABLE langue(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT langue_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `langue` (id,libelle) VALUES 
 (1,'Anglais Britannique'),
 (2,'Français'),
 (3,'Anglais Américain'),
 (4,'Anglais Australien');


#------------------------------------------------------------
# Table: _livre
#------------------------------------------------------------

CREATE TABLE livre(
        isbn        Varchar (255) NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        annee       Int ,
        nbpages     Int ,
        resume      Varchar (4096) NOT NULL ,
        id          Int NOT NULL ,
        id_genre   Int NOT NULL ,
        id_editeur Int
	,CONSTRAINT livre_PK PRIMARY KEY (isbn)

	,CONSTRAINT livre_langue_FK FOREIGN KEY (id) REFERENCES langue(id)
	,CONSTRAINT livre_genre0_FK FOREIGN KEY (id_genre) REFERENCES genre(id)
	,CONSTRAINT livre_editeur1_FK FOREIGN KEY (id_editeur) REFERENCES editeur(id)
)ENGINE=InnoDB;

INSERT INTO `livre` (isbn,titre,id_editeur,annee,id_genre,id,nbpages,resume) VALUES 
 ('9780090898305','2001:' 'L''Odyssée De' ' L''espace',1,2001,'2'and '1',1,648,"À la fin du second millénaire, les hommes se sont lancés à la conquête du système solaire. Un jour ils partiront à la conquête des étoiles. Qu'y trouveront-ils ? Leurs égaux ou leurs maîtres ? Ce roman essaye dapporter une réponse à cette question"),
 ('9780151001637','Des Fleurs Pour Algernon',2,1968,'1',3,80,"Des fleurs pour Algernon est une œuvre de science-fiction dans laquelle il est question dun homme intellectuellement déficient qui se voit proposer l'opportunité de devenir intelligent. Charlie Gordon accepte de servir de cobaye et de subir une opération du cerveau qui augmentera ses capacités intellectuelles."),
 ('9780307792365','La Planete Des Singes',3,1963,'1' and '2',2,208,"Le roman raconte l'histoire de trois hommes qui explorent une planète lointaine similaire à la Terre, où les grands singes sont les espèces dominantes et intelligentes, alors que l'humanité est réduite à l'état animal.</br>Le narrateur, Ulysse Mérou, est capturé par les singes et se retrouve enfermé dans un laboratoire."),
 ('9780307969941','Neuromancien',4,1984,'1',3,270,"Dans un monde hyper-technologique, Case est un ancien pirate informatique âgé de 24 ans. Il est parti sinstaller à Chiba, au Japon, dans l'espoir de trouver un traitement à son mal. Malgré deux mois d'examens et de consultations, ses dégâts neurologiques ne sont toujours pas réparés."),
 ('9780340960196','Dune',5,1965,'1' and '2',3,208,"L'histoire de Dune débute en l'an 10191 après la fondation de la Guilde spatiale. L'univers connu est régi par l'empereur Padishah Shaddam IV, le chef de la Maison Corrino, qui exerce son pouvoir féodal sur la multitude de planètes de l'Imperium, un vaste empire qui s'étend sur des centaines de mondes dans la galaxie."),
 ('9780385249508','La Chute de Hypérion',6,1990,'1' and '2',3,107,"Dans 'La Chute d'Hypérion', les 7 pèlerins du Gritche affrontent des conditions difficiles dans la vallée des Tombeaux du Temps, tandis qu'une guerre intense se déroule dans le ciel entre l'Hégémonie et les Extros. Chacun des pèlerins se prépare pour un face-à-face avec le redoutable Gritche. Pendant ce temps, le cybride Johnny Keats 2, se faisant passer pour le peintre Joseph Severn, observe les événements depuis la perspective de la Présidente de l'Hégémonie, Meina Gladstone. Alors que la guerre prend de l'ampleur, mettant en péril plusieurs planètes, la présidence de Gladstone est contestée par des sénateurs, révélant une conspiration visant à exterminer l'humanité"),
 ('9780613135818','Fondation',7,1951,'1',3,200,"Dans Fondation d'Isaac Asimov, le psychohistorien Hari Seldon fait une prédiction : dans cinq cents ans, l'Empire Galactique s'effondrera et laissera place à 30.000 ans de guerre et de barbarie, mais, selon lui, il est possible de réduire cette période en un seul millénaire."),
 ('9782253087830','Axiomatique',8,1995,'1',4,150,"Dans la nouvelle « Axiomatique », un homme, obsédé par le meutre de sa femme lors d'un braquage, retrouve l'assassin et le questionne sans relâche : « Dis-moi pourquoi tu as tué ma femme. » Mais le meurtrier n'a aucune raison valable à lui donner."),
 ('9782330180805','Silo',9,2012,'1',3,155,"Dans un futur post-apocalyptique indéterminé, quelques milliers de survivants ont établi une société dans un silo souterrain de 144 étages. Les règles de vie sont strictes. Pour avoir le droit de faire un enfant, les couples doivent s'inscrire à une loterie."),
 ('9783746612249','Malevil',10,1972,'1',2,240," À la suite d'une explosion, probablement nucléaire, qui a selon toute vraisemblance ravagé la Terre entière le dimanche de Pâques, en 1977, Emmanuel Comte et ses six compagnons (La Menou, Momo, Peyssou, Meyssonnier, Colin et Thomas) font du château de Malevil, dont la profonde cave leur a permis de survivre, la base de départ de leurs efforts de reconstruction de la civilisation, qui passera également par l'affrontement avec d'autres groupes de survivants, que ce soient des bandes errantes ou des groupes structurés nomades ou sédentaires.
                    Les premières questions font état de l'absence de femmes dans cette région, ce qui pose des problèmes quant à leur renouvellement de génération. L'arrivée de quelques femmes permet de lever cette inquiétude, tout en posant la question de la place de la femme dans leur nouvelle société, et également celle des unions et leur validité face à la situation.");
#------------------------------------------------------------
# Table: _personne
#------------------------------------------------------------

CREATE TABLE personne(
        id     Int  Auto_increment  NOT NULL ,
        nom    Varchar (255) NOT NULL ,
        prenom Varchar (255) NOT NULL
	,CONSTRAINT _personne_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `personne` (id,nom,prenom) VALUES 
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
# Table: _role
#------------------------------------------------------------

CREATE TABLE role(
        id      Int  Auto_increment  NOT NULL ,
        libelle Varchar (255) NOT NULL
	,CONSTRAINT _role_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `role` (id,libelle) VALUES 
 (1,'Ecrivain'),
 (2,'Traducteur');
#------------------------------------------------------------
# Table: _Inscription
#------------------------------------------------------------

CREATE TABLE inscription(
        id  Varchar (255) NOT NULL ,
        mdp Varchar (50) NOT NULL
	,CONSTRAINT inscription_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        isbn Varchar (255) NOT NULL ,
        id   Varchar(255) NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT favoris_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT favoris_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Auteur
#------------------------------------------------------------

CREATE TABLE auteur(
        id       Int NOT NULL ,
        isbn     Varchar (255) NOT NULL ,
        id_role Int NOT NULL
	,CONSTRAINT auteur_PK PRIMARY KEY (id,isbn,id_role)

	,CONSTRAINT auteur_personne_FK FOREIGN KEY (id) REFERENCES personne(id)
	,CONSTRAINT auteur_livre0_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT auteur_role1_FK FOREIGN KEY (id_role) REFERENCES role(id)
)ENGINE=InnoDB;

INSERT INTO `auteur` (id,isbn,id_role) VALUES 
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
# Table: _Commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        isbn        Varchar (255) NOT NULL ,
        id          Varchar(255) NOT NULL,
        commentaire Text NOT NULL
	,CONSTRAINT commentaire_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT commentaire__livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT commentaire__compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _Note
#------------------------------------------------------------

CREATE TABLE note(
        isbn   Varchar (255) NOT NULL ,
        id     Varchar(255) NOT NULL ,
        etoile Int NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (isbn,id)

	,CONSTRAINT note_livre_FK FOREIGN KEY (isbn) REFERENCES livre(isbn)
	,CONSTRAINT note_compte0_FK FOREIGN KEY (id) REFERENCES compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reserve
#------------------------------------------------------------

CREATE TABLE reserve(
        isbn Varchar (255) NOT NULL ,
        id   Varchar(255) NOT NULL ,
        date Date NOT NULL
	,CONSTRAINT reserve_PK PRIMARY KEY (isbn,id)

)ENGINE=InnoDB;
