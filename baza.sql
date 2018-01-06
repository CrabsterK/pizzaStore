DROP DATABASE IF EXISTS psw;

CREATE DATABASE psw;

USE psw;

CREATE TABLE users
(
   userID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   userLogin varchar(16) NOT NULL UNIQUE,
   userPassword varchar(25) NOT NULL,
   userEmail varchar(30),
   userPhone varchar(9),
   userName varchar(25),
   userLastname varchar(20),
   userBirthday date
);
