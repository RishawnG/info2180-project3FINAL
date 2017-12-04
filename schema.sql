CREATE DATABASE IF NOT EXISTS CheapoMail;
use CheapoMail;

CREATE table Users(id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
                   firstname varchar(50),
                   lastname varchar(50),
                   username varchar(50),
                   password varchar(60));


CREATE table Messages(id INT UNSIGNED NOT NULL PRIMARY KEY,
                    recipient_ids INT (4),
                    sender_id INT (4),
                    subject varchar(50),
                    body varchar(300),
                    date_sent Date
                    );

CREATE table Messages_read(id INT UNSIGNED NOT NULL PRIMARY KEY,
                    message_id INT (4),
                    reader_id INT (4),
                    date_read Date
                    );

INSERT INTO Users (username,password) values ('admin', 'password123');