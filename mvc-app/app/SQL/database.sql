CREATE DATABASE cadastro_MVC;
use cadastro_MVC;

create table pessoas (
id int auto_increment primary key,
nome varchar(50) not null,
email varchar(50) not null unique,
idade int not null
);