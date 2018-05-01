CREATE TABLE users(
	ID		 	MEDIUMINT NOT NULL AUTO_INCREMENT,
	nombre		VARCHAR(32) not null,
	email		VARCHAR(32) not null,
	password	VARCHAR(32) not null,
	estatura	INT(3) not null,	       
	peso		INT(3) not null,
	genero 		VARCHAR(1) not null	
)

drop table users;

insert into users(id, nombre, email, password, estatura, peso, genero) values(null,'Rafael', 'rfa.lopez.pena@gmail.com', '12345', '177', '104', 'M')