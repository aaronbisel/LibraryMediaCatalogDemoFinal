DROP DATABASE IF EXISTS `LibraryMediaCatalog`;

CREATE DATABASE IF NOT EXISTS `LibraryMediaCatalog`;

USE `LibraryMediaCatalog`;

CREATE TABLE IF NOT EXISTS `User` (
	`user_ID` int(20) PRIMARY KEY,
	`acct_ID` int(20) NOT NULL,
	`fname` text(20) NOT NULL,
	`lname` text(20) NOT NULL,
	`email` text(20) NOT NULL,
	`phone` text(20) NOT NULL,
	`sex` text(20) NOT NULL,
);

INSERT INTO `User`
(`user_ID`, `acct_ID`, `fname`, `lname`, `email`, `phone`, `sex`)
VALUES
	(1001, 2001, 'Jeffrey', 'Winger', 'jwinger@gcc.edu', '(303) 624-1134', 'male'),
	(1002, 2002, 'Annie', 'Edison', 'aedison@gcc.edu', '(719) 325-9561', 'female'),
	(1003, 2003, 'Troy', 'Barnes',. 'tbarnes@gcc.edu' '(303) 751-8097' , 'male'),
	(1004, 2004, 'Abed', 'Nadir', 'anadir@gcc.edu', '(303) 867-5309', 'male'),
	(1005, 2005, 'Shirley', 'Bennett'. 'sbennett@gcc.edu', '(719) 335-290*', 'female'),
	(1006, 2006, 'Britta', 'Perry', 'bperry@gcc.edu', '(212) 169-2619', 'female');

CREATE TABLE IF NOT EXISTS `Account` (
	`acct_ID` int(20) PRIMARY KEY,
	`password` varchar(50) NOT NULL,
);

INSERT INTO `Account`
(`acct_ID`, `password`)
VALUES
	(2001, 'Number1247'),
	(2002, 'theBandit25'),
	(2003, 'TBone'),
	(2004, 'Blorgon3'),
	(2005, 'HeWillRise'),
	(2006, 'ridoftheB');
	
CREATE TABLE IF NOT EXISTS `Reservation` (
	`reservation_ID` int(20) PRIMARY KEY,
	`media_ID` int(20) NOT NULL,
	`acct_ID` int(20) NOT NULL,
	FOREIGN KEY (`acct_ID`) REFERENCES `Account`(`acct_ID`)
);

INSERT INTO `Reservation`
(`reservation_ID`, `media_ID`, `acct_ID`)
VALUES
	(9001, 3001, 2006),
	(9013, 3013, 2002),
	(9008, 3008, 2001),
	(9010, 3010, 2003);
	
CREATE TABLE IF NOT EXISTS `MediaCatalog` (
	`media_ID` int(20) PRIMARY KEY,
	`reservation_ID` int(20),
	`availabilityStatus` boolean NOT NULL,
	FOREIGN KEY (`reservation_ID`) REFERENCES `Reservation`(`reservation_ID`)
);

INSERT INTO `MediaCatalog`
(`media_ID`,`reservation_ID`, `availabilityStatus`)
VALUES
	(3001, 9001, false),
	(3002, 9002, true),
	(3003, 9003, true),
	(3004, 9004, true),
	(3005, 9005, true),
	(3006, 9006, true),
	(3007, 9007, true),
	(3008, 9008, false),
	(3009, 9009, true),
	(3010, 9010, false),
	(3011, 9011, true),
	(3012, 9012, true),
	(3013, 9013, false),
	(3014, 9014, true),
	(3015, 9015, true),
	(3016, 9016, true);
	
CREATE TABLE IF NOT EXISTS `Book` (
	`media_ID` int(20) NOT NULL,
	`book_ID` int(20) PRIMARY KEY,
	`reservation_ID` int(20),
	`availabililtyStatus` boolean NOT NULL,
	`title` varchar(100) NOT NULL,
	`genre` varchar(20) NOT NULL,
	`author` varchar(50) NOT NULL,
	`publisher` varchar(50) NOT NULL,
	`year` YEAR NOT NULL,
	FOREIGN KEY `media_ID` REFERENCES `MediaCatalog`(`media_ID`),
	FOREIGN KEY `reservation_ID` REFERENCES `Reservation`(`reservation_ID`),
	FOREIGN KEY `availabilityStatus` REFERENCES `MediaCatalog`(`availabilityStatus`),
);

