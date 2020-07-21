base de datos=academico

/*create table persona (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
fecha_nac date,
primary key(ci)
);

create table usuario (
ci varchar(10),
primary key(ci),
foreign key(ci) references persona
);

create table nutriologo (
ci varchar(10),
clave varchar(20),
primary key(ci),
foreign key(ci) references persona
);*/

----------------------
create table persona (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
fecha_nac date,
primary key(ci)
);

INSERT INTO persona VALUES ('1','Alvaro','Vallejos','1998-02-22');
INSERT INTO persona VALUES ('1','Alvaro','Vallejos','1998-02-22');
INSERT INTO persona VALUES ('11','Melany','Conde','1980-09-20');

create table usuario (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
PRIMARY key(ci)
);

INSERT INTO usuario VALUES ('1','Alvaro','Mamani');
INSERT INTO usuario VALUES ('2','Juan','Valencio');
INSERT INTO usuario VALUES ('3','Melany','Conde');


create table usuariologin (
ci varchar(10),
clave varchar(20),
primary key(ci)
);

INSERT INTO usuariologin VALUES ('1','12');
INSERT INTO usuariologin VALUES ('2','123');
INSERT INTO usuariologin VALUES ('3','1234');

create table nutriologo (
ci varchar(10),
nombre varchar(100),
apellidos varchar(100),
primary key(ci)
);

INSERT INTO nutriologo VALUES ('11','Angela','Arenas');
INSERT INTO nutriologo VALUES ('12','Lourdes','Quenta');
INSERT INTO nutriologo VALUES ('13','Sonia','Mamani');


create table nutriologologin (
ci varchar(10),
clave varchar(10),
primary key(ci)
);

INSERT INTO nutriologologin VALUES ('11','111');
INSERT INTO nutriologologin VALUES ('12','112');
INSERT INTO nutriologologin VALUES ('13','113');

create table paciente (
codU varchar(10), 
nombre varchar(100),
apellidos varchar(100),
peso double (6,2),
talla double (3,2) 
);

INSERT INTO paciente VALUES ('1','Alvaro','Mamani',55.0,1.60);
INSERT INTO paciente VALUES ('2','Juan','Valencio',70.5,1.74);
INSERT INTO paciente VALUES ('3','Melany','Conde',100.0,0.0);


create table reserva (
codU varchar(10), 
fecha_reserva date,
hora_reserva time
);

INSERT INTO reserva VALUES ('1','2020-07-24','09:00');

create table control (
codU varchar(10), 
peso double (6,2),
talla double (3,2)
);

INSERT INTO control VALUES ('1',55.0,1.60);
INSERT INTO control VALUES ('2',70.5,1.74);


-------------------------------
base de datos= flujo
--------FLUJO----------
--// proceso
create table proceso (
codProceso varchar(3),
codFlujo varchar(2),
codProcesoSiguiente varchar(3),
tipo varchar(2),
codRol varchar(2),
pantalla varchar(20)
);

create table procesoCon (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSi varchar(3),
codProcesoNo varchar(3)
);

-------bandeja de entrada------
--// seguimiento
create table seguimiento (
fecha_agen date,
nroTramite int,
codFlujo varchar(2),
codProceso varchar(3),
codUsuario varchar(2),
);
-------bandeja de salida--------










