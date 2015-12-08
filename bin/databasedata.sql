CREATE TABLE users(
	id INTEGER PRIMARY KEY,
	cle VARCHAR(32),
	username VARCHAR(50),
	prenom VARCHAR(20) NOT NULL,
	telephone VARCHAR(10),
	email VARCHAR(40) NOT NULL,
	password VARCHAR(255),
	actif BOOL
);

Create TABLE annonces(
iduser INTEGER,
idAnn INTEGER PRIMARY KEY AUTOINCREMENT,
cat VARCHAR(100),
titre VARCHAR (100),
lieu VARCHAR (100),
prix INTEGER,
image VARCHAR(100),
description TEXT,
FOREIGN KEY(iduser) REFERENCES user(id)
);