drop database if exists cadastro;
create database cadastro;
use cadastro;

create table usuario(
	id_usuario int(4) primary key auto_increment,
	nome_usuario varchar(50) not null,   
    email_usuario varchar(50) not null,
    fone_usuario varchar(30) null,
    senha_usuario varchar(30) not null,
    foto_usuario varchar(100) null
);
/*
insert into usuario
(nome_usuario, email_usuario, fone_usuario, senha_usuario)
values ('Timiaki', 'miti@gmail.com','(18)99999-9999', '12345');

select * from usuario;

alterar dados
update usuario set nome_usuario = "", email_usuario= "" where id_usuario =
*/