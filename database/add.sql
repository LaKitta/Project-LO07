
ALTER TABLE users ADD 	nom varchar(20) NOT NULL;
ALTER TABLE users ADD     prenom varchar(20);
ALTER TABLE users ADD 	age smallint(3) NOT NULL; 
ALTER TABLE users ADD 	ville varchar(20) NOT NULL; 
ALTER TABLE users ADD 	statu varchar(255); 
ALTER TABLE users ADD 	email varchar(255) NOT NULL; 
ALTER TABLE users ADD 	portable bigint(8); 
ALTER TABLE users ADD 	photo tinytext; 
ALTER TABLE users ADD 	langues tinytext; 
ALTER TABLE users ADD 	phrase longtext; 
ALTER TABLE users ADD 	experience tinytext; 
ALTER TABLE users ADD 	heure_debut int(3) DEFAULT NULL; 
ALTER TABLE users ADD 	heure_fin int(3) DEFAULT NULL; 
ALTER TABLE users ADD 	date_debut date DEFAULT NULL; 
ALTER TABLE users ADD 	date_fin date DEFAULT NULL; 
ALTER TABLE users ADD 	jour varchar(75) DEFAULT NULL; 
ALTER TABLE users ADD 	notemoyen float DEFAULT NULL;