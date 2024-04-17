CREATE TABLE book (

                      BkID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL ,
                      Book_Title VARCHAR(200) NOT NULL UNIQUE ,
                      Author VARCHAR(100) NOT NULL,
                      Publisher VARCHAR(200) NOT NULL ,
                      Price DOUBLE NOT NULL,
                      Category VARCHAR(200) NOT NULL
);

CREATE TABLE author(

                       Aid INT UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
                       Last_Name VARCHAR(100) ,
                       First_Name VARCHAR(100)

);

CREATE TABLE publisher(

                          Pid INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
                          Publisher VARCHAR(100) NOT NULL ,
                          Address VARCHAR(100) NOT NULL ,
                          City VARCHAR(100) NOT NULL

);

CREATE TABLE category(

                         Cid INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
                         Category VARCHAR(100) NOT NULL ,
                         Section VARCHAR(100) NOT NULL
);
