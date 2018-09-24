SET foreign_key_checks = 0;
DROP TABLE IF EXISTS Appears_in;
DROP TABLE IF EXISTS Mod_powers;
DROP TABLE IF EXISTS Answer;
DROP TABLE IF EXISTS Quiz;
DROP TABLE IF EXISTS Question;
DROP TABLE IF EXISTS Regular;
DROP TABLE IF EXISTS Moderator;
SET foreign_key_checks = 1;


CREATE TABLE Regular(
username varchar(100) NOT NULL,
password char(64),
email varchar(100),
gender varchar(100),
date_of_birth date,
education varchar(100),
PRIMARY KEY(username));

CREATE TABLE Moderator(
modName varchar(100) NOT NULL,
password char(64),
email varchar(100),
since date,
PRIMARY KEY(modName));

CREATE TABLE Question(
questionid integer NOT NULL,
prompt varchar(200),
correct_answer varchar(50),
difficulty varchar(50),
deprecated boolean,
PRIMARY KEY(questionid));

CREATE TABLE Quiz(
quizid integer NOT NULL,
username varchar(100),
date_created datetime,
user_input varchar(500),
PRIMARY KEY(quizid),
FOREIGN KEY(username) REFERENCES Regular(username) ON DELETE SET NULl);

CREATE TABLE Answer(
questionid integer,
choice varchar(50),
PRIMARY KEY(questionid, choice),
FOREIGN KEY (questionid) REFERENCES Question(questionid));

CREATE TABLE Appears_in(
questionid integer,
quizid integer,
PRIMARY KEY (questionid, quizid),
FOREIGN KEY(questionid) REFERENCES Question(questionid),
FOREIGN KEY(quizid) REFERENCES Quiz(quizid));
