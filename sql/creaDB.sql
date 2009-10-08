drop table if exists equipo;
drop table if exists jugador;

create table equipo(
  nombre VARCHAR(100) NOT NULL PRIMARY KEY,
  capitan VARCHAR(100),
  colorCasa VARCHAR(100),
  colorVisitante VARCHAR(100),
  arbitro1 VARCHAR(100),
  arbitro2 VARCHAR(100),
  canceloOK INT,
  CONSTRAINT capitan_Jugador FOREIGN KEY (capitan) REFERENCES jugador (nombre), 
  CONSTRAINT arbitro1_Jugador FOREIGN KEY (arbitro1) REFERENCES jugador (nombre), 
  CONSTRAINT arbitro2_Jugador FOREIGN KEY (arbitro2) REFERENCES jugador (nombre) 
);

create table jugador(
  nombre VARCHAR(100) NOT NULL PRIMARY KEY,
  carnet VARCHAR(100),
  email VARCHAR(100),
  equipo VARCHAR(100),
  carrera VARCHAR(100),
  canceloOK INT,
  CONSTRAINT equipo_Jugador FOREIGN KEY (equipo) REFERENCES equipo(nombre) 
);

insert into jugador values ("Elias","04-37261","eliasmatheus@yahoo.com","Elias Team","Computacion",1);
insert into jugador values ("Yudith","04-37261","eliasmatheus@yahoo.com","Elias Team","Computacion",1);
insert into jugador values ("Elias 3","04-37261","eliasmatheus@yahoo.com","Elias Team","Computacion",1);
insert into jugador values ("Elias 4","04-37261","eliasmatheus@yahoo.com","Elias Team","Computacion",1);
insert into jugador values ("Elias 5","04-37261","eliasmatheus@yahoo.com","Elias Team","Computacion",1);
insert into equipo values ("Elias Team","Elias", "Azul", "Rojo","Elias","Elias",1);
insert into equipo values ("Chicas Polar","Elias 2", "Azul", "Rojo","Elias","Elias",1);
insert into equipo values ("Profesores","Yudith", "Azul", "Rojo","Elias","Elias",1);
