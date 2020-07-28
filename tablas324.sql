-------------------------------
base de datos= academico_3
--------FLUJO----------
create table estudiante (
ci_estudiante varchar(10),
nombre varchar(100),
apellidos varchar(100),
facultad varchar(100),
carrera varchar(50),
PRIMARY key(ci_estudiante)
);

INSERT INTO usuario VALUES ('1','Alvaro','Mamani','Agronomia','Ambiental');
INSERT INTO usuario VALUES ('2','Juan','Valencio','Derecho','Civil');
INSERT INTO usuario VALUES ('3','Melany','Conde','Ciencias Puras y Naturales','Informatica');

create table nutriologo (
ci_nutriologo varchar(10),
nombre varchar(100),
apellidos varchar(100),
PRIMARY key(ci_kardex)
);

INSERT INTO nutriologo VALUES ('11','Angela','Arenas');
INSERT INTO nutriologo VALUES ('12','Lourdes','Quenta');

create table login (
ci varchar(10) not null,
clave varchar(20) not null,
);

INSERT INTO login VALUES ('11','aa');
INSERT INTO login VALUES ('12','ab');
INSERT INTO login VALUES ('1','holabb');

create table cronograma (
facultad varchar(100),
fecha_inicio date,
fecha_fin date,
hora_inicio varchar(6),
hora_fin varchar(6)
);

insert into cronograma values('Agronomia','2020-08-01','2020-08-22','09:00','18:30');
insert into cronograma values('Ciencias Geologicas','2020-08-25','2020-09-10','09:00','18:30');
insert into cronograma values('Ciencias Puras y Naturales','2020-09-11','2020-09-18','09:00','18:30');
insert into cronograma values('Ciencias Farmaceuticas y Bioquimica','2020-09-19','2020-09-25','09:00','18:30');
insert into cronograma values('Ciencias Economicas y Finanacieras','2020-09-26','2020-10-07','09:00','18:30');
insert into cronograma values('Medicina, Nutricion, Enfermeria, Tecnologia Medica y Programas','2020-10-08','2020-10-19','09:00','18:30');
insert into cronograma values('Odontologia','2020-10-22','2020-10-25','09:00','18:30');
insert into cronograma values('Arquitectura y Artes','2020-08-11','2020-08-13','09:00','18:30');
insert into cronograma values('Ciencias Sociales','2020-08-14','2020-08-28','09:00','18:30');
insert into cronograma values('Derecho','2020-08-29','2020-09-13','09:00','18:30');
insert into cronograma values('Humanidades y Ciencias de la Educacion','2020-09-17','2020-09-31','09:00','18:30');
insert into cronograma values('Ingenieria','2020-10-01','2020-10-14','09:00','18:30');
insert into cronograma values('Tecnologia','2020-10-15','2020-10-24','09:00','18:30');

create table valoracion (
ci_estudiante varchar(10),
peso double (6,2),
talla double (3,2), 
estado varchar(100)
);

insert into valoracion values('1',70,1.65,'Normal');

(peso en Kilogramos)/(altura en cm * altura en cm)
INDICE DE MASA CORPORAL
create table indicecorporal (
masainf double (6,2),
masaext double (6,2),
clasificacion varchar(100),
riesgo varchar(50)
);

insert into indicecorporal values (10,18.5,'Deficit de masa corporal','Bajo (riesgo de enfermedades)');
insert into indicecorporal values (18.5,24.9,'Masa corporal normal','Normal');
insert into indicecorporal values (25.0,29.9,'Sobrepeso','Elevado');
insert into indicecorporal values (30.0,34.9,'Obesidad leve','Alto');
insert into indicecorporal values (35.0,39.9,'Obesidad media','Muy alto');
insert into indicecorporal values (39.9,50,'Obesidad morbida','Inminente');

create table historial (
ci_estudiante varchar(10),
nombre varchar(100),
apellidos varchar(100),
peso double (6,2),
talla double (3,2), 
estado varchar(100)
);

insert into historial values('1','Alvaro','Mamani',70,1.65,'Normal');
	insert into historial values('1','','',79,1.65,'Normal');

-------------------------------
base de datos= flujo2
--------FLUJO----------
--// proceso
create table proceso (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSiguiente varchar(3),
tipo varchar(2),
codRol varchar(2),
pantalla varchar(40)
);

insert into proceso values ('F1','P1','P2','I','E','averigua.php');
insert into proceso values ('F1','P2','P3','P','E','presentarse.php');
insert into proceso values ('F1','P3',null,'C','N','validarfecha.php');
insert into proceso values ('F1','P4',null,'C','N','validarnuevo.php');
insert into proceso values ('F1','P6','P7','C','N','registrardatos.php');
insert into proceso values ('F1','P7','P8','P','N','registrarvaloracion.php');
insert into proceso values ('F1','P8','P9','F','N','historial.php');
insert into proceso values ('F1','P5','P10','F','N','noatencion.php');

create table procesocon (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSi varchar(3),
codProcesoNo varchar(3)
);

insert into procesocon values('F1','P3','P4','P5');
insert into procesocon values('F1','P4','P6','P7');

