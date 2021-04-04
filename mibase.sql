create database MIBASE;

create table Rol(
	idrol varchar(3),
	descripcion varchar(30),
	primary key (idrol)
	);
create table Persona(
	ci varchar(10),
	nombre_completo varchar(255),
	fecha_de_nacimiento date,
	departamento varchar(2),
	primary key (ci)
	);
create table USUARIO(
	ci varchar(10),
	usuario varchar(30),
	password varchar(18),
	rol varchar(3),
	tema int,
	primary key (ci),
	foreign key (ci) references Persona(ci),
	foreign key (rol) references Rol(idrol)
	);
create table NOTA(
	ci varchar(10),
	sigla varchar(6),
	nota1 float(5,2),
	nota2 float(5,2),
	nota3 float(5,2),
	nota_final float(5,2) generated always as ((nota1+nota2+nota3)-3) stored,
	primary key (ci,sigla),
	foreign key (ci) references Persona(ci)
	);

insert into Rol(idrol,descripcion) values 
('R01','Docente'),
('R02','Estudiante');

insert into Persona(ci,nombre_completo,fecha_de_nacimiento,departamento) values
('69794','PABLO DAZA VICARIO','1998-02-03','02'),
('80672','ALEJANDRO COLOMER JULIAN','2000-01-09','04'),
('66542','SONIA PALMA MARTI','1998-06-28','07'),
('70539','JAVIER GONZALEZ CABEZA','2000-05-03','03'),
('15950','ANDREA CARDOSO','2002-08-11','02'),
('88344','MARIA ANGELES OVIEDO','2000-10-28','07'),
('55904','VICTOR MANUEL GASPAR','1998-12-22','04'),
('14394','IRENE SANTOS','2000-08-05','03'),
('75289','MARIA PILAR','1979-12-11','01'),
('36811','JESUS POVEDA','1979-05-31','02');

insert into USUARIO(ci,usuario,password,rol,tema) values
('69794','PVICARIO','PVICARIO','R02',0),
('80672','AJULIAN','AJULIAN','R02',0),
('66542','SMARTI','SMARTI','R02',0),
('70539','JCABEZA','JCABEZA','R02',0),
('15950','ACARDOSO','ACARDOSO','R02',0),
('88344','MOVIEDO','MOVIEDO','R02',0),
('55904','VGASPAR','VGASPAR','R02',0),
('14394','ISANTOS','ISANTOS','R02',0),
('75289','MPILAR','MPILAR','R01',0),
('36811','JPOVEDA','JPOVEDA','R01',0);
                    
insert into NOTA(ci,sigla,nota1,nota2,nota3) values
('69794','INF282',52,70,48),
('69794','INF273',30,20,64),  
('69794','MAT124',60,90,51),
('80672','INF282',60,84,50),
('80672','MAT124',72,84,80),
('80672','INF329',16,69,56),            
('66542','INF273',57,44,29),
('66542','INF111',46,92,55),
('66542','LAB111',76,88,31),
('70539','INF111',99,55,66),
('70539','LAB111',79,94,38),
('70539','MAT114',35,92,92),
('15950','MAT114',31,63,35),
('15950','INF273',60,46,71),
('15950','INF329',81,31,44),
('88344','LAB121',42,27,85),
('88344','MAT114',92,45,26),
('88344','INF121',12,17,96),
('55904','LAB121',29,35,74),
('55904','INF121',63,88,63),
('55904','LIN116',90,16,76),
('14394','INF111',35,61,69),
('14394','LAB121',65,86,58),
('14394','MAT124',93,96,55);