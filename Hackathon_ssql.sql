create database hackathon;

use hackathon;

create table fazenda(
id int auto_increment not null primary key,
nome varchar(64) not null);

create table retiro(
id int auto_increment not null primary key,
nome varchar(64) not null,
id_fazenda int not null,
foreign key (id_fazenda) references fazenda(id)
);

select*from retiro;

create table pasto(
id int auto_increment not null primary key,
numero_pasto int not null,
tamanho int default 0,
id_retiro int not null,
foreign key (id_retiro) references retiro(id) );


select * from pasto;