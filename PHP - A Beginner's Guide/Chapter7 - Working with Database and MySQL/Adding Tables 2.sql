DROP TABLE IF EXISTS artists;

CREATE TABLE artists(

    artist_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    artist_name VARCHAR(50) NOT NULL ,
    artist_country VARCHAR(2) NOT NULL

)