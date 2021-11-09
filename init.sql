CREATE DATABASE CardWorld;

  use CardWorld;

  CREATE TABLE Cards (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CardName VARCHAR(30) NOT NULL,
    SetName VARCHAR(30) ,
    CardNumber INT(11) NOT NULL,
    CardCondition VARCHAR(50),
    CardQuantity Int(11),
    CardPrice DEC(11,2),
    CardRarity VARCHAR(11),
    CardType VARCHAR(11)
  );
  
  CREATE TABLE YugiohCards (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CardName VARCHAR(30) NOT NULL,
    SetName VARCHAR(30) ,
    CardNumber INT(11) NOT NULL,
    CardCondition VARCHAR(50),
    CardQuantity Int(11),
    CardPrice DEC(11,2),
    CardRarity VARCHAR(11),
    CardAttribute VARCHAR(11)
  );
  
  CREATE TABLE CSCUsers (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) ,
    Email   VARCHAR(30) NOT NULL,
    UserName VARCHAR (30) NOT NULL,
    UserPassword VARCHAR (30) NOT NULL
  );