INSERT INTO `Book`
(`media_ID`, `book_ID`, `reservation_ID`, `availabilityStatus`, `title`, `genre`, `author`, `publisher`, `year`)
VALUES
	(3001, 4001, 9001, false, 'Basic Sandwich', 'Self-Help', 'Rick Subway', 'DeLuca', 2011),
	(3002, 4002, 9002, true, 'Paranormal Parentage', 'Horror', 'Gilbert Cornelius', 'HawthorneHouse', 1950),
	(3003, 4003, 9003, true, 'A Fistful of Paintballs', 'Action', 'Craig Pelton', 'Greendale', 1964),
	(3004, 4004, 9004, true, 'The First Chang Dynasty', 'History', 'Ben Franklin Chang', 'KevinCollege', 2012);
	
CREATE TABLE IF NOT EXISTS `Magazine` (
	`media_ID` int(20) NOT NULL,
	`mag_ID` int(20) PRIMARY KEY,
	`reservation_ID` int(20),
	`availabilityStatus` boolean NOT NULL,
	`title` varchar(100) NOT NULL,
	`genre` varchar(20) NOT NULL,
	`year` year NOT NULL
	FOREIGN KEY `media_ID` REFERENCES `MediaCatalog`(`media_ID`),
	FOREIGN KEY `reservation_ID` REFERENCES `Reservation`(`reservation_ID`),
	FOREIGN KEY `availabilityStatus` REFERENCES `MediaCatalog`(`availabilityStatus`),
);

INSERT INTO `Magazine`
(`media_ID`, `mag_ID`, `reservation_ID`, `availabilityStatus`, `title`, `genre`, `year`)
VALUES
	(3005, 5001, 9005, true, 'Contemporary Impressionists', 'Editorial', 1999),
	(3006, 5002, 9006, true, 'Foosball and Nocturnal Vigilantism', 'Sports', 2011),
	(3007, 5003, 9007, true, 'Celebrity Pharmacology', 'Science', 1987),
	(3008, 5004, 9008, false, 'Grifting 101', 'Lifestyle', 2015);
	
CREATE TABLE IF NOT EXISTS `DVD` (
	`media_ID` int(20) NOT NULL,
	`dvd_ID` int(20) PRIMARY KEY,
	`reservation_ID` int(20),
	`availabilityStatus` boolean NOT NULL,
	`title` varchar(100) NOT NULL,
	`director` varchar(50) NOT NULL,
	`actor` varchar(50) NOT NULL,
	`year` year NOT NULL,
	FOREIGN KEY `media_ID` REFERENCES `MediaCatalog`(`media_ID`),
	FOREIGN KEY `reservation_ID` REFERENCES `Reservation`(`reservation_ID`),
	FOREIGN KEY `availabilityStatus` REFERENCES `MediaCatalog`(`availabilityStatus`),
);

INSERT INTO `DVD`
(`media_ID`, `dvd_ID`, `reservation_ID`, `availabilityStatus`, `title`, `director`, `actor`, `year`)
VALUES
	(3009, 6001, 9009, true, 'Inspector Spacetime', 'Tristam Shapeero', 'Anthony Pease', 1962),
	(3010, 6002, 9010, false, 'Kickpuncher', 'David Wilson', 'Don Donaldson', 1985),
	(3011, 6003, 9011, true, 'ABED', 'Abed Nadir', 'Abed Nadir', 2010),
	(3012, 6004, 9012, true, 'Civil War: Pillowtown', 'Keith David', 'Richard Erdman', 2012);
	
CREATE TABLE IF NOT EXISTS `CD` (
	`media_ID` int(20) NOT NULL,
	`cd_ID` int(20) PRIMARY KEY,
	`reservation_ID` int(20),
	`availabilityStatus` boolean NOT NULL,
	`title` varchar(100) NOT NULL,
	`artist` varchar(50) NOT NULL,
	`genre` varchar(50) NOT NULL,
	`year` year NOT NULL,
	FOREIGN KEY `media_ID` REFERENCES `MediaCatalog`(`media_ID`),
	FOREIGN KEY `reservation_ID` REFERENCES `Reservation`(`reservation_ID`),
	FOREIGN KEY `availabilityStatus` REFERENCES `MediaCatalog`(`availabilityStatus`),
);

INSERT INTO `CD`
(`media_ID`, `cd_ID`, `reservation_ID`, `availabilityStatus`,`title`, `artist`, `genre`, `year`)
VALUES
	(3013, 7001, 9013, false, 'Regional Holiday Music', 'Greendale Glee Club', 'Holiday', 1965),
	(3014, 7002, 9014, true, 'Immortal', 'El Tigre Chino', 'Hip-Hop', 2011),
	(3015, 7003, 9015, true, 'Night Cap', 'Jacques Slade', 'Hip-Hop', 2010),
	(3016, 7004, 9016, true, 'La Biblioteca', 'Troy & Abed', 'Latin', 1997);
	
CREATE USER `root@localhost`;
GRANT ALL PRIVILEGES ON `LibraryMediaCatalog` TO `root@localhost`;
FLUSH PRIVILEGES;