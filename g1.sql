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
	`résumé` VARCHAR(4096) NOT NULL,
	`editeur`	INTEGER NOT NULL,
	`annee`	INTEGER,
	`genre`	INTEGER,
	`langue`	INTEGER,
	`nbpages`	INTEGER,
	PRIMARY KEY(isbn)
);
INSERT INTO `Livre` (isbn,titre,editeur,annee,genre,langue,nbpages,résumé) VALUES ('9780090898305','2001:' 'L''Odyssée De' ' L''espace',1,2001,'2'and '1',1,648,"À la fin du second millénaire, les hommes se sont lancés à la conquête du système solaire. Un jour ils partiront à la conquête des étoiles. Qu'y trouveront-ils ? Leurs égaux ou leurs maîtres ? Ce roman essaye dapporter une réponse à cette question"),
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
