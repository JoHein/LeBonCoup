CREATE TABLE users(

	cle VARCHAR(32),
	nom VARCHAR(20) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	telephone VARCHAR(10),
	mail VARCHAR(40) NOT NULL,
	password VARCHAR(40) NOT NULL,
	actif BOOL,
	PRIMARY KEY (mail)
);

CREATE TABLE annCPU(

	reference SMALLINT UNSIGNED AUTO_INCREMENT,
	titre VARCHAR(20),
	prix INTEGER,
	image VARCHAR(50),
	description TEXT,
	frequence FLOAT(1),
	support VARCHAR(30),
	PRIMARY KEY (reference)	
);