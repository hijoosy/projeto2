mysql -u root


create database projeto2;

use projeto2;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(30) not null,
    email varchar(30) not null,
    telefone varchar(20) not null,
    dtcadastro date 
);

insert into cliente value
(null, 'ana', 'ana@gmail.com','2192-5864','2022-11-03');

select * from cliente;