create schema if not exists logistcs;
use logistcs;

create table user(
    id integer unsigned primary key auto_increment,
    email varchar(255),
    password varchar(255)
);