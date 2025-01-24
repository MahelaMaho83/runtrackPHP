-- Création de la table "etudiants"
CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    naissance DATE NOT NULL,
    sexe VARCHAR(25) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Création de la table "etage"
CREATE TABLE etage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    numero INT NOT NULL,
    superficie INT NOT NULL
);

-- Création de la table "salles"
CREATE TABLE salles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    id_etage INT NOT NULL,
    capacite INT NOT NULL,
    FOREIGN KEY (id_etage) REFERENCES etage(id)
);

-- Insertion des étudiants dans la table "etudiants"
INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- Insertion des étages dans la table "etage"
INSERT INTO etage (id, nom, numero, superficie) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- Insertion des salles dans la table "salles"
INSERT INTO salles (id, nom, id_etage, capacite) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

-- Requête pour sélectionner tous les champs de la table "etudiants"
SELECT * FROM etudiants;

-- Requête pour sélectionner le nom et la capacité de la table "salles"
SELECT nom, capacite FROM salles;

-- Requête pour sélectionner le prénom, le nom et la date de naissance des étudiantes
SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme';

-- Requête pour sélectionner les informations des étudiants dont le prénom commence par un "T"
SELECT * FROM etudiants WHERE prenom LIKE 'T%';

-- Requête pour sélectionner l'ensemble des informations des étudiants qui ont plus de 18 ans
SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;

-- Requête pour compter le nombre d'étudiants
SELECT COUNT(*) AS nombre_etudiants FROM etudiants;

-- Requête pour sélectionner l'ensemble des informations des étudiants qui ont moins de 18 ans
SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18;

-- Requête pour calculer la superficie totale de l'ensemble des étages
SELECT SUM(superficie) AS superficie_totale FROM etage;

-- Requête pour calculer la somme des capacités des salles
SELECT SUM(capacite) AS capacite_totale FROM salles;

-- Requête pour sélectionner l'ensemble des salles triées par capacité décroissante
SELECT * FROM salles ORDER BY capacite DESC;

-- Requête pour calculer la capacité moyenne des salles
SELECT AVG(capacite) AS capacite_moyenne FROM salles;

-- Requête pour sélectionner le prénom, le nom et la date de naissance des étudiants nés entre 1998 et 2018
SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018;
