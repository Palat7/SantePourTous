USE automobile;

DELETE FROM accessoire_automobile;
DROP TABLE accessoire_automobile;

DELETE FROM accessoire;
DROP TABLE accessoire;

DELETE FROM info_accessoire;
DROP TABLE info_accessoire;

DELETE FROM automobile;
DROP TABLE automobile;

DELETE FROM utilisateur;
DROP TABLE utilisateur;

DROP DATABASE automobile;

CREATE DATABASE automobile DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE automobile;

CREATE TABLE info_accessoire (
  code                  INT(10),
  nom                   VARCHAR(255),
  prix_unitaire_suggere	FLOAT(10,2),
  CONSTRAINT info_accessoire_pk PRIMARY KEY (code)
);

CREATE TABLE accessoire (
  id                    INT(10),
  code                  INT(10),
  quantite              INT(10),
  prix_unitaire         FLOAT(10,2),
  CONSTRAINT accessoire_pk PRIMARY KEY (id),
  CONSTRAINT accessoire_fk1 FOREIGN KEY (code) REFERENCES info_accessoire(code)
);

CREATE TABLE automobile (
  id                    INT(10),
  modele                VARCHAR(255),
  prix_base             FLOAT(10,2),
  couleur               VARCHAR(255),
  CONSTRAINT automobile_pk PRIMARY KEY (id)
);

CREATE TABLE accessoire_automobile (
  id_auto               INT(10),
  id_accessoire         INT(10),
  CONSTRAINT accessoire_automobile_pk PRIMARY KEY (id_auto,id_accessoire),
  CONSTRAINT accessoire_automobile_fk1 FOREIGN KEY (id_auto) REFERENCES automobile(id) ON DELETE CASCADE,
  CONSTRAINT accessoire_automobile_fk2 FOREIGN KEY (id_accessoire) REFERENCES accessoire(id) ON DELETE CASCADE
);

INSERT INTO info_accessoire VALUES (51,'Siège Chauffant',800.00);
INSERT INTO info_accessoire VALUES (52,'Caméra arrière',200.00);
INSERT INTO info_accessoire VALUES (53,'Moniteur TV',195.00);
INSERT INTO info_accessoire VALUES (54,'Aileron arrière',450.00);
INSERT INTO info_accessoire VALUES (55,'Jante de roue de luxe',250.00);

INSERT INTO automobile VALUES (101,'Sportive CX',45000.0,'bleue indigo');
INSERT INTO accessoire VALUES (1010,51,2,700.0);
INSERT INTO accessoire VALUES (1011,52,1,200.0);
INSERT INTO accessoire VALUES (1012,53,3,150.0);
INSERT INTO accessoire_automobile VALUES (101,1010);
INSERT INTO accessoire_automobile VALUES (101,1011);
INSERT INTO accessoire_automobile VALUES (101,1012);

INSERT INTO automobile VALUES (102,'Sportive CX',45000.0,'rouge écarlate');
INSERT INTO accessoire VALUES (1020,54,1,250.0);
INSERT INTO accessoire_automobile VALUES (102,1020);

INSERT INTO automobile VALUES (103,'Berline LS',35000.0,'bleue indigo');

INSERT INTO automobile VALUES (104,'Coupé De Ville',50000.0,'verte émeraude');
INSERT INTO accessoire VALUES (1040,51,5,600.0);
INSERT INTO accessoire VALUES (1041,52,1,200.0);
INSERT INTO accessoire_automobile VALUES (104,1040);
INSERT INTO accessoire_automobile VALUES (104,1041);


CREATE TABLE utilisateur (
  nom_utilisateur   VARCHAR(255),
  mot_passe         VARCHAR(255),
  CONSTRAINT user_pk PRIMARY KEY (nom_utilisateur)
);

INSERT INTO utilisateur VALUES ('root','root');
INSERT INTO utilisateur VALUES ('moi','1234');
INSERT INTO utilisateur VALUES ('bob','léponje');
INSERT INTO utilisateur VALUES ('patrick','létoile');
