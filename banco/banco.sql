create database granppz 
default charset utf8
default collate utf8_general_ci;

use granppz;

create table cadastro(
    id int not null AUTO_INCREMENT,
    nome varchar(30) not null, 
    sobrenome varchar(30) not null,
    user varchar(15) not null unique,
    nasc date not null,
    senha varchar(25) not null,
    primary key(id)
);

create table post(
    id_post int not null AUTO_INCREMENT,
    id_user int not null,
    titulo varchar(72),
    postagem varchar(620),

);