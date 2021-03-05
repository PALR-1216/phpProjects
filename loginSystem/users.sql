create database if not exists users;
use users;
create table if not exists employees(
    id int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    myUser varchar(55) not null,
    email varchar(55) not null,
    pass varchar(55) not null
);