create database if not exists hr;
use hr;
create table if not exists employees(
    userid int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    first_name varchar(55) not null,
    last_name varchar(55) not null,
    city_name varchar(55) not null,
    email varchar(50) not null
);