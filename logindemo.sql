drop database if exists logindemo;

create database logindemo;

use logindemo;

create table `user` (
  id int primary key auto_increment,
  fname varchar(50) not null,
  lname varchar(100) not null,
  username varchar(50) not null,
  password varchar(255) not null
);