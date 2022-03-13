
CREATE DATABASE market;

CREATE TABLE user (
	id varchar(10) NOT NULL PRIMARY KEY,
	pw varchar(10) not NULL,
	nick varchar(32) not NULL,
	email varchar(100) NULL,
	phone varchar(13) not NULL,
	cash int default 100000
);


CREATE TABLE noticeboard (
  B_num int(11) unsigned NOT NULL PRIMARY KEY auto_increment,
  B_passwd varchar(10) not NULL,
  writer varchar(10) not NULL,
  title varchar(70) not NULL,
  comment text,
  date datetime not NULL,
  view int unsigned not null default 0
);


CREATE TABLE product (
	P_num int(11) unsigned NOT NULL PRIMARY KEY auto_increment,
	prod_name varchar(20) NOT NULL,
	price int(20) NOT NULL,
	kind varchar(20) NOT NULL
);