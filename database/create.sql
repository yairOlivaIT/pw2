drop schema if exists grupo04;
create schema if not exists grupo04;
use grupo04;

create table licencias(
    id integer unsigned auto_increment primary key,
    descripcion varchar(255)
);

create table roles(
    id integer unsigned auto_increment primary key,
    descripcion varchar(255)
);

create table empleados(
    id integer unsigned auto_increment primary key,
    nombre varchar(255),
    apellido varchar(255),
    dni integer unsigned,
    fecha_nacimiento date,
    licencia_id integer unsigned,
    foreign key (licencia_id) references licencias(id)
);

create table users(
    id integer unsigned auto_increment primary key,
    email varchar(255),
    password varchar(255),
    rol_id integer unsigned,
    empleado_id integer unsigned
);