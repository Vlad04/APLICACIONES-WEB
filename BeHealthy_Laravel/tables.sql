CREATE TABLE users(
	ID		 	MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre		VARCHAR(32) not null,
	email		VARCHAR(32) not null,
	password	VARCHAR(32) not null,
	estatura	INT(3) not null,
	peso		INT(3) not null,
	genero 		VARCHAR(1) not null,
	IMC DOUBLE not null
)
CREATE TABLE rutinas(
	rutinasID	 	MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	muscle		VARCHAR(32) not null,
	exercise		VARCHAR(32) not null,
	repeticions	VARCHAR(32) not null,
	tipoi	INT(3) not null,
)

CREATE TABLE diets (
	id	MEDIUMINT not null AUTO_INCREMENT PRIMARY KEY,
	dieta	Text,
	hora	TIME  null,
)
CREATE TABLE dietsrutins(
	rutinasID	 	MEDIUMINT,
	userID	 	MEDIUMINT
)
ALTER TABLE `dietsrutins` ADD FOREIGN KEY (`usersID`) REFERENCES `users`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `dietsrutins` ADD FOREIGN KEY (`rutinasID`) REFERENCES `rutinas`(`rutinasID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

insert into diets(id, dieta, hora ) values(null,'Ensalada de atun: Atun 100gr, vegetales al gusto, sin mayonesa, 13 galletas abaneras', '14:00:00');

insert into diets(id, dieta, hora ) values(null,'Sandwich de Panela: Panela 100 gr, 1 cucharada de mayonesa ligth, alfalfa, jitomate y cebolla al gusto, 2 rebanadas de pan integral', '20:00:00');

insert into diets(id, dieta, hora ) values(null,'1 taza de Cereal. 1 taza de leche ligth ', '08:00:00');

insert into diets(id, dieta, hora ) values(null,'8 almendras, 7 nueces de la india, o 10 nueces', '08:00:00');

insert into diets(id, dieta, hora ) values(null,'1 Platano', '08:00:00');

insert into diets(id, dieta, hora ) values(null,'carne asada: 120 gramos de carne de rez, 3 tortillas, y 1 taza de guacamole ', '14:00:00');

insert into diets(id, dieta, hora ) values(null,'Sandwich de pavo: 2 rollos de jamon, 2 rebanadas, 2 rebanas de jitomate, 1 rebanada de cebolla, 1/3 de aguacate como aderezo', '20:00:00');

insert into diets(id, dieta, hora ) values(null,'Caldo de pollo: un plato de caldo de pollo con 2 piezas de pollo, sin aagucate, y vegetales al gusto', '14:00:00');

insert into diets(id, dieta, hora ) values(null,'Ensalada Cesar: 300 gr de pollo a la plancha, lechuga al gusto, 1 cucharada de aderexo cesar', '14:00:00');

insert into diets(id, dieta, hora ) values(null,'pollo a la plancha con ensalada: 300gr de pechuga de pollo, lechuga, pepino, espinca, jitomate, 1 cuchara de aderezo italiano', '14:00:00');

insert into diets(id, dieta, hora ) values(null,'3 quesadillas con jamon', '20:00:00');

insert into diets(id, dieta, hora ) values(null,'100 gr de marlin con 2 tostadas', '20:00:00');

insert into diets(id, dieta, hora ) values(null,'claras de huevo, 2 huevos, media taza de espinaca, 1 rebanada de jamon', '08:00:00',)

insert into diets(id, dieta, hora ) values(null,'3 rebanadas de jamon de pavo rellenos de quesocrema', '11:00:00');

	insert into diets(id, dieta, hora ) values(null,'1 taza de pepino', '11:00:00');

insert into diets(id, dieta, hora ) values(null,'2 huevos Benedictos con  2 rebanadas de beagle y crema inglesa', '10:00:00');

insert into diets(id, dieta, hora ) values(null,'200gr de requeson guisado con cebolla y jitomate,  y 10 galletas abaneras', '10:00:00');

ALTER TABLE `users` ADD FOREIGN KEY (`rutinasID`) REFERENCES `rutinas`(`tipoi`) ON DELETE RESTRICT ON UPDATE RESTRICT;
drop table users;

insert into users(id, nombre, email, password, estatura, peso, genero) values(null,'Rafael', 'rfa.lopez.pena@gmail.com', '12345', '177', '104', 'M');
