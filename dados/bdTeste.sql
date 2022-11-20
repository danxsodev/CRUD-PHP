create database bdTeste;

use bdTeste;

create table tbUsers (
id int primary key auto_increment,
username varchar(20) not null,
senha varchar(10) not null,
sexo char(2) not null);

insert into tbUsers values (default, 'Robson', '1234', 'M');

desc tbUsers;

select * from tbUsers;
