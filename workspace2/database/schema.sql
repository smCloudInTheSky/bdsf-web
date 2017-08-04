drop table eleves;
drop table bibliotheque;
drop table emprunts;
drop type objet;



CREATE TYPE objet AS enum ('SF', 'BD', 'CO', 'XB');
--SF pour les livres même non SF
--BD pour les bandes dessinnées
--CO pour les comics
--XB pour les exclusifs BDSF



create table eleves(
  pseudo varchar(150) primary key not null,
  nom varchar(150) not null,
  prenom varchar(150) not null,
  grade varchar(150) not null,
  emprunts integer,
  mdp varchar(100) not null,
  points integer,
  mail varchar(100) not null,
  nominator varchar(150) not null,
  profilor varchar(150)
);

create table bibliotheque(
  id_ouvrage int primary key not null,
  type_oeuvre objet not null,
  statut integer not null,
  etat integer,
  couverture integer,
  titre varchar(150) not null,
  sous_titre varchar(150),
  serie varchar(100),
  tome integer,
  auteur1 varchar(100),
  auteur2 varchar(100),
  categorie varchar(100),
  edition varchar(100),
  annee integer,
  image integer
  --CONSTRAINT typage objet as enum ('SF', 'BD', 'CO', 'XB')
);

create table emprunts(
  id_emprunt varchar(300) primary key not null,
  id_eleve varchar(150) not null,
  id_oeuvre int not null,
  date_emprunt date not null,
  date_retour date not null,
  etat_emprunte integer
);



\copy bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,sous_titre,serie,tome,auteur1,auteur2,categorie,edition,annee,image) FROM '~/workspace/database/fill_bibliotheque.csv' WITH DELIMITER AS ','
\copy eleves (pseudo, nom, prenom, grade, emprunts, points, mail, mdp, nominator) FROM '~/workspace/database/fill_eleves.csv' WITH DELIMITER AS ','
\copy emprunts (id_emprunt, id_eleve, id_oeuvre, date_emprunt, date_retour, etat_emprunte)FROM '~/workspace/database/fill_emprunts.csv' WITH DELIMITER AS ','

UPDATE eleves SET profilor = 'Lord of the Mordor' WHERE pseudo='Lord of the Mordor';
UPDATE eleves SET profilor = 'Cthulhu' WHERE pseudo='Cthulhu';
UPDATE eleves SET profilor = 'Denescor' WHERE pseudo='Denescor';
UPDATE eleves SET profilor = 'Cloud' WHERE pseudo='Cloud';
UPDATE eleves SET profilor = 'TeDeum' WHERE pseudo='TeDeum';


--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,serie,tome,auteur1,auteur2,categorie,edition,annee) values (1,'BD',0,9,0,'Sunstone','Sunstone',1,'Stjepan Sejic','Stjepan Sejic','BDSM','Panini Comics',2014);
--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,serie,tome,auteur1,auteur2,categorie,edition,annee) values (2,'BD',1,10,1,'Les quantités négligeables','Le combat ordinaire',2,'Manu Larcenet','Manu Marcenet','Sans intéret','Dargaud',2006);
--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,serie,tome,auteur1,auteur2,categorie,edition,annee) values (3,'BD',1,10,1,'Le combat ordinaire','Le combat ordinaire',1,'Manu Larcenet','dessinateur','Sans intérêt','Dargaud',2006);
--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,serie,tome,auteur1,auteur2,categorie,edition,annee) values (4,'XB',1,10,1,'Les histoires débiles du père Paro et de son ami Die','La trilogie du Blond aux Yeux Bleus',1,'Père Paro','Ami Die','Humour','PDF',2012);
--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,serie,tome,auteur1,auteur2,categorie,edition,annee) values (5,'XB',1,10,1,'Les histoires débiles du père Paro et de son ami Die II le retour','La trilogie du Blond aux Yeux Bleus',2,'Père Paro','Ami Die','Humour','PDF',2013);
--insert into bibliotheque (id_ouvrage,type_oeuvre,statut,etat,couverture,titre,auteur1,categorie,edition,annee) values (6,'XB',1,10,1,'Le gardien de Denescor','Valentin Carpentier','Fantaisie','PDF',2016);


--insert into eleves (pseudo, nom, prenom, grade, emprunts, points, mail, mdp) values ('Cloud','Maret','Sylvain','Administrateur','1','10','sylvain.maret@hotmail.fr','JeSuisUnPD');
--insert into eleves (pseudo, nom, prenom, grade, emprunts, points, mail, mdp) values ('Lord of the Mordor','Annatar','Sauron','Archi-dictateur','0','10','sauron.unique@hotmail.fr','Morgoth');
--insert into eleves (pseudo, nom, prenom, grade, emprunts, points, mail, mdp) values ('Grievous','Quymaen Jai','Shaleel','Général','0','10','general.grievous@CSI.fr','I hate obi-wan !');
--insert into eleves (pseudo, nom, prenom, grade, emprunts, points, mail, mdp) values ('Le Diable','Satan','Lucifer','Démon','666','10','satan.official@hell.fr','0000');

--insert into emprunts (id_emprunt, id_eleve, id_oeuvre, date_emprunt, date_retour, etat_emprunte) values (1,'Cloud',1,'2017-04-19','2017-04-26',9);
