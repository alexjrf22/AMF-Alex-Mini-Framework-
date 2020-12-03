DROP DATABASE IF EXISTS projeto1;

create database projeto1;
use projeto1;

DROP TABLE IF EXISTS clientes;



create table clientes
(
    id int not null auto_increment,
    nome varchar (255) not null,
    email varchar (255) not null,
    primary key (id)
);


