create database bd_teste;

use bd_teste;

create table tbl_teste (
id_teste int primary key auto_increment,
nm_teste varchar(20) not null,
senha_teste varchar(10) not null,
sexo_teste char(2) not null);

insert into tbl_teste 
values (
	default,
	'Robson', 
	'1234', 
	'M'
);

desc tbl_teste;

select * from tbl_teste;