set names utf8;
drop database if exists DATABASENAME;
create database DATABASENAME default character set utf8 collate utf8_polish_ci;
grant all on DATABASENAME.* to redaktor@localhost identified by 'tajnehaslo';
flush privileges;
use DATABASENAME;