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
