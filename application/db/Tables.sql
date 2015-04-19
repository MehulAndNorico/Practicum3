CREATE TABLE gebruikers (
	nickname      		VARCHAR(20)    	NOT NULL,
	naam				VARCHAR(40)		NOT NULL,
	emailadres			VARCHAR(30)		NOT NULL,
	wachtwoord			VARCHAR(32)		NOT NULL,
	geslacht			VARCHAR(15)		NOT NULL,
	geslachtsvoorkeur	VARCHAR(100)	NOT NULL,
	geboortedatum  		DATE	 		NOT NULL,
	leeftijdmin			INTEGER			NOT NULL,
	leeftijdmax			INTEGER			NOT NULL,
	beschrijving		VARCHAR(500)	NOT NULL,
	persoonlijkheidstype		VARCHAR(12),	NOT NULL,
	persoonlijkheidsvoorkeur	VARCHAR(12),	NOT NULL,
	CONSTRAINT gebruikers_pk PRIMARY KEY (nickname)
);

CREATE TABLE merken(
	merk				VARCHAR(15)		NOT NULL,
	CONSTRAINT merken_pk PRIMARY KEY (merk),
);

CREATE TABLE merkvoorkeuren(
	nickname      		VARCHAR(20)   	NOT NULL,
	merk				VARCHAR(15)		NOT NULL,
	CONSTRAINT merkvoorkeuren_pk PRIMARY KEY (nickname, merk),
	CONSTRAINT merkvoorkeuren_fk1 FOREIGN KEY (nickname) REFERENCES gebruikers(nickname),
	CONSTRAINT merkvoorkeuren_fk2 FOREIGN KEY (merk) REFERENCES merken(merk)
);
