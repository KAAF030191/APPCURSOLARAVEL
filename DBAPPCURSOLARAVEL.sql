create database DBAPPCURSOLARAVEL;
use DBAPPCURSOLARAVEL;

create table TUsuario
(
idUsuario int auto_increment not null,
nombre varchar(30) not null,
apellido varchar(40) not null,
correoElectronico varchar(30) not null,
contrasenia varchar(700) not null,
fechaNacimiento date not null,
sexo bool not null,
fechaRegistro timestamp not null default current_timestamp,
fechaModificacion timestamp not null default current_timestamp on update current_timestamp,
primary key(idUsuario)
);