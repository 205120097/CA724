create database loginsystem;
use loginsystem;
CREATE TABLE users (
	userid int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    email varchar(255),
    password varchar(255),
	PRIMARY KEY (userid)

);

alter table users add create_datetime datetime;



select * from users;




delete from users where userid=5;

CREATE TABLE FriendRequests (
	userid int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    username varchar(255),
    email varchar(255),
	degreeofFriendship int,
    relation int,
    commonInterest int,
    CommonInstitute int,
    Age int,
    Rating int
);
select * from FriendRequests;
INSERT INTO FriendRequests 
VALUES

(205120003, 'Sagar', '205120002@nitt.edu',5,6,5,10,10,7),
(205120004, 'Sonu', '205120002@nitt.edu',5,6,5,10,10,7),
(205120005, 'Payal', '205120002@nitt.edu',5,0,5,10,10,6),
(205120006, 'Sangam', '205120002@nitt.edu',5,6,5,10,10,7),
(205120007, 'Ruchi', '205120002@nitt.edu',5,5,1,10,10,6),
(205120008, 'Ashish', '205120002@nitt.edu',10,10,10,10,10,10),
(205120009, 'Praveen', '205120002@nitt.edu',5,5,1,10,10,6),
(205120010, 'alok', '205120002@nitt.edu',5,6,5,10,10,7),
(205120011, 'Mehtaji', '205120002@nitt.edu',5,6,5,10,10,7),
(205120012, 'Hekr', '205120002@nitt.edu',5,5,5,0,0,2),
(205120013, 'Bulega', '205120002@nitt.edu',0,0,10,0,0,1);